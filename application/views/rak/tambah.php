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
                                    <h4 class="page-title">Tambah Rak Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-server"></i>&nbsp; Master Data</li>
                                        <li><i class="fi-columns"></i>&nbsp; Rak Barang</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah rak Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('rak/tambah')?>
                                <div class="form-group">
                                    <label>KODE RAK</label>
                                    <div>
                                        <input type="text" class="form-control" name="koderak" value="<?=$kodeunik?>" required readonly 
                                               data-parsley-minlength="3" data-parsley-maxlength="10" placeholder="Masukkan Kode Rak Barang"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Rak</label>
                                    <div>
                                        <input type="text" class="form-control" name="namarak" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="10" placeholder="Masukkan Nama Rak Barang"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('rak', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
