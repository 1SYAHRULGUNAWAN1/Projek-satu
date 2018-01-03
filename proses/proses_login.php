<?php
session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$login  ='admin';
// query untuk mendapatkan record dari username
//$query = "SELECT * FROM biodata WHERE email = '$email'";
$queri="SELECT * FROM login where email='$email'";
if (mysqli_num_rows(mysqli_query($kon,$queri))==0) {
  $queri="SELECT * FROM biodata where email = '$email'";
  // $login = 'user';
}
// echo $queri;
$hasil = mysqli_query($kon,$queri);
$data = mysqli_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
  // menyimpan username dan level ke dalam session
  if($data['level'] =='user'){
  $_SESSION['id']       = $data['id_biodata'];
  $_SESSION['level']    = $data['level'];
  $_SESSION['username'] = $data['email'];
  // echo  $data['nama'];
    header('location: ../das_biodata.php');
  }
  else{
  $_SESSION['level']    = $data['level'];
  $_SESSION['username'] = $data['email'];

    header('location: ../das_admin.php');

  }
}
else 
  echo '<html lang="en">
<head>
<title>PMI INDRAMAYU</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<style>
.btn-default {
  border-radius: 0;
}
</style>
</head>
<body>
<center>
<div class="container">
<div class="alert alert-danger">
<strong>
<center>Email atau Password yang anda Masukan <h2>SALAH<h2></br> 
<form action="../index.php" method="POST">
<button type="submit" class="btn btn-primary">Kembali</button>
</form>
</div>
<center></strong>
</div>

</center>
</body>
</html>';
?>

