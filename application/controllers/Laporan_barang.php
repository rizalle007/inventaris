<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barang extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_barang','barang');
    }
    
    //fungsi index
    function index() {
       $data = array(
            'title'  => 'Laporan Data Barang - SIIB CV Indo Grafika',
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('laporan/vlapbarang');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //fungsi lihat
    function lihat() {
        $brng = $this->barang->getBarang();

        $data['title']    = 'Laporan Data Barang - SIIB CV Indo Grafika';
        $data['barang']   = $this->barang->data();
        $data['brg']      = $brng->num_rows();

        $this->load->view('laporan/lapbarang', $data);
    }
 
    //fungsi cetak
    function cetak() {
        $brng = $this->barang->getBarang();

        $data['title']    = 'Laporan Data Barang - SIIB CV Indo Grafika';
        $data['barang']   = $this->barang->data();
        $data['brg']      = $brng->num_rows();

        $this->load->view('laporan/lapbarang', $data);
    }
}