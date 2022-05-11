<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php
	if (empty($_POST['namalengkap'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['namapanggilan'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['npm'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['ttl'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['alamat'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['nohp'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['email'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['pekerjaan'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['hobby'])) {
		header("Location:tugas3kosong.php");
	} else if (empty($_POST['citacita'])) {
		header("Location:tugas3kosong.php");
	} else {
		echo "<center> Nama Lengkap :" . $_POST['namalengkap'] . "</center><br>";
		echo "<center> Nama Panggilan :" . $_POST['namapanggilan'] . "</center><br>";
		echo "<center> NPM :" . $_POST['npm'] . "</center><br>";
		echo "<center> Tempat, Tanggal Lahir :" . $_POST['ttl'] . "</center><br>";
		echo "<center> Alamat :" . $_POST['alamat'] . "</center><br>";
		echo "<center> Nomor HP :" . $_POST['nohp'] . "</center><br>";
		echo "<center> Email :" . $_POST['email'] . "</center><br>";
		echo "<center> Pekerjaan :" . $_POST['pekerjaan'] . "</center><br>";
		echo "<center> Hobby :" . $_POST['hobby'] . "</center><br>";
		echo "<center> Cita-Cita :" . $_POST['citacita'] . "</center><br>";
		date_default_timezone_set("Asia/Jakarta");
		echo "<center> Login pada " . date("D, d F Y G:i:s" . "</center>");
	}
	?>
</body>

</html>