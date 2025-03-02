<?php
session_start();
include('header.php');


if (!isset($_SESSION["manager"]) || $_SESSION["manager"] !== true) {
    echo "دسترسی غیرمجاز";
    exit;
}


$link = mysqli_connect("localhost", "root", "", "site");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $ram = $_POST['ram'];
    $storage = $_POST['storage'];
    $dual_sim = $_POST['dual_sim'];
    
   
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_folder = "images/" . $image;
    
    
    if (move_uploaded_file($image_tmp, $image_folder)) {
       
        $query = "INSERT INTO product (title, ram, storage, dual_sim, image_url) VALUES ('$title', '$ram', '$storage', '$dual_sim', '$image')";
        
        if (mysqli_query($link, $query)) {
            echo "محصول با موفقیت اضافه شد.";
            header("Location: admin_products.php");
        } else {
            echo "خطا در اضافه کردن محصول.";
        }
    } else {
        echo "خطا در بارگذاری تصویر.";
    }

    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن محصول</title>
    
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center mb-4" id="s">افزودن محصول</h2>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">عنوان محصول:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="ram">رم (GB):</label>
                <input type="number" class="form-control" id="ram" name="ram" required>
            </div>
            <div class="form-group">
                <label for="storage">حافظه (GB):</label>
                <input type="number" class="form-control" id="storage" name="storage" required>
            </div>
            <div class="form-group">
                <label for="dual_sim">وضعیت سیم‌کارته:</label>
                <select class="form-control" id="dual_sim" name="dual_sim" required>
                    <option value="دو سیم کارت">دو سیم کارت</option>
                    <option value="تک سیم کارت">تک سیم کارت</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">تصویر محصول:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary mt-4">افزودن محصول</button>
        </form>

    </div>

   
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('footer.php'); ?>
