<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$username'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
	if($data['password'])
	{
	$_SESSION['id']=$data['id'];
	$_SESSION['level']=$data['level'];
	$_SESSION['username']=$data['username'];
	if ($_SESSION['level']=="admin"){
		echo "<h2>Login Suskes</h2>";
			header('location:../indexadmin.php');
	}
	else if ($_SESSION['level']=="user"){
		echo "<h2>Login Suskes</h2>";
			header('location:../indexuser.php');
	}
	}	
		else echo "<h2>Login Gagal</h2>";
			echo "<a href='../index.php'>Kembali ke Homepage</a><br>";
?>