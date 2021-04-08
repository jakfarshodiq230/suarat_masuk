<?php
	 	
	$id=$_GET['id'];

	$no_sur=$_POST['no_surat'];
	$hal=$_POST['hal'];
	$almt_peng=$_POST['alamat_pengirim'];
	$tgl_sur=$_POST['tgl_surat'];
	$tgkt_krhsian=$_POST['tngkt_kerahasian'];
	$kka=$_POST['kka'];
	include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$query=mysql_query("UPDATE surat_masuk SET hal = '$hal', almt_pengirim = '$almt_peng', tgl_surat = '$tgl_sur', tgkt_kerahasiaan= '$tgkt_krhsian', kka = '$kka',
	 no_surat = '$no_sur' WHERE no_agenda='$id'");

			if($query){
						echo 'FILE BERHASIL DI EDIT';
						header('location:suratmasuk.php?pesan=edit');
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						header('location:suratmasuk.php?pesan=gagal_edit');
					}
?>