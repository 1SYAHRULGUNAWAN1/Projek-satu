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
    header('location: ../pmi1/index.php');

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMI Indramayu</title>
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css_admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" style="height: 100px; background-color: #C62828">
          <img src="images/header.jpg">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="item">
                <img src="images/user_banner.jpg" alt="Chicago" style="width:100%;">
           
           </div>
      <div class="row">
        <div class="col-md-12" style="background-color: #D50000; height: 50px; padding: 15px">
        <a href="logout.php">Keluar</a>
        </div>
      </div>
    </div>
 <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="das_biodata.php">Biodata</a></p>
      <p><a href="das_riwayatdonor.php">Riwayat Donor</a></p>
      <p><a href="kartu_donor.php">Cetak Kartu Donor</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
      <h1>Data Donor </h1>
      <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Event</th>
        <th>Tanggal Donor</th>
        <th>Alamat Donor</th>
      </tr>
    </thead>
    <tbody>
      
     <?php  
include 'proses/koneksi.php';
session_start();
$queri="SELECT donor.*, biodata.* FROM donor, biodata where biodata.email='$_SESSION[username]' AND biodata.id_biodata = donor.id_biodata";  //menampikan SEMUA data dari tabel 

$hasil=mysqli_query ($kon,$queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
//$id = $data['id'];
 echo "    
        <tr>
        <td>".$data['nama']."</td>
        <td>".$data['event']."</td>
        <td>".$data['tanggal_donor']."</td>
        <td>".$data['tempat']."</td>
        </tr> 
        ";
}

?>

</tbody>
    
  </table>
      
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="row" style="height: 5px; background-color: #D50000;">
  &nbsp;
</div>
</div>
<footer class="container-fluid text-center">
  <div class="row" style="background-color: #E53935; height: 100px; padding: 15px">
  <div class="col-md-6">
    
      <p style="text-align: left; padding: 0px 150px;">
          Link<br><br>
          <a href="https://www.pmi.or.id"><img src="images/pmi.jpg"></a>
          <a href="https://web.facebook.com/palangmerah?_rdc=1&_rdr"><img src="images/pmi fb.jpg"></a>
    </p>
  </div>
  <div class="col-md-6">
      
      <p style="text-align: left; padding: 0px 125px;">
      Contact Information<br><br>
      Alamat : Jl. Yos Sudarso, Margadadi, Indramayu<br>
      Phone : +62 234 274644
      </p>
  </div>
  </div>
  <div class="row" style="background-color: #263238; height: 50px; padding: 15px">
  <div class="col-md-6" style="padding-right: 200px;">
  </div>
  <div class="col-md-6">
    Copyright&copy;<?php echo date("Y");?> by UDD PMI Indramayu - All rights reserved.
  </div>
  </div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>