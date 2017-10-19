<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->model('M_jenis','jenis');
    }


    //Fungsi index
	function index()	{
		$data = array(
			'title'  => 'Jenis Barang - SIIB CV Indo Grafika',
            'jenis' => $this->jenis->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('jenis/list');
		$this->load->view('layout/footer');
        $this->load->view('layout/kaki');
	}


	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $kodejenis = $this->input->post('kodejenis');
            $namajenis = $this->input->post('namajenis');

            $query = $this->db->get_where('tbl_jenis', array('kodejenis' => $kodejenis, 'namajenis' => $namajenis));
            if($query->num_rows() == 0) {
                $this->jenis->simpan();
                $this->session->set_flashdata('simpan', 'Jenis Barang berhasil tersimpan ...');
                redirect('jenis');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Jenis Barang sudah ada ...');
                redirect('jenis');                
            }


        } else {
            $data = array(
				'title'  => 'Tambah Jenis Barang - SIIB CV Indo Grafika',
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('jenis/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
            $namajenis = $this->input->post('namajenis');

            $query = $this->db->get_where('tbl_jenis', array('namajenis' => $namajenis));
            if($query->num_rows() == 0) {
                $this->jenis->update();
                $this->session->set_flashdata('update', 'Jenis Barang berhasil diperbaharui ...');
                redirect('jenis');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Jenis Barang sudah ada ...');
                redirect('jenis');
            }
        
        } else {
            if ($kodejenis = $this->uri->segment(3)) {
                $data = array(
                    'title'  => 'Edit Jenis Barang - SIIB CV Indo Grafika',
                    'jenis' => $this->db->get_where('tbl_jenis', array('kodejenis' => $kodejenis))->row_array()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('jenis/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');

            } else {
                redirect('kesalahan');
            }
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($kodejenis = $this->uri->segment(3)) {            
            if(!empty($kodejenis)) {
                $this->db->where('kodejenis', $kodejenis);
                $this->db->delete('tbl_jenis');
            }
            $this->session->set_flashdata('hapus', 'Jenis Barang berhasil terhapus ...');
            redirect('jenis');
        } else {
            redirect('kesalahan');
        }
    }

}
