<?php
include('header.php');
session_start();
if (isset($_SESSION["manager"]) && $_SESSION["manager"] == true) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        $link = mysqli_connect("localhost", "root", "", "site");
        $query = "DELETE FROM product WHERE id = $id";
        mysqli_query($link, $query);
        mysqli_close($link);

        echo "<p>محصول با موفقیت حذف شد.</p>";
        header('Location: admin_products.php');
        exit();
    } else {
        echo "<p>محصولی با این شناسه یافت نشد.</p>";
    }
} else {
    echo "<p>دسترسی غیرمجاز</p>";
}

include('footer.php');
?>
