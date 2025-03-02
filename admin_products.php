<?php
session_start();


if (!isset($_SESSION["manager"]) || $_SESSION["manager"] !== true) {
    header("Location: login.php"); 
    exit;
}


$link = mysqli_connect("localhost", "root", "", "site");


$result = mysqli_query($link, "SELECT * FROM product");


mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت محصولات</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('header.php'); ?>

<div class="container my-5">
    <h2 class="text-center mb-4">مدیریت محصولات</h2>
    
    <a href="admin_add_product.php" class="btn btn-success mb-3">افزودن محصول جدید</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>نام محصول</th>
                <th>رم</th>
                <th>حافظه</th>
                <th>وضعیت سیم کارت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['ram']; ?>GB</td>
                    <td><?php echo $row['storage']; ?>GB</td>
                    <td><?php echo $row['dual_sim']; ?></td>
                    <td>
                        <a href="admin_edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">ویرایش</a>
                        <a href="admin_delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
