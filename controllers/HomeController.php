<?php
class HomeController
{
    public $modelSanPham;
    public $modelGioHang;

    public function __construct()
    {
        $this->modelSanPham = new ProductModel();
        $this->modelGioHang = new CartModel();
    }

    public function home()
    {
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

        if (!empty($searchTerm)) {
            // Chuyển hướng đến trang shop với tham số tìm kiếm
            header('Location: ' . BASE_URL . '?act=shop&search=' . urlencode($searchTerm));
            exit();
        } else {
            $listSanPham = $this->modelSanPham->getAllSanPham();
        }

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();

        require_once './views/home.php';
    }

    public function shop()
    {
        $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
        $category = isset($_GET['category']) ? $_GET['category'] : '';
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $result = $this->modelSanPham->getProductsPaginated($page, 12, $searchTerm, $category);
        $listSanPham = $result['products'];
        $totalProducts = $result['total'];
        $limit = $result['limit'];
        $currentPage = $result['page'];
        $totalPages = ceil($totalProducts / $limit);

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();

        require_once './views/layout/header.php';
        require './views/layout/menu.php';
        require './views/shop.php';
        require_once './views/layout/footer.php';
    }

    public function show()
    {
        $id = $_GET['id_san_pham'];

        // var_dump($id);

        $products = $this->modelSanPham->xemChiTiet($id);

        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        $category = $this->modelSanPham->getProductsByCategory($products['id_danh_muc']);
        // var_dump($listSanPhamCungDanhMuc);die;

        require_once './views/show.php';
    }

    public function addCart()
    {
        // Kiểm tra phương thức là POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Kiểm tra đăng nhập
            if (!isset($_SESSION['user']['email'])) {
                header("Location: " . BASE_URL . '?act=login&error=Chưa đăng nhập');
                exit();
            }

            // Kiểm tra dữ liệu đầu vào
            if (!isset($_POST['product_id'], $_POST['so_luong']) || !is_numeric($_POST['product_id']) || !is_numeric($_POST['so_luong'])) {
                header("Location: " . BASE_URL . '?act=cart&error=Thiếu dữ liệu đầu vào hoặc dữ liệu không hợp lệ');
                exit();
            }

            $product_id = (int)$_POST['product_id'];
            $so_luong = (int)$_POST['so_luong'];

            // Lấy thông tin người dùng từ email
            $mail = $this->modelGioHang->getTaiKhoanFromEmail($_SESSION['user']['email']);

            // Lấy giỏ hàng của người dùng
            $gioHang = $this->modelGioHang->getGioHangFromId($mail['id']);
            if (!$gioHang) {
                $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
                $gioHang = ['id' => $gioHangId];
            } else {
                // Lấy chi tiết giỏ hàng
                $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }

            // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            $checkSanPham = false;
            foreach ($chiTietGioHang as $detail) {
                if ($detail['product_id'] == $product_id) {
                    $newSoLuong = $detail['so_luong'] + $so_luong;
                    $this->modelGioHang->updateSoLuong($gioHang['id'], $product_id, $newSoLuong);
                    $checkSanPham = true;
                    break;
                }
            }

            // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
            if (!$checkSanPham) {
                $this->modelGioHang->addDetailGioHang($gioHang['id'], $product_id, $so_luong);
            }
            // Redirect về trang giỏ hàng
            header("Location: " . BASE_URL . '?act=cart');
            exit();
        }
    }

    public function cart()
    {
        $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
        if (isset($_SESSION['user']['email'])) {
            $mail = $this->modelGioHang->getTaiKhoanFromEmail($_SESSION['user']['email']);

            // Lấy dữ liệu giỏ hàng của người dùng
            // var_dump($mail['id']);die;
            $gioHang = $this->modelGioHang->getGioHangFromId($mail['id']);
            if (!$gioHang) {
                $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
            $gioHang = ['id' => $gioHangId];
        } 
        // Lấy chi tiết giỏ hàng
        $chiTietGioHang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
        // Tính tổng tiền
        $tongGioHang = 0;
        foreach ($chiTietGioHang as $item) {
            $gia = $item['gia_khuyen_mai'] ? $item['gia_khuyen_mai'] : $item['gia'];
            $tongGioHang += $gia * $item['so_luong'];
            }
            // var_dump($chiTietGioHang);die;

            require_once './views/cart.php';
        } else {
            header("Location: " . BASE_URL . '?act=login');
        }
    }

    public function updateCart()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_SESSION['user']['email'])) {
                header("Location: " . BASE_URL . '?act=login&error=Chưa đăng nhập');
                exit();
            }
    
            $mail = $this->modelGioHang->getTaiKhoanFromEmail($_SESSION['user']['email']);
            $gioHang = $this->modelGioHang->getGioHangFromId($mail['id']);
    
            if (!$gioHang) {
                header("Location: " . BASE_URL . '?act=cart&error=Không tìm thấy giỏ hàng');
                exit();
            }
    
            $success = true;
            $message = 'Cập nhật giỏ hàng thành công';
    
            foreach ($_POST['product_id'] as $key => $product_id) {
                $so_luong = (int)$_POST['so_luong'][$key];
                
                // Kiểm tra số lượng phải lớn hơn 0
                if ($so_luong < 1) {
                    $so_luong = 1; // Đặt mặc định là 1 nếu số lượng nhỏ hơn 1
                }
    
                if (!$this->modelGioHang->updateSoLuong($gioHang['id'], $product_id, $so_luong)) {
                    $success = false;
                    $message = 'Có lỗi khi cập nhật số lượng';
                }
            }
    
            if ($success) {
                header("Location: " . BASE_URL . '?act=cart&success=' . urlencode($message));
            } else {
                header("Location: " . BASE_URL . '?act=cart&error=' . urlencode($message));
            }
            exit();
        }
    }

    public function deleteCartItem()
    {
        if (isset($_GET['product_id'])) {
            if (!isset($_SESSION['user']['email'])) {
                header("Location: " . BASE_URL . '?act=login&error=Chưa đăng nhập');
                exit();
            }

            $mail = $this->modelGioHang->getTaiKhoanFromEmail($_SESSION['user']['email']);
            $gioHang = $this->modelGioHang->getGioHangFromId($mail['id']);

            $this->modelGioHang->deleteChiTietGioHang($gioHang['id'], $_GET['product_id']);

            header("Location: " . BASE_URL . '?act=cart');
            exit();
        }
    }
}
