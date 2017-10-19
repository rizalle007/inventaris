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
                                    <h4 class="page-title">Laporan Data Pembelian</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fa fa-handshake-o"></i>&nbsp; Laporan Pembelian </li>
                                        <li class="active"><i class="mdi mdi-book-open-page-variant"></i>&nbsp; Laporan Data Pembelian</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th width="8%" style="text-align: center;">NO</th>
                                            <th style="text-align: center;">NO PEMBELIAN</th>
                                            <th style="text-align: center;">TANGGAL</th>
                                            <th style="text-align: left;">PEMASOK BARANG</th>
                                            <th style="text-align: center;">LIHAT / CETAK</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php 
                                            $no = 1; 
                                            foreach($pembelian as $p) :
                                        ?>

                                        <tr>
                                            <td align="center"><?=$no?>.</td>
                                            <td align="center"><?=$p->nopembelian?></td>
                                            <td align="center"><?=$p->tanggalpembelian?></td>
                                            <td align="left"><?=getPemasok($p->kodepemasok)?></td>
                                            <td align="center">
                                                <a onclick="window.open('<?=base_url()?>laporan_pembelian/lihat/<?=$p->nopembelian?>', 'newwindow', 'width=1300, height=650'); return false;" data-toggle="tooltip" title="Lihat Pembelian" class="btn btn-xs btn-info waves-effect"><i class="fi-search"></i>&nbsp; Lihat</a>
                                                <a href="javascript: w=window.open('<?=base_url()?>laporan_pembelian/cetak/<?=$p->nopembelian?>', 'newwindow', 'width=1300, height=650'); w.focus(); w.print();" data-toggle="tooltip" title="Cetak Pembelian" class="btn btn-xs btn-success waves-effect"><i class="fa fa-print"></i>&nbsp; Cetak</a>
                                            </td>
                                        </tr>
                                        <?php $no++; endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

