<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('ci');

		$this->load->view('crud/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('crud/add');
	}

	public function action_add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'status' => $this->input->post('status'),
			'jurusan' => $this->input->post('jurusan'),
			'kelas' => $this->input->post('kelas'),
			'noinduk' => $this->input->post('noinduk'),
			'notelp' => $this->input->post('notelp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')
		 );

		$this->db->insert('ci', $data);

		redirect('crud','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('ci');

		$this->load->view('crud/update', $data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'status' => $this->input->post('status'),
			'jurusan' => $this->input->post('jurusan'),
			'kelas' => $this->input->post('kelas'),
			'noinduk' => $this->input->post('noinduk'),
			'notelp' => $this->input->post('notelp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => $this->input->post('level')
		 );

		$this->db->where('id', $id);
		$this->db->update('ci', $data);

		redirect('crud','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('ci');

		redirect('crud','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('ci');

		$this->load->view('crud/index', $data);
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
