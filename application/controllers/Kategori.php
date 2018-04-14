<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('kategori/main');
		$this->load->view('template/footer');
	}

}

/* End of file Kategori */
/* Location: ./application/controllers/Kategori */