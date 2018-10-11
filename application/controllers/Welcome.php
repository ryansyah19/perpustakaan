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
		function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_guru=$this->app_model->auth_guru($username,$password);
        $cek_siswa=$this->app_model->auth_siswa($username,$password);
        $cek_admin=$this->app_model->auth_admin($username,$password);

        if($cek_guru->num_rows() > 0){ //jika login sebagai dosen
				$data=$cek_guru->row_array();
        		$this->session->set_userdata('masuk',TRUE);
	            $this->session->set_userdata('akses','1');
	            $this->session->set_userdata('ses_id',$data['nip']);
	            $this->session->set_userdata('ses_nama',$data['nama']);
	            redirect('welcome/beranda');
        }

        elseif($cek_siswa->num_rows() > 0){ //jika login sebagai mahasiswa
					if($cek_siswa->num_rows() > 0){
						$data=$cek_siswa->row_array();
    					$this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('akses','2');
						$this->session->set_userdata('ses_id',$data['nis']);
						$this->session->set_userdata('ses_nama',$data['nama']);
						redirect('welcome/beranda');
					}else{  // jika username dan password tidak ditemukan atau salah
						$url=base_url();
						echo $this->session->set_flashdata('msg','Username Atau Password Salah');
						redirect($url);
					}
        }

         elseif($cek_admin->num_rows() > 0){ //jika login sebagai admin
					if($cek_admin->num_rows() > 0){
							$data=$cek_admin->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['username']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('welcome/admin');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }
        else {
				echo "<div style='font-size:100px;text-align:center;background:#011627;width:100%;height:100%;margin:0;padding-top:20%;font-weight:900;color:#e40043;font-family: cursive;'> LOGIN GAGAL !!</div>";
				redirect('welcome/index','refresh');
			}

    }

    function auth_pinjam($id = null){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_guru=$this->app_model->auth_guru($username,$password);
        $cek_siswa=$this->app_model->auth_siswa($username,$password);
        $cek_admin=$this->app_model->auth_admin($username,$password);

        if($cek_guru->num_rows() > 0){ //jika login sebagai dosen
				$data=$cek_guru->row_array();
        		$this->session->set_userdata('masuk',TRUE);
	            $this->session->set_userdata('akses','1');
	            $this->session->set_userdata('ses_id',$data['nip']);
	            $this->session->set_userdata('ses_nama',$data['nama']);
	            $this->db->where('id_buku',$id);
				$data['gambar'] = $this->app_model->view('gambar');
				$this->load->view('gambar/preview_user', $data);
        }

        elseif($cek_siswa->num_rows() > 0){ //jika login sebagai mahasiswa
					if($cek_siswa->num_rows() > 0){
						$data=$cek_siswa->row_array();
    					$this->session->set_userdata('masuk',TRUE);
						$this->session->set_userdata('akses','2');
						$this->session->set_userdata('ses_id',$data['nis']);
						$this->session->set_userdata('ses_nama',$data['nama']);
						$this->db->where('id_buku',$id);
						$data['gambar'] = $this->app_model->view('gambar');
						$this->load->view('gambar/preview_user', $data);
						
					}else{  // jika username dan password tidak ditemukan atau salah
						$url=base_url();
						echo $this->session->set_flashdata('msg','Username Atau Password Salah');
						redirect($url);
					}
        }

         elseif($cek_admin->num_rows() > 0){ //jika login sebagai admin
					if($cek_admin->num_rows() > 0){
							$data=$cek_admin->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['username']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							$this->db->where('id_buku',$id);
							$data['gambar'] = $this->app_model->view('gambar');
						$this->load->view('gambar/preview_user', $data);
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }
        else {
				echo "<div style='font-size:100px;text-align:center;background:#011627;width:100%;height:100%;margin:0;padding-top:20%;font-weight:900;color:#e40043;font-family: cursive;'> LOGIN GAGAL !!</div>";
				redirect('welcome/index','refresh');
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
			'nis'=> $this->session->userdata('ses_id'),
			'email' => $this->input->post('email'),
			'pesan' => $this->input->post('pesan')
		 );
		
		$this->db->insert('contact', $data);

		redirect('welcome/beranda','refresh');
	}

	public function contact_admin()
	{
		$data['contact'] = $this->db->get('contact');

		$this->load->view('contact_admin', $data);
	}

	public function delete_contact( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('contact');

		redirect('welcome/contact_admin','refresh');
	}

	public function about(){
		$this->load->view('about');
	}

	public function testimoni(){
		$this->load->view('testimoni');
	}

	public function contact(){
		$this->load->view('contact');
	}

	public function about_user(){
		$this->load->view('about_user');
	}

	public function testimoni_user(){
		$this->load->view('testimoni_user');
	}

	public function contact_user(){
		$this->load->view('contact_user');
	}
}