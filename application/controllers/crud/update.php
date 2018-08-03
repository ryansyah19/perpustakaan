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
	<?php foreach ($content->result() as $key): ?>
		<form action="<?php echo base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post">
			<input type="text" name="nama" placeholder="Masukkan Nama Anda" value="<?php echo $key->nama ?>"><br>
			<select name="status" placeholder="Masukkan Status Anda" value="<?php echo $key->status ?>">
			  <option value="Siswa">Siswa</option>
			  <option value="Guru">Guru</option>
			</select><br>
			<input type="text" name="jurusan" placeholder="Masukkan Jurusan Anda" value="<?php echo $key->jurusan ?>"><br>			
			<select name="kelas" placeholder="Masukkan kelas Anda" value="<?php echo $key->kelas ?>">
			  <option value="X">X</option>
			  <option value="XI">XI</option>
			  <option value="XII">XII</option>
			</select><br>
			<input type="text" name="noinduk" placeholder="Masukkan No Induk / No Guru Anda" value="<?php echo $key->noinduk ?>"><br>
			<input type="text" name="notelp" placeholder="Masukkan No Telepon Anda" value="<?php echo $key->notelp ?>"><br>
			<input type="submit" value="Save">
		</form>
	<?php endforeach ?>
</body>
</html>
