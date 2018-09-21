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
		$data['isi'] = $this->db->get('guru');

		$this->load->view('crud/index', $data);
	}

	// Add a new item
	public function add()
	{
		$data['mapel'] = $this->db->get('mapel');
		$this->load->view('crud/add',$data);
	}

	public function action_add()
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'mapel' => $this->input->post('mapel'),
			'password' => $this->input->post('password')
		 );

		$this->db->insert('guru', $data);

		redirect('crud/index','refresh');
	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('guru');
		$data['mapel'] = $this->db->get('mapel');

		$this->load->view('crud/update', $data);
	}

	public function action_update($id= '')
	{
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'mapel' => $this->input->post('mapel'),
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
		$this->db->delete('guru');

		redirect('crud','refresh');
	}

	//Read one item
	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['isi'] = $this->db->get('guru');

		$this->load->view('crud/index', $data);
	}
}

/* End of file crud.php */
/* Location: ./application/controllers/crud.php */
