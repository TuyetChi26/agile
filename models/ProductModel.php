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

    public function getProductsPaginated($page = 1, $limit = 12, $searchTerm = '', $categoryId = '') {
        try {
            $offset = ($page - 1) * $limit;
            
            $whereClause = '';
            $params = [];
            
            if (!empty($searchTerm)) {
                $whereClause .= 'WHERE LOWER(products.ten_san_pham) LIKE LOWER(:searchTerm)';
                $params[':searchTerm'] = '%' . $searchTerm . '%';
            }
            
            if (!empty($categoryId)) {
                if (!empty($whereClause)) {
                    $whereClause .= ' AND ';
                } else {
                    $whereClause .= 'WHERE ';
                }
                $whereClause .= 'products.id_danh_muc = :categoryId';
                $params[':categoryId'] = $categoryId;
            }

            // Lấy tổng số sản phẩm
            $sqlCount = 'SELECT COUNT(*) as total FROM products';
            if (!empty($whereClause)) {
                $sqlCount .= ' ' . $whereClause;
            }
            
            $stmtCount = $this->conn->prepare($sqlCount);
            $stmtCount->execute($params);
            $total = $stmtCount->fetch()['total'];
            
            // Lấy danh sách sản phẩm
            $sql = 'SELECT products.*, categories.categoryName 
                    FROM products 
                    INNER JOIN categories ON products.id_danh_muc = categories.id';
            
            if (!empty($whereClause)) {
                $sql .= ' ' . $whereClause;
            }
            
            $sql .= ' ORDER BY products.ten_san_pham LIMIT :limit OFFSET :offset';
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            
            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }
            
            $stmt->execute();
            
            return [
                'products' => $stmt->fetchAll(),
                'total' => $total,
                'limit' => $limit,
                'page' => $page
            ];
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return [
                'products' => [],
                'total' => 0,
                'limit' => 0,
                'page' => 1
            ];
        }
    }
}