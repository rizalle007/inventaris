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
                                    <h4 class="page-title">Tambah Pemasok Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="dripicons-store"></i>&nbsp; Pemasok Barang</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Pemasok Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('pemasok/tambah')?>
                                <div class="form-group">
                                    <label>KODE PEMASOK</label>
                                    <div>
                                        <input type="text" class="form-control" name="kodepemasok" value="<?=$kodeunik?>" required readonly 
                                               data-parsley-minlength="5" data-parsley-maxlength="10" placeholder="Masukkan Kode Pemasok Barang"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pemasok</label>
                                    <div>
                                        <input type="text" class="form-control" name="namapemasok" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="50" placeholder="Masukkan Nama Pemasok Barang"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Telp/HP Pemasok</label>
                                    <div>
                                       <input type="number" class="form-control" name="telp" required autofocus 
                                               data-parsley-type="number" data-parsley-minlength="10" data-parsley-maxlength="20" placeholder="Masukkan No. Telp/HP Pemasok"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Pemasok</label>
                                    <div>
                                        <input type="email" class="form-control" name="email" required autofocus 
                                               data-parsley-type="email" data-parsley-minlength="10" data-parsley-maxlength="30" placeholder="Masukkan Email Pemasok"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Pemasok</label>
                                    <div>
                                        <input required class="form-control" name="alamat" required autofocus 
                                        data-parsley-minlength="3" data-parsley-maxlength="50" 
                                        placeholder="Masukkan Alamat Pemasok Barang"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('pemasok', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
