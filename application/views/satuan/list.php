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
                                    <h4 class="page-title">Satuan Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-server"></i>&nbsp; Master Data</li>
                                        <li class="active"><i class="fi-stack"></i>&nbsp; Satuan Barang</li>
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
                                         <?=anchor('satuan/tambah','<i class="mdi mdi-plus-circle-outline"></i> Tambah', 'class="btn btn-flat btn-info waves-effect waves-light"')?>
                                    </h4>
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="8%" style="text-align: center;">NO</th>
                                            <th style="text-align: center;">KODE SATUAN</th>
                                            <th style="text-align: center;">NAMA SATUAN</th>
                                            <th width="10%" style="text-align: center;"><i class="typcn typcn-flash"></i></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php 
                                            $no = 1; 
                                            foreach($satuan as $s)  :
                                        ?>

                                        <tr>
                                            <td align="center"><?=$no?>.</td>
                                            <td align="center"><?=$s->kodesatuan?></td>
                                            <td align="center"><?=$s->namasatuan?></td>
                                            <td class="actions" align="center">
                                                <a href="<?=base_url('satuan/edit')?>/<?=$s->kodesatuan?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="<?=base_url('satuan/hapus')?>/<?=$s->kodesatuan?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
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
