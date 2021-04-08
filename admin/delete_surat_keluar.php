<?php
	 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$id=$_GET['id'];
	$query=mysql_query("delete from surat_keluar where no_agenda ='$id'");
	if($query){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:suratkeluar.php?pesan=delet');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:suratkeluar.php?pesan=gagal_hapus');
						}
	//header('location:suratkeluar.php');

?>