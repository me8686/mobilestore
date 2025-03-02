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
?>

<div class="row">
    <aside class="container" id="ab">
    <section>
    <?php
        if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
            echo '<p class="text-bg-success p-3 text-center">.شما با موفقیت خارج شدید</p>';
        }
        if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
            echo '<p class="text-bg-success p-3 text-center">.خوش آمدید ' . $_SESSION["username"] . '</p>';
        }
        ?>
         </section>
        <section>
            <h2>محصولات ویژه</h2>
            <p>محل متن سایت</p>
        </section>
    </aside>
</div>

<?php
$link = mysqli_connect("localhost", "root", "", "site");
$result = mysqli_query($link, "SELECT * FROM `admin`");
mysqli_close($link);
$row = mysqli_fetch_array($result);

while ($row) {
?>
    <div class="row justify-content-center">
        <aside class="container" id="ab">
            <section>
                <img class="img-thumbnail m-1 p-1 w-50" src="<?php echo($row["imageurl"]); ?>" alt="">
                <span class="col-12 col-md h5"><?php echo($row["title"]); ?></span>
                <span class="col-12 col-md h6"><?php echo($row["text"]); ?></span>
            </section>
        </aside>
    </div>
<?php
    $row = mysqli_fetch_array($result);
}

include("footer.php");
?>
<script src="bootstrap.bundle.min.js"></script>
</html>
