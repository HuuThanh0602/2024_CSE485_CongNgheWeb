<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>    
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="./index.php?controller=Article&action=addArticle" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTitleName">Tên tiêu đề </span>
                        <input type="text" class="form-control" name="txtTitle" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblArticleName">Tên bài hát </span>
                        <input type="text" class="form-control" name="txtArticleName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblSummaryName"> Tóm tắt </span>
                        <input type="text" class="form-control" name="txtSummaryName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblSummaryName"> Nội dung </span>
                        <input type="text" class="form-control" name="txtContentName" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblImage">Hình ảnh</span>
                        <input type="text" class="form-control" name="txtImage_id" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Tác giả</span>
                        <select class="form-control" name="author_id" required>
                            <option value="">Chọn tác giả</option>
                            <?php foreach ($authors as $author): ?>
                                <option value="<?php echo $author['ma_tgia']; ?>"><?php echo htmlspecialchars($author['ten_tgia']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text">Thể loại</span>
                        <select class="form-control" name="category_id" required>
                            <option value="">Chọn thể loại</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['ma_tloai']; ?>"><?php echo htmlspecialchars($category['ten_tloai']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="./index.php?controller=Article&action=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>