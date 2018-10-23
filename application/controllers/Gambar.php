<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gambar extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('App_model');
  }
  
  public function index(){

    $data['gambar'] = $this->App_model->view();
    $this->load->view('gambar/view', $data);
  }
  
  public function tambah(){
    $data = array();
    
    if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
      // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
      $upload = $this->App_model->upload();
      
      if($upload['result'] == "success"){ // Jika proses upload sukses
         // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
        $this->App_model->save($upload);
        
        redirect('gambar'); // Redirect kembali ke halaman awal / halaman view data
      }else{ // Jika proses upload gagal
        $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
      }
    }
    
    $this->load->view('gambar/form', $data);
  }

  public function read( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/view_detail',$data);
  }

  //Update one item
  public function update( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->db->get('gambar');
    $data['content'] = $this->db->get('kategori');

    $this->load->view('gambar/update', $data);
  }

  public function action_update($id= '')
  {

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

    $data2 = array(
      'judul'=>$this->input->post('input_judul'),
      'deskripsi'=>$this->input->post('input_deskripsi'),
      'kategori'=>$this->input->post('input_kategori'),
      'pengarang'=>$this->input->post('input_pengarang'),
      'penerbit'=>$this->input->post('input_penerbit'),
      'tahunterbit'=>$this->input->post('input_tahunterbit'),
      'stok'=>$this->input->post('input_stok'),
      'jml_hal'=>$this->input->post('input_jml_hal')
     );

    if($_POST['submit']){
      $config['upload_path'] = './images/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size']  = '2048';
      $config['remove_space'] = TRUE;
      $this->load->library('upload',$config);
      if($this->upload->do_upload('input_gambar')){
      }
      else{
        $data['nama_file']=$this->upload->data('file_name');
      }

  
    if(!$data['nama_file']==''){
      $this->db->where('id_buku', $id);
      $this->db->update('gambar', $data);
      redirect('gambar','refresh');
    }
    else{
      $this->db->where('id_buku', $id);
      $this->db->update('gambar', $data2);
      redirect('gambar','refresh');
    }
  }
  }

  public function delete( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $this->db->delete('gambar');

    redirect('gambar','refresh');
  }

  public function preview( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview', $data);
  }

  public function preview_user( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview_user', $data);
  }

  public function peminjaman($id = NULL )
  {
      $this->db->where('id_buku', $id);
      $data['gambar'] = $this->App_model->view('gambar');
      $this->load->view('peminjaman/peminjaman',$data);
  }

  public function preview_guest( $id = NULL )
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview_guest', $data);
  }

  public function harus($id = NULL)
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');
    $this->load->view('harus',$data);
  }

  public function login_pinjam($id = NULL)
  {
    $this->db->where('id_buku', $id);
    $data['gambar'] = $this->App_model->view('gambar');
    $this->load->view('login_pinjam',$data);
  }

  function action_add()
  {    
    $data = array(
      'id_pinjam' => $this->input->post('id_buku'),
      'id_buku' => $this->input->post('id_buku'),
      'judul' => $this->input->post('judul'),
      'nama' => $this->input->post('nama'),
      'kelas' => $this->input->post('kelas'),
      'waktu' => $this->input->post('waktu'),
      'id_anggota' => $this->input->post('id_anggota'),
      'tgl_pinjam' => $this->input->post('pinjam'),
      'tgl_kembali' => $this->input->post('kembali'),
      'sebenarnya' => $this->input->post('sebenarnya'),
      'denda' => $this->input->post('denda'),
      'jumlah'=> $this->input->post('jumlah')
     );
    $this->db->insert('peminjaman', $data);
    $id_buku=$data['id_buku'];
    $data=$this->db->query("UPDATE gambar SET stok = stok-1 WHERE id_buku='$id_buku'");
    redirect('welcome/daftar_pinjam','refresh');
  }

  function action_add_admin()
  {    
    $data = array(
      'id_pinjam' => $this->input->post('id_buku'),
      'id_buku' => $this->input->post('id_buku'),
      'judul' => $this->input->post('judul'),
      'nama' => $this->input->post('nama'),
      'kelas' => $this->input->post('kelas'),
      'waktu' => $this->input->post('waktu'),
      'id_anggota' => $this->input->post('id_anggota'),
      'tgl_pinjam' => $this->input->post('pinjam'),
      'tgl_kembali' => $this->input->post('kembali'),
      'sebenarnya' => $this->input->post('sebenarnya'),
      'denda' => $this->input->post('denda'),
      'jumlah'=> $this->input->post('jumlah')
     );
    $this->db->insert('peminjaman', $data);
    $id_buku=$data['id_buku'];
    $data=$this->db->query("UPDATE gambar SET stok = stok-1 WHERE id_buku='$id_buku'");
    redirect('peminjaman/','refresh');
  }

  public function delete_pinjam( $id_anggota = NULL )
  {
    $this->db->where('id_anggota', $id_anggota);
    $data = $this->db->query("SELECT id_pinjam FROM peminjaman WHERE id_anggota='$id_anggota'");
           foreach ($data->result_array() as $key) {
                $key['id_pinjam'];
           }
    $id_buku=$key['id_pinjam'];
    $data2=$this->db->query("UPDATE gambar SET stok = stok+1 WHERE id_buku='$id_buku'");
    $this->db->where('id_anggota', $id_anggota);
    $this->db->delete('peminjaman');

    redirect('peminjaman/',$data2);
    
    
  }



}