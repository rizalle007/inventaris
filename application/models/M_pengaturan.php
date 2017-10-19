<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {
    
    //tbl
    public $table ="tbl_pengaturan";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_pengaturan ORDER BY kodepengaturan ASC";
        return $this->db->query($query)->result();
    }
    
    //update
    function update($favicon) {
        if(empty($favicon)) {
            $data = array(
                'kodepengaturan' => $this->input->post('kodepengaturan'),
                'namaperusahaan' => $this->input->post('namaperusahaan'),
                'logo'           => $this->input->post('logo'),                
                'namapemilik'    => $this->input->post('namapemilik'),
                'telp'           => $this->input->post('telp'),
                'email'          => $this->input->post('email'),
                'alamat'         => $this->input->post('alamat'),
            );

        } else {
            $data = array(
                'kodepengaturan' => $this->input->post('kodepengaturan'),
                'namaperusahaan' => $this->input->post('namaperusahaan'),
                'logo'           => $this->input->post('logo'),
                'favicon'        => $favicon,
                'namapemilik'    => $this->input->post('namapemilik'),
                'telp'           => $this->input->post('telp'),
                'email'          => $this->input->post('email'),
                'alamat'         => $this->input->post('alamat'),
            );
        }
        $kodepengaturan = $this->input->post('kodepengaturan');
        $this->db->where('kodepengaturan', $kodepengaturan);
        $this->db->update($this->table, $data);
    }
    
}
