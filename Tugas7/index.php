<!DOCTYPE html>
<html>

<head>
	<title> BUKU TAMU </title>
</head>

<body>
	<style type="text/css">
		body {
			background-color: #87CEFA;
			font-size: 20px;
		}
	</style>
	<center>
		<h1> BUKU TAMU </h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td> Nama </td>
					<td> :
						<input type="text" name="nama" required />
					</td>
				</tr>
				<tr>
					<td> Email </td>
					<td> :
						<input type="text" name="email" required />
					</td>
				</tr>
				<tr>
					<td> Isi </td>
					<td> :
						<input type="text" name="isi" required />
					</td>
				</tr>
				<tr>
					<td> <input type="submit" name="btnSimpan" value="Simpan"> </td>
					<td> <input type="reset" name="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</center>
	<?php
	include("koneksi.php");
	if (isset($_POST['nama'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$isi = $_POST['isi'];
		$sql = "INSERT INTO bukutamu(nama,email,isi) VALUES ('$nama','$email','$isi')";
		$sql = mysqli_query($conn, $sql);
		if ($sql) {
			echo "<center>" . "Berhasil" . "</center>";
		} else {
			echo "<center>" . "Tidak Berhasil" . "</center>";
		}
	}
	?>
</body>

</html>