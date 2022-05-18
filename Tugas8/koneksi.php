<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "modul8";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($koneksi));
if (!$conn) {
	die("Connection failed " . mysqli_connect_error());
}
