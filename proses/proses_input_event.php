<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$event            	= $_POST['event'];
$tempat         	= $_POST['tempat'];
$tanggal			= $_POST['tanggal'];
$tanggal 			= date("Y-m-d");
$jam   				= $_POST['jam'];


// query SQL untuk insert data
$query="INSERT INTO event SET nama_event='$event',tempat_event='$tempat',tanggal_event='$tanggal',jam='$jam'";
mysqli_query($kon,$query);
// mengalihkan ke halaman index.php
header("location:../das_admin.php");
?>