<?php
include 'koneksi.php';
$email				 = $_POST['email'];
$password			 = $_POST['password'];
$nama				 = $_POST['nama'];
$telephone			 = $_POST['telephone'];
$jenis_kelamin		 = $_POST['jenis_kelamin'];
$alamat				 = $_POST['alamat'];
$tempat_lahir		 = $_POST['tempat_lahir'];
$tanggal 			 = $_POST['tanggal'];
$golongan_darah		 = $_POST['golongan_darah'];
$id 				 = $_POST['id'];

$edit	= mysqli_query($kon, "UPDATE biodata set email 				='$email', 
													  password 		='$password',
													  nama 			='$nama',
													  telephone 	='$telephone',
													  jenis_kelamin ='$jenis_kelamin',
													  alamat 		='$alamat',
													  tempat_lahir  ='$tempat_lahir',
													  tanggal_lahir ='$tanggal',
													  golongan_darah='$golongan_darah'
												where id_biodata	='$id'");
if ($edit) {
	header('location: ../das_biodata.php');
}
else {
	echo "Update Gagal";
}
?>