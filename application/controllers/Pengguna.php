<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->masuk_lib->cekmasuk();
        $this->load->helper('my_helper');
        $this->load->model('M_level','level');
        $this->load->model('M_pengguna','pengguna');
    }


    //Fungsi index
	function index()	{
		$data = array(
			'title'  => 'Pengguna - SIIB CV Indo Grafika',
            'pengguna' => $this->pengguna->data()
		);
		$this->load->view('layout/kepala', $data);
		$this->load->view('layout/menu');
		$this->load->view('pengguna/list');
		$this->load->view('layout/footer');
        $this->load->view('layout/kaki');
	}


	//Fungsi tambah
	function tambah() {
        if (isset($_POST['submit'])) {
            $namauser = $this->input->post('namauser');

            $query = $this->db->get_where('tbl_pengguna', array('namauser' => $namauser));
            if($query->num_rows() == 0) {
                $uploadGambar = $this->upload_gambar();
                $this->pengguna->simpan($uploadGambar);
                $this->session->set_flashdata('simpan', 'Pengguna berhasil tersimpan ...');
                redirect('pengguna');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Pengguna sudah ada ...');
                redirect('pengguna');                
            }


        } else {
            $data = array(
				'title'  => 'Tambah Pengguna - SIIB CV Indo Grafika',
                'level'  => $this->level->data()
			);
			$this->load->view('layout/kepala', $data);
			$this->load->view('layout/menu');
			$this->load->view('pengguna/tambah');
            $this->load->view('layout/footer');
			$this->load->view('layout/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
            $namauser = $this->input->post('namauser');

            $uploadGambar = $this->upload_gambar();
            $this->pengguna->update($uploadGambar);

            $this->session->set_flashdata('update', 'Pengguna berhasil diperbaharui ...');
            redirect('pengguna');

            $this->session->set_flashdata('gagal', 'Terjadi kesalahan, Pengguna sudah ada ...');
            redirect('pengguna');
        
        } else {
            if ($namauser = $this->uri->segment(3)) {
                $data = array(
                    'title'     => 'Edit pengguna Barang - SIIB CV Indo Grafika',
                    'pengguna'  => $this->db->get_where('tbl_pengguna', array('namauser' => $namauser))->row_array(),
                    'level'     => $this->level->data()
                );
                $this->load->view('layout/kepala', $data);
                $this->load->view('layout/menu');
                $this->load->view('pengguna/edit');
                $this->load->view('layout/footer');
                $this->load->view('layout/kaki');

            } else {
                redirect('kesalahan');
            }
        }
    }
    

    //Fungsi hapus
    function hapus() {
        if ($namauser = $this->uri->segment(3)) {            
            if(!empty($namauser)) {
                $this->db->where('namauser', $namauser);
                $this->db->delete('tbl_pengguna');
            }
            $this->session->set_flashdata('hapus', 'Pengguna berhasil terhapus ...');
            redirect('pengguna');
        } else {
            redirect('kesalahan');
        }
    }


    //Fungsi Upload
    function upload_gambar() {
        $config['upload_path']          = './uploads/pengguna/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|bmp';
        $config['max_size']             = 2048;
        $this->load->library('upload', $config);
        $this->upload->do_upload('fotofile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    //Fungsi Profil
    function profilsaya() {
        $data = array(
            'title'         => 'Profil Saya - SIIB CV Indo Grafika',            
        );
        $this->load->view('layout/kepala', $data);
        $this->load->view('layout/menu');
        $this->load->view('pengguna/profil');
        $this->load->view('layout/footer');
        $this->load->view('layout/kaki');
    }

    //Fungsi ubah kata sandi
    function ubahkatasandi() {
        if (isset($_POST['submit'])) {
            $data_sess          = $this->session->userdata('masuk');
            $namauser           = $this->input->post('namauser');
            $katasandi_lama     = SHA1($this->input->post('katasandi_lama'));
            $katasandi_baru     = SHA1($this->input->post('katasandi_baru'));
            
            if($katasandi_lama == $this->session->userdata('katasandi')) {
                $data = array('katasandi' => $katasandi_baru);

                $result = $this->pengguna->UpdateData('tbl_pengguna', $data, array('namauser' => $namauser));
                $new_data_sess = array(
                    'namauser'      => $data_sess['namauser'],
                    'katasandi'     => $katasandi_baru,
                );
                
                $this->session->set_userdata('masuk', $new_data_sess);
                $this->session->set_flashdata('simpan', 'Kata Sandi berhasil diperbaharui ...');
                redirect('pengguna/ubahkatasandi');
            } else {
                $this->session->set_flashdata('gagal', 'Kata Sandi gagal diperbaharui !');
                redirect('pengguna/ubahkatasandi');
            }
        } else {
            $data = array(
                'title'         => 'Ubah Kata Sandi Saya - SIIB CV Indo Grafika',
                'namauser'      => $this->session->userdata('namauser')
            );
            $this->load->view('layout/kepala', $data);
            $this->load->view('layout/menu');
            $this->load->view('pengguna/katasandi');
            $this->load->view('layout/footer');
            $this->load->view('layout/kaki');
        }
    }

}
