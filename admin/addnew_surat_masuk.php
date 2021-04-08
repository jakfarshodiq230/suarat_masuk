<?php
	include('conn.php');
	include"../koneksi/koneksi.php"; //untuk memanggil koneksi
	
	$no_prim=$_POST['no_penerimaan'];
	$tanggal = date("Y-m-d H:i:s");
	$no_sur=$_POST['no_surat'];
	$hal=$_POST['hal'];
	$almt_peng=$_POST['almt_pengirim'];
	$tgl_sur=$_POST['tgl'];
	$tgkt_krhsian=$_POST['tngkt_kerahasian'];
	$kka=$_POST['kka'];
	
	
	
			$ekstensi_diperbolehkan	= array('pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			$folder='surat_masuk/';
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, $folder.$nama);					
					$query1 = mysql_query("insert into surat_masuk (no_agenda, no_surat, hal, almt_pengirim, tgl_surat, tgl_penerimaan, tgkt_kerahasiaan, kka, file) values ('$no_prim','$no_sur', '$hal','$almt_peng','$tgl_sur','$tanggal', '$tgkt_krhsian','$kka','$nama')");
					$query2 = mysql_query("INSERT INTO disposisi(`no_agenda`,status) VALUE ('$no_prim','BELUM DISPOSISI')");
						if($query1== true && $query2 == true){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:suratmasuk.php?pesan=sukses');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:suratmasuk.php');
						}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
					header('location:suratmasuk.php?pesan=info');
				}
			}else{
				echo 'File Tidak Dibolehkan';
					header('location:suratmasuk.php?pesan=gagal');
			}
		    
		

	

?>