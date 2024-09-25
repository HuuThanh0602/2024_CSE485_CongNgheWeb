<?php
include_once './configs/DBConnection.php';

class Article {
    private $pdo;

    public function __construct() {
        // Kết nối cơ sở dữ liệu thông qua class Database
        $database = new DBConnection();
        $this->pdo = $database->getConnection();
    }

    public function getTopSongs() {
        // Lấy danh sách bài hát từ cơ sở dữ liệu
        $sql = "SELECT hinhthanh, tenbhat, ma_bviet FROM baiviet";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>