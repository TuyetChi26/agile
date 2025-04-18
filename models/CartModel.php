<?php

class CartModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getTaiKhoanFromEmail($email)
    {
        try {
            $sql = 'SELECT * FROM users WHERE email = :email';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':email' => $email
            ]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    
    public function getGioHangFromId($user_id)
    {
        try {
            $sql = 'SELECT * FROM carts WHERE user_id = :user_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':user_id'=>$user_id]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Lõi" . $e->getMessage();
        }
    }

    public function getDetailGioHang($id)
    {
        try {
            $sql = 'SELECT chi_tiet_gio_hangs.*,
              products.ten_san_pham, 
                products.hinh_anh, 
                products.gia, 
                products.gia_khuyen_mai,
                products.id as product_id
            FROM chi_tiet_gio_hangs
            INNER JOIN products ON chi_tiet_gio_hangs.product_id = products.id
            WHERE chi_tiet_gio_hangs.cart_id = :cart_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':cart_id'=>$id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lõi" . $e->getMessage();
        }
    }
    public function addGioHang($id)
    {
        try {
            $sql = 'INSERT INTO carts (user_id) VALUES (:id)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id'=>$id]);

            return $this->conn->lastInsertId();
        } catch (Exception $e) {
            echo "Lõi" . $e->getMessage();
        }
    }
    public function updateSoLuong($cart_id, $product_id, $so_luong)
    {
        try {
            // var_dump($id);die;
            $sql = 'UPDATE chi_tiet_gio_hangs 
                SET
                    so_luong = :so_luong
                WHERE cart_id = :cart_id AND  product_id = :product_id';
            // var_dump($sql);die;

            $stmt = $this->conn->prepare($sql);
            // var_dump($stmt);die;

            $stmt->execute([
                ':cart_id' => $cart_id,
                ':product_id' => $product_id,
                ':so_luong' => $so_luong
            ]);

            // Lấy id đơn hàng vừa thêm
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function addDetailGioHang($cart_id, $product_id, $so_luong)
    {
        try {
            $sql = 'INSERT INTO chi_tiet_gio_hangs (cart_id, product_id, so_luong)
                    VALUES (:cart_id, :product_id, :so_luong)';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':cart_id' => $cart_id,
                ':product_id' => $product_id,
                ':so_luong' => $so_luong
            ]);

            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function deleteChiTietGioHang($cart_id, $product_id)
    {
        try {
            $sql = 'DELETE FROM chi_tiet_gio_hangs WHERE cart_id = :cart_id AND product_id = :product_id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':cart_id' => $cart_id,
                ':product_id' => $product_id
            ]);

            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
