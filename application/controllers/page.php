<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('App_model');
		$this->load->helper('form');

	}
	 
	public function index()
	{
		$data['gambar']=$this->App_model->ambil_data('gambar')->result();
		$this->load->view('gambar', $data);
	}

	function cari(){
		$data['cariberdasarkan']=$this->input->post("cariberdasarkan");
		$data['yangdicari']=$this->input->post("yangdicari");

		$data['gambar']=$this->app_model->cari($data['cariberdasarkan'],$data['yangdicari']);
		$data["jumlah"]=count($data['gambar']);
		$this->load->view('beranda',$data);
	}

}
