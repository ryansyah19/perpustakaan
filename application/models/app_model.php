<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

  //cek nip dan password dosen
  function auth_guru($username,$password){
    $query=$this->db->query("SELECT * FROM guru WHERE nip='$username' AND password=('$password') LIMIT 1");
    return $query;
  }

  //cek nim dan password mahasiswa
  function auth_siswa($username,$password){
    $query=$this->db->query("SELECT * FROM siswa WHERE nis='$username' AND password=('$password') LIMIT 1");
    return $query;
  }

   //cek nim dan password mahasiswa
  function auth_admin($username,$password){
    $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=('$password') LIMIT 1");
    return $query;
  }
	
	public function view(){
    return $this->db->get('gambar')->result();
  }
  
  // Fungsi untuk melakukan proses upload file
  public function upload(){
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }
  
  // Fungsi untuk menyimpan data ke database
  public function save($data){
    $data = array(
      'judul'=>$this->input->post('input_judul'),
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'nama_file' => $_FILES['input_gambar']['name'],
      'kategori'=>$this->input->post('input_kategori'),
      'pengarang'=>$this->input->post('input_pengarang'),
      'penerbit'=>$this->input->post('input_penerbit'),
      'tahunterbit'=>$this->input->post('input_tahunterbit'),
      'stok'=>$this->input->post('input_stok'),
      'jml_hal'=>$this->input->post('input_jml_hal')

    );
    
    $this->db->insert('gambar', $data);
  }

  function ambil_data (){
  	return $this->db->get('gambar')->result();
  }

  function cari($berdasarkan,$yangdicari){
  	$this->db->from('gambar');

  		switch ($berdasarkan) {
  			case "":
  				$this->db->like('judul', $yangdicari);
  				$this->db->or_like('kategori', $yangdicari);
          $this->db->or_like('penerbit', $yangdicari);
  				break;

  				default:
  				$this->db->like($berdasarkan,$yangdicari);
  		}
  	
  	return $this->db->get();
  }

    function get_data_stok2(){
  $query = $this->db->query("SELECT tgl_pinjam,SUM(denda) AS denda FROM peminjaman GROUP BY tgl_pinjam");

  if($query->num_rows() > 0){
    foreach($query->result() as $data){
        $hasil[] = $data;
    }
    return $hasil;
  }
  }

  function get_data_stok(){
  $query = $this->db->query("SELECT judul,SUM(jumlah) AS jumlah FROM peminjaman GROUP BY judul");

  if($query->num_rows() > 0){
    foreach($query->result() as $data2){
        $hasil[] = $data2;
    }
    return $hasil;
  }
  }
}


