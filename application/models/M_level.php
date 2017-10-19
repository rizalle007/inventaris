<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_level extends CI_Model {
    
    //tbl
    public $table ="tbl_level";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_level ORDER BY kodelevel ASC";
        return $this->db->query($query)->result();
    }

}
