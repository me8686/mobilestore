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
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"INSERT INTO `admin`(`title`, `text`, `imageurl`) 
                    VALUES ('$title','$text','$imageurl')");
mysqli_close($link);
if($result===true){
    echo("ذخیره  شد");
}else{
    echo("ذخیره  نشد");
}

?>

<?php
include("footer.php");
?>
<script src="bootstrap.bundle.min.js"></script>