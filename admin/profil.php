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

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:40px;
}
.bulat-profil{
		border-radius:7px;
		opacity:1.0;
		border-top:4px solid #0000FF;	
		border-right:4px solid #0000FF;
		border-bottom:4px solid #0000FF;
		border-left:4px solid #0000FF;
		background: #F0FFFF;
		width:150px;
		height:170px;
		margin-top: 45px;
		margin-bottom: 10px;
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
						<img class="bulat_user" src="admin/<?php echo"$data[foto]"?>" >
                        <span class="hidden-xs"><?php echo" $data[nama_user] "?><i class="fa fa-caret-down"></i></span> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profil.php"><i class="fa fa-user fa-fw"></i> Profil</a>
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
		<style>
			.font{
				font-family: "Times New Roman", Times, serif;
			}
			.font1{
				font-family: "Times New Roman", Times, serif;
				font-weight: bold; 
			}
		</style>
  <!-- Content Wrapper. Contains page content -->
					<div class="content-wrapper">
						<section class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				   
				   
				          <div class="panel panel-info">
				            <div class="panel-heading">
				              <h3 class="panel-title" align="center" style="font-size: 25px;">PROFIL</h3>
				            </div>
				            	<div class="panel-body">
				              		<div class="row">
				                		<div class="col-md-6 col-lg-3 " align="center"> <img alt="User Pic" src="admin/<?php echo"$data[foto]"?>" class="bulat-profil"> </div>
				 
							                <div class=" col-md-9 col-lg-9 "> 
							                  <table class="table table-user-information">
							                    <tbody>
							                      <tr style="font-size: 25px; font-family: Times;">
							                        <td >Nama</td>
							                        <td><?php echo" $data[nama_user] "?></td>
							                      </tr>
							                      <tr style="font-size: 25px; font-family: Times;">
							                        <td>Username</td>
							                        <td><?php echo" $data[username] "?></td>
							                      </tr>
							                      <tr style="font-size: 25px; font-family: Times;">
							                        <td>Password</td>
							                        <td><?php echo" $data[password] "?></td>
							                      </tr>
							                   
							                      <tr style="font-size: 25px; font-family: Times;">
							                        <td>Email</td>
							                        <td><?php echo" $data[email] "?></td>
							                      </tr style="font-size: 25px;">
							                      <tr style="font-size: 25px; font-family: Times;">
							                        <td>Level</td>
							                        <td><?php echo" $data[Level] "?></td>
							                      </tr>                  
							                    </tbody>
							                  </table>
							                </div>
				              		</div>
				           		</div>
				                 <div class="panel-footer"></div>
				            
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
