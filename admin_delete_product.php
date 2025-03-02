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

    
    $query = "SELECT image_url FROM product WHERE id = '$product_id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $image_url = $row['image_url'];

    
    if ($image_url && file_exists("images/".$image_url)) {
        unlink("images/".$image_url);
    }

    
    $delete_query = "DELETE FROM product WHERE id = '$product_id'";
    if (mysqli_query($link, $delete_query)) {
        header("Location: admin_products.php");
    } else {
        echo "خطا در حذف محصول.";
    }

    mysqli_close($link);
} else {
    echo "شناسه محصول معتبر نیست.";
}

include('footer.php');
?>
