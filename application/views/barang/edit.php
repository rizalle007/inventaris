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
                                    <h4 class="page-title">Edit Barang / Produk</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-archive"></i>&nbsp; Barang / Produk</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Barang / Produk</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('barang/edit')?>
                            <?=form_hidden('kodebarang', $barang['kodebarang'])?>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>KODE BARANG</label>
                                            <div>
                                                <input type="text" class="form-control" name="kodebarang" value="<?=$barang['kodebarang']?>" required disabled
                                                       data-parsley-minlength="3" data-parsley-maxlength="10" placeholder="Masukkan Kode Barang"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>BARCODE</label>
                                            <div>
                                                <input type="number" class="form-control" name="barcode" value="<?=$barang['barcode']?>" required autofocus 
                                                       data-parsley-type="number" data-parsley-minlength="10" data-parsley-maxlength="15" placeholder="Masukkan Barcode Barang"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <div>
                                                <input type="text" class="form-control" name="namabarang" value="<?=$barang['namabarang']?>" required autofocus 
                                                       data-parsley-minlength="3" data-parsley-maxlength="30" placeholder="Masukkan Nama Barang"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Barang</label>
                                            <div>
                                                <input type="number" class="form-control" name="hargabarang" value="<?=$barang['hargabarang']?>" required autofocus data-parsley-type="number" data-parsley-minlength="1" data-parsley-maxlength="10" placeholder="Masukkan Harga Barang"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="heard">Jenis Barang</label>
                                            <select id="heard" class="form-control" name="kodejenis" required autofocus>
                                                <option value="">Pilih Jenis Barang</option>
                                                <?php foreach ($jenis as $j):?>
                                                    <option value="<?=$j->kodejenis?>" <?php if($barang['kodejenis']==$j->kodejenis) { echo "selected=selected";}?>><?=$j->namajenis?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="heard">Satuan Barang</label>
                                            <select id="kodejenis" class="form-control" name="kodesatuan" required autofocus>
                                                <option value="">Pilih Satuan Barang</option>
                                                <?php foreach ($satuan as $s):?>
                                                    <option value="<?=$s->kodesatuan?>" <?php if($barang['kodesatuan']==$s->kodesatuan) { echo "selected=selected";}?>><?=$s->namasatuan?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="heard">Rak Barang</label>
                                            <select id="heard" class="form-control" name="koderak" required autofocus>
                                                <option value="">Pilih Rak Barang</option>
                                                <?php foreach ($rak as $r):?>
                                                    <option value="<?=$r->koderak?>" <?php if($barang['koderak']==$r->koderak) { echo "selected=selected";}?>><?=$r->namarak?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stok Barang</label>
                                            <div>
                                                <input type="number" class="form-control" name="jumlahbarang" value="<?=$barang['jumlahbarang']?>" data-parsley-minlength="1" data-parsley-maxlength="10" required autofocus 
                                                       data-parsley-type="number" placeholder="Masukkan Stok Barang"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group m-b-0">
                                            <div>
                                                <?=anchor('barang', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
