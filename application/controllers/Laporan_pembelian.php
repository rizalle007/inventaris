<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pembelian extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_pembelian','pembelian');
    }
    
    //fungsi index
    function index() {
       $data = array(
            'title'      => 'Laporan Data Pembelian - SIIB CV Indo Grafika',
            'pembelian'  => $this->pembelian->data(),
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('laporan/vlappembelian');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //Fungsi lihat
    function lihat($kode = 0) {
        if ($nopembelian = $this->uri->segment(3)) {
            $data = array(
                'title'         => 'Laporan Data Pembelian - SIIB CV Indo Grafika',
                'pembelian'     => $this->pembelian->joinDetail("where nopembelian = '$kode'")->result_array()
            );
            $this->load->view('laporan/lappembelian', $data);

        } else {
            redirect('kesalahan');
        }
    }


    //Fungsi cetak
    function cetak($kode = 0) {
        if ($nopembelian = $this->uri->segment(3)) {
            $data = array(
                'title'         => 'Laporan Data Pembelian - SIIB CV Indo Grafika',
                'pembelian'     => $this->pembelian->joinDetail("where nopembelian = '$kode'")->result_array()
            );
            $this->load->view('laporan/lappembelian', $data);

        } else {
            redirect('kesalahan');
        }
    }
}