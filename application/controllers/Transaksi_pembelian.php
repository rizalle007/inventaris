<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pembelian extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_pemasok','pemasok');
        $this->load->model('M_barang','barang');
        $this->load->model('M_jenis','jenis');
        $this->load->model('M_satuan','satuan');
        $this->load->model('M_pembelian','pembelian');
    }


    //Fungsi index
	function index() {
		$data = array(
			'title'      => 'Transaksi Pembelian - SIIB CV Indo Grafika',
            'pembelian'  => $this->pembelian->data(),
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('pembelian/list');
        $this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}


    //Fungsi detail
    function detail($kode = 0) {
        if ($nopembelian = $this->uri->segment(3)) {
            $data = array(
                'title'         => 'Detail Transaksi Pembelian - SIIB CV Indo Grafika',
                'pembelian'     => $this->pembelian->joinDetail("where nopembelian = '$kode'")->result_array()
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('pembelian/detail');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');

        } else {
            redirect('kesalahan');
        }
    }


	//Fungsi tambah
	function tambah() {
        $data = array(
            'title'      => 'Tambah Transaksi Pembelian - SIIB CV Indo Grafika',
            'pemasok'    => $this->pemasok->data(),
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('pembelian/tambah');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //Fungsi tambah
    function lanjut() {
        if (isset($_POST['submit'])) {
            $this->pembelian->simpan();
            $this->pembelian->simpan2();
            $this->session->set_flashdata('simpan', 'Transaksi Pembelian berhasil tersimpan ...');
            redirect('transaksi_pembelian');
        } else {
            
            $kodepemasok  = addslashes($this->input->post('kodepemasok'));

            $jmlBarang = $this->input->post('jmlBarang');
            $i = 1; $i <= $jmlBarang; $i++;

            $data = array(
                'title'      => 'Tambah Transaksi Pembelian - SIIB CV Indo Grafika',
                'kodeunik'   => $this->pembelian->kodeauto(),
                'pemasok'    => $this->db->query("SELECT * FROM tbl_pemasok WHERE kodepemasok = '$kodepemasok'")->row(),
                'barang'     => $this->barang->data(),
                'jenis'      => $this->jenis->data(),
                'satuan'     => $this->satuan->data(),
                'jmlBarang'  => $jmlBarang
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('pembelian/tambahlanjutan');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($nopembelian = $this->uri->segment(3)) {
            if(!empty($nopembelian)) {
                $this->db->where('nopembelian', $nopembelian);
                $this->db->delete('tbl_pembelian');
                $this->db->delete('tbl_pembeliandetail');
            }
            $this->session->set_flashdata('hapus', 'Transaksi Pembelian berhasil terhapus ...');
            redirect('transaksi_pembelian');

        } else {
            redirect('kesalahan');
        }
    }

}
