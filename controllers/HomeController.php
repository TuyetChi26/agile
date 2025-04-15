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
                $listSanPham = $this->modelSanPham->searchProducts($searchTerm);
                require_once './views/shop.php';
            } else {
                $listSanPham = $this->modelSanPham->getAllSanPham();
            }
            
            require_once './views/home.php';
        }

        public function shop() {
            $searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
            $category = isset($_GET['category']) ? $_GET['category'] : '';
            
            if (!empty($searchTerm)) {
                $listSanPham = $this->modelSanPham->searchProducts($searchTerm);
            } elseif (!empty($category)) {
                $listSanPham = $this->modelSanPham->getProductsByCategory($category);
            } else {
                $listSanPham = $this->modelSanPham->getAllSanPham();
            }
            
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
