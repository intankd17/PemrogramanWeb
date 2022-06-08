<?php
$ambil = $koneksi->query("SELECT * FROM guestbook WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<?php
$dataguestbook = array();

$ambil = $koneksi->query("SELECT * FROM guestbook");
while ($tiap = $ambil->fetch_assoc()) {
	$dataguestbook[] = $tiap;
}
?>

<h2>Ubah Data</h2>
<hr>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>Posted</label>
		<input type="date" class="form-control" name="posted" value="<?php echo $pecah['posted']; ?>" required />
	</div>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="<?php echo $pecah['name']; ?>" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $pecah['email']; ?>" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" value="<?php echo $pecah['address']; ?>" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label>City</label> <br>
		<input type="text" name="city" class="form-control" value="<?php echo $pecah['city']; ?>" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label>Massage</label>
		<textarea name="message" class="form-control" rows="4" required /><?php echo $pecah['message']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah">UBAH</button>
</form>

<?php
if (isset($_POST['ubah'])) {
	$koneksi->query("UPDATE guestbook SET posted='$_POST[posted]',name='$_POST[name]',email='$_POST[email]',address='$_POST[address]',city='$_POST[city]',message='$_POST[message]'
			WHERE id='$_GET[id]'");

	echo "<script>alert('Data Guestbook Telah Diubah');</script>";
	echo "<script>location='index.php';</script>";
}
?>