<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/CSE485/BTTH02/configs/DBConnection.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/CSE485/BTTH02/models/Author.php");

class AuthorService{
    
    public function getAllAuthor(){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection(); 

        // Xử lý kết quả
        $sql = "SELECT * FROM tacgia";
        $stmt = $conn->query($sql);

        // Mảng (danh sách) các đối tượng
        $authors = [];
        if ($stmt->num_rows > 0) {
            while ($row = $stmt->fetch_assoc()) {
                $author = new Author($row['ma_tgia'], $row['ten_tgia']);
                array_push($authors, $author);
            }
        }
        return $authors;
    }

    public function addAuthor( $ten_tgia){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
 
        // Lấy ID lớn nhất hiện có từ bảng theloai
        $sql_max_id = "SELECT MAX(ma_tgia) AS max_id FROM tacgia";
        $result = $conn->query($sql_max_id);
 
        if($result && $result->num_rows > 0){
         $row = $result->fetch_assoc();
         $new_id = $row['max_id'] + 1;
        } else {
         $new_id = 1;
        }
 
        // Thêm mới
        $sql_add = "INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (?, ?)";
        if ($stmt = $conn->prepare($sql_add)) {
         $stmt->bind_param("is", $new_id, $ten_tgia);
         return $stmt->execute();
         }   
         return false;
    }

    public function deleteAuthor($ma_tgia){
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
        // truy vấn
        $sql_delete = "DELETE FROM tacgia WHERE ma_tgia = ?";
        $stmt = $conn->prepare($sql_delete);
        $stmt->bind_param("i", $ma_tgia);
        $stmt->execute();
    }


    public function editAuthor($ten_tgia, $ma_tgia){
        // Khởi tạo kết nối đến cơ sở dữ liệu
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();
    
        // Câu truy vấn SQL để cập nhật thể loại
        $sql_edit = "UPDATE tacgia SET ten_tgia = ? WHERE ma_tgia = ?";
        $stmt = $conn->prepare($sql_edit);
        $stmt->bind_param("si", $ten_tgia, $ma_tgia);
        
        if($stmt->execute()){
            return true;
        }
    }
}
?>