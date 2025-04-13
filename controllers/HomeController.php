<?php 
    class HomeController{
        public $modelSanPham;

        public function __construct()
        {
            $this->modelSanPham = new ProductModel();
        }

        public function home() 
        {
            $listSanPham = $this->modelSanPham->getAllSanPham();
            require_once './views/home.php';
        }

        public function shop() {

            $listDanhMuc = $this->modelSanPham->getAllDanhMuc();
            require_once './views/layout/header.php';
            require './views/layout/menu.php'; // Nhận được $listDanhMuc
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
