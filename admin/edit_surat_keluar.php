<?php
	 	
	$id=$_GET['id'];
	$no_sur=$_POST['no_surat'];
	$hal=$_POST['hal'];
	$almt_peng=$_POST['alamat_tujuan'];
	$tgl_sur=$_POST['tgl_surat'];
	$tgkt_krhsian=$_POST['tngkt_kerahasian'];
	$kka=$_POST['kka'];
	include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$query=mysql_query("UPDATE surat_keluar SET no_surat='$no_sur', hal = '$hal', almt_tujuan = '$almt_peng', tgl_surat = '$tgl_sur', tgkt_kerahasiaan= '$tgkt_krhsian', kka = '$kka' WHERE no_agenda = '$id'");

			if($query){
						echo 'FILE BERHASIL DI EDIT';
						header('location:suratkeluar.php');
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						header('location:suratkeluar.php');
					}
?>