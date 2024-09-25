<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
</head>
<body>
    <h1>Danh sách các bài viết</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?php echo htmlspecialchars($article->getTitle()); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
