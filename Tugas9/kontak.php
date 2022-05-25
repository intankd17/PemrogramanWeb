<!DOCTYPE html>
<html>

<head>
	<title> Koneksi Database MySQL </title>
</head>

<body>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "modul9");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:" . mysqli_connect_error();
		exit();
	}
	?>
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
					<td> Jenis Kelamin </td>
					<td> :
						<input type="text" name="jkel" required />
					</td>
				</tr>
				<tr>
					<td> Email </td>
					<td> :
						<input type="text" name="email" required />
					</td>
				</tr>
				<tr>
					<td> Alamat </td>
					<td> :
						<input type="text" name="alamat" required />
					</td>
				</tr>
				<tr>
					<td> Kota </td>
					<td> :
						<input type="text" name="kota" required />
					</td>
				</tr>
				<tr>
					<td> Pesan </td>
					<td> :
						<input type="text" name="pesan" required />
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
	include("admin/koneksi_inc.php");
	if (isset($_POST['nama'])) {
		$nama = $_POST['nama'];
		$jeniskelamin = $_POST['jkel'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$pesan = $_POST['pesan'];
		$sql = "INSERT INTO kontak(nama, jkel, email, alamat, kota, pesan) VALUES ('$nama','$jeniskelamin','$email','$alamat','$kota','$pesan')";
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