<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis extends CI_Model {
    
    //tbl
    public $table ="tbl_jenis";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_jenis ORDER BY kodejenis ASC";
        return $this->db->query($query)->result();
    }

    //simpan
    function simpan() {
        $data = array(
            'kodejenis' => $this->input->post('kodejenis'),
            'namajenis' => $this->input->post('namajenis'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'namajenis' => $this->input->post('namajenis'),
        );
        $kodejenis = $this->input->post('kodejenis');
        $this->db->where('kodejenis', $kodejenis);
        $this->db->update($this->table, $data);
    }
    
}
