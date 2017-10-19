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
                                    <h4 class="page-title">Profil Saya</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="mdi mdi-account-multiple"></i>&nbsp; Pengguna</li>
                                        <li class="active"><i class="fa fa-user-circle"></i>&nbsp; Profil Saya</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="profile-bg-picture" style="background-image:url('<?=base_URL()?>assets/images/bg-profile.jpg');">
                                    <span class="picture-bg-overlay"></span><!-- overlay -->
                                </div>
                                <!-- meta -->
                                <div class="profile-user-box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="pull-left m-r-15">
                                              <?php 
                                                $foto = 'avatar.jpg';
                                                if($this->session->userdata('foto') && file_exists('uploads/pengguna/'.$this->session->userdata('foto'))) {
                                                    $foto = $this->session->userdata('foto');
                                                }
                                            ?>
                                              <img src="<?=base_URL().'uploads/pengguna/'.$foto?>" alt="" class="thumb-lg img-circle">
                                            </span>
                                            <div class="media-body">
                                                <h4 class="m-t-5 m-b-5 ellipsis"><?=$this->session->userdata('namalengkap')?></h4>
                                                <?php
                                                    $level  = $this->session->userdata('kodelevel');
                                                    $sql    = "SELECT namalevel FROM tbl_level WHERE kodelevel = $level";
                                                    $lvl    = $this->db->query($sql)->result_array();

                                                    echo "<p class='font-13'>".($lvl[0]['namalevel'])."</p>";
                                                ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <a href="<?=base_URL()?>pengguna/ubahkatasandi" type="button" class="btn btn-success waves-effect waves-light">
                                                    <i class="dripicons-lock m-r-5"></i> Ganti Kata Sandi
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <!-- end row -->

                         <div class="row">
                            <div class="card-box table-responsive">

                                <div class="col-sm-8">
                                    <div style="padding:0;margin-left:10px;margin-right:0;">
                                      <table class="table">
                                        <tr>
                                          <td width="41%"><b>NAMA LENGKAP</b></td>
                                          <td> : <?=$this->session->userdata('namalengkap')?></td>
                                        </tr>
                                        <tr>
                                          <td><b>NAMA USER</b></td>
                                          <td> : <?=$this->session->userdata('namauser')?></td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
