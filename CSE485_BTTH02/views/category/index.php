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
                        <a class="nav-link" aria-current="page" href="index.php?controller=homepage&action=showHomepage">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=home&action=index">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php?controller=category&action=index">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=author&action=index">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="index.php?controller=article&action=index">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=category&action=add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên thể loại</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
</thead>
<tbody>
<?php

// Kiểm tra xem biến $categorys đã được khởi tạo hay chưa
if (isset($categorys) && is_array($categorys)) {
    foreach ($categorys as $category) {
        echo "<tr>";
        echo "<td>{$category->getID()}</td>";
        echo "<td>{$category->getCat_name()}</td>"; // In tên thể loại
        echo "<td><a href='index.php?controller=category&action=edit&id={$category->getId()}'><i class='fa-solid fa-pen-to-square'></i></a></td>";
        echo "<td><a href='index.php?controller=category&action=del&id={$category->getId()}' onclick='return confirm(\"Bạn có chắc chắn muốn xóa thể loại này không?\");'><i class='fa-solid fa-trash'></i></a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center'>Không có thể loại nào</td></tr>";
}
?>

</tbody>


                </table>
            </div>
        </div>
        
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>