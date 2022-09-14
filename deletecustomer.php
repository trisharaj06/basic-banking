<?php
$cid = $_GET['id'];
$link=mysqli_connect("localhost","root","","grip");
$qry = "delete from users where uid=$cid";
mysqli_query($link,$qry);
mysqli_close($link);
header("location:customers.php");
?>

