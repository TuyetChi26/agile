<?php 
    class homeController{
        public $homeModel;

        public function __construct()
        {
            $this->homeModel = new homeModel();
        }

        public function home() 
        {
            require_once './views/home.php';
        }
    }


?>
