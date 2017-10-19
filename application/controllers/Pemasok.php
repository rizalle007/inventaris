<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->model('M_pemasok','pemasok');
    }


    //Fungsi index
	function index() {
		$data = array(
			'title'  => 'Pemasok Barang - SIIB CV Indo Grafika',
            'pemasok' => $this->pemasok->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('pemasok/list');
        $this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}


	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $kodepemasok = $this->input->post('kodepemasok');

            $query = $this->db->get_where('tbl_pemasok', array('kodepemasok' => $kodepemasok));
            
            if($query->num_rows() == 0) {
                $this->pemasok->simpan();
                $this->session->set_flashdata('simpan', 'Pemasok Barang berhasil tersimpan ...');
                redirect('pemasok');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Pemasok Barang sudah ada ...');
                redirect('pemasok');                
            }

        } else {
            $data = array(
				'title'      => 'Tambah Pemasok Barang - SIIB CV Indo Grafika',
                'kodeunik'   => $this->pemasok->kodeotomatis()
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('pemasok/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
                $this->pemasok->update();
                $this->session->set_flashdata('update', 'Pemasok Barang berhasil diperbaharui ...');
                redirect('pemasok');        
        } else {
            if ($kodepemasok = $this->uri->segment(3)) {
                    $data = array(
                    'title'  => 'Edit Pemasok Barang - SIIB CV Indo Grafika',
                    'pemasok' => $this->db->get_where('tbl_pemasok', array('kodepemasok' => $kodepemasok))->row_array()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('pemasok/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($kodepemasok = $this->uri->segment(3)) {

            if(!empty($kodepemasok)) {
                $this->db->where('kodepemasok', $kodepemasok);
                $this->db->delete('tbl_pemasok');
            }
            $this->session->set_flashdata('hapus', 'Pemasok Barang berhasil terhapus ...');
            redirect('pemasok');
        } else {
            redirect('kesalahan');
        }
    }

}
