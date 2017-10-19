<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!--<a href="index.html" class="logo"><span>Code<span>Fox</span></span><i class="mdi mdi-layers"></i></a>-->
                    <!-- Image logo -->
                    <a href="<?=base_URL()?>dashboard" class="logo">
                        <span>
                            <img src="<?=base_URL()?>uploads/pengaturan/logo/logo.png" alt="logo besar" height="40">
                        </span>
                        <i>
                            <img src="<?=base_URL()?>uploads/pengaturan/logo/simbol.png" alt="logo kecil" height="50">
                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left nav-menu-left">
                            <li>
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <?php 
                                        $foto = 'avatar.jpg';
                                        if($this->session->userdata('foto') && file_exists('uploads/pengguna/'.$this->session->userdata('foto'))) {
                                            $foto = $this->session->userdata('foto');
                                        }
                                    ?>                                    
                                    <img src="<?=base_URL().'uploads/pengguna/'.$foto?>" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center"><b><h5><?=$this->session->userdata('namalengkap')?></h5></b></li>
                                    <?php
                                        $level  = $this->session->userdata('kodelevel');
                                        $sql    = "SELECT namalevel FROM tbl_level WHERE kodelevel = $level";
                                        $lvl    = $this->db->query($sql)->result_array();

                                        echo "<li class='text-center'><p>".($lvl[0]['namalevel'])."</p></li>";
                                    ?>
                                    <li class="divider"></li>
                                    <li><a href="<?=base_URL()?>pengguna/profilsaya"><i class="dripicons-user m-r-10"></i> Profil Saya</a></li>
                                    <li><a href="<?=base_URL()?>pengguna/ubahkatasandi"><i class="dripicons-lock m-r-10"></i> Ubah Kata Sandi Saya</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?=base_URL()?>auth/keluar"><i class="dripicons-export m-r-10"></i> Keluar</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metisMenu nav" id="side-menu">
                            <li class="menu-title">Menu Navigasi</li>
                            <li>
                                <a href="<?=base_URL()?>dashboard"><i class="fi-air-play"></i><span> Dashboard</span></a>
                            </li>

                            <li class="menu-title"></li>

                            <?php
                                $level      = $this->session->userdata('kodelevel');
                                $sql_menu   = "SELECT * FROM tbl_menu WHERE kodemenu IN(SELECT kodemenu FROM tbl_rule WHERE kodelevel = $level) AND submenu = 0";
                                $main_menu  = $this->db->query($sql_menu)->result();

                                foreach ($main_menu as $main) {
                                    $submenus = $this->db->get_where('tbl_menu', array('submenu' => $main->kodemenu));
                                    if ($submenus->num_rows() > 0) { ?>

                            <li>
                                <a href="<?=base_URL($main->url)?>" aria-expanded="true"><i class="<?=$main->icon?>"></i> <span> <?=$main->namamenu?> </span> <span class="menu-arrow"></span></a>

                                <ul class="nav-second-level nav" aria-expanded="true">

                                <?php
                                    foreach ($submenus->result() as $sub) {
                                ?>

                                    <li>
                                        <a href="<?=base_URL($sub->url)?>"><i class="<?=$sub->icon?>"></i> <?=$sub->namamenu?></a>
                                    </li>

                                <?php } ?>

                                </ul>
                            </li>

                            <?php } else { ?>

                            <li>
                                <a href="<?=base_URL($main->url)?>"><i class="<?=$main->icon?>"></i><span><?=$main->namamenu?></span></a>
                            </li>

                            <?php } }?>

                            <li class="menu-title"></li>

                            <li>
                                <a href="<?=base_URL()?>pengguna/profilsaya"><i class="fa fa-user-circle"></i><span> Profil Saya</span></a>
                            </li>

                            <li>
                                <a href="<?=base_URL()?>pengguna/ubahkatasandi"><i class="dripicons-lock"></i><span> Ubah Kata Sandi Saya</span></a>
                            </li>

                            <li>
                                <a href="<?=base_URL()?>auth/keluar"><i class="fa fa-sign-out"></i><span> Keluar</span></a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
