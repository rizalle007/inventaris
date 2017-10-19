<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_satuan extends CI_Model {
    
    //tbl
    public $table ="tbl_satuan";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_satuan ORDER BY kodesatuan ASC";
        return $this->db->query($query)->result();
    }

    //simpan
    function simpan() {
        $data = array(
            'kodesatuan' => $this->input->post('kodesatuan'),
            'namasatuan' => $this->input->post('namasatuan'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'namasatuan' => $this->input->post('namasatuan'),
        );
        $kodesatuan = $this->input->post('kodesatuan');
        $this->db->where('kodesatuan', $kodesatuan);
        $this->db->update($this->table, $data);
    }
    
}
