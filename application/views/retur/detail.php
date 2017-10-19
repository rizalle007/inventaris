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
                                    <h4 class="page-title">Transaksi Retur</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li class="active"><i class="mdi mdi-inbox"></i>&nbsp; Transaksi Retur</li>
                                        <li class="active"><i class="dripicons-blog"></i>&nbsp; Detail Transaksi Retur</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="card-box table-responsive">

                              <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="m-t-0 header-title">
                                         <?=anchor('transaksi_retur','<i class="fa fa-arrow-circle-left"></i> Kembali', 'class="btn btn-flat btn-warning waves-effect waves-light"')?>
                                    </h4>
                                    <div class="card-box table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th width="8%" style="text-align: center;">NO</th>
                                                <th style="text-align: center;">NO RETUR</th>
                                                <th style="text-align: left;">BARANG</th>
                                                <th style="text-align: center;">JENIS</th>
                                                <th style="text-align: center;">SATUAN</th>
                                                <th style="text-align: center;">HARGA</th>
                                                <th style="text-align: center;">JUMLAH</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            <?php 
                                                $no = 1; 
                                                foreach($retur as $r) :
                                            ?>

                                            <tr>
                                                <td align="center"><?=$no?>.</td>
                                                <td align="center"><?=$r['noretur']?></td>
                                                <td align="left"><?=getBarang($r['kodebarang'])?></td>
                                                <td align="center"><?=getJenis($r['kodejenis'])?></td>
                                                <td align="center"><?=getSatuan($r['kodesatuan'])?></td>
                                                <td align="center">Rp.  <?=getRupiah($r['hargaretur'])?></td>
                                                <td align="center"><?=$r['jumlahretur']?></td>
                                            </tr>
                                            <?php $no++; endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
