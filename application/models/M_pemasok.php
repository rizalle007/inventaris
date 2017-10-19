<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemasok extends CI_Model {
    
    //tbl
    public $table ="tbl_pemasok";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_pemasok ORDER BY kodepemasok ASC";
        return $this->db->query($query)->result();
    }


    //Pemasok
    function getPemasok($where = '') {
        return $this->db->query("SELECT * FROM tbl_pemasok $where; ");
    }

    //Kode Otomatis
    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kodepemasok, 4)) AS kd_max FROM tbl_pemasok");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k) {
                $tmp  = ((int)$k->kd_max) + 1;
                $kd   = sprintf("%04s", $tmp);
            }
            
        } else {
            $kd = "0001";
        }
        $kodejadi = "KP-".$kd;
           return $kodejadi;
    }

    //simpan
    function simpan() {
        $data = array(
            'kodepemasok' => $this->input->post('kodepemasok'),
            'namapemasok' => $this->input->post('namapemasok'),
            'telp'        => $this->input->post('telp'),
            'email'       => $this->input->post('email'),
            'alamat'      => $this->input->post('alamat'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'namapemasok' => $this->input->post('namapemasok'),
            'telp'        => $this->input->post('telp'),
            'email'       => $this->input->post('email'),
            'alamat'      => $this->input->post('alamat'),
        );
        $kodepemasok = $this->input->post('kodepemasok');
        $this->db->where('kodepemasok', $kodepemasok);
        $this->db->update($this->table, $data);
    }
    
}
