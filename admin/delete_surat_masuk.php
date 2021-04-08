<?php
	 include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	$id=$_GET['id'];
	$query=mysql_query("delete from surat_masuk where no_agenda='$id'");
	//mysql_query("delete from disposisi where id_surat_masuk='$id'");	
	if($query){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:suratmasuk.php?pesan=delet');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:suratmasuk.php?pesan=gagal_hapus');
						}
	//header('location:suratmasuk.php');

?>