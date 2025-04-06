<?php
class userController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $repassword = $_POST['repassword'] ?? '';

            // Kiểm tra các trường bắt buộc
            if (empty($fullname)) {
                require_once './views/register.php';
                echo '<div class="alert alert-danger">Vui lòng điền ten</div>';
                return;
            } else if (empty($phone)) {
                require_once './views/register.php';
                echo '<div class="alert alert-danger">Vui lòng điền số điện thoại</div>';
                return;
            } else if (empty($email)) {
                require_once './views/register.php';
                echo '<div class="alert alert-danger">Vui lòng điền email</div>';
                return;
            } else if (empty($password)) {
                require_once './views/register.php';
                echo '<div class="alert alert-danger">Vui lòng điền mật khẩu</div>';
                return;
            } else if (empty($repassword)) {
                require_once './views/register.php';
                echo '<div class="alert alert-danger">Vui lòng điền lại mật khẩu</div>';
                return;
            }

            // Xử lý đăng ký
            $result = $this->userModel->register($email, $password, $fullname, $phone, $repassword);

            if ($result['success']) {
                // Đăng ký thành công
                header('Location: ' . BASE_URL . '?act=login');
                exit;
            } else {
                // Đăng ký thất bại
                require_once './views/register.php';
                echo '<div class="alert alert-danger">' . $result['message'] . '</div>';
            }
        } else {
            require_once './views/register.php';
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Xử lý đăng nhập
            $user = $this->userModel->login($email, $password);

            // Kiểm tra các trường bắt buộc
            if (empty($email)) {
                require_once './views/login.php';
                echo '<div class="alert alert-danger">Vui lòng điền email</div>';
                return;
            } else if (empty($password)) {
                require_once './views/login.php';
                echo '<div class="alert alert-danger">Vui lòng điền mật khẩu</div>';
                return;
            }
            if ($user) {
                // Đăng nhập thành công
                session_start();
                $_SESSION['user'] = $user;
                // var_dump($_SESSION['user']);die;
                header('Location: ' . BASE_URL);
                exit;
            } else {
                // Đăng nhập thất bại
                header('Location: ' . BASE_URL . '?act=login');
                exit;
            }
        }

        require_once './views/login.php';
    }

    public function logout()
    {
        // Xóa session
        session_destroy();

        // Redirect về trang home
        header('Location: ' . BASE_URL);
        exit;
    }

    public function profileShow()
    {
        $id_user = $_SESSION['user']['id'];
        $user = $this->userModel->getByIdUser($id_user);
        require_once './views/profile.php';
    }
}
