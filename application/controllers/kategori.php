<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('kategori');

		$this->load->view('kategori/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('kategori/add');
	}

	public function action_add()
	{
		$data = array(
			'kategori' => $this->input->post('kategori')
		 );

		$this->db->insert('kategori', $data);

		redirect('kategori/index','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('kategori');

		$this->load->view('kategori/update', $data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'kategori' => $this->input->post('kategori')
		 );

		$this->db->where('id', $id);
		$this->db->update('kategori', $data);

		redirect('kategori','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori');

		redirect('kategori','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('kategori');

		$this->load->view('kategori/index', $data);
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
