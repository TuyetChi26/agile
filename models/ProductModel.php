<?php
class ProductModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllSanPham() {
        try{
            $sql = 'SELECT products.*, categories.categoryName
            FROM products
            INNER JOIN categories ON products.id_danh_muc = categories.id
            ';
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        }catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }

    public function getAllDanhMuc(){
        try {
            $sql = 'SELECT * FROM categories';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Loi" . $e->getMessage();
        }
    }

    public function xemChiTiet($id){
        try {
            $sql = 'SELECT products.*, categories.categoryName
            FROM products
            INNER JOIN categories ON products.id_danh_muc = categories.id
            WHERE products.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Error" . $e->getMessage();
        }
    }

}