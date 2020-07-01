<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/pembelian');
		$this->load->view('footer');

	}
}
