<?php

class AdminDanhMucController
{
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelDanhMuc = new DanhMuc();
    }

    public function danhSachDanhMuc() {

        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './views/danhmuc/listDanhMuc.php';
    }

    public function formAddDanhMuc() {
        // Ham dung de hien thi form nhap
        require_once './views/danhmuc/addDanhMuc.php';
    }

    public function postAddDanhMuc() {
        // Ham dung de them du lieu

        // kiem tra xem du lieu co phai dc submit len ko
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lay ra du lieu
            $categoryName = $_POST['categoryName'];
            $mo_ta = $_POST['mo_ta'];

            // tao 1 mang trong de chua du lieu
            $errors = [];
            if (empty($categoryName)) {
                $errors['categoryName'] = 'Ten danh muc khong duoc de trong';
            }

            // Neu khong co loi thi tien hanh them danh muc
            if (empty($errors)) {
                // Neu khong co loi thi tien hanh them danh muc

                $this->modelDanhMuc->insertDanhMuc($categoryName, $mo_ta);
                header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
                exit();
            }else {
                // Tra ve form va loi
                require_once './views/danhmuc/addDanhMuc.php';
            }
        }
    }

    public function formEditDanhMuc() {
        // Ham dung de hien thi form nhap
        // Lay ra thong tin cua danh muc can sua
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
        
        if ($danhMuc) {
            require_once './views/danhmuc/editDanhMuc.php';
        }else {
            header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
        }
    }

    public function postEditDanhMuc() {
        // Ham dung de them du lieu

        // kiem tra xem du lieu co phai dc submit len ko
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lay ra du lieu
            $id = $_POST['id'];
            $categoryName = $_POST['categoryName'];
            $mo_ta = $_POST['mo_ta'];

            // tao 1 mang trong de chua du lieu
            $errors = [];
            if (empty($categoryName)) {
                $errors['categoryName'] = 'Ten danh muc khong duoc de trong';
            }

            // Neu khong co loi thi tien hanh them danh muc
            if (empty($errors)) {
                // Neu khong co loi thi tien hanh them danh muc

                $this->modelDanhMuc->updateDanhMuc($id, $categoryName, $mo_ta);
                header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
                exit();
            }else {
                // Tra ve form va loi
                $danhMuc = ['id' => $id, 'categoryName' => $categoryName, 'mo_ta' => $mo_ta];
                require_once './views/danhmuc/editDanhMuc.php';
            }
        }
    }

    public function deleteDanhMuc() {
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

        if ($danhMuc) {
            $this->modelDanhMuc->destroyDanhMuc($id);
        }

        header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
        exit();
    }
}
