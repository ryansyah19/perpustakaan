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
    $this->db->where('id', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/view', $data);
  }

  public function delete( $id = NULL )
  {
    $this->db->where('id', $id);
    $this->db->delete('gambar');

    redirect('gambar','refresh');
  }

  public function preview( $id = NULL )
  {
    $this->db->where('id', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview', $data);
  }

  public function preview_user( $id = NULL )
  {
    $this->db->where('id', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview_user', $data);
  }

  public function preview_guest( $id = NULL )
  {
    $this->db->where('id', $id);
    $data['gambar'] = $this->App_model->view('gambar');

    $this->load->view('gambar/preview_guest', $data);
  }

  public function harus()
  {
    $this->load->view('harus.php');
  }

}