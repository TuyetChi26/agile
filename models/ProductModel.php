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

    public function searchProducts($searchTerm) {
        try {
            // Sử dụng LIKE với % để tìm kiếm phần nào của tên sản phẩm
            $sql = 'SELECT products.*, categories.categoryName
                    FROM products
                    INNER JOIN categories ON products.id_danh_muc = categories.id
                    WHERE LOWER(products.ten_san_pham) LIKE LOWER(:searchTerm)
                    ORDER BY products.ten_san_pham';

            $stmt = $this->conn->prepare($sql);
            
            // Thêm % vào đầu và cuối từ khóa tìm kiếm để tìm kiếm phần nào của tên
            $searchPattern = '%' . $searchTerm . '%';
            $stmt->execute([':searchTerm' => $searchPattern]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return [];
        }
    }

    public function getProductsByCategory($categoryId) {
        try {
            $sql = 'SELECT products.*, categories.categoryName
                    FROM products
                    INNER JOIN categories ON products.id_danh_muc = categories.id
                    WHERE products.id_danh_muc = :categoryId
                    ORDER BY products.ten_san_pham';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':categoryId' => $categoryId]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return [];
        }
    }
}