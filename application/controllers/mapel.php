<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

	}

	// List all your items
	public function index()
	{
		$data['isi'] = $this->db->get('mapel');

		$this->load->view('mapel/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('mapel/add');
	}

	public function action_add()
	{
		$data = array(
			'mapel' => $this->input->post('mapel')
		 );

		$this->db->insert('mapel', $data);

		redirect('mapel/index','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('mapel');

		$this->load->view('mapel/update', $data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'mapel' => $this->input->post('mapel')
		 );

		$this->db->where('id', $id);
		$this->db->update('mapel', $data);

		redirect('mapel','refresh');
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('mapel');

		redirect('mapel','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('mapel');

		$this->load->view('mapel/index', $data);
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
