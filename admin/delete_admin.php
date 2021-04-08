<?php
	 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$id=$_GET['id'];
	$query=mysql_query("delete from user where kd_user='$id'");
	if($query){
		echo " Berhasil Dihapus";
		header('location:admin.php?pesan=delet')
	}elseif{
		echo " Tidak Berhasil Dihapus";
		header('location:admin.php?pesan=gagal_hapus');
	}
?>