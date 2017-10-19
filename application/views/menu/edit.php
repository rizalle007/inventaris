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
                                        <h1>Edit Menu</h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>Dashboard</li>
                                            <li>Pengaturan</li>
                                            <li>Manajemen Menu</li>
                                            <li><a href="<?=base_URL()?>manajemenmenu/edit">Edit Menu</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Table Styles Header -->

                        <!-- Datatables Block -->
                        <!-- Datatables is initialized in js/pages/uiTables.js -->
                        <div class="block full">
                            <div class="block-title" align="center">
                                <h2>Form Edit Menu</h2>
                            </div>
                            
                            <!-- Form Validation Form -->
                            <?=form_open('manajemenmenu/update', 'id="form-validation" role="form" class="form-horizontal form-bordered"')?>
                            <?=form_hidden('kodemenu', $menu['kodemenu'])?>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="namamenu">Nama Menu <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="namamenu" name="namamenu" value="<?=$menu['namamenu']?>" class="form-control" placeholder="Nama Menu" maxlength="50" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="url">URL <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="url" name="url" value="<?=$menu['url']?>" class="form-control" placeholder="URL Menu" maxlength="50" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="icon">Icon Menu <span class="text-danger"></span></label>
                                    <div class="col-md-6">
                                        <input type="text" id="icon" name="icon" value="<?=$menu['icon']?>" class="form-control" placeholder="Icon Menu" maxlength="30" autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="submenu">Sub Menu <span class="text-danger">*</span></label>
                                    <div class="col-md-6">
                                        <select id="submenu" name="submenu" class="form-control" autofocus>
                                            <option value="">Pilih SUB MENU</option>
                                            <option value="" disabled>-------------------------------------</option>
                                            <option value="0" <?php if($menu['submenu']=='0') { echo "selected=selected";}?> >Main Menu (Root)</option>
                                            <option value="" disabled>-------------------------------------</option>
                                            <?php foreach ($menus->result() as $m): ?>
                                                <option value="<?=$m->kodemenu?>" <?php if($menu['submenu']==$m->kodemenu) { echo "selected=selected";} ?> ><?=$m->namamenu?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-actions">
                                    <div class="col-md-8 col-md-offset-3">
                                        <?=anchor('manajemenmenu', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-effect-ripple btn-warning'))?>
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
