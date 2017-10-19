<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Table Styles Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>Manajemen Menu</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Dashboard</li>
                                            <li>Pengaturan</li>
                                            <li><a href="<?=base_URL()?>manajemenmenu">Manajemen Menu</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Table Styles Header -->

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

                        <!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title">
                                <h2>
                                    <?=anchor('manajemenmenu/tambah','<i class="fa fa-plus-circle"></i>&nbsp; Tambah', 'class="btn btn-primary btn-sm"')?>
                                    <button type="button" class="btn btn-info btn-sm"><i class='fa fa-file-excel-o'></i>&nbsp; Import Data (.xls)</button>
                                    <!-- <a href="#" class="btn btn-danger btn-sm"><i class='fa fa-trash'></i>&nbsp; Hapus Yang Di Seleksi</a> -->
                                </h2>
                                <h2 class="pull-right">
                                    <button type="button" class="btn btn-warning btn-sm"><i class='fa fa-file-excel-o'></i>&nbsp; Export Data (.xls)</button>
                                    <button type="button" class="btn btn-success btn-sm"><i class='fa fa-wpforms'></i>&nbsp; Cetak Laporan</button>
                                </h2>
                            </div>
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;" class="text-center"><label class="csscheckbox csscheckbox-primary"><input type="checkbox"><span></span></label></th>
                                            <th style="width: 50px;" class="text-center">NO</th>
                                            <th class="text-center"">NAMA MENU</th>
                                            <th class="text-center"">URL</th>
                                            <th class="text-center"">ICON</th>
                                            <th class="text-center"">SUBMENU</th>
                                            <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                        $no = 1; 
                                        foreach($menu as $m)  :
                                    ?>

                                        <tr>
                                            <td style="width: 30px;" class="text-center"><label class="csscheckbox csscheckbox-primary"><input type="checkbox"><span></span></label></td>
                                            <td style="width: 50px;" class="text-center"><?=$no?>.</td>
                                            <td class="text-center""><?=$m->namamenu?></td>

                                            <?php if($m->url == "#"){ ?>
                                                <td class="text-center""><span class="label label-default"><?=$m->url?></span></td>
                                            <?php } else { ?>
                                                <td class="text-center""><?=$m->url?></td>
                                            <?php } ?>

                                            <?php if($m->icon == ""){ ?>
                                                <td class="text-center""><?=$m->icon?>-</td>
                                            <?php } else { ?>
                                                <td class="text-center""><?=$m->icon?></td>
                                            <?php } ?>

                                            <?php if($m->submenu == "0"){ ?>
                                                <td class="text-center""><span class="label label-default"><?=$m->submenu?></span></td>
                                            <?php } else { ?>
                                                <td class="text-center""><span class="label label-primary"><?=$m->submenu?></span></td>
                                            <?php } ?>

                                            <td class="text-center" style="width: 75px;">
                                                <a href="<?=base_url('manajemenmenu/edit')?>/<?=$m->kodemenu?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="<?=base_url('manajemenmenu/hapus')?>/<?=$m->kodemenu?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>

                                    <?php $no++; endforeach; ?>
                                    </tbody> 

                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->


        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="<?=base_URL()?>assets/js/vendor/jquery-2.2.4.min.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?=base_URL()?>assets/js/pages/uiTables.js"></script>
        <script>$(function(){ UiTables.init(); });</script>
