<?php
session_start();


$username = $_POST["username"];
$password = $_POST["password"];


$coonnect = mysqli_connect("localhost", "root", "", "site");


$find = mysqli_query($coonnect, "SELECT * FROM `user` WHERE `username` = '$username' AND `passwords` = '$password'");


$row = mysqli_fetch_array($find);


if ($row) {
    $_SESSION["login"] = true;
    $_SESSION["username"] = $row["username"];
    
    
    if ($row["is_admin"] == 1) {
        $_SESSION["manager"] = true;  
    }

    
    header("Location: home.php");
    exit();
} else {
    echo '<p class="text-bg-danger p-3">ایمیل یا کلمه عبور صحیح نیست</p>';
}


mysqli_close($coonnect);
?>
