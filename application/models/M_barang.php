<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {
    
    //tbl
    public $table ="tbl_barang";


    //data
    public function data() {
        $query = "SELECT * FROM tbl_barang ORDER BY kodebarang ASC";
        return $this->db->query($query)->result();
    }

    //Barang
    function getBarang($where = '') {
        return $this->db->query("SELECT * FROM tbl_barang $where; ");
    }

    //Kode Otomatis
    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(kodebarang, 4)) AS kd_max FROM tbl_barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        $kodejadi = "KB-".$kd;
           return $kodejadi;
    }

    //simpan
    function simpan() {
        $data = array(
            'kodebarang'    => $this->input->post('kodebarang'),
            'barcode'       => $this->input->post('barcode'),
            'namabarang'    => $this->input->post('namabarang'),
            'kodejenis'     => $this->input->post('kodejenis'),
            'kodesatuan'    => $this->input->post('kodesatuan'),
            'koderak'       => $this->input->post('koderak'),
            'hargabarang'   => $this->input->post('hargabarang'),
            'jumlahbarang'  => $this->input->post('jumlahbarang'),
        );
        $this->db->insert($this->table, $data);
    }
    
    //update
    function update() {
        $data = array(
            'kodebarang'    => $this->input->post('kodebarang'),
            'barcode'       => $this->input->post('barcode'),
            'namabarang'    => $this->input->post('namabarang'),
            'kodejenis'     => $this->input->post('kodejenis'),
            'kodesatuan'    => $this->input->post('kodesatuan'),
            'koderak'       => $this->input->post('koderak'),
            'hargabarang'   => $this->input->post('hargabarang'),
            'jumlahbarang'  => $this->input->post('jumlahbarang'),
        );
        $kodebarang = $this->input->post('kodebarang');
        $this->db->where('kodebarang', $kodebarang);
        $this->db->update($this->table, $data);
    }
    
}
