<?php
	include('conn.php');
	$namaadmin=$_POST['nama'];
	$username=$_POST['user'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$level=$_POST['level'];	
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			$folder='admin/';
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, $folder.$nama);
					$query = mysqli_query($conn,"insert into user(nama_user,username,password,email,Level,foto) values ('$namaadmin', '$username', '$password','$email','$level','$nama')");
					if($query && $input){
						echo 'FILE BERHASIL DI UPLOAD';
						header('location:admin.php');
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						header('location:admin.php');
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
					header('location:admin.php');
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
				header('location:admin.php');
			}
			

?>