<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Input Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
<h2>Input Data</h2>
	<form action="<?php echo base_url(); ?>crud/action_add" method="post">
		<input type="text" name="nama" placeholder="Masukkan Nama"><br>
		<select name="status">
		  <option value="Empty">-----</option>
		  <option value="Siswa">Siswa</option>
		  <option value="Guru">Guru</option>
		</select><br>
		<input type="text" name="jurusan" placeholder="Masukkan Jurusan / Mapel"><br>
		<select name="kelas">
		  <option value="Empty">-----</option>
		  <option value="X">X</option>
		  <option value="XI">XI</option>
		  <option value="XII">XII</option>
		</select><br>
		<input type="text" name="noinduk" placeholder="Masukkan No Induk / No Guru"><br>
		<input type="text" name="notelp" placeholder="Masukkan No Telepon"><br>
		<input type="text" name="username" placeholder="Masukkan username"><br>
		<input type="text" name="password" placeholder="Masukkan password"><br>
		<input type="text" name="level" placeholder="Masukkan level"><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>