<?php
	 	
	$id=$_GET['id'];
	$disposisi=$_POST['disposisi'];
	$tgl_tindakan=$_POST['tgl_tindakan'];
	$diteruskan=$_POST['diteruskan'];
	
	include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	//$data=mysql_query("SELECT IF(isidisposisi= ' ','SUDAH DISPOSISI', 'BELUM DISPOSISI') AS status FROM disposisi");
	//$row = mysql_fetch_array($data);
	//$status=$row['status'];
	$query=mysql_query("UPDATE disposisi SET isidisposisi = '$disposisi',tgl_penyelesaian = '$tgl_tindakan', diteruskan = '$diteruskan' ,status='SUDAH DISPOSISI' WHERE kode_disposisi = '$id'");
			if($query){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:disposisi.php?pesan=disposisi');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:disposisi.php?pesan=gagal_disposisi');
						}
?>