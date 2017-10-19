<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesalahan extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
    }

	public function index()	{
		$data = array(
			'title'     => '404 Halaman Tidak Ditemukan - SIIB CV Indo Grafika',
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('errors/404');
		$this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}
}
