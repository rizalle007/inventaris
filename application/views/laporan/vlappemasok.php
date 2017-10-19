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
                                    <h4 class="page-title">Laporan Data Pemasok Barang</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="dripicons-store"></i>&nbsp; Pemasok Barang</li>
                                        <li class="active"><i class="dripicons-article"></i>&nbsp; Laporan Data Pemasok Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="card-box table-responsive">
                                <a onclick="window.open('<?=base_url()?>laporan_pemasok/lihat', 'newwindow', 'width=1300, height=650'); return false;" class="btn btn-effect-ripple btn-info"><i class="fa fa-search"></i> Lihat</a>
                                <a href="javascript: w=window.open('<?=base_url()?>laporan_pemasok/cetak', 'newwindow', 'width=1300, height=650'); w.focus(); w.print();" class="btn btn-effect-ripple btn-success"><i class="fa fa-print"></i> Cetak</a>
                            </div>

                    </div> <!-- container -->

                </div> <!-- content -->
