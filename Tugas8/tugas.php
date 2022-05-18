<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
	.warning {
		color: #FF0000;
	}
	.card-header{
		background-color: #00CED1;
	}
	.card-header h1{
		font-weight: bold;
	}
	.card-body h4{
		text-decoration: underline;
		padding-top: 20px;
	}
	.card {
		background-color: #AFEEEE;
	}
</style>
</head>
<body>

<?php
$error_tgl = "";
$error_nama = "";
$error_jk = "";
$error_nisn = "";
$error_nik = "";
$error_tempat = "";
$error_tgllahir = "";
$error_akta = "";
$error_agama = "";
$error_kwn = "";
$error_bk = "";
$error_alamat = "";
$error_rt = "";
$error_rw = "";
$error_dusun = "";
$error_kelurahan = "";
$error_kecamatan = "";
$error_kodepos = "";
$error_lintang = "";
$error_bujur = "";
$error_ttinggal = "";
$error_transportasi = "";
$error_kks = "";
$error_anak = "";
$error_kps = "";
$error_nokps = "";

$tgl = "";
$nama = "";
$jk = "";
$nisn = "";
$nik = "";
$tempat = "";
$tgllahir = "";
$akta = "";
$agama = "";
$kwn = "";
$bk = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$kelurahan = "";
$kecamatan = "";
$kodepos = "";
$lintang = "";
$bujur = "";
$ttinggal = "";
$transportasi = "";
$kks = "";
$anak = "";
$kps = "";
$nokps = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["tgl"]))
	{
		$error_tgl= "Tanggal tidak boleh kosong";
	}
	else 
	{
		$tgl= cek_input($_POST["tgl"]);
		}
	}

	if (empty($_POST["nama"]))
	{
		$error_nama = "Nama Lengkap tidak boleh kosong";
	}
	else
	{
		$nama = cek_input($_POST["nama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$nama))
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["jk"])) 
	{
    	$error_jk = "Jenis Kelamin tidak boleh kosong";
  	} 
  	else 
  	{
    	$jk = cek_input($_POST["jk"]);
  		}

	if (empty($_POST["nisn"]))
	{
		$error_nisn= "NISN tidak boleh kosong";
	}
	else 
	{
		$nisn = cek_input($_POST["nisn"]);

		if(!is_numeric($nisn))
		{
			$error_nisn = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["nik"]))
	{
		$error_nik= "NIK / Nomor Kitas tidak boleh kosong";
	}
	else 
	{
		$nik = cek_input($_POST["nik"]);

		if(!is_numeric($nik))
		{
			$error_nik = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["tempat"]))
	{
		$error_tempat = "Tempat Lahir tidak boleh kosong";
	}
	else
	{
		$tempat = cek_input($_POST["tempat"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$tempat))
		{
			$error_tempat = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tgllahir"]))
	{
		$error_tgllahir = "Tanggal Lahir tidak boleh kosong";
	}
	else
	{
		$tgllahir = cek_input($_POST["tgllahir"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$tgllahir))
		{
			$error_tgllahir = "Inputan hanya boleh huruf dan angka";
		}
	}

	if (empty($_POST["akta"]))
	{
		$error_akta= "No. Registrasi Akta Lahir tidak boleh kosong";
	}
	else 
	{
		$akta = cek_input($_POST["akta"]);

		if(!is_numeric($akta))
		{
			$error_akta = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["agama"]))
	{
		$error_agama= "Agama & Kepercayaan tidak boleh kosong";
	}
	else
	{
		$agama = cek_input($_POST["agama"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$agama))
		{
			$error_agama = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kwn"]))
	{
		$error_kwn= "Kewarganegaraan tidak boleh kosong";
	}
	else
	{
		$kwn = cek_input($_POST["kwn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kwn))
		{
			$error_kwn = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["bk"]))
	{
		$error_bk= "Berkebutuhan Khusus tidak boleh kosong";
	}
	else 
	{
		$bk = cek_input($_POST["bk"]);

		if(!is_numeric($bk))
		{
			$error_bk = 'Inputan hanya boleh angka';
		}
	}
	
	if (empty($_POST["alamat"]))
	{
		$error_alamat = "Alamat Jalan tidak boleh kosong";
	}
	else
	{
		$alamat = cek_input($_POST["alamat"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$alamat))
		{
			$error_alamat = "Inputan hanya boleh huruf dan angka";
		}
	}

	if (empty($_POST["rt"]))
	{
		$error_rt= "RT tidak boleh kosong";
	}
	else 
	{
		$rt= cek_input($_POST["rt"]);

		if(!is_numeric($rt))
		{
			$error_rt = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["rw"]))
	{
		$error_rw= "RW tidak boleh kosong";
	}
	else 
	{
		$rw= cek_input($_POST["rw"]);

		if(!is_numeric($rw))
		{
			$error_rw = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["dusun"]))
	{
		$error_dusun= "Nama Dusun tidak boleh kosong";
	}
	else
	{
		$dusun = cek_input($_POST["dusun"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$dusun))
		{
			$error_dusun = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kelurahan"]))
	{
		$error_kelurahan = "Nama Kelurahan / Desa tidak boleh kosong";
	}
	else
	{
		$kelurahan = cek_input($_POST["kelurahan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan))
		{
			$error_kelurahan = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kecamatan"]))
	{
		$error_kecamatan = "Nama Kecamatan tidak boleh kosong";
	}
	else
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan))
		{
			$error_kecamatan = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kodepos"]))
	{
		$error_kodepos= "Kode Pos tidak boleh kosong";
	}
	else 
	{
		$kodepos= cek_input($_POST["kodepos"]);

		if(!is_numeric($kodepos))
		{
			$error_kodepos = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["lintang"]))
	{
		$error_lintang = "Lintang tidak boleh kosong";
	}
	else
	{
		$lintang = cek_input($_POST["lintang"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lintang))
		{
			$error_lintang = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["bujur"]))
	{
		$error_bujur = "Bujur tidak boleh kosong";
	}
	else
	{
		$bujur = cek_input($_POST["bujur"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$bujur))
		{
			$error_bujur = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["ttinggal"]))
	{
		$error_ttinggal= "Tempat Tinggal tidak boleh kosong";
	}
	else 
	{
		$ttinggal= cek_input($_POST["ttinggal"]);

		if(!is_numeric($ttinggal))
		{
			$error_ttinggal = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["transportasi"]))
	{
		$error_transportasi= "Moda Transportasi tidak boleh kosong";
	}
	else 
	{
		$transportasi= cek_input($_POST["transportasi"]);

		if(!is_numeric($transportasi))
		{
			$error_transportasi = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["kks"]))
	{
		$error_kks = "Nomor KKS (Kartu Keluarga Sejatera) tidak boleh kosong";
	}
	else
	{
		$kks= cek_input($_POST["kks"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$kks))
		{
			$error_kks = "Inputan hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["anak"]))
	{
		$error_anak= "Anak ke-berapa (berdasarkan KK) tidak boleh kosong";
	}
	else 
	{
		$anak= cek_input($_POST["anak"]);

		if(!is_numeric($anak))
		{
			$error_anak = 'Inputan hanya boleh angka';
		}
	}

	if (empty($_POST["kps"])) 
	{
    	$error_kps = "Penerima KPS / PKH tidak boleh kosong";
  	} 
  	else 
  	{
    	$kps = cek_input($_POST["kps"]);
  	}

  	if (empty($_POST["nokps"]))
	{
		$error_nokps = "Nomor KPS / PKH tidak boleh kosong";
	}
	else
	{
		$nokps= cek_input($_POST["nokps"]);
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$nokps))
		{
			$error_nokps = "Inputan hanya boleh huruf dan spasi";
		}
	}
  	


function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<div class="row">
<div class="col-md-12">
<div class="card">
	<div class="card-header">
	<center> <h1> FORMULIR PESERTA DIDIK </h1> </center> <br>
	</div>

	<div class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

	<div class="form-group row">
		<label for="tgl" class="col-sm-2 col-form-label">Tanggal Input</label>
		<div class="col-sm-2">
			<input type="date" name="tgl" class="form-control <?php echo($error_tgl !="" ? "is-invalid" : ""); ?>" id="tgl" value="<?php echo $tgl; ?>" required /><span class="warning"><?php echo $error_tgl; ?></span>
		</div>
	</div>

	<h4> Data Pribadi </h4>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
		<div class="col-sm-5">
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $nama; ?>" required /><span class="warning"><?php echo $error_nama; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
  		<p><input type="radio" name="jk" <?php if (isset($jk) && $jk=="perempuan") echo "checked";?> value="perempuan"> Perempuan
  		<input type="radio" name="jk" <?php if (isset($jk) && $jk=="laki-laki") echo "checked";?> value="laki-laki"> Laki-Laki
  		<span class="warning">* <?php echo $error_jk; ?></span></p>
  	</div>

	<div class="form-group row">
		<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
		<div class="col-sm-3">
			<input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Masukkan NISN" value="<?php echo $nisn; ?>" required /><span class="warning"><?php echo $error_nisn; ?></span>
		</div>
	</div>
	
	<div class="form-group row">
		<label for="nik" class="col-sm-2 col-form-label">NIK / Nomor Kitas</label>
		<div class="col-sm-3">
			<input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="Masukkan NIK / No. Kitas" value="<?php echo $nik; ?>" required /><span class="warning"><?php echo $error_nik; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
		<div class="col-sm-3">
			<input type="text" name="tempat" class="form-control <?php echo($error_tempat !="" ? "is-invalid" : ""); ?>" id="tempat" placeholder="Masukkan Tempat Lahir" value="<?php echo $tempat; ?>" required /><span class="warning"><?php echo $error_tempat; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
		<div class="col-sm-3">
			<input type="text" name="tgllahir" class="form-control <?php echo($error_tgllahir !="" ? "is-invalid" : ""); ?>" id="tgllahir" placeholder="Masukkan Tanggal Lahir" value="<?php echo $tgllahir; ?>" required /><span class="warning"><?php echo $error_tgllahir; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="akta" class="col-sm-2 col-form-label">Nomor Registrasi Akta Lahir</label>
		<div class="col-sm-3">
			<input type="text" name="akta" class="form-control <?php echo($error_akta !="" ? "is-invalid" : ""); ?>" id="akta" placeholder="Masukkan Nomor Registrasi Akta Lahir" value="<?php echo $akta; ?>" required /><span class="warning"><?php echo $error_akta; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="agama" class="col-sm-2 col-form-label">Agama & Kepercayaan</label>
		<div class="col-sm-3">
			<input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Masukkan Agama & Kepercayaan" value="<?php echo $agama; ?>" required /><span class="warning"><?php echo $error_agama; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
		<div class="col-sm-3">
			<input type="text" name="kwn" class="form-control <?php echo($error_kwn !="" ? "is-invalid" : ""); ?>" id="kwn" placeholder="Masukkan Kewarganegaraan" value="<?php echo $kwn; ?>" required /><span class="warning"><?php echo $error_kwn; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="bk" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
		<div class="col-sm-3">
			<input type="text" name="bk" class="form-control <?php echo($error_bk !="" ? "is-invalid" : ""); ?>" id="bk" placeholder="Masukkan Berkebutuhan Khusus" value="<?php echo $bk; ?>" required /><span class="warning"><?php echo $error_bk; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
		<div class="col-sm-5">
			<input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Masukkan Alamat Jalan" value="<?php echo $alamat; ?>" required /><span class="warning"><?php echo $error_alamat; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="rt" class="col-sm-2 col-form-label">RT</label>
		<div class="col-sm-2">
			<input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="Masukkan RT" value="<?php echo $rt; ?>" required /><span class="warning"><?php echo $error_rt; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="rw" class="col-sm-2 col-form-label">RW</label>
		<div class="col-sm-2">
			<input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="Masukkan RW" value="<?php echo $rw; ?>" required /><span class="warning"><?php echo $error_rw; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
		<div class="col-sm-3">
			<input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Masukkan Nama Dusun" value="<?php echo $dusun; ?>" required /><span class="warning"><?php echo $error_dusun; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan / Desa</label>
		<div class="col-sm-3">
			<input type="text" name="kelurahan" class="form-control <?php echo($error_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Masukkan Nama Kelurahan / Desa" value="<?php echo $kelurahan; ?>" required /><span class="warning"><?php echo $error_kelurahan; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kecamatan" class="col-sm-2 col-form-label">Nama Kecamatan</label>
		<div class="col-sm-3">
			<input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Masukkan Nama Kecamatan" value="<?php echo $kecamatan; ?>" required /><span class="warning"><?php echo $error_kecamatan; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
		<div class="col-sm-3">
			<input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Masukkan Kode Pos" value="<?php echo $kodepos; ?>" required /><span class="warning"><?php echo $error_kodepos; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="lintang" class="col-sm-2 col-form-label">Lintang</label>
		<div class="col-sm-3">
			<input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Masukkan Lintang" value="<?php echo $lintang; ?>" required /><span class="warning"><?php echo $error_lintang; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="bujur" class="col-sm-2 col-form-label">Bujur</label>
		<div class="col-sm-3">
			<input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Masukkan Bujur" value="<?php echo $bujur; ?>" required /><span class="warning"><?php echo $error_bujur; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="ttinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
		<div class="col-sm-3">
			<input type="text" name="ttinggal" class="form-control <?php echo($error_ttinggal !="" ? "is-invalid" : ""); ?>" id="ttinggal" placeholder="Masukkan Tempat Tinggal" value="<?php echo $ttinggal; ?>" required /><span class="warning"><?php echo $error_ttinggal; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="transportasi" class="col-sm-2 col-form-label">Moda Transportasi</label>
		<div class="col-sm-3">
			<input type="text" name="transportasi" class="form-control <?php echo($error_transportasi !="" ? "is-invalid" : ""); ?>" id="transportasi" placeholder="Masukkan Moda Transportasi" value="<?php echo $transportasi; ?>" required /><span class="warning"><?php echo $error_transportasi; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kks" class="col-sm-2 col-form-label">Nomor KKS (Kartu Keluarga Sejahtera)</label>
		<div class="col-sm-3">
			<input type="text" name="kks" class="form-control <?php echo($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="Masukkan Nomor KKS" value="<?php echo $kks; ?>" required /><span class="warning"><?php echo $error_kks; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="anak" class="col-sm-2 col-form-label">Anak ke-berapa (berdasarkan KK)</label>
		<div class="col-sm-3">
			<input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Masukkan Anak ke-berapa" value="<?php echo $anak; ?>" required /><span class="warning"><?php echo $error_anak; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kps" class="col-sm-2 col-form-label">Penerima KPS / PKH</label>
  		<p> <input type="radio" name="kps" <?php if (isset($kps) && $kps=="ya") echo "checked" ;?> value="ya"> Ya
  		<input type="radio" name="kps" <?php if (isset($kps) && $kps=="tidak") echo "checked" ;?> value="tidak"> Tidak
  		<span class="warning">* <?php echo $error_kps; ?></span></p>
  	</div>

  	<div class="form-group row">
		<label for="nokps" class="col-sm-2 col-form-label">Nomor KPS / PKH</label>
		<div class="col-sm-3">
			<input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Masukkan Nomor KPS / PKH" value="<?php echo $nokps; ?>" required /><span class="warning"><?php echo $error_nokps; ?></span>
		</div>
	</div>
	<br> <br>

	 <div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Kirim</button>
			<button type="reset" class="btn btn-primary">Reset</button>
		</div>
	</div>

</form>

<?php
	include("koneksi.php");
	if(isset($_POST['tgl'])){
	$tgl=$_POST['tgl'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$nisn=$_POST['nisn'];
	$nik=$_POST['nik'];
	$tempat=$_POST['tempat'];
	$tgllahir=$_POST['tgllahir'];
	$akta=$_POST['akta'];
	$agama=$_POST['agama'];
	$kwn=$_POST['kwn'];
	$bk=$_POST['bk'];
	$alamat=$_POST['alamat'];
	$rt=$_POST['rt'];
	$rw=$_POST['rw'];
	$dusun=$_POST['dusun'];
	$kelurahan=$_POST['kelurahan'];
	$kecamatan=$_POST['kecamatan'];
	$kodepos=$_POST['kodepos'];
	$lintang=$_POST['lintang'];
	$bujur=$_POST['bujur'];
	$ttinggal=$_POST['ttinggal'];
	$transportasi=$_POST['transportasi'];
	$kks=$_POST['kks'];
	$anak=$_POST['anak'];
	$kps=$_POST['kps'];
	$nokps=$_POST['nokps'];

	$sql="INSERT INTO formvalidasi(tgl,nama,jk,nisn,nik,tempat,tgllahir,akta,agama,kwn,bk,alamat,rt,rw,dusun,kelurahan,kecamatan,kodepos,lintang,bujur,ttinggal,transportasi,kks,anak,kps,nokps) VALUES ('".date("Y-m-d")."','$nama','$jk','$nisn','$nik','$tempat','$tgllahir','$akta','$agama','$kwn','$bk','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$kodepos','$lintang','$bujur','$ttinggal','$transportasi','$kks','$anak','$kps','$nokps')";
	$sql = mysqli_query($conn, $sql);
	if ($sql) {
		echo "<center>"."Berhasil"."</center>";
	} else {
		echo "<center>"."Tidak Berhasil"."</center>";
	}
	}
?>

</body>
</html>