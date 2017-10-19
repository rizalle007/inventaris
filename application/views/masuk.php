<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="no-js" lang="id">
    <head>
        <meta charset="utf-8">

        <title><?=$title?></title>

        <meta name="description" content="ptkagamaju">
        <meta name="majujaya" content="ptmajujaya">
        <meta name="company" content="majujayacompany">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_URL()?>uploads/pengaturan/favicon/favicon.png" type="image/x-icon" />

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?=base_URL()?>assets/login/css/bootstrap.min.css">
        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?=base_URL()?>assets/login/css/plugins.css">
        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?=base_URL()?>assets/login/css/main.css">
        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="<?=base_URL()?>assets/login/css/themes.css">
        <!-- END Stylesheets -->
        <script src="<?=base_URL()?>assets/login/js/vendor/modernizr-3.3.1.min.js"></script>
    </head>

    <body>
        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-cube"></i> <strong> SIIB &nbsp;</strong>CV INDO GRAFIKA
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Kamu lupa kata sandi ?"><i class="fa fa-exclamation-circle"></i></a>
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Buat akun baru ?"><i class="fa fa-plus"></i></a>
                    </div>
                    <h2>Silahkan Masuk</h2>
                </div>
                <!-- END Login Title -->                

                <!-- Login Form -->
                <?=form_open('auth', 'class="form-horizontal"')?>

                    <!-- notifikasi Masuk -->
                    <?php
                        if($this->session->flashdata('sukses')) {
                            echo '<div class="alert alert-success alert-dismissable" id="alert"><i class="fa fa-check-circle"></i> &nbsp; '.$this->session->flashdata('sukses').'</div>';
                        
                        } else if($this->session->flashdata('gagal')) {
                            echo '<div class="alert alert-danger alert-dismissable" id="alert"><i class="fa fa-warning"></i> &nbsp; '.$this->session->flashdata('gagal').'</div>';

                        } else if($this->session->flashdata('belum')) {
                            echo '<div class="alert alert-warning alert-dismissable" id="alert"><i class="fa fa-info-circle"></i> &nbsp; '.$this->session->flashdata('belum').'</div>';
                        
                        } else if($this->session->flashdata('keluar')) {
                            echo '<div class="alert alert-success alert-dismissable" id="alert"><i class="fa fa-check-circle"></i> &nbsp; '.$this->session->flashdata('keluar').'</div>';
                        }
                    ?>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="login-username" name="namauser" class="form-control" placeholder="Nama User" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="login-password" name="katasandi" class="form-control" placeholder="Kata Sandi" required autofocus>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                                <span></span>
                            </label>&nbsp;
                            Ingat Aku ?
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" name="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-sign-in"></i>&nbsp; Masuk</button>
                        </div>
                    </div>

                <?=form_close()?>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small>Hak Cipta &copy;&nbsp;<a href="<?=site_url()?>"> &nbsp; SIIB&nbsp; CV INDO GRAFIKA</a></small><br>
                <small>All Right Reserved &nbsp; | &nbsp; <?=date('Y')?></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="<?=base_URL()?>assets/login/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="<?=base_URL()?>assets/login/js/vendor/bootstrap.min.js"></script>
        <script src="<?=base_URL()?>assets/jlogin/s/plugins.js"></script>
        <script src="<?=base_URL()?>assets/login/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?=base_URL()?>assets/login/js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>

        <script>
            $("#alert").fadeTo(3000, 500).slideUp(500, function() {
                $("#alert").alert('close');
            });
        </script>
    </body>
</html>