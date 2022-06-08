<?php
$koneksi = new mysqli("localhost", "root", "", "myweb");
$datauser = array();

$ambil = $koneksi->query("SELECT * FROM user");
while ($tiap = $ambil->fetch_assoc()) {
    $datauser[] = $tiap;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi User</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>REGISTRASI USER MY WEB</h2>

                <h5>(Registrasi user untuk mendapatkan akses)</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><strong>Silahkan Masukkan Data Anda</strong></center>
                    </div><br>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="name" placeholder="Silahkan Masukkan Nama Anda" autocomplete="off" autofocus="" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input type="text" class="form-control" name="address" placeholder="Silahkan Masukkan Alamat Anda" autocomplete="off" autofocus="" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Silahkan Masukkan Email Anda" autocomplete="off" autofocus="" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                                <input type="text" class="form-control" name="homepage" placeholder="Silahkan Masukkan Homepage Anda" autocomplete="off" autofocus="" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" name="username" placeholder="Silahkan Masukkan Username Anda" autocomplete="off" required />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Silahkan Masukkan Password Anda" autocomplete="off" required />
                            </div>
                            <div class="form-group"> <br>
                                <center><button class="btn btn-primary" name="registrasi">REGISTRASI</button></center><br>
                                <center><a href="login.php">Pengguna Lama? Silahkan Login Disini</a></center>
                        </form><br>
                        <?php
                        if (isset($_POST['registrasi'])) {
                            $ambil = $koneksi->query("INSERT INTO user (name, address, email, homepage, username, password) VALUES ('$_POST[name]','$_POST[address]','$_POST[email]','$_POST[homepage]','$_POST[username]','$_POST[password]')");

                            echo "<center><div class='alert alert-info'>Registrasi Sukses</div></center>";
                            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                        }
                        ?>
                    </div>

                </div>
            </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>