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

<body class="hold-transition skin-blue">
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
						<img class="bulat_user" src="admin/<?php echo"$data[foto]"?>" >
                        <span class="hidden-xs"><?php echo" $data[nama_user] "?><i class="fa fa-caret-down"></i></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profil.php"><i class="fa fa-user fa-fw"></i>Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Keluar</a>
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
					<a href="home.php">
					<i class="glyphicon glyphicon-home"></i> <span>Branda</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
				
				<li>
					<a href="admin.php">
					<i class="glyphicon glyphicon-user"></i> <span>Data Pengguna</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
		
				<li>
					<a href="suratmasuk.php">
					<i class="glyphicon glyphicon-envelope"></i> <span>Surat Masuk</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
				
				<li>
					<a href="suratkeluar.php">
					<i class="glyphicon glyphicon-envelope"></i> <span>Surat Keluar</span>
					<span class="pull-right-container"></span>
					</a>
				</li>
				
				<li>
					<a href="disposisi.php">
					<i class="glyphicon glyphicon-comment"></i> <span>Disposisi </span>
					<span class="pull-right-container"></span>
					</a>
				</li>
			
				<li class="treeview">
					<a href="">
						<i class="glyphicon glyphicon-stats"></i>
						<span>Laporan</span>
						<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i></span>
					</a>

					<ul class="treeview-menu">
						<li><a href="laporan_surat_masuk.php"><i class="fa fa-circle-o"></i> Surat Masuk</a>
						<li><a href="laporan_surat_keluar.php"><i class="fa fa-circle-o"></i> Surat Keluar</a>
						<li><a href="rekapdata_surat.php"><i class="fa fa-circle-o"></i> Rekap</a></li>
					</ul>
				</li>
			</ul>
		</section>
    <!-- /.sidebar -->
	</aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1 class="font">Rekap Surat </h1>
					<ol class="breadcrumb">
						<li class="font"><a href="#"><i class="glyphicon glyphicon-home"></i> Branda</a></li>
						<li class="active" class="font">Rekap Surat</li>
					</ol>
			</section>
			
	<style>
			.font{
				font-family: "Times New Roman", Times, serif;
			}
			.font1{
				font-family: "Times New Roman", Times, serif;
				font-weight: bold; 
			}
		</style>

    <!-- Main content -->
	<section class="content" >
		<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-success">
                        <div class="panel-heading" >
                            <span class="block-heading icon-bookmark">Data Rekap </span>
                        </div >
						
						 <div >
						 <h3 align="center" class="font1">Rekap Surat Masuk dan Surat Keluar<h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="box-body">
                        <div class="table-responsive">
						<table align="center" class="table table-bordered table-striped ">
							<thead>
								<tr>
									<th align="center" class="success">NO</th>
									<th align="center" class="success">Bulan</th>
									<th class="success"><div align="center">Surat Masuk</div></th>
									<th class="success"><div align="center">Surat Keluar</div></th>
								</tr>
							</thead>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '01'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '01'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td><?php echo" 1 "?></td>
									<td><?php echo" Januari "?></td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '02'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '02'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>2</td>
									<td>Febuari</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '03'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '03'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>3</td>
									<td>Maret</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '04'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '04'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>4</td>
									<td>April</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '05'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '05'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>5</td>
									<td>Mei</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '06'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '06'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>6</td>
									<td>Juni</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '07'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '07'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>7</td>
									<td>Juli</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '08'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '08'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>8</td>
									<td>Agustus</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '09'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '09'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>9</td>
									<td>September</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '10'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '10'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>10</td>
									<td>Oktober</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '11'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '11'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>11</td>
									<td>November</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							<?php
								include"../koneksi/koneksi.php"; //untuk memanggil koneksi
								$sql = "SELECT COUNT(*) AS jumlah_masuk FROM surat_masuk WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '12'";
								$sqll = "SELECT COUNT(*) AS jumlah_keluar FROM surat_keluar WHERE YEAR(tgl_surat)=YEAR(NOW()) AND MONTH(tgl_surat) = '12'";
								$query = mysql_query($sql);
								$ada = mysql_query($sqll);
								if($row1=mysql_fetch_array($query)){
									$row2=mysql_fetch_array($ada)
								
							?>
								<tr>
									<td>12</td>
									<td>Desember</td>
									<td align="center"><?php echo" $row1[jumlah_masuk] "?></td>
									<td align="center"><?php echo" $row2[jumlah_keluar] "?></td>
								</tr>
							<?php
							}
							?>
							
							</tfoot>
							
						</table>
						<?php
						date_default_timezone_set('Asia/Jakarta');
						?>
						<small><h5>* Data Rekap merupakan data jumlah keseluruhan pada setiap Bulan</h5>
						<h5>* Data Rekap merupakan data menggunakan tahun sekang (NOW)</h5></small>
						<h5 align="right">Rekap Data Tahun - <?php echo date('Y' );?><h5>
					</div>
				</div>
				</div>
			</div>
	</section>
<!-- /.box-body -->
</div>
	    
  <!-- /.content-wrapper -->  
  <!-- jQuery 3 -->
		<?php include "foter.php" ?>
</body>
</html>
