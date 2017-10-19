<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_retur extends CI_Model {
    
    //tbl
    public $table  ="tbl_retur";
    public $table2 ="tbl_returdetail";


    //data
    public function data() {
        $query = "SELECT * FROM tbl_retur ORDER BY noretur ASC";
        return $this->db->query($query)->result();
    }

    //retur
    function getretur($where = '') {
        return $this->db->query("SELECT * FROM tbl_retur $where; ");
    }


    //Join Table
    public function returJoindetail() {
        $query = "SELECT * FROM tbl_returdetail INNER JOIN tbl_retur ON tbl_returdetail.noretur = tbl_retur.noretur";
        return $this->db->query($query)->result();
    }

    //Join Table
    public function joinDetail($where = '') {
        return $this->db->query("SELECT * FROM tbl_returdetail $where");
    }


    //date range
    public function dateRange() {
        $this->db->where('tanggal >=',$tgl_awal);
        $this->db->where('tanggal <=',$tgl_akhir);
        $query = "SELECT * FROM tbl_returdetail INNER JOIN tbl_retur ON tbl_returdetail.noretur = tbl_retur.noretur WHERE tbl_retur.tanggalretur BETWEEN tgl_awal AND tgl_akhir";
        return $this->db->query($query)->result();
    }


    //Kode Otomatis
    function kodeauto() {
        $tgl = date("Ymd",time());
        $q = $this->db->query("SELECT MAX(RIGHT(noretur, 4)) AS kd_max FROM tbl_retur WHERE DATE(tanggalretur)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        $kodejadi = "NR-".$tgl."-".$kd;
           return $kodejadi;
    }

    //simpan
    function simpan() {
        $data = array(
            'noretur'       => $this->input->post('noretur'),
            'tanggalretur'  => $this->input->post('tanggalretur'),
            'nopembelian'   => $this->input->post('nopembelian'),
            'kodepemasok'   => $this->input->post('kodepemasok'),
            'alasan'        => $this->input->post('alasan')
        );
        $this->db->insert($this->table, $data);
    }

    //simpan2
    function simpan2() {
        $jmlBarang = $this->input->post('jmlBarang');
        for ($i = 1; $i <= $jmlBarang; $i++) {
            $this->db->query("INSERT INTO tbl_returdetail VALUES ('".$this->input->post('noretur')."', '".$this->input->post('kodebarang_'.$i)."', '".$this->input->post('kodejenis_'.$i)."', '".$this->input->post('kodesatuan_'.$i)."', '".$this->input->post('hargapembelian_'.$i)."', '".$this->input->post('jumlahretur_'.$i)."')");
        }
    }
    
}
