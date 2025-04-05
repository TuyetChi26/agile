<?php
class UserModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getByIdUser($id)
    {
        try {
            $sql = 'SELECT * FROM users
                    WHERE users.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id
            ]);

            return $stmt->fetch();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function login($email, $password)
    {
        try {
            // Chuẩn bị truy vấn SQL
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            
            // Thực thi truy vấn với tham số email
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                // Xóa mật khẩu khỏi thông tin người dùng trước khi trả về
                unset($user['password']);
                return $user;
            }
            
            return false;
        } catch (PDOException $e) {
            error_log("Login error: " . $e->getMessage());
            return false;
        }
    }

    public function register($email, $password, $fullname, $phone, $repassword)
    {
        try {
            // Kiểm tra xem email đã tồn tại chưa
            $sql = "SELECT id FROM users WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            
            if ($stmt->rowCount() > 0) {
                return ['success' => false, 'message' => 'Email đã được đăng ký'];
            }
            
            // Kiểm tra mật khẩu
            if ($password !== $repassword) {
                return ['success' => false, 'message' => 'Mật khẩu không khớp'];
            } else if (strlen($password) < 8) {
                return ['success' => false, 'message' => 'Mật khẩu phải có ít nhất 8 ký tự'];
            }
            
            // Hash mật khẩu
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Chèn người dùng mới
            $sql = "INSERT INTO users (email, password, fullname, phone) VALUES (:email, :password, :fullname, :phone)";
            $stmt = $this->conn->prepare($sql);
            
            if ($stmt->execute([
                'email' => $email,
                'password' => $hashedPassword,
                'fullname' => $fullname,
                'phone' => $phone
            ])) {
                return ['success' => true, 'message' => 'Đăng ký thành công'];
            } else {
                // Lấy thông tin lỗi từ PDO
                $errorInfo = $stmt->errorInfo();
                error_log("PDO Error: " . print_r($errorInfo, true));
                return ['success' => false, 'message' => 'Có lỗi khi đăng ký: ' . $errorInfo[2]];
            }
        } catch (PDOException $e) {
            // Ghi log lỗi chi tiết
            error_log("Register error: " . $e->getMessage());
            return ['success' => false, 'message' => 'Có lỗi xảy ra: ' . $e->getMessage()];
        }
    }
    

}