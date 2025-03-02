<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موبایل</title>
    <link href="siteghaleb.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main class="container my-5">
        <?php
        if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
            echo '<p class="text-bg-success p-3 text-center">.شما با موفقیت خارج شدید</p>';
        }
        if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
            echo '<p class="text-bg-success p-3 text-center">.خوش آمدید ' . $_SESSION["username"] . '</p>';
        }
        ?>
        <aside class="bg-light p-3 rounded text-center">
            <section>
                <h2>محصولات ویژه</h2>
                <p>محل متن سایت</p>
            </section>
        </aside>
    </main>
    <?php include('footer.php'); ?>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
