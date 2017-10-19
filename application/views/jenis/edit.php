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
                                    <h4 class="page-title">Edit Jenis Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-server"></i>&nbsp; Master Data</li>
                                        <li><i class="fi-grid"></i>&nbsp; Jenis Barang</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Jenis Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('jenis/edit')?>
                            <?=form_hidden('kodejenis', $jenis['kodejenis'])?>

                                <div class="form-group">
                                    <label>KODE JENIS</label>
                                    <div>
                                        <input type="text" class="form-control" name="kodejenis" value="<?=$jenis['kodejenis']?>" required disabled 
                                               data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Masukkan Kode Jenis Barang"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Jenis</label>
                                    <div>
                                        <input type="text" class="form-control" name="namajenis" value="<?=$jenis['namajenis']?>" required autofocus 
                                               data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Masukkan Nama Jenis Barang"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('jenis', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
