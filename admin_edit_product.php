<?php
session_start();
include('header.php');


if (!isset($_SESSION["manager"]) || $_SESSION["manager"] !== true) {
    echo "دسترسی غیرمجاز";
    exit;
}


if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    
    $link = mysqli_connect("localhost", "root", "", "site");

    
    $query = "SELECT * FROM product WHERE id = '$product_id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

   
    if (!$row) {
        echo "محصول یافت نشد.";
        exit;
    }

    
    $title = $row['title'];
    $ram = $row['ram'];
    $storage = $row['storage'];
    $dual_sim = $row['dual_sim'];
    $image_url = $row['image_url'];

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $dual_sim = $_POST['dual_sim'];

        
        if ($_FILES['image_url']['name'] != "") {
           
            if (file_exists("images/".$image_url)) {
                unlink("images/".$image_url);
            }

            
            $image_url = $_FILES['image_url']['name'];
            move_uploaded_file($_FILES['image_url']['tmp_name'], "images/".$image_url);
        }

        
        $update_query = "UPDATE product SET title = '$title', ram = '$ram', storage = '$storage', dual_sim = '$dual_sim', image_url = '$image_url' WHERE id = '$product_id'";
        if (mysqli_query($link, $update_query)) {
            header("Location: admin_products.php");
        } else {
            echo "خطا در ویرایش محصول.";
        }
    }

    mysqli_close($link);
} else {
    echo "شناسه محصول معتبر نیست.";
}

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش محصول</title>
   
    <link href="bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center mb-4" id="s">ویرایش محصول</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">نام محصول</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ram" class="form-label">رم</label>
                <input type="number" class="form-control" id="ram" name="ram" value="<?php echo $ram; ?>" required>
            </div>
            <div class="mb-3">
                <label for="storage" class="form-label">حافظه</label>
                <input type="number" class="form-control" id="storage" name="storage" value="<?php echo $storage; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dual_sim" class="form-label">وضعیت سیم‌کارته</label>
                <input type="text" class="form-control" id="dual_sim" name="dual_sim" value="<?php echo $dual_sim; ?>" required>
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">تصویر محصول</label>
                <input type="file" class="form-control" id="image_url" name="image_url">
                <?php if ($image_url) { ?>
                    <img src="images/<?php echo $image_url; ?>" alt="Product Image" width="100" class="mt-3">
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">ویرایش محصول</button>
        </form>
    </div>

   
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('footer.php'); ?>
