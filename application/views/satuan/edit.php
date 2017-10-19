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
                                    <h4 class="page-title">Edit Satuan Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-server"></i>&nbsp; Master Data</li>
                                        <li><i class="fi-stack"></i>&nbsp; Satuan Barang</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Satuan Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('satuan/edit')?>
                            <?=form_hidden('kodesatuan', $satuan['kodesatuan'])?>

                                <div class="form-group">
                                    <label>KODE SATUAN</label>
                                    <div>
                                        <input type="text" class="form-control" name="kodesatuan" value="<?=$satuan['kodesatuan']?>" required disabled 
                                               data-parsley-minlength="3" data-parsley-maxlength="10" placeholder="Masukkan Kode Satuan Barang"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Satuan</label>
                                    <div>
                                        <input type="text" class="form-control" name="namasatuan" value="<?=$satuan['namasatuan']?>" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="10" placeholder="Masukkan Nama Satuan Barang"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('satuan', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
