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
              <h1>Profile Anggota</h1><br><br>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Golongan Darah</th>
        <th>No Hp</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
     <?php  
include 'proses/koneksi.php';
session_start();
$queri="Select * From biodata where id_biodata='$_SESSION[id]'" ;  
$hasil=mysqli_query ($kon,$queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['id'];
 echo "    
        <tr>
        <td>".$data['nama']."</td>
        <td>".$data['jenis_kelamin']."</td>
        <td>".$data['alamat']."</td>
        <td>".$data['tanggal_lahir']."</td>
        <td>".$data['golongan_darah']."</td>
        <td>".$data['telephone']."</td>
        <td><a href ='#' clas='btn btn-primary' data-target='#dialog-barang' data-toggle='modal'>Edit</a></td>
        </tr> 
        ";
?>

    </tbody>
  </table>
<div class="modal fade" id="dialog-barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Biodata</h4>
            </div>
            <div class="modal-body">
                <form action="proses/proses_edit.php" class="form-horizontal" method="POST" id="form-save">
                <div class="form-group">
                  <input type="hidden" name="id" value='<?php echo"$data[id_biodata]" ?>'>
                  <label class="col-sm-3 control-label">Email</label>
                    <input name="email" value='<?php echo"$data[email]" ?>' type="email" class="col-sm-5 form-control"  style="width: 250px" aria-describedby="emailHelp" placeholder="Masukan Email">
                  </div>
                  <div class="form-group">
    <label class="col-sm-3 control-label">Password</label>
    <input name="password" type="password" class="col-sm-5 form-control" value='<?php echo"$data[password]" ?>' style="width: 250px" placeholder="Masukan Password">
  </div><hr>
   <div class="form-group">
              <label class="col-sm-3 control-label">Nomor Handphone</label>
              <input name="telephone" type="text" class="col-sm-5 form-control" value='<?php echo"$data[telephone]" ?>' style="width: 250px" placeholder="Masukan Nomer Handphone Anda">
            </div>
  <div class="form-group">
              <label class="col-sm-3 control-label">Nama</label>
              <input name="nama" type="text" class="col-sm-5 form-control" value='<?php echo"$data[nama]" ?>' style="width: 250px" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Jenis Kelamin</label>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
              </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat</label>
              <input name="alamat" type="text" class="col-sm-5 form-control" value='<?php echo"$data[alamat]" ?>' style="width: 250px"placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="col-sm-5 form-control" value='<?php echo"$data[tempat_lahir]" ?>' style="width: 250px"placeholder="Masukan Tempat Lahir">
            </div>
          
            <div class="form-group">
              <label for="sel1" class="col-sm-3 control-label">Tanggal Lahir</label>
               <input name="tanggal" type="date" class="col-sm-5 form-control" value='<?php echo"$data[tanggal_lahir]" ?>' style="width: 250px">
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Golongan Darah</label>
              <input name="golongan_darah" type="text" class="col-sm-5 form-control" value='<?php echo"$data[golongan_darah]" ?>' style="width: 250px" placeholder="Masukan Golongan Darah Anda">
            </div>



                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
</div>
<?php } ?>
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

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>