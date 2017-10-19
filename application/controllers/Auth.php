<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        $this->load->model('M_pengguna');
    }

    //Fungsi index
	function index() {
        if(isset($_SESSION['terakhirmasuk'])) {
            redirect(site_url('dashboard'));
        }

        $valid      = $this->form_validation;  
        $namauser   = $this->input->post('namauser');  
        $katasandi  = $this->input->post('katasandi');  
        $valid->set_rules('namauser','namauser','required');  
        $valid->set_rules('katasandi','katasandi','required');

        if($valid->run()) {  
            $this->masuk_lib->masuk($namauser, $katasandi, base_url('dashboard'), base_url('masuk'));  
        }

		$data = array(
			'title' => 'Masuk - SIIB CV Indo Grafika'
		);
		$this->load->view('masuk', $data);
	}

    //Fungsi keluar
    function keluar() {
        $this->masuk_lib->keluar();
    }

}
