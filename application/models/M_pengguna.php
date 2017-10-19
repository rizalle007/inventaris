<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {
    
    //ChekLogin
    function chekLogin($namauser, $katasandi) {
        $this->db->where('namauser like binary', $namauser);
        $this->db->where('katasandi like binary',  SHA1($katasandi));
        
        $pengguna = $this->db->get('tbl_pengguna')->row_array();
        return $pengguna;
    }

    //Login Session Tanggal
    function tambah($data = array()) {
        if(!array_key_exists("userdibuat", $data)) {
            $data['userdibuat'] = date("Y-m-d H:i:s");
        }

        if(!array_key_exists("terakhirmasuk", $data)) {
            $data['terakhirmasuk'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $tambah = $this->db->insert($this->$pengguna, $data);
        
        //return the status
        if($tambah) {
            return $this->db->insert_id();;

        } else {
            return false;
        }
    }


    //tbl
    public $table ="tbl_pengguna";


    //data
    public function data(){
        $query = "SELECT * FROM tbl_pengguna ORDER BY namauser ASC";
        return $this->db->query($query)->result();
    }

     //simpan
    function simpan($foto) {
        $ks = $this->input->post('katasandi');
        $data = array(
            'namauser'      => $this->input->post('namauser'),
            'katasandi'     => SHA1($ks),
            'kodelevel'     => $this->input->post('kodelevel'),
            'namalengkap'   => $this->input->post('namalengkap'),
            'foto'          => $foto

        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update($foto) {
        if(empty($foto)) {
            $ks = $this->input->post('katasandi');
            $data = array(
                //'katasandi'     => SHA1($ks),
                'kodelevel'     => $this->input->post('kodelevel'),
                'namalengkap'   => $this->input->post('namalengkap'),
            );
            $namauser = $this->input->post('namauser');
            $this->db->where('namauser', $namauser);
            $this->db->update($this->table, $data);

        } else {
            $ks = $this->input->post('katasandi');
            $data = array(
                //'katasandi'     => SHA1($ks),
                'kodelevel'     => $this->input->post('kodelevel'),
                'namalengkap'   => $this->input->post('namalengkap'),
                'foto'          => $foto
            );
            $namauser = $this->input->post('namauser');
            $this->db->where('namauser', $namauser);
            $this->db->update($this->table, $data);
        }
    }


    //Update
    public function UpdateData($table, $data, $where) {
        return $this->db->update($table, $data, $where);
    }


}
