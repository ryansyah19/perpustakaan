<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('App_model');
	}
	
		public function index()
	{
		$data['peminjaman'] = $this->db->get('peminjaman');

		$this->load->view('peminjaman/daftar', $data);
	}

	function daftar_pinjam(){
		$data['peminjaman'] = $this->db->get('peminjaman');
		$this->load->view('peminjaman/daftar_pinjam',$data);
	}


}

/* End of file peminjaman.php */
/* Location: ./application/controllers/peminjaman.php */