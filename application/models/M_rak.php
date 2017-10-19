<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rak extends CI_Model {
    
    //tbl
    public $table ="tbl_rak";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_rak ORDER BY koderak ASC";
        return $this->db->query($query)->result();
    }

    //Kode Otomatis
    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(koderak, 2)) AS kd_max FROM tbl_rak");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%02s", $tmp);
            }
        }else{
            $kd = "01";
        }
        $kodejadi = "RAK-".$kd;
           return $kodejadi;
    }

    //simpan
    function simpan() {
        $data = array(
            'koderak' => $this->input->post('koderak'),
            'namarak' => $this->input->post('namarak'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'namarak' => $this->input->post('namarak'),
        );
        $koderak = $this->input->post('koderak');
        $this->db->where('koderak', $koderak);
        $this->db->update($this->table, $data);
    }
    
}
