<h1>Data Gambar</h1><hr>
<a href="<?php echo base_url("index.php/gambar/tambah"); ?>">Tambah Gambar</a><br><br>
<table border="1" cellpadding="8">
<tr>
  <td>Kode</td>
  <td>Gambar</td>
  <td>Judul</td>
  <td>Deskripsi</td>
  <td>Kategori</td>
  <td>Nama File</td>
  <td>Pengarang</td>
  <td>Penerbit</td>
  <td>Tahun Terbit</td>
  <td>Stok</td>
  <td>Jumlah Halaman</td>
  <td>Action</td>
</tr>
<?php
if( ! empty($gambar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($gambar as $data){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    echo "<td><img src='".base_url("images/".$data->nama_file)."' width='100' height='100'></td>";
    echo "<td>".$data->deskripsi."</td>";
    echo "<td>".$data->kategori."</td>";
    echo "<td>".$data->nama_file."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?>
</table>