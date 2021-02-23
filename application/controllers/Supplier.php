<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index()
	{
		$data['title'] = 'POS-Supplier';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('supplier');
		$this->load->view('templates/footer');
	}

}
