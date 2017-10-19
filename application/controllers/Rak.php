<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rak extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->model('M_rak','rak');
    }


    //Fungsi index
	function index()	{
		$data = array(
			'title'  => 'Rak Barang - SIIB CV Indo Grafika',
            'rak' => $this->rak->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('rak/list');
        $this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}


	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $koderak = $this->input->post('koderak');
            $namarak = $this->input->post('namarak');

            $query = $this->db->get_where('tbl_rak', array('koderak' => $koderak, 'namarak' => $namarak));
            if($query->num_rows() == 0) {
                $this->rak->simpan();
                $this->session->set_flashdata('simpan', 'Rak Barang berhasil tersimpan ...');
                redirect('rak');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Rak Barang sudah ada ...');
                redirect('rak');                
            }


        } else {
            $data = array(
				'title'      => 'Tambah Rak Barang - SIIB CV Indo Grafika',
                'kodeunik'   => $this->rak->kodeotomatis()
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('rak/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
            $namarak = $this->input->post('namarak');

            $query = $this->db->get_where('tbl_rak', array('namarak' => $namarak));
            if($query->num_rows() == 0) {
                $this->rak->update();
                $this->session->set_flashdata('update', 'Rak Barang berhasil diperbaharui ...');
                redirect('rak');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Rak Barang sudah ada ...');
                redirect('rak');
            }
        
        } else {
            if ($koderak = $this->uri->segment(3)) {
                $data = array(
                    'title'  => 'Edit Rak Barang - SIIB CV Indo Grafika',
                    'rak' => $this->db->get_where('tbl_rak', array('koderak' => $koderak))->row_array()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('rak/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');
            } else {
                redirect('kesalahan');
            }
            
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($koderak = $this->uri->segment(3)) {

            if(!empty($koderak)) {
                $this->db->where('koderak', $koderak);
                $this->db->delete('tbl_rak');
            }
            $this->session->set_flashdata('hapus', 'Rak Barang berhasil terhapus ...');
            redirect('rak');
        } else {
            redirect('kesalahan');
        }
    }

}
