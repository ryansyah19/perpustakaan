<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class error extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		

	}
	 
	public function index()
	{
		$this->load->view('error404.php');
	}

}
