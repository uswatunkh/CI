<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/penjualan');
		$this->load->view('footer');

	}
}
