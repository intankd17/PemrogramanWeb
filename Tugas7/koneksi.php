<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul7";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($koneksi));
$sql = "CREATE TABLE bukutamu (
id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(200) NOT NULL,
email VARCHAR(50) NOT NULL,
isi text NOT NULL
)";
if (!$conn) {
	die("Connection failed " . mysqli_connect_error());
}
