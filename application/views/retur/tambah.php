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
                                    <h4 class="page-title">Tambah Transaksi Retur</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="mdi mdi-inbox"></i>&nbsp; Transaksi Retur</li>
                                        <li><i class="fa fa-wpforms"></i>&nbsp; Tambah Transaksi Retur</li>
                                        <li class="active"><i class="dripicons-store"></i>&nbsp; Pilih NO Pembelian dan Pemasok Barang</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <form action="<?=base_URL()?>transaksi_retur/lanjut" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Pilih NO Pembelian</label>
                                            <div class="row">
                                                <div class="col-xs-10">                             
                                                        <input type="text" class="form-control" id="nopembelian" name="nopembelian" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="NO PEMBELIAN"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">. . .</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Pemasok Barang</label>
                                            <div class="row">
                                                <div class="col-xs-12">                             
                                                        <input type="text" class="form-control" id="kodepemasok" name="kodepemasok" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="KODE PEMASOK BARANG"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Jumlah Barang</label>
                                            <div>
                                                <input type="number" class="form-control" name="jmlBarang" id="jmlBarang" data-parsley-type="number" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Jumlah Barang Untuk Transaksi"  required="" autofocus>
                                            </div>
                                            <p class="text-muted m-b-20 font-14">
                                                <i>Lihat di detail pembelian</i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group m-b-0">
                                            <div>
                                                <?=anchor('transaksi_retur', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Selanjutnya &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 align="center" class="modal-title" id="myModalLabel">PILIH PEMASOK BARANG</h4>
                    </div>
                    <div class="modal-body">
                         <table id="lookup" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center; width:">KODE PEMASOK</th>
                                    <th>NAMA PEMASOK</th>
                                </tr>
                            </thead>
                            <tbody>

                               <?php foreach($pembelian as $p) { ?>

                                <tr class="pilih" data-nopembelian="<?=$p->nopembelian?>" data-kodepemasok="<?=$p->kodepemasok?>">
                                    <td align="center"><?=$p->nopembelian?></td>
                                    <td><?=$p->kodepemasok?></td>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>

        

        <script src="<?=base_URL()?>assets/modal/js/jquery-1.11.2.min.js"></script>
        <script src="<?=base_URL()?>assets/modal/datatables/jquery.dataTables.js"></script>

        <script type="text/javascript">
            $(document).on('click', '.pilih', function(e) {
                document.getElementById("nopembelian").value = $(this).attr("data-nopembelian");
                document.getElementById("kodepemasok").value = $(this).attr("data-kodepemasok");
                $('#myModal').modal('hide');
            });
 
            $(function() {
                $("#lookup").dataTable();
            })
        </script>
        
        <style>
            .pilih:hover{
                cursor: pointer;
            }
        </style>
