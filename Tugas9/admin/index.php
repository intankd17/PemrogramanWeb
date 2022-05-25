<!DOCTYPE html>
<html>

<head>
	<title>LOGIN FORM BUKU TAMU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br />
	<br />
	<center>
		<h2>LOGIN FORM BUKU TAMU</h2>
	</center>
	<br />
	<div class="login">
		<br />
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>
			<div>
				<center> <input type="submit" value="Login" class="tombol"> </center>
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password != "") {
			return true;
		} else {
			alert('USERNAME DAN PASSWORD HARUS DIISI !!!');
			return false;
		}
	}
</script>

</html>