<?php
	 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$id=$_GET['id'];
	$query=mysql_query("delete from disposisi where kode_disposisi='$id'");
	if($query){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:disposisi.php?pesan=delet');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:disposisi.php?pesan=gagal_hapus');
						}
	

?>