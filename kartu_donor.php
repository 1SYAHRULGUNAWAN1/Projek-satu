<?php
  error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
      include 'konten-admin.php';
   }
   else if ($_SESSION['level'] == "user")
   {
       include 'konten-user.php';
   }}
   else{
    header('location: ../pmi1/index.php');}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>PMI Indramayu</title>
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
  </head>
  <style type="text/css">
    *{
      font-family: tahoma;
    }
    table{
      border-collapse: collapse;
      float: center;
    }
    th, td{
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    th{
      background-color: #0277BD;
      color: white;
    }
  </style>
  <body>
  <center>
</br></br>
<img src="images/icon.png" width="100px" height="100px">
<b style="font-size:20px; padding-right: 100px; padding-left: 100px">Kartu Donor</b>
<img src="images/logo.jpg" width="100px" height="100px">
<br><br><br>
    <table border="1">
      <tr>
      <th>ID Pendonor</th>
      <th>Nama</th>
      <th>Golongan Darah</th>
      <th>Tanggal Donor</th>
      <th>Tempat Donor</th>
      <th width="100px">Ttd</th>
    </tr>
    <?php  
include 'proses/koneksi.php';

session_start();
$queri="SELECT biodata.*, donor.*  From biodata, donor where email='$_SESSION[username]' AND biodata.id_biodata=donor.id_biodata ORDER BY donor.tanggal_donor DESC LIMIT 1 " ;  //menampikan SEMUA data dari tabel siswa

$hasil=mysqli_query ($kon,$queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['id'];
 echo "    
        <tr>
        <td>".$data['id_biodata']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['golongan_darah']."</td>
        <td>".$data['tanggal_donor']."</td>
        <td>".$data['tempat']."</td>
        </tr> 
        ";
}


?>
    </table>
<b style="font-size:50px"></b>
</br>
<script>
    window.print();
    location.href="das_biodata.php"
</script>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
