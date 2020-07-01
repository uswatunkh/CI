<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Pembelian extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/laporan_pembelian');
		$this->load->view('footer');

	}
}

