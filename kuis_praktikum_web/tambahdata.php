<?php
$dataguestbook = array();

$ambil = $koneksi->query("SELECT * FROM guestbook");
while ($tiap = $ambil->fetch_assoc()) {
	$dataguestbook[] = $tiap;
}
?>

<h2>Tambah Data</h2>
<hr>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>Posted</label>
		<input type="date" class="form-control" name="posted" autofocus="" required />
	</div>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" autocomplete="off" required />
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" autocomplete="off" required />
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" class="form-control" name="address" autocomplete="off" required />
	</div>
	<div class="form-group">
		<label>City</label>
		<input type="text" class="form-control" name="city" autocomplete="off" required />
	</div>
	<div class="form-group">
		<label>Message</label>
		<textarea class="form-control" name="message" rows="4" autocomplete="off" required /></textarea>
	</div>
	<button class="btn btn-primary" name="save">SIMPAN</button>
</form><br>

<?php
if (isset($_POST['save'])) {
	$koneksi->query("INSERT INTO guestbook (posted, name, email, address, city, message) VALUES ('$_POST[posted]','$_POST[name]','$_POST[email]','$_POST[address]', '$_POST[city]', '$_POST[message]')");

	echo "<script>alert('Data Guestbook Telah Ditambah');</script>";
	echo "<script>location='index.php';</script>";
}
?>