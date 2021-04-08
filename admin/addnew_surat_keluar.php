<?php
	include('conn.php');
	
	$no_prim=$_POST['no_penerimaan'];	
	$no_sur=$_POST['no_surat'];
	$hal=$_POST['hal'];
	$almt_peng=$_POST['almt_tujuan'];
	$tgl_sur=$_POST['tgl'];
	$tgkt_krhsian=$_POST['tngkt_kerahasian'];
	$kka=$_POST['kka'];
			$ekstensi_diperbolehkan	= array('pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			$folder='surat_keluar/';
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, $folder.$nama);
					$query = mysqli_query($conn,"insert into surat_keluar (no_agenda, no_surat, hal, almt_tujuan, tgl_surat, tgkt_kerahasiaan, kka, file) 
						values ('$no_prim', '$no_sur', '$hal','$almt_peng','$tgl_sur','$tgkt_krhsian','$kka','$nama')");
					if($query){
						
							echo 'FILE BERHASIL DI UPLOAD';
							header('location:suratkeluar.php?pesan=sukses');
						}else{
							echo 'GAGAL MENGUPLOAD ';
							header('location:suratkeluar.php?pesan=gaga_simpan');
						}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
					header('location:suratkeluar.php?pesan=info');
				}
			}else{
				echo 'File Tidak Dibolehkan';
					header('location:suratkeluar.php?pesan=gagal');
			}

?>