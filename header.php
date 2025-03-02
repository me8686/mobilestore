<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="bg-primary text-white p-3">
    <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="#">فروشگاه موبایل</a>
        <link href="siteghaleb.css" rel="stylesheet">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">خانه</a></li>
                
                <?php
                if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="logout.php">خروج</a></li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">ورود</a></li>
                    <?php
                }
                ?>
                <li class="nav-item"><a class="nav-link" href="register.php">ثبت نام</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">محصولات</a></li>

                <?php
                if (isset($_SESSION["manager"]) && $_SESSION["manager"] == true) {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="admin.php">مدیریت</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin_products.php">مدیریت محصولات</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</header>
