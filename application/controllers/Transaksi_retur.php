<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_retur extends CI_Controller {

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
        $this->load->model('M_retur','retur');
    }


    //Fungsi index
    function index() {
        $data = array(
            'title'  => 'Transaksi Retur - SIIB CV Indo Grafika',
            'retur'  => $this->retur->data(),
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('retur/list');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //Fungsi detail
    function detail($kode = 0) {
        if ($noretur = $this->uri->segment(3)) {
            $data = array(
                'title'     => 'Detail Transaksi Retur - SIIB CV Indo Grafika',
                'retur'     => $this->retur->joinDetail("where noretur = '$kode'")->result_array()
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('retur/detail');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');

        } else {
            redirect('kesalahan');
        }
    }


    //Fungsi tambah
    function tambah() {
        $data = array(
            'title'        => 'Tambah Transaksi Retur - SIIB CV Indo Grafika',
            'pembelian'    => $this->pembelian->data(),
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('retur/tambah');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }


    //Fungsi tambah
    function lanjut() {
        if (isset($_POST['submit'])) {
            $this->retur->simpan();
            $this->retur->simpan2();
            $this->session->set_flashdata('simpan', 'Transaksi Retur berhasil tersimpan ...');
            redirect('transaksi_retur');
        } else {
            
            $nopembelian      = addslashes($this->input->post('nopembelian'));
   
            $jmlBarang = $this->input->post('jmlBarang');
            $i = 1; $i <= $jmlBarang; $i++;

            $data = array(
                'title'      => 'Tambah Transaksi retur - SIIB CV Indo Grafika',
                'kodeunik'   => $this->retur->kodeauto(),
                'pembelian'  => $this->db->query("SELECT * FROM tbl_pembelian WHERE nopembelian = '$nopembelian'")->row(),
                'barang'     => $this->pembelian->pembelianJoindetail(),
                'jmlBarang'  => $jmlBarang
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('retur/tambahlanjutan');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($noretur = $this->uri->segment(3)) {
            if(!empty($noretur)) {
                $this->db->where('noretur', $noretur);
                $this->db->delete('tbl_retur');
                $this->db->delete('tbl_returdetail');
            }
            $this->session->set_flashdata('hapus', 'Transaksi Retur berhasil terhapus ...');
            redirect('transaksi_retur');

        } else {
            redirect('kesalahan');
        }
    }

}
