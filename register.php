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
            <h2 id="s">فرم ثبت‌نام</h2>
            <form action="register_action.php" method="post">
                <table class="table table-bordered table-striped mx-auto" style="max-width: 500px;">
                    <tr>
                        <td>نام واقعی:</td>
                        <td><input type="text" name="name" required class="form-control"></td>
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
                        <td colspan="2" class="text-center">
                            <input type="submit" value="ثبت‌نام" class="btn btn-primary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    
    <?php include('footer.php'); ?>
    
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>