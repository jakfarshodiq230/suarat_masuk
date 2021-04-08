<!DOCTYPE html>
<?php
session_start();
include('../koneksi/koneksi.php');
 
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
    die("Anda belum login <a href=\"javascript:history.back()\">kembali</a>");//jika belum login jangan lanjut..
}
?>
<html>
	<head>
		 <?php include "head.php" ?>
		  <style type="text/css">
		<!--
		.style1 {
			color: #FFFFFF;
			font-weight: bold;
			font-size: 24px;
		}
		.bulat{
		border-radius:100em;
		opacity:1.0;
		border-top:4px solid #F0FFFF;
		border-right:4px solid #F0FFFF;
		border-bottom:4px solid #F0FFFF;
		border-left:4px solid #F0FFFF;
		background: #F0FFFF;
		width:100px;
		height:100px;
		}
		.style2 {
			color: #FFFFFF;
			font-size: 18px;
		}
		.style5 {color: #00FF00; font-weight: bold; }
		.style8 {color: #FFFFFF; font-size: 16px; }
		.bulat_user{
		border-radius:100em;
		opacity:1.0;
		background: #F0FFFF;
		width:20px;
		height:20px;
		}
		-->
		  </style>
	</head>

<body class="hold-transition skin-blue ">
	<div class="wrapper">

	<header class="main-header">
    <!-- Logo -->
		<a class="logo">
		  <!-- mini logo for sidebar mini 50x50 pixels -->
		  <span class="logo-mini"><b>SIP</b>AS</span>
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg"><b>SIPAS</b> - PSBR "RUMBAI" </span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
		<?php
			include "../koneksi/koneksi.php";
			$sql = "select * from user where username =  '".$_SESSION['user']."'";
            $query = mysql_query($sql);
			$data = mysql_fetch_array($query)
		?>
		   <div class="navbar-custom-menu">
			<ul class="nav navbar-nav"> 
			  <!-- User Account: style can be found in dropdown.less -->
			  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<img class="bulat_user" src="../admin/admin/<?php echo"$data[foto]"?>" >
                        <span class="hidden-xs"><?php echo" $data[nama_user] "?><i class="fa fa-caret-down"></i></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
			</ul>
		  </div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
		  <!-- Sidebar user panel -->
			<div class="user-panel">
			  <div >
					<div align="center"><img class="bulat" src="images/PSBR.gif" align="center"></div>
					<p align="center" class="style1">PSBR </p>
						<p align="center" class="style2"> <span class="style5">P</span>anti 
						<span class="style5">S</span>osial <span class="style5">B</span>ina <span class="style5">R</span>emaja
						</p>
					<p align="center"><span class="style8">" Rumbai " Pekanbaru</span></P>
			  </div>		
			</div>

		  <!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li>
					<a href="index.php">
					<i class="glyphicon glyphicon-home"></i> <span>Branda</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
		
				<li>
					<a href="disposisi.php">
					<i class="	glyphicon glyphicon-comment"></i> <span>Disposisi</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
				
				<li>
					<a href="rekapdata_surat.php">
					<i class="glyphicon glyphicon-stats"></i> <span>Rekap Data</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
				</li>
			</ul>
		</section>
    <!-- /.sidebar -->
	</aside>
<style type="text/css">
	.css1{
		font-family: "Times New Roman", Times, serif;

	}
	.tampil{
		width:850px;
		height:600px;
		margin-top: 150px;
		margin-left: 130px;
		margin-bottom: 130px;
	}
</style>
  <!-- bagian menu Content Wrapper. Contains page content -->
	<div class="content-wrapper" >
		<section class="content">
			<div class="row">
                <div class="col-lg-10" >
                    <div class="panel panel-warning">
						<div class="panel-heading" align="center">
							<b>Sistem Informasi Pengarsipan Surat Masuk Dan Surat Keluar " SIPAS " </b>
						</div>
						<div class="panel-body" align="justify" >
							<span class="css1"><p style="font-size: 20px;">Selamat Datang <span style="font-size: 24px; font-weight: bold;">Mr - <?php echo $data ['nama_user']; ?></span> Di sistem informasi Pengarsipan<strong> S</strong >urat <strong>M</strong>asuk dan <strong>S</strong>urat <strong>K</strong>eluar &quot; <span style="font-size: 24px; font-weight: bold;">SIPAS</span>&quot;<span>  Panti Sosial Bina Remaja &quot;<strong>PSBR</strong>&quot; Rumbai Pekanbaru Riau </p></span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<!--



-->	
  <!-- /bagian bawah content-wrapper -->
	<aside class="control-sidebar control-sidebar-dark">
		<div align="center">
		  <!-- Create the tabs -->
		  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
			<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
		  </ul>
		</div>
	</aside>
	<!-- jQuery 3 -->
<?php include "foter.php" ?>
</body>
</html>
