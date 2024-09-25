<?php
include('models/Article.php');

class HomeController {
    private $Song;

    public function __construct() {
        // Khởi tạo đối tượng từ class Article
        $this->Song = new Article();
    }

    public function index() {
        // Gọi phương thức getTopSongs để lấy dữ liệu từ Model
        $songs = $this->Song->getTopSongs();
        
        // Chuyển dữ liệu tới View index.php để hiển thị
        include ('../btth1/views/home/index.php');
    }
}
?>
