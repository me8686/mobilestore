<?php
include('header.php');
session_start();
if (isset($_SESSION["manager"]) && $_SESSION["manager"] == true) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $dual_sim = $_POST['dual_sim'];

       
        $link = mysqli_connect("localhost", "root", "", "site");
        $query = "INSERT INTO product (title, ram, storage, dual_sim) VALUES ('$title', '$ram', '$storage', '$dual_sim')";
        mysqli_query($link, $query);
        mysqli_close($link);

        echo "<p>محصول با موفقیت اضافه شد.</p>";
    }
    ?>

    <div class="container my-5">
        <h2 class="text-center mb-4" id="s">اضافه کردن محصول جدید</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="title" class="form-label">نام محصول</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="ram" class="form-label">رم (GB)</label>
                <input type="number" class="form-control" id="ram" name="ram" required>
            </div>
            <div class="mb-3">
                <label for="storage" class="form-label">حافظه (GB)</label>
                <input type="number" class="form-control" id="storage" name="storage" required>
            </div>
            <div class="mb-3">
                <label for="dual_sim" class="form-label">وضعیت سیم‌کارته</label>
                <input type="text" class="form-control" id="dual_sim" name="dual_sim" required>
            </div>
            <button type="submit" class="btn btn-primary">اضافه کردن محصول</button>
        </form>
    </div>

    <?php
} else {
    echo "<p>دسترسی غیرمجاز</p>";
}

include('footer.php');
?>
