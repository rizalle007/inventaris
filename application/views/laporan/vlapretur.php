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
                                    <h4 class="page-title">Laporan Data Retur</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="mdi mdi-inbox"></i>&nbsp; Laporan Retur </li>
                                        <li class="active"><i class="mdi mdi-book-open"></i>&nbsp; Laporan Data Retur</li>
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
                                            <th style="text-align: center;">NO RETUR</th>
                                            <th style="text-align: center;">TANGGAL</th>
                                            <th style="text-align: center;">NO PEMBELIAN</th>
                                            <th style="text-align: left;">PEMASOK BARANG</th>
                                            <th style="text-align: center;">LIHAT / CETAK</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php 
                                            $no = 1; 
                                            foreach($retur as $p) :
                                        ?>

                                        <tr>
                                            <td align="center"><?=$no?>.</td>
                                            <td align="center"><?=$p->noretur?></td>
                                            <td align="center"><?=$p->tanggalretur?></td>
                                            <td align="center"><?=$p->nopembelian?></td>
                                            <td align="left"><?=getPemasok($p->kodepemasok)?></td>
                                            <td align="center">
                                                <a onclick="window.open('<?=base_url()?>laporan_retur/lihat/<?=$p->noretur?>', 'newwindow', 'width=1300, height=650'); return false;" data-toggle="tooltip" title="Lihat retur" class="btn btn-xs btn-info waves-effect"><i class="fi-search"></i>&nbsp; Lihat</a>
                                                <a href="javascript: w=window.open('<?=base_url()?>laporan_retur/cetak/<?=$p->noretur?>', 'newwindow', 'width=1300, height=650'); w.focus(); w.print();" data-toggle="tooltip" title="Cetak retur" class="btn btn-xs btn-success waves-effect"><i class="fa fa-print"></i>&nbsp; Cetak</a>
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

