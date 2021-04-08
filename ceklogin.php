<?php
session_start();
$a = @$_REQUEST['user'];
$b = @$_REQUEST['pass'];

include "koneksi/koneksi.php";
$sql = $koneksi->query("select * from user WHERE username ='$a' and password ='$b' ");
if ($ketemu = $sql->fetch_assoc()) {
	$kt = $ketemu['Level']; //p g
	if ($kt == "Admin" || $kt == "admin") {
		$login = $a;
		if (!isset($_SESSION['user'])) {
			$_SESSION['user'] = $login;
		}
		echo  "<meta http-equiv='refresh' content='0; url= admin/home.php'>";
		exit();
	} else if ($kt == "User" || $kt == "user") {
		$login = $a;
		if (!isset($_SESSION['user'])) {
			$_SESSION['user'] = $login;
		}
		echo  "<meta http-equiv='refresh' content='0; url= user/index.php'>";
		exit();
	}
	echo "<script>alert('Hubungi Admin Untuk Konfirmasi Akun Anda ');
		javascript:history.go(-1)</script>";
	exit();
} else {
	echo "<script>alert('Anda Belum terdaftar, silakan Daftar Dengan Admin');
		javascript:history.go(-1)</script>";
	echo  "<meta http-equiv='refresh' content='0; url=login.php'>";
	exit();
}
