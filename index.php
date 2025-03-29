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
require_once './controllers/homeController.php';
require_once './controllers/userController.php';

// Require toàn bộ file Models
require_once './models/homeModel.php';
require_once './models/userModel.php';


// Route
$act = $_GET['act'] ?? '/';


match ($act) {

    
    '/' => (new homeController()) -> home(),
    'register' => (new userController()) -> register(),
    // 'comfirm_registers' => (new userController()) -> comfirm_registers(),
    'login' => (new userController()) -> login(),
    'logout' => (new userController())->logout(),

};