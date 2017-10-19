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
                                    <h4 class="page-title">Ubah Kata Sandi Saya</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="mdi mdi-account-multiple"></i>&nbsp; Pengguna</li>
                                        <li class="active"><i class="dripicons-lock"></i>&nbsp; Ubah Kata Sandi Saya</li>
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

                        <div class="card-box">
                            <?=form_open('pengguna/ubahkatasandi')?>
                                <div class="form-group">
                                    <label>NAMA USER</label>
                                    <div>
                                        <input type="text" class="form-control" name="namauser" value="<?=$namauser?>" required readonly 
                                               data-parsley-minlength="3" data-parsley-maxlength="100" placeholder="Masukkan namauser"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi (Lama)</label>
                                    <div>
                                        <input type="password" class="form-control" name="katasandi_lama" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="100" placeholder="Masukkan katasandi (lama)"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi (Baru)</label>
                                    <div>
                                        <input type="password" class="form-control" name="katasandi_baru" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="100" placeholder="Masukkan katasandi (baru)"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('pengguna/profilsaya', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
