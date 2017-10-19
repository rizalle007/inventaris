<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
    
    //tbl
    public $table ="tbl_menu";


    //data
    public function data() {
        $query = "SELECT * FROM tbl_menu ORDER BY kodemenu ASC";
        return $this->db->query($query)->result();
    }

    //menu form
    public function menuform() {
        $query = "SELECT * FROM tbl_menu WHERE submenu = '0' ORDER BY kodemenu ASC";
        return $this->db->query($query);
    }

    //simpan
    function simpan() {
        $data = array(
            'kodemenu'  => $this->input->post('kodemenu'),
            'namamenu'  => $this->input->post('namamenu'),
            'url'       => $this->input->post('url'),
            'icon'      => $this->input->post('icon'),
            'submenu'   => $this->input->post('submenu'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'namamenu'  => $this->input->post('namamenu'),
            'namamenu'  => $this->input->post('namamenu'),
            'url'       => $this->input->post('url'),
            'icon'      => $this->input->post('icon'),
            'submenu'   => $this->input->post('submenu'),
        );
        $kodemenu = $this->input->post('kodemenu');
        $this->db->where('kodemenu', $kodemenu);
        $this->db->update($this->table, $data);
    }
    
}
