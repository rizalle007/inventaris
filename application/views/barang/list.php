<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Barang / Produk</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="active"><i class="fi-archive"></i>&nbsp; Barang / Produk</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- notifikasi simpan -->
                        <?php
                            if($this->session->flashdata('simpan')) {
                              echo '<div class="alert alert-success alert-dismissable" id="alert"><i class="fa fa-check"></i> &nbsp; '.$this->session->flashdata('simpan').'</div>';

                            } else if($this->session->flashdata('update')) {
                              echo '<div class="alert alert-success alert-dismissable" id="alert"><i class="fa fa-check"></i> &nbsp; '.$this->session->flashdata('update').'</div>';

                            } else if($this->session->flashdata('hapus')) {
                              echo '<div class="alert alert-success alert-dismissable" id="alert"><i class="fa fa-check"></i> &nbsp; '.$this->session->flashdata('hapus').'</div>';

                            } else if($this->session->flashdata('gagal')) {
                              echo '<div class="alert alert-warning alert-dismissable" id="alert"><i class="fa fa-warning"></i> &nbsp; '.$this->session->flashdata('gagal').'</div>';
                            }
                        ?>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">
                                         <?=anchor('barang/tambah','<i class="mdi mdi-plus-circle-outline"></i> Tambah', 'class="btn btn-flat btn-info waves-effect waves-light"')?>
                                    </h4>
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="8%" style="text-align: center;">NO</th>
                                            <th style="text-align: center;">KODE</th>
                                            <th style="text-align: center;">BARCODE</th>
                                            <th>NAMA BARANG</th>
                                            <th style="text-align: center;">JENIS</th>
                                            <th style="text-align: center;">SATUAN</th>
                                            <th style="text-align: center;">STOK</th>
                                            <th style="text-align: center;">DETAIL</th>
                                            <th width="10%" style="text-align: center;"><i class="typcn typcn-flash"></i></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php 
                                            $no = 1; 
                                            foreach($barang as $b)  :
                                        ?>

                                        <tr>
                                            <td align="center"><?=$no?>.</td>
                                            <td align="center"><?=$b->kodebarang?></td>
                                            <td align="center"><?=$b->barcode?></td>
                                            <td><?=$b->namabarang?></td>
                                            <td align="center"><?=$b->kodejenis?></td>
                                            <td align="center"><?=$b->kodesatuan?></td>
                                            <td align="center"><?=$b->jumlahbarang?></td>
                                            <td align="center">
                                                <a href="<?=base_url('barang/detail')?>/<?=$b->kodebarang?>" data-toggle="tooltip" title="Detail Barang" class="btn btn-xs btn-primary waves-effect"><i class="fi-search"></i></a>

                                            </td>
                                            <td class="actions" align="center">
                                                <a href="<?=base_url('barang/edit')?>/<?=$b->kodebarang?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="<?=base_url('barang/hapus')?>/<?=$b->kodebarang?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

    