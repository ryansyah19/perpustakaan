<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	public function index()
	{
		$this->load->view('welcome_message');
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
		$this->load->view('beranda');
	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index','refresh');
	}
}
