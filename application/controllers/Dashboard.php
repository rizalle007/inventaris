<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->model('M_barang','barang');
        $this->load->model('M_pemasok','pemasok');
        $this->load->model('M_pembelian','pembelian');
        $this->load->model('M_retur','retur');
    }

	public function index()	{
		$brg	= $this->barang->getBarang();
		$pms	= $this->pemasok->getPemasok();
		$pmb	= $this->pembelian->getPembelian();
		$rtr	= $this->retur->getRetur();

		$data = array(
			'title'     => 'Dashboard - SIIB CV Indo Grafika',
			'barang'    => $brg->num_rows(),
			'pemasok'   => $pms->num_rows(),
			'pembelian' => $pmb->num_rows(),
			'retur'     => $rtr->num_rows()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('dashboard');
		$this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}
}
