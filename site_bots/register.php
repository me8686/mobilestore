<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت‌نام</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php include('header.php'); ?>
    
    <main class="container my-5">
        <div class="text-center">
            <h2>فرم ثبت‌نام</h2>
            <form action="register.php" method="post">
                <table class="table table-bordered table-striped mx-auto" style="max-width: 500px;">
                    <tr>
                        <td>نام واقعی:</td>
                        <td><input type="text" name="realname" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>نام کاربری:</td>
                        <td><input type="text" name="username" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>کلمه عبور:</td>
                        <td><input type="password" name="password" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>تکرار کلمه عبور:</td>
                        <td><input type="password" name="repassword" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>پست الکترونیک:</td>
                        <td><input type="email" name="email" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input type="submit" value="ثبت‌نام" class="btn btn-primary">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $realname = $_POST['realname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $email = $_POST['email'];

                // نمایش مشخصات وارد شده به کاربر
                echo "<h3>مشخصات وارد شده:</h3>";
                echo "<p>نام واقعی: $realname</p>";
                echo "<p>نام کاربری: $username</p>";
                echo "<p>پست الکترونیک: $email</p>";
                echo "<p>کلمه عبور: $password</p>";

                // بررسی تطابق کلمه عبور
                if ($password == $repassword) {
                    echo "<p>ثبت‌نام موفقیت‌آمیز بود. خوش آمدید، $realname!</p>";
                } else {
                    echo "<p>کلمه عبور و تکرار آن تطابق ندارند.</p>";
                }
            }
            ?>
        </div>
    </main>
    
    <?php include('footer.php'); ?>
    
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>