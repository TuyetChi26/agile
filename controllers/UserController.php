<?php 
    class userController{
        public $userModel;

        public function __construct()
        {
            $this->userModel = new userModel();
        }

        public function login() 
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'] ?? '';
                $password = $_POST['password'] ?? '';
                
                // Xử lý đăng nhập
                $user = $this->userModel->login($email, $password);
                
                if ($user) {
                    // Đăng nhập thành công
                    session_start();
                    $_SESSION['user'] = $user;
                    header('Location: ' . BASE_URL . '?act=/');
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
            header('Location: ' . BASE_URL . '?act=/');
            exit;
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
                if (empty($fullname) || empty($email) || empty($password) || empty($repassword)) {
                    require_once './views/register.php';
                    echo '<div class="alert alert-danger">Vui lòng điền đầy đủ thông tin</div>';
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
    }


?>
