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
                                        <h1>Pengaturan Aplikasi</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Dashboard</li>
                                            <li>Pengaturan</li>
                                            <li><a href="<?=base_URL()?>pengaturan/edit">Pengaturan Aplikasi</a></li>
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
                            <div class="block-title" align="center">
                                <h2>Form pengaturan Aplikasi</h2>
                            </div>
                            
                            <!-- Form Validation Form -->
                            <?=form_open_multipart('pengaturanaplikasi', 'id="form-validation" role="form" class="form-horizontal form-bordered"')?>
                            <?=form_hidden('kodepengaturan', $pengaturan['kodepengaturan'])?>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="namaperusahaan">Nama Perusahaan <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="namaperusahaan" name="namaperusahaan" value="<?=$pengaturan['namaperusahaan']?>" class="form-control" placeholder="Nama Perusahaan" maxlength="50" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="logo">Logo <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="logo" name="logo" value="<?=$pengaturan['logo']?>" class="form-control" placeholder="Logo Perusahaan" maxlength="100" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="favicon">Favicon <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="file" id="example-file-input" name="favic" autofocus><br>
                                        <?php 
                                            $foto = 'default.png';
                                            if($pengaturan['favicon'] && file_exists($pengaturan['favicon'])) {
                                                $foto = 'assets/img/'.$foto;
                                            }
                                        ?>
                                        <img src="<?=base_URL().'assets/img/'.$foto?>" class="img-circle img-thumbnail img-thumbnail-avatar-2x" alt="favicon">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="namapemilik">Nama Pemilik <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="namapemilik" name="namapemilik" value="<?=$pengaturan['namapemilik']?>" class="form-control" placeholder="Nama pemilik Perusahaan" maxlength="50" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="telp">Telp/HP Perusahaan <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="telp" name="telp" value="<?=$pengaturan['telp']?>" class="form-control" placeholder="Telp/HP Perusahaan" maxlength="20" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Email Perusahaan <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" name="email" value="<?=$pengaturan['email']?>" class="form-control" placeholder="Alamat Perusahaan" maxlength="30" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="alamat">Alamat Perusahaan <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="alamat" name="alamat" value="<?=$pengaturan['alamat']?>" class="form-control" placeholder="Alamat Perusahaan" maxlength="50" autofocus>
                                    </div>
                                </div>

                                <div class="form-group form-actions">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button type="submit" name="submit" class="btn btn-effect-ripple btn-success"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            <?=form_close()?>
                            <!-- END Form Validation Form -->

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
        <script src="<?=base_URL()?>assets/js/pages/formsValidation.js"></script>
        <script>$(function(){ FormsValidation.init(); });</script>
