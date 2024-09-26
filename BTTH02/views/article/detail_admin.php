<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php?controller=Admini&action=index">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./index.php?controller=category&action=list">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?controller=author&action=list">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
                <a href="./index.php?controller=Article&action=list" class="btn btn-success" style="margin-bottom: 20px;">Quay lại</a>   
                <div class="row mb-5">
                    <div class="col-sm-4">
                        <img src="./assets/images/songs/<?php echo $detail['hinhthanh']; ?>.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none"><?php echo $detail['tieude']?></a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $detail['tenbhat']?></p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $detail['ma_tloai'] ?></p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $detail['tomtat']?></p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $detail['noidung']?></p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $detail['ma_tgia']?></p>

                    </div>          
                </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>