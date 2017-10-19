<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getLevel($kodelevel) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namalevel FROM tbl_level WHERE kodelevel = '$kodelevel'")->row();
	return $ambil->namalevel;
}

function getMenu($kodemenu) {
    $CI =& get_instance();
    $ambil = $CI->db->query("SELECT namamenu FROM tbl_menu WHERE kodemenu = '$kodemenu'")->row();
    return $ambil->namamenu;
}

function getJenis($kodejenis) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namajenis FROM tbl_jenis WHERE kodejenis = '$kodejenis'")->row();
	return $ambil->namajenis;
}

function getSatuan($kodesatuan) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namasatuan FROM tbl_satuan WHERE kodesatuan = '$kodesatuan'")->row();
	return $ambil->namasatuan;
}

function getRak($koderak) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namarak FROM tbl_rak WHERE koderak = '$koderak'")->row();
	return $ambil->namarak;
}

function getPemasok($kodepemasok) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namapemasok FROM tbl_pemasok WHERE kodepemasok = '$kodepemasok'")->row();
	return $ambil->namapemasok;
}

function getBarang($kodebarang) {
	$CI =& get_instance();
	$ambil = $CI->db->query("SELECT namabarang FROM tbl_barang WHERE kodebarang = '$kodebarang'")->row();
	return $ambil->namabarang;
}

function getTanggal($tgl) {
    $ubah    = gmdate($tgl, time()+60*60*8);
    $pecah   = explode("-",$ubah);
    $tanggal = $pecah[2];
    $bulan   = bulan($pecah[1]);
    $tahun   = $pecah[0];
    return $tanggal.' '.$bulan.' '.$tahun;
}

function getRupiah($harga) {
    $a    = (string)$harga;
    $len  = strlen($a);
 
    if($len <= 18) {
        $ratril  = $len-3-1;
        $ramil   = $len-6-1;
        $rajut   = $len-9-1;
        $juta    = $len-12-1;
        $ribu    = $len-15-1;
 
        $angka='';
        for($i = 0; $i < $len; $i++) {
            if($i == $ratril) {
            	$angka=$angka.$a[$i].".";
            } else if($i == $ramil){
                $angka = $angka.$a[$i].".";
            } else if($i == $rajut) {
                $angka = $angka.$a[$i].".";
            } else if($i == $juta) {
                $angka = $angka.$a[$i].".";
            } else if($i == $ribu) {
            	$angka = $angka.$a[$i].".";
            } else {
            	$angka = $angka.$a[$i];
            }
        }
    }
    echo $angka.",-";
}
