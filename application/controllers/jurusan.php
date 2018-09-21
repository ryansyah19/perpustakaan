<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('jurusan');

		$this->load->view('jurusan/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('jurusan/add');
	}

	public function action_add()
	{
		$data = array(
			'jurusan' => $this->input->post('jurusan')
		 );

		$this->db->insert('jurusan', $data);

		redirect('jurusan/index','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('jurusan');

		$this->load->view('jurusan/update', $data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'jurusan' => $this->input->post('jurusan')
		 );

		$this->db->where('id', $id);
		$this->db->update('jurusan', $data);

		redirect('jurusan','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('jurusan');

		redirect('jurusan','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('jurusan');

		$this->load->view('jurusan/index', $data);
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
