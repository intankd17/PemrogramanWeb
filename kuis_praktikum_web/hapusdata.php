<?php
$ambil = $koneksi->query("SELECT * FROM guestbook WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$pelanggan = $pecah['id_kategori'];

$koneksi->query("DELETE FROM guestbook WHERE id='$_GET[id]'");

echo "<script>alert('Data Guestbook Terhapus');</script>";
echo "<script>location='index.php';</script>";
