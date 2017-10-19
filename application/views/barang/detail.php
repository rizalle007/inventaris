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
                                    <h4 class="page-title">Barang / Produk</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-archive"></i>&nbsp; Barang / Produk</li>
                                        <li class="active"><i class="dripicons-blog"></i>&nbsp; Detail Barang / Produk</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="card-box table-responsive">
                              <?=anchor('barang', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                <a href="<?=base_url('barang/edit')?>/<?=$barang['kodebarang']?>" class="btn btn-effect-ripple btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            </div>

                            <div class="card-box table-responsive">

                                <div class="col-sm-8">
                                    <div style="padding:0;margin-left:10px;margin-right:0;">
                                      <table class="table">
                                        <tr>
                                          <td width="41%"><b>KODE BARANG</b></td>
                                          <td> : <b><?=$barang['kodebarang']?></b></td>
                                        </tr>
                                        <tr>
                                          <td><b>NAMA BARANG</b></td>
                                          <td> : <b><?=$barang['namabarang']?></b></td>
                                        </tr>
                                      </table>
                                    </div>

                                    <div style="padding:0;margin-left:10px;margin-right:0;">
                                      <table class="table">
                                        <tr>
                                          <td width="41%">JENIS BARANG</td>
                                          <td> : <?=getJenis($barang['kodejenis'])?></td>
                                        </tr>
                                        <tr>
                                          <td>SATUAN BARANG</td>
                                          <td> : <?=getSatuan($barang['kodesatuan'])?></td>
                                        </tr>
                                        <tr>
                                          <td>RAK BARANG</td>
                                          <td> : <?=getRak($barang['koderak'])?></td>
                                        </tr>
                                        <tr>
                                          <td>HARGA BARANG</td>
                                          <td> : Rp. <?=getRupiah($barang['hargabarang'])?></td>
                                        </tr>
                                        <tr>
                                          <td>JUMLAH BARANG</td>
                                          <td> : <?=$barang['jumlahbarang']?></td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div style="padding:0;margin-left:10px;margin-right:0;">
                                      <table class="table">
                                        <tr>
                                          <td><b>BARCODE</b></td>
                                          <td><b></b></td>
                                        </tr>
                                        <tr>
                                          <td><?=$barang['barcode']?></td>
                                          <td><b></b></td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
