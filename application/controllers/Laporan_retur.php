<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_retur extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_retur','retur');
    }
    
    //fungsi index
    function index() {
       $data = array(
            'title'  => 'Laporan Data Retur - SIIB CV Indo Grafika',
            'retur'  => $this->retur->data(),
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('laporan/vlapretur');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //Fungsi lihat
    function lihat($kode = 0) {
        if ($noretur = $this->uri->segment(3)) {
            $data = array(
                'title'     => 'Laporan Data Retur - SIIB CV Indo Grafika',
                'retur'     => $this->retur->joinDetail("where noretur = '$kode'")->result_array()
            );
            $this->load->view('laporan/lapretur', $data);

        } else {
            redirect('kesalahan');
        }
    }


    //Fungsi cetak
    function cetak($kode = 0) {
        if ($noretur = $this->uri->segment(3)) {
            $data = array(
                'title'     => 'Laporan Data retur - SIIB CV Indo Grafika',
                'retur'     => $this->retur->joinDetail("where noretur = '$kode'")->result_array()
            );
            $this->load->view('laporan/lapretur', $data);

        } else {
            redirect('kesalahan');
        }
    }
}