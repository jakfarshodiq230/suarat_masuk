<?php
	 	
	$id=$_GET['id'];

	$nama_user=$_POST['nama_user'];
	$username=$_POST['user'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$level=$_POST['level'];
	include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$query=mysql_query("UPDATE user SET nama_user = '$nama_user', username = '$username', password = '$pass',email= '$email', Level = '$level' WHERE kd_user = '$id'");

			if($query){
						echo 'FILE BERHASIL DI EDIT';
						header('location:admin.php?pesan=edit');
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						header('location:admin.php?pesan=gagal_edit');
					}
?>