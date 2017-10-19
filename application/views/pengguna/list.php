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
                                    <h4 class="page-title">Pengguna</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-cog"></i>&nbsp; Pengaturan</li>
                                        <li class="active"><i class="mdi mdi-account-multiple"></i>&nbsp; Data Pengguna</li>
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
                                         <?=anchor('pengguna/tambah','<i class="mdi mdi-plus-circle-outline"></i> Tambah', 'class="btn btn-flat btn-info waves-effect waves-light"')?>
                                    </h4>
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="8%" style="text-align: center;">NO</th>
                                            <th style="text-align: center;">FOTO</th>
                                            <th style="text-align: left;">NAMA USER</th>
                                            <th style="text-align: left;">NAMA </th>
                                            <th style="text-align: center;">LEVEL</th>
                                            <th width="10%" style="text-align: center;"><i class="typcn typcn-flash"></i></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php 
                                            $no = 1; 
                                            foreach($pengguna as $p)  :
                                        ?>

                                        <tr>
                                            <td align="center"><?=$no?>.</td>
                                            <?php 
                                                $foto = 'avatar.jpg';
                                                if($p->foto && file_exists('uploads/pengguna/'.$p->foto)) {
                                                    $foto = $p->foto;
                                                }
                                            ?>
                                            <td align="center">
                                                <img src="<?=base_URL().'uploads/pengguna/'.$foto?>" alt="foto" style="height: 30px;"/>
                                            </td>
                                            <td align="center"><?=$p->namauser?></td>
                                            <td align="left"><?=$p->namalengkap?></td>
                                            
                                            <?php if($p->kodelevel == "1"){ ?>
                                                <td align="center"><span class="label label-default"><?=getLevel($p->kodelevel)?></span></td>
                                            <?php } else if($p->kodelevel == "2"){ ?>
                                                <td align="center"><span class="label label-info"><?=getLevel($p->kodelevel)?></span></td>
                                            <?php } else { ?>
                                                <td align="center"><span class="label label-primary"><?=getLevel($p->kodelevel)?></span></td>
                                            <?php } ?>

                                            <td class="actions" align="center">
                                                <a href="<?=base_url('pengguna/edit')?>/<?=$p->namauser?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="<?=base_url('pengguna/hapus')?>/<?=$p->namauser?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
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
