<!DOCTYPE html>
<html>
<head>
	<title>SMS Peringatan Donor</title>
	<!-- refresh script setiap 10 detik -->
   <meta http-equiv="refresh" content="1; url=<?php $_SERVER['PHP_SELF']; ?>">
</head>
<body>
	<h1>SMS Peringatan Donor Running...</h1>

	<?php
	//koneksi ke database
	$link=mysqli_connect("localhost","root","","pmi_indramayu");
	//baca tanggal sekarang
	$know=strtotime(date("Y-m-d"));
	$addMonth=2;
	$tglNow = date("Y-m-d",strtotime('-'.$addMonth.' month', $know));

	//baca tahun-bulan-tanggal sekarang
	$now = date("Y-m-d");

	//cari data pendonor yang bulan dan tanggal lahir sesuai dengan current date
	$query = "SELECT * FROM donor WHERE tanggal_donor ";
	$hasil = mysqli_query($link, $query);
	while ($data = mysqli_fetch_array($hasil)) {
		# baca nomor HP
		$telephone = $data['telephone'];

		//insert data ke tabel kirim
		$query2 = "INSERT INTO kirim (telephone, tglKirim) VALUES ('$telephone','$now')";
		$hasil2 = mysqli_query($link, $query2);

		//jika proses insert ke tabel outbox sukses maka kirim sms ucapan
		if($hasil2){
			//isi pesan sms peringatan donor
			$pesanSMS = "Waktunya mendonorkan darah anda, dari kami PMI INDRAMAYU.";

			//pesan kirim sms via inser data ke tabel outbox
			$query2 = "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$telephone','$pesanSMS','Gammu')";
			mysqli_query($link,$query2);
		}
	}
	?>
</body>
</html>