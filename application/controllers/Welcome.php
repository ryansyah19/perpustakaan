<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('app_model');
		$this->load->library('session');
		

	}
	 
	public function index()
	{
		$data['gambar'] = $this->db->get('gambar');
		$this->load->view('welcome_message',$data);
	}

	public function ceklogin()
	{
		if(isset($_POST['login'])){
			$user = $this->input->post('username',true);
			$pass = $this->input->post('password',true);
			$cek = $this->app_model->proseslogin($user,$pass);	
			$hasil = count($cek);
			if ($hasil > 0) {
				$pelogin = $this->db->get_where('ci',array('username' => $user, 'password' => $pass))->row();
				if($pelogin->level == 'admin'){
					redirect('welcome/admin');
				}
				elseif($pelogin->level == 'user'){
					$data=array();
					$data['username']=$cek->username;
					$data['password']=$cek->password;
					$this->session->set_userdata($data);
					redirect('welcome/beranda');
				}
				//redirect('welcome/beranda','refresh');
			} 
			else {
				echo 'login gagal';

				redirect('welcome/index','refresh');
			}
					
		}
	}

	public function beranda()
	{
		$data['gambar'] = $this->db->get('gambar');
		$data['contact']=$this->db->get('contact');
		$this->load->view('beranda',$data);
	}

	public function admin()
	{
		$data['gambar'] = $this->db->get('gambar');
		$data['contact']=$this->db->get('contact');
		$this->load->view('admin',$data);

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index','refresh');
	}

	public function login(){
		$this->load->view('login');
	}

	// Add a new item
	public function add()
	{
		$this->load->view('welcome/add');
	}

	public function action_add()
	{
		$data = array(

			'username'=> $this->session->userdata('username'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan')
		 );
		
		$this->db->insert('contact', $data);

		redirect('welcome/beranda','refresh');
	}

}
