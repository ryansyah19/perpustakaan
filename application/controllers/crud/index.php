<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman CRUD</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="<?php echo base_url(); ?>crud/add">Create</a>
	<table border="2">
		<tr>
			<td>ID :</td>
			<td>Nama :</td>
			<td>Status :</td>
			<td>Jurusan :</td>
			<td>Kelas :</td>
			<td>No Induk:</td>
			<td>No Telepon:</td>
			<td>Action</td>
		</tr>
		<?php foreach ($content->result() as $key): ?>
			<tr>
				<td><?php echo $key->id ?></td>
				<td><?php echo $key->nama ?></td>
				<td><?php echo $key->status ?></td>
				<td><?php echo $key->jurusan ?></td>
				<td><?php echo $key->kelas ?></td>
				<td><?php echo $key->noinduk ?></td>
				<td><?php echo $key->notelp ?></td>
				<td>
					<a href="<?php echo base_url() ?>crud/read/<?php echo $key->id ?>">Detail</a>
					<a href="<?php echo base_url() ?>crud/update/<?php echo $key->id ?>">Edit</a>
					<a href="<?php echo base_url() ?>crud/delete/<?php echo $key->id ?>">Delete</a>
				</td>
			</tr>	
		<?php endforeach ?>	
	</table>
</body>
</html>