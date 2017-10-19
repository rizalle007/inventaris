<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pemasok extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_pemasok','pemasok');
    }
    
    //fungsi index
    function index() {
       $data = array(
            'title'  => 'Laporan Data Pemasok - SIIB CV Indo Grafika',
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('laporan/vlappemasok');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //fungsi lihat
    function lihat() {
        $pmsk = $this->pemasok->getPemasok();

        $data['title']    = 'Laporan Data Pemasok - SIIB CV Indo Grafika';
        $data['pemasok']  = $this->pemasok->data();
        $data['pmk']      = $pmsk->num_rows();

        $this->load->view('laporan/lappemasok', $data);
    }
 
    //fungsi cetak
    function cetak() {
        $pmsk = $this->pemasok->getpemasok();

        $data['title']    = 'Laporan Data Pemasok - SIIB CV Indo Grafika';
        $data['pemasok']  = $this->pemasok->data();
        $data['pmk']      = $pmsk->num_rows();

        $this->load->view('laporan/lappemasok', $data);
    }
}