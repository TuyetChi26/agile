<?php 
    class HomeController{
        public $modelSanPham;

        public function __construct()
        {
            $this->modelSanPham = new ProductModel();
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

        public function shop() {
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

        public function show() {
            $id = $_GET['id_san_pham'];

            // var_dump($id);

            $products = $this->modelSanPham->xemChiTiet($id);

            $listSanPham = $this->modelSanPham->getAllSanPham();

                require_once './views/show.php';
        }
    }
?>
