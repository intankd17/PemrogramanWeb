<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php
	if (empty($_POST['nama'])) {
		header("Location:tugas2kosong.php");
	} elseif (empty($_POST['email'])) {
		header("Location:tugas2kosong.php");
	} else {
		echo "<center> Nama :" . $_POST['nama'] . "</center><br>";
		echo "<center> Email :" . $_POST['email'] . "</center><br>";
		date_default_timezone_set("Asia/Jakarta");
		echo "<center>" . date("d F Y" . "</center><br>");
		echo "<center>" . date("g:i:s a" . "</center><br>");
	}
	?>
</body>

</html>