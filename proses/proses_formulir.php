<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$email            = $_POST['email'];
$password         = $_POST['password'];
$telephone        = $_POST['telephone'];
$nama             = $_POST['nama'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat         	= $_POST['alamat'];
$tempat_lahir     = $_POST['tempat_lahir'];
$tanggal			= $_POST['tanggal'];
$golongan_darah   = $_POST['golongan_darah'];
$level			="user";


// query SQL untuk insert data
$query="INSERT INTO biodata SET email='$email',password='$password',telephone='$telephone',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal',golongan_darah='$golongan_darah', level='$level'";
//$query2="INSERT INTO pmi_indramayu.login(email,password,level) SELECT email,password,level FROM pmi_indramayu.biodata";
mysqli_query($kon,$query);
//mysqli_query($kon,$query2);
// mengalihkan ke halaman index.php
header("location:../formulir_donor.php");
?>