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
?>

<div class="row">
    <p class="col" id="s">متن را وارد کنید</p>
</div>
<form action="admin_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    <input type="file" class="col-12 col-md card m-1" 
    name="image">

    <input type="text" class="col-12 col-md card m-1" 
    name="title" placeholder="عنوان">

    <input type="text" class="col-12 col-md card m-1" 
    name="id" placeholder="id" value="<?php echo($id); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="text" placeholder="متن سایت">

    <input type="submit" class="col-12 col-md card m-1" 
    value="ذخیره">
</form>

<?php
include("footer.php");
?>
<script src="bootstrap.bundle.min.js"></script>