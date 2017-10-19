<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_jenis','jenis');
        $this->load->model('M_satuan','satuan');
        $this->load->model('M_rak','rak');
        $this->load->model('M_barang','barang');
    }


    //Fungsi index
	function index() {
		$data = array(
			'title'      => 'Barang / Produk - SIIB CV Indo Grafika',
            'barang'     => $this->barang->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('barang/list');
        $this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}


    //Fungsi detail
    function detail() {
        if ($kodebarang = $this->uri->segment(3)) {
            $data = array(
                'title'    => 'Detail Barang / Produk - SIIB CV Indo Grafika',
                'barang'     => $this->db->get_where('tbl_barang', array('kodebarang' => $kodebarang))->row_array()
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('barang/detail');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');
        } else {
            redirect('kesalahan');
        }
    }



	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $kodebarang = $this->input->post('kodebarang');
            $barcode    = $this->input->post('barcode');

            $query = $this->db->get_where('tbl_barang', array('kodebarang' => $kodebarang, 'barcode' => $barcode));
            if($query->num_rows() == 0) {
                $this->barang->simpan();
                $this->session->set_flashdata('simpan', 'Barang berhasil tersimpan ...');
                redirect('barang');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Barang sudah ada ...');
                redirect('barang');                
            }


        } else {
            $data = array(
				'title'      => 'Tambah Barang / Produk - SIIB CV Indo Grafika',
                'kodeunik'   => $this->barang->kodeotomatis(),
                'jenis'      => $this->jenis->data(),
                'satuan'     => $this->satuan->data(),
                'rak'        => $this->rak->data()
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('barang/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
            $barcode    = $this->input->post('barcode');

            $query = $this->db->get_where('tbl_barang', array('barcode' => $barcode));
            if($query->num_rows() == 0) {
                $this->barang->update();
                $this->session->set_flashdata('update', 'Barang berhasil diperbaharui ...');
                redirect('barang');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Barang sudah ada ...');
                redirect('barang');
            }
        
        } else {
            if ($kodebarang = $this->uri->segment(3)) {
                $data = array(
                    'title'      => 'Edit Barang / Produk - SIIB CV Indo Grafika',
                    'barang'     => $this->db->get_where('tbl_barang', array('kodebarang' => $kodebarang))->row_array(),
                    'jenis'      => $this->jenis->data(),
                    'satuan'     => $this->satuan->data(),
                    'rak'        => $this->rak->data()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('barang/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($kodebarang = $this->uri->segment(3)) {
            if(!empty($kodebarang)) {
                $this->db->where('kodebarang', $kodebarang);
                $this->db->delete('tbl_barang');
            }
            $this->session->set_flashdata('hapus', 'Barang berhasil terhapus ...');
            redirect('barang');
        } else {
            redirect('kesalahan');
        }
    }

}
