<?php
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$coonnect=mysqli_connect("localhost","root","","site");
mysqli_query($coonnect,"INSERT INTO `user`(`name`, `username`, `passwords`) VALUES ('$name','$username','$password')");
mysqli_close($coonnect);

header("Location: matn.php");
exit();

?>