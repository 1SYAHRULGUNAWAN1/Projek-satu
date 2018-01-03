<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "admin")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:das_user.php');
   }
}
if (!isset($_SESSION['level']))
{
  header('location:../pmi1/index.php');
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
                <img src="images/admin_banner.jpg" alt="Chicago" style="width:100%;">
           
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
      <p><a href="tambah_admin.php">Tambah Admin</a></p>
      <p><a href="das_input_event.php">Tambahkan Event</a></p>
      <p><a href="das_pencatatan_pendonor.php">Pencatatan Pendonor</a></p>
      <p><a href="lap_anggota.php">Lihat Laporan Anggota</a></p>
      <p><a href="lap_event.php">Lihat Laporan Event</a></p>
      <p><a href="lap_notif.php">Lihat Laporan Notifikasi</a></p>
    </div>
    <div class="col-sm-10 text-left">
      <hr>
      <b style="font-size: 50px">Pencatatan Pendonor</b>
      <hr>  
          <form action="proses/proses_pen_donor.php" method="post">
            <div class="form-group">
              <label>ID Pendonor</label>
              <input name="id_donor" type="text" class="form-control">
            </div>
            <div class="form-group">
    <label>Nama Event</label>
    <input name="event" type="text" class="form-control">
  </div>
             <div class="form-group">
    <label >Tempat</label>
    <input name="tempat" type="text" class="form-control">
  </div>
          <div class="form-group">
    <label>Telephone</label>
    <input name="telephone" type="text" class="form-control">
  </div>
   <div class="form-group">
              <label for="sel1">Tanggal Donor</label>
              <input name="tanggal" type="date">
            </div>

    <button type="submit" class="btn btn-primary">Kirim</button>
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