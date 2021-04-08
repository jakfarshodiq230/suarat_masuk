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
		  <!-- logo for regular state and mobile devices -->
		  <span class="logo-lg"><b>SIPAS</b> - PSBR "RUMBAI" </span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
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
    <!-- Content Header (Page header) -->
			<section class="content-header">
			  <h1 class="font">
				Disposisi
			  </h1>
			  <ol class="breadcrumb" class="font">
				<li><a href="#"><i class="glyphicon glyphicon-home"></i> Branda</a></li>
				<li><a href="#">Disposisi</a></li>
			  </ol>
		</section>
	<?php include "warning/warning.php" ?>
    <!-- Main content -->
	<section class="content">
		<div class="row">
                <div class="col-lg-12" >
                    <div class="panel panel-success">
                        <div class="panel-heading" >
                            <span class="block-heading icon-bookmark" >Disposisi Surat</span>
                        </div >
						<div >
						 <h3 align="center" class="font1">Data Disposisi Surat<h3>
                        </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th align="center">NO</th>
							<th align="center">No.Surat</th>
							<th align="center">Tanggal Penyelesaian</th>
							<th align="center">Diposisi</th>
							<th align="center">Diteruskan</th>
							<th align="center">Status</th>
							<th align="center">ACTION</th>
						</tr>
						</thead>
						<tbody>
						<?php
							include"../koneksi/koneksi.php"; //untuk memanggil koneksi
							$query=mysql_query("SELECT  disposisi.status,disposisi.kode_disposisi,disposisi.isidisposisi, disposisi.tgl_penyelesaian, disposisi.diteruskan,
							surat_masuk.no_surat FROM disposisi , surat_masuk WHERE surat_masuk.`no_agenda`=disposisi.`no_agenda`  GROUP BY surat_masuk.tgl_penerimaan DESC ");
							$nomor=1;

							while ($row=mysql_fetch_array($query)){
								$tanda= $row ['tgl_penyelesaian'];
								$tanda2= $row ['isidisposisi'];
								$tanda3= $row ['diteruskan'];
								$warna= $row['status'];
								 
						?>
					 <tr>
					 		<?php if ($warna=='BELUM DISPOSISI'){
					 			echo "<tr bgcolor=#FDF5E6>"; } ?>

							  <td><?php echo $nomor;?></td>
							  <td align="center"><a href="#view<?php echo $row['kode_disposisi']; ?>" data-toggle="modal" class="btn-link"> <?php echo "$row[no_surat]" ?></a></td>
							  <td align="center"><?php 
							  if ($tanda== "0000-00-00" ){
							  	echo "-";
							  } else { 
							  	$ttt = $row['tgl_penyelesaian']; echo date("d-m-Y", strtotime($ttt));
							  } ?> </td>
							  <td align="justify"><?php 
							  if ($tanda2){
							  	echo "$row[isidisposisi]";
							  } else { 
							  	echo "-";
							  } ?> </td>
							  <td align="justify"><?php 
							  if ($tanda3){
							  	echo "$row[diteruskan]";
							  } else { 
							  	echo "-";
							  } ?> </td>
							  <td align="justify"><?php echo "$row[status]" ?></td>						
							  <td align="Right">  
								<div class="btn-group-harizontal">
									<?php 
									$kondisi= $row['status'];
									if($kondisi== "BELUM DISPOSISI"){?> 
									<a href="#disposisi<?php echo $row['kode_disposisi']; ?>" data-toggle="modal" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span> </a>
								<?php }else{ ?>
									<a href="cetak/cetak_disposisi.php?kode_disposisi=<?php echo "$row[kode_disposisi]" ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-print"></span> </a>
								<?php } ?>
									<a href="#del<?php echo $row['kode_disposisi']; ?>" data-toggle="modal" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> </a>
								 </div>
			                    <?php include('button_disposisi.php'); ?>	
	                         </td> 
					</tr> 
					<?php
					$nomor++;
					}
					?>			
						</table>
			</div>
			</div>
			</div>
			</div>
        <!-- /.col -->
		</div>
	</section>
    <!-- /.box-body -->
    </div>
	 
	   
  <!-- /.content-wrapper -->
<!-- jQuery 3 -->
<?php include "foter.php" ?>

 <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>

