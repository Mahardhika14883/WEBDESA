<?php
require 'proses_berita.php';
$artikel = query("SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Daftar berita </title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/sb-admin-2.css">
	<link rel="stylesheet" href="css/dashboard.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<style media="screen">
	i:hover{
		color: #35424a;
	}
	li a:hover{
		color: #35424a;
	}
</style>

<body>
	<div class="wrap">
		<div class="header">
		</div>
		<div class="menu">
      <ul>
        <h1><i class="fa fa-dashboard fa-fw"> </i>Admin</h1>
      </ul>
		</div>
		<div class="badan">
			<div class="User">
			</div>

			<div class="sidebar" style="text-align:left;">
				<ul>
					<li>
						<a href="dashboard.php"> <i class="fa fa-tasks fa-fw" ></i> ARTIKEL</a><br>
					</li><br><br>
					<li>
						<a href="Tambah_berita.php">  <i class="fa fa-pencil-square-o fa-fw" ></i>TAMBAH BERITA</a>
					</li><br><br>
					<li>
						<a href="User.php" > <i class="fa fa-users fa-fw" ></i>DAFTAR PENGGUNA</a>
					</li><br><br>
					<li>
						<a href="Tambah_akun.php"> <i class="fa fa-plus-square fa-fw" ></i>TAMBAH PENGGUNA</a>
					</li><br><br>
					<li>
						<a href="lupa.php"><i class="fa fa-clock-o fa-fw" ></i>LUPA KATA SANDI</a>
					</li><br><br>
					<li>
						<a href="index.HTML" onclick="return confirm('Yakin ingin meninggalkan Dashboard ?');"> <i class="fa fa-sign-in fa-fw" ></i>MASUK WEB</a>
					</li><br><br>
					<li>
						<a href="logout.php" onclick="return confirm('Yakin Ingin Keluar ?');"> <i class="fa fa-sign-out fa-fw" ></i>KELUAR</a>
					</li>
				</ul>

			</div>

			<div class="content">
				<!-- /.row -->
				<div class="row">
						<div class="col-lg-3 col-md-6">
								<div class="panel panel-primary">
										<div class="panel-heading">
												<div class="row">
														<div class="col-xs-3">
																<i class="fa fa-user fa-5x"></i>
														</div>
														<div class="col-xs-9 text-right">
															<div class="huge"><?="5"  ?></div>
																<div>Daftar User</div>
														</div>
												</div>
										</div>
										<a href="#">
												<div class="panel-footer">
														<span class="pull-left">lihat semua</span>
														<span class="pull-left"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
												</div>
										</a>
								</div>
						</div>
						<div class="col-lg-3 col-md-6">
								<div class="panel panel-green">
										<div class="panel-heading">
												<div class="row">
														<div class="col-xs-3">
																<i class="fa fa-tasks fa-5x"></i>
														</div>
														<div class="col-xs-9 text-right">
																<div class="huge">0</div>
																<div>Daftar artikel</div>
														</div>
												</div>
										</div>
										<a href="#">
												<div class="panel-footer">
														<span class="pull-left">Lihat Semua</span>
														<span class="pull-left"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
												</div>
										</a>
								</div>
						</div>
						<div class="col-lg-3 col-md-6">
								<div class="panel panel-yellow">
										<div class="panel-heading">
												<div class="row">
														<div class="col-xs-3">
																<i class="fa fa-comment fa-5x"></i>
														</div>
														<div class="col-xs-9 text-right">
																<div class="huge">0</div>
																<div>Pesan Untuk admin</div>
														</div>
												</div>
										</div>
										<a href="#">
												<div class="panel-footer">
														<span class="pull-left">Lihat semua</span>
														<span class="pull-left"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
												</div>
										</a>
								</div>
						</div>
				<!-- /.row -->


			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<p style="color:red;">Copyight 2018</p>
		</div>
	</div>
</body>
</html>
