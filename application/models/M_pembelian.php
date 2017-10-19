<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembelian extends CI_Model {
    
    //tbl
    public $table  ="tbl_pembelian";
    public $table2 ="tbl_pembeliandetail";


    //data
    public function data() {
        $query = "SELECT * FROM tbl_pembelian ORDER BY nopembelian ASC";
        return $this->db->query($query)->result();
    }

    //Pembelian
    function getPembelian($where = '') {
        return $this->db->query("SELECT * FROM tbl_pembelian $where; ");
    }


    //Join Table
    public function pembelianJoindetail() {
        $query = "SELECT * FROM tbl_pembeliandetail INNER JOIN tbl_pembelian ON tbl_pembeliandetail.nopembelian = tbl_pembelian.nopembelian";
        return $this->db->query($query)->result();
    }

     //Join Table
    public function joinDetail($where = '') {
        return $this->db->query("SELECT * FROM tbl_pembeliandetail $where");
    }


    //date range
    public function dateRange() {
        $this->db->where('tanggal >=',$tgl_awal);
        $this->db->where('tanggal <=',$tgl_akhir);
        $query = "SELECT * FROM tbl_pembeliandetail INNER JOIN tbl_pembelian ON tbl_pembeliandetail.nopembelian = tbl_pembelian.nopembelian WHERE tbl_pembelian.tanggalpembelian BETWEEN tgl_awal AND tgl_akhir";
        return $this->db->query($query)->result();
    }


    //Kode Otomatis
    function kodeauto() {
        $tgl = date("Ymd",time());
        $q = $this->db->query("SELECT MAX(RIGHT(nopembelian, 4)) AS kd_max FROM tbl_pembelian WHERE DATE(tanggalpembelian)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        $kodejadi = "NP-".$tgl."-".$kd;
           return $kodejadi;
    }

    //simpan
    function simpan() {
        $data = array(
            'nopembelian'       => $this->input->post('nopembelian'),
            'tanggalpembelian'  => $this->input->post('tanggalpembelian'),
            'kodepemasok'       => $this->input->post('kodepemasok')
        );
        $this->db->insert($this->table, $data);
    }

    //simpan2
    function simpan2() {
        $jmlBarang = $this->input->post('jmlBarang');
        for ($i = 1; $i <= $jmlBarang; $i++) {
            $this->db->query("INSERT INTO tbl_pembeliandetail VALUES ('".$this->input->post('nopembelian')."', '".$this->input->post('kodebarang_'.$i)."', '".$this->input->post('kodejenis_'.$i)."', '".$this->input->post('kodesatuan_'.$i)."', '".$this->input->post('hargapembelian_'.$i)."', '".$this->input->post('jumlahpembelian_'.$i)."')");
        }
    }
    
}
