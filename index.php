<?php 
session_start();

// Require PHP mailer
require_once './commons/phpmailer/Exception.php';
require_once './commons/phpmailer/PHPMailer.php';
require_once './commons/phpmailer/SMTP.php';

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/UserController.php';
require_once './controllers/ProductController.php';

// Require toàn bộ file Models
require_once './models/UserModel.php';
require_once './models/ProductModel.php';

// Route
$act = $_GET['act'] ?? '/';


match ($act) {

    
    '/'             => (new HomeController())   -> home(),

    'register'      => (new userController())   -> register(),
    'login'         => (new userController())   -> login(),
    'logout'        => (new userController())   ->logout(),
    'logout'        => (new userController())   ->logout(),
    'show-profile'  => (new userController())   ->profileShow(),

    'show'          => (new HomeController())->show(),
    'shop'          => (new HomeController())->shop(),
    'cart'          => (new ProductController())->cart(),
};