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
                                    <h4 class="page-title">Tambah Transaksi Retur Lanjutan</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="mdi mdi-inbox"></i>&nbsp; Transaksi Retur</li>
                                        <li><i class="fa fa-wpforms"></i>&nbsp; Tambah Transaksi Retur Lanjutan</li>
                                        <li class="active"><i class="fi-archive"></i>&nbsp; Transaksi Retur</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('transaksi_retur/lanjut')?>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>NOMOR RETUR</label>
                                            <div>
                                                <input type="text" class="form-control" name="noretur" value="<?=$kodeunik?>" required readonly 
                                                       data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Masukkan Kode Barang"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Pemasok Barang</label>
                                            <div>                         
                                                <input type="text" class="form-control" id="kodepemasok" name="kodepemasok" value="<?=$pembelian->kodepemasok?>" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="KODE PEMASOK BARANG"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Tanggal Retur</label>
                                            <div>
                                                <input type="date" class="form-control" name="tanggalretur" value="<?=date('Y-m-d')?>" readonly autofocus placeholder="Masukkan Tanggal retur"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pemasok Barang</label>
                                            <div>                         
                                                <input type="text" class="form-control" value="<?=getPemasok($pembelian->kodepemasok)?>" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Nama Pemasok Barang"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input type="hidden" name="jmlBarang" value="<?=$jmlBarang?>">
                                            <label>No Pembelian</label>
                                            <div>
                                                <input type="text" class="form-control" id="nopembelian" name="nopembelian" value="<?=$pembelian->nopembelian?>" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="NO PEMBELIAN"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Alasan</label>
                                            <div>
                                                <textarea class="form-control" rows="3" name="alasan" required autofocus data-parsley-minlength="3" data-parsley-maxlength="50" placeholder="Alasan"/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i <= $jmlBarang; $i++) { ?>

                            <div class="card-box">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Pilih Barang Ke-<?=$i?></label>
                                            <div class="row">
                                                <div class="col-xs-10">                             
                                                        <input type="text" class="form-control" id="kodebarang_<?=$i?>" name="kodebarang_<?=$i?>" required autofocus readonly data-parsley-type="text" data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="KODE BARANG Ke-<?=$i?>"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_<?=$i?>">. . .</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Ke-<?=$i?></label>
                                            <div>
                                                <input type="text" class="form-control" id="kodejenis_<?=$i?>" name="kodejenis_<?=$i?>" required readonly autofocus data-parsley-type="text" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Kode Jenis Ke-<?=$i?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Pembelian Ke-<?=$i?></label>
                                            <div>
                                                <input type="number" class="form-control" id="hargapembelian_<?=$i?>" name="hargapembelian_<?=$i?>" required readonly autofocus data-parsley-type="number" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Masukkan Harga Barang Ke-<?=$i?>"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Jumlah Barang Ke-<?=$i?></label>
                                            <div>
                                                <input type="number" class="form-control" name="jumlahretur_<?=$i?>" required autofocus data-parsley-type="number" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Jumlah Barang Ke-<?=$i?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan Ke-<?=$i?></label>
                                            <div>
                                                <input type="text" class="form-control" id="kodesatuan_<?=$i?>" name="kodesatuan_<?=$i?>" required readonly autofocus data-parsley-type="text" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Kode Satuan Ke-<?=$i?>"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                            <div class="card-box">
                                <div class="form-group m-b-0">
                                    <div>
                                        <a onclick="goBack()" class="btn btn-warning waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </div>

                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
                
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>

                <?php for ($i = 1; $i <= $jmlBarang; $i++) { ?>
                <!-- Modal -->
                <div class="modal fade" id="myModal_<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 align="center" class="modal-title" id="myModalLabel">PILIH BARANG</h4>
                            </div>
                            <div class="modal-body">
                                 <table id="lookup_<?=$i?>" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; width:">KODE BARANG</th>
                                            <th style="text-align: center; width:">KODE JENIS</th>
                                            <th style="text-align: center; width:">KODE SATUAN</th>
                                            <th style="text-align: center; width:">HARGA PEMBELIAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       <?php foreach($barang as $b) : ?>

                                        <tr class="pilih_<?=$i?>" data-kodebarang="<?=$b->kodebarang?>" data-kodejenis="<?=$b->kodejenis?>" data-kodesatuan="<?=$b->kodesatuan?>" data-hargapembelian="<?=$b->hargapembelian?>">
                                            <td align="center"><?=getbarang($b->kodebarang)?></td>
                                            <td align="center"><?=$b->kodejenis?></td>
                                            <td align="center"><?=$b->kodesatuan?></td>
                                            <td align="center"><?=$b->hargapembelian?></td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>  
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                

                <script src="<?=base_URL()?>assets/modal/js/jquery-1.11.2.min.js"></script>
                <script src="<?=base_URL()?>assets/modal/datatables/jquery.dataTables.js"></script>

                <script type="text/javascript">
                <?php for ($i = 1; $i <= $jmlBarang; $i++) { ?>
                    $(document).on('click', '.pilih_<?=$i?>', function(e) {
                        document.getElementById("kodebarang_<?=$i?>").value = $(this).attr("data-kodebarang");
                        document.getElementById("kodejenis_<?=$i?>").value = $(this).attr("data-kodejenis");
                        document.getElementById("kodesatuan_<?=$i?>").value = $(this).attr("data-kodesatuan");
                        document.getElementById("hargapembelian_<?=$i?>").value = $(this).attr("data-hargapembelian");
                        $('#myModal_<?=$i?>').modal('hide');
                    });
         
                    $(function() {
                        $("#lookup_<?=$i?>").dataTable();
                    })
                <?php } ?>
                </script>
                
                <style>
                <?php for ($i = 1; $i <= $jmlBarang; $i++) { ?>
                    .pilih_<?=$i?>:hover{
                        cursor: pointer;
                    }
                <?php } ?>
                </style>

