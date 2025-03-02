<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موبایل</title>
    <link href="siteghaleb.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<?php
include("header.php");
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"DELETE FROM `admin` WHERE `id`=$id");
mysqli_close($link);
if($result===true){
    echo("حذف  شد");
}else{
    echo("حذف  نشد");
}

?>

<?php
include("footer.php");
?>
<script src="bootstrap.bundle.min.js"></script>