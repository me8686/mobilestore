<?php include('header.php'); ?>

<?php

$link = mysqli_connect("localhost", "root", "", "site");
$result = mysqli_query($link, "SELECT * FROM product");
mysqli_close($link);
?>

<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>

<div class="container my-5">
    <h2 class="text-center mb-4">محصولات</h2>
    <div class="row">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    
                    <div class="ratio ratio-4x3">
                        <img src="images/<?php echo $row['image_url']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text">رم: <?php echo $row['ram']; ?>GB</p>
                        <p class="card-text">حافظه: <?php echo $row['storage']; ?>GB</p>
                        <p class="card-text">وضعیت سیم‌کارته: <?php echo $row['dual_sim']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include('footer.php'); ?>
