<!DOCTYPE html>
<html>
<head>
	<title>SMS Ulang Tahun</title>
	<!-- refresh script setiap 10 detik -->
   <meta http-equiv="refresh" content="1; url=<?php $_SERVER['PHP_SELF']; ?>">
</head>
<body>
	<h1>SMS Ulang Tahun Running...</h1>

	<?php
	//koneksi ke database
	$link=mysqli_connect("localhost","root","","pmi_indramayu");
	//mysql_select_db("tugas");
	//baca tanggal sekarang
	$tglNow = date("d");

	//baca bulan sekarang
	$blnNow = date("m");
	//baca tahun-bulan-tanggal sekarang
	$now = date("Y-m-d");
	$telephone;

	//cari data pendonor yang bulan dan tanggal lahir sesuai dengan current date
	$query = "SELECT * FROM biodata WHERE tanggal_lahir";
	$hasil = mysqli_query($link, $query);
	
	while ($data = mysqli_fetch_array($hasil)) {
		# baca nomor HP dan nama pendonor
		$telephone = $data['telephone'];
		$nama = $data['nama'];

		//insert data ke tabel kirim
		$query2 = "INSERT INTO kirim (telephone, tglKirim) VALUES ('$telephone','$now')";
		$hasil2 = mysqli_query($link, $query2);

		//jika proses insert ke tabel outbox sukses maka kirim sms ucapan
		if($hasil2){
			//isi pesan sms ucapan ultah dengan nama pendonornya
			$pesanSMS = "Selamat ulang tahun ".$nama.", Semoga sehat selalu dari kami PMI INDRAMAYU.";

			//pesan kirim sms via inser data ke tabel outbox
			$query2 = "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$telephone','$pesanSMS','Gammu')";
			mysqli_query($link,$query2);
		}
	}
	?>
</body>
</html>