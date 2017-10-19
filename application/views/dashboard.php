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
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="active"><i class="fi-air-play"></i>&nbsp; Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="fi-archive widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Data Barang">Data Barang</p>
                                        <h2><span data-plugin="counterup"><?=$barang?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-primary">Jumlah Barang &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <i class="dripicons-store widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Data Pemasok">Data Pemasok</p>
                                        <h2><span data-plugin="counterup"><?=$pemasok?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-info">Jumlah Pemasok &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-warning">
                                    <i class="fa fa-handshake-o widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Transaksi Pembelian">Pembelian</p>
                                        <h2><span data-plugin="counterup"><?=$pembelian?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-warning">Jumlah Pembelian &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-inbox widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Pendaftar Disetujui">Retur</p>
                                        <h2><span data-plugin="counterup"><?=$retur?></span></h2>
                                        <p class="m-0"><a href="javascript:void(0)" class="btn btn-xs btn-flat btn-danger">Jumlah Retur &nbsp;<i class="mdi mdi-arrow-right-bold-circle-outline"></i></a></p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Welcome !</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Selamat datang di Dashboard Sistem Informasi Inventarisasi Barang CV Indo Grafika ...
                                    </p>
                                </div>    
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
