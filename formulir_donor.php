<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Donor Darah</title>
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/slide1.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <h3>PMI Indramayu</h3>
                </div>
              </div>
              <div class="item">
                <img src="images/slide2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Ayo Donor</h3>
                </div>
              </div>
              <div class="item">
                <img src="images/slide3.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="background-color: #D50000;">
           <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Beranda</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="visi_misi.php">Visi dan Misi</a></li>
          <li><a href="sejarah_pmi.php">Sejarah PMI</a></li>
          <li><a href="struktur_organisasi.php">Struktur Organisasi</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Donor Darah<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="formulir_donor.php">Formulir Donor Darah</a></li>
        </ul>
      </li>
      <li><a href="kontak.php">Kontak Kami</a></li>
    </ul>
        </div>
      </div>
    </div>
    <div class="container text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
      <hr>
        <div class="row">
          <div class="col-sm-12 text-left">
            <b>FORMULIR DONOR DARAH</b><hr>
            <form action="proses/proses_formulir.php" method="post">
            <div class="form-group">
              <label>Email</label>
              <input name="email" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Masukan Email">
              
            </div>
             <div class="form-group">
    <label >Password</label>
    <input name="password" type="password" class="form-control" placeholder="Masukan Password">
  </div><hr>
   <div class="form-group">
              <label>Nomor Handphone</label>
              <input name="telephone" type="text" class="form-control" placeholder="Masukan Nomer Handphone Anda">
            </div>
  <div class="form-group">
              <label>Nama</label>
              <input name="nama" type="text" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
              </div>
            <div class="form-group">
              <label>Alamat</label>
              <input name="alamat" type="text" class="form-control" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukan Tempat Lahir">
            </div>
          
            <div class="form-group">
              <label for="sel1">Tanggal Lahir</label>
               <input name="tanggal" type="date">
            </div>
             <div class="form-group">
              <label>Golongan Darah</label>
              <input name="golongan_darah" type="text" class="form-control" placeholder="Masukan Golongan Darah Anda">
            </div>
              <button type="submit" class="btn btn-primary">Kirim</button><br><br>
            </form>
            
          </div>
        </div>
    </div>

    <div class="col-sm-4 sidenav">
      <hr><b>LOGIN</b><hr>
     <form class="form" action="proses/proses_login.php" method="post">
  <div class="form-group">
    <label>Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-primary">Masuk</button>
</form><br><br><hr>
<b>JADWAL EVENT PMI INDRAMAYU</b><br><hr>
 <div class="table-responsive">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Tempat</th>
      </tr>
    </thead>
    <tbody>
     <?php
     include 'proses/koneksi.php';
    //perintah menampilkan data
    $queri = "Select * From event"; //menampilkan semua data dari tabel biodata
    $hasil = mysqli_query($kon,$queri); //fungsi sql
    //perintah untuk mmebaca dan mengambil data dalam bentuk array
    while ($data = mysqli_fetch_array($hasil)) {
      $id = $data['id_event'];
      echo "
          <tr>
            <td>".$data['tanggal_event']."</td>
            <td>".$data['jam']."</td>
            <td>".$data['tempat_event']."</td>
          </tr>
          ";
    }

    ?>
    </tbody>
  </table>
  </div>
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
    <a href="index.php">Beranda</a>
    <a href="kontak.php">Kontak Kami</a>
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