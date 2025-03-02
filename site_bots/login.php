<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php include('header.php'); ?>
    
    <main class="container my-5">
        <div class="text-center">
            <h2>فرم ورود</h2>
            <form action="login.php" method="post">
                <table class="table table-bordered table-striped mx-auto" style="max-width: 400px;">
                    <tr>
                        <td>نام کاربری:</td>
                        <td><input type="text" name="username" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>کلمه عبور:</td>
                        <td><input type="password" name="password" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" value="ورود" class="btn btn-primary">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // نمایش مشخصات وارد شده به کاربر
                echo "<h3>مشخصات وارد شده:</h3>";
                echo "<p>نام کاربری: $username</p>";
                echo "<p>کلمه عبور: $password</p>";

                // در اینجا می‌توانید بررسی کنید که اطلاعات درست است یا نه.
                if ($username == "mmd86" && $password == "me1386") {
                    echo "<p>خوش آمدید، $username!</p>";
                } else {
                    echo "<p>نام کاربری یا کلمه عبور اشتباه است.</p>";
                }
            }
            ?>
        </div>
    </main>
    
    <?php include('footer.php'); ?>
    
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>