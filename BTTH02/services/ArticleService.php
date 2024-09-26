<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai=theloai.ma_tloai";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $articles = [];
        while($row = $stmt->fetch_assoc()){
            $article = new Article($row['tieude'], $row['noidung'], $row['tenbhat']);
            array_push($articles,$article);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $articles;
    }
}