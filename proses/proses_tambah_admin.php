<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$email            = $_POST['email'];
$password         = $_POST['password'];
$level			  ="admin";

// query SQL untuk insert data
$query="INSERT INTO login SET email='$email',password='$password', level='$level'";
mysqli_query($kon,$query);
// mengalihkan ke halaman index.php
header("location:../das_admin.php");
?>