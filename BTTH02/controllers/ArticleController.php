<?php
include_once 'models/Article.php';

class ArticleController {
    public function index() {
        $articleService = new Article();
        $articles = $articleService->getTopSongs();

        // Chuyển dữ liệu sang view
        require_once './views/article/list_article.php';
    }

    public function add() {
        include("views/article/add_article.php");
    }

    public function edit() {
        include("views/article/edit_article.php");
    }

    public function delete() {
        include("views/article/delete_article.php");
    }

    public function list() {
        $article = new Article();
        $articles = $article->getTopSongs();
        include("views/article/list_article.php");
    }
}
?>
