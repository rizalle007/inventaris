<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->model('M_satuan','satuan');
    }


    //Fungsi index
	function index()	{
		$data = array(
			'title'  => 'Satuan Barang - SIIB CV Indo Grafika',
            'satuan' => $this->satuan->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('satuan/list');
        $this->load->view('layout/footer');
		$this->load->view('layout/kaki');
	}


	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $kodesatuan = $this->input->post('kodesatuan');
            $namasatuan = $this->input->post('namasatuan');

            $query = $this->db->get_where('tbl_satuan', array('kodesatuan' => $kodesatuan, 'namasatuan' => $namasatuan));
            if($query->num_rows() == 0) {
                $this->satuan->simpan();
                $this->session->set_flashdata('simpan', 'Satuan Barang berhasil tersimpan ...');
                redirect('satuan');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Satuan Barang sudah ada ...');
                redirect('satuan');                
            }


        } else {
            $data = array(
				'title'  => 'Tambah Satuan Barang - SIIB CV Indo Grafika',
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('satuan/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
            $namasatuan = $this->input->post('namasatuan');

            $query = $this->db->get_where('tbl_satuan', array('namasatuan' => $namasatuan));
            if($query->num_rows() == 0) {
                $this->satuan->update();
                $this->session->set_flashdata('update', 'Satuan Barang berhasil diperbaharui ...');
                redirect('satuan');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Satuan Barang sudah ada ...');
                redirect('satuan');
            }
        
        } else {
            if ($kodesatuan = $this->uri->segment(3)) {

                $data = array(
                    'title'  => 'Edit Satuan Barang - SIIB CV Indo Grafika',
                    'satuan' => $this->db->get_where('tbl_satuan', array('kodesatuan' => $kodesatuan))->row_array()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('satuan/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($kodesatuan = $this->uri->segment(3)) {
            if(!empty($kodesatuan)) {
                $this->db->where('kodesatuan', $kodesatuan);
                $this->db->delete('tbl_satuan');
            }
            $this->session->set_flashdata('hapus', 'Satuan Barang berhasil terhapus ...');
            redirect('satuan');
        } else {
            redirect('kesalahan');
        }
    }

}
