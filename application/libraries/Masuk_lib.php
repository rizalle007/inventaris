<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
//Class 
class Masuk_lib {
  // SET SUPER GLOBAL
  var $CI = NULL;
  
  //Construct 
  public function __construct() {
    $this->CI =& get_instance();
  }
 

  //masuk
  function masuk() {
        if (isset($_POST['submit'])) {
            // proses login disini
            $namauser   = $this->CI->input->post('namauser');
            $katasandi  = $this->CI->input->post('katasandi');
            $loginUser  = $this->CI->M_pengguna->chekLogin($namauser, $katasandi);
            if (!empty($loginUser)) {
                // sukses login user
                $this->CI->session->set_userdata($loginUser);
                $this->CI->session->set_flashdata('sukses', 'Kamu berhasil masuk ...');
                redirect('dashboard');
            } else {
                // gagal login
                $this->CI->session->set_flashdata('gagal', 'namauser atau sandi kamu salah !');
                redirect();
            }
        } else {
            $this->session->set_flashdata('gagal', 'namauser atau katasandi Kamu salah !');
            redirect();
        }
    }

  
  //Cek Masuk     
  function cekmasuk() {
    //cek session namauser
    if($this->CI->session->userdata('terakhirmasuk') == '') {
      //set notifikasi
      $this->CI->session->set_flashdata('belum', 'Kamu belum masuk ! &nbsp; Silahkan coba lagi ...');

      //alihkan ke halaman masuk
      redirect();
    }
  }
  

  //keluar
  function keluar() {
    $this->CI->session->sess_destroy();
    $this->CI->session->set_flashdata('keluar', 'Kamu berhasil keluar ...');
    redirect();
  }

}

