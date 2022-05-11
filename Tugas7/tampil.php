<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<style type="text/css">
		body {
			background-color: #87CEFA;
			font-size: 20px;
		}
	</style>
	<center>
		<h1> DATA BUKU TAMU </h1>
		<table border="1">
			<tr>
				<td> Nama </td>
				<td> Email </td>
				<td> Isi </td>
			</tr>
			<?php
			include("koneksi.php");
			$sql = "SELECT * FROM bukutamu";
			$result = mysqli_query($conn, $sql);
			while ($tamu = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $tamu['nama'] . "</td>";
				echo "<td>" . $tamu['email'] . "</td>";
				echo "<td>" . $tamu['isi'] . "</td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</body>

</html>