<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('siswa');
		$data['isi'] = $this->db->get('guru');

		$this->load->view('crud/index', $data);
	}

	public function index_guru()
	{
		$data['content'] = $this->db->get('siswa');
		$data['isi'] = $this->db->get('guru');

		$this->load->view('crud/index_guru', $data);
	}

	// Add a new item
	public function add()
	{
		$data['content2'] = $this->db->get('jurusan');
		$data['mapel'] = $this->db->get('mapel');
		
		$this->load->view('crud/add',$data);
	}

	public function add_guru()
	{
		$data['content2'] = $this->db->get('jurusan');
		$data['mapel'] = $this->db->get('mapel');
		
		$this->load->view('crud/add_guru',$data);
	}

	public function action_add()
	{
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'tingkatan' => $this->input->post('tingkatan'),
			'email' => $this->input->post('email'),
			'notelp' => $this->input->post('notelp'),
			'password' => $this->input->post('password')
		 );

		$this->db->insert('siswa', $data);

		redirect('crud/index','refresh');
	}

	public function action_add_guru()
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'mapel' => $this->input->post('mapel'),
			'email' => $this->input->post('email'),
			'notelp' => $this->input->post('notelp'),
			'password' => $this->input->post('password')
		 );

		$this->db->insert('guru', $data);

		redirect('crud/index','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('siswa');
		$data['content2'] = $this->db->get('jurusan');

		$this->load->view('crud/update', $data);
	}

	public function update_guru( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('guru');
		$data['mapel'] = $this->db->get('mapel');

		$this->load->view('crud/update_guru', $data);
	}

	public function update_user( $id = NULL )
	{
		$data['peminjaman'] = $this->db->get('siswa');
		$data['peminjaman2'] = $this->db->get('guru');
		$this->load->view('crud/update_user',$data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jurusan' => $this->input->post('jurusan'),
			'tingkatan' => $this->input->post('tingkatan'),
			'email' => $this->input->post('email'),
			'notelp' => $this->input->post('notelp'),
			'password' => $this->input->post('password')
		 );

		$this->db->where('id', $id);
		$this->db->update('siswa', $data);

		redirect('crud','refresh');
	}

	public function action_update_guru($id= '')
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'mapel' => $this->input->post('mapel'),
			'email' => $this->input->post('email'),
			'notelp' => $this->input->post('notelp'),
			'password' => $this->input->post('password')
		 );

		$this->db->where('id', $id);
		$this->db->update('guru', $data);

		redirect('crud','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('siswa');

		redirect('crud','refresh');
	}

	public function delete_guru( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('guru');

		redirect('crud','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('siswa');

		$this->load->view('crud/index', $data);
	}

	public function read_guru( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('guru');

		$this->load->view('crud/index_guru', $data);
	}

	public function admin(){
		$data['content'] = $this->db->get('admin');

		$this->load->view('crud/admin', $data);
	}

	public function action_update_admin($id= '')
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		 );

		$this->db->where('id', $id);
		$this->db->update('admin', $data);

		redirect('crud','refresh');
	}

	public function denda(){
		$data['content'] = $this->db->get('denda');

		$this->load->view('peminjaman/denda', $data);
	}

	public function action_update_denda($id= '')
	{
		$data = array(
			'denda' => $this->input->post('denda')
		 );

		$this->db->where('id', $id);
		$this->db->update('denda', $data);

		redirect('peminjaman','refresh');
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
