<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Penjualan extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('master_data/laporan_penjualan');
		$this->load->view('footer');

	}
}
