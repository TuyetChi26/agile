<?php 
    class ProductController{
        public $ProductModel;

        public function __construct()
        {
            $this->ProductModel = new ProductModel();
        }

        public function shop()
        {
            require_once './views/shop.php';
        }

        public function cart() 
        {
            require_once './views/cart.php';
        }
    }


?>