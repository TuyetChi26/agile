<?php 

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/DanhMucController.php';
require_once './controllers/SanPhamController.php';

// Require toàn bộ file Models
require_once './models/DanhMuc.php';
require_once './models/SanPham.php';

// Route
$act = $_GET['act'] ?? '/';


match ($act) {
    // Danh muc
    'danh-muc' => (new DanhMucController())->index(),

    'form-them-danh-muc' => (new DanhMucController())->add(),
    'them-danh-muc' => (new DanhMucController())->store(),

    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc' => (new DanhMucController())->update(),

    'xoa-danh-muc' => (new DanhMucController())->destroy(),

    // San Pham
    'product' => (new SanPhamController())-> index(),

    'form-show-san-pham' => (new SanPhamController())-> show(),

    'form-them-san-pham' => (new SanPhamController())-> add(),
    'them-san-pham' => (new SanPhamController())-> store(),

    'form-edit-san-pham' => (new SanPhamController())-> edit(),
    'edit-san-pham' => (new SanPhamController())-> update(),
    
    'form-delete-san-pham' => (new SanPhamController())-> destroy(),
    

};