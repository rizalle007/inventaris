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
                                    <h4 class="page-title">Edit Pengguna</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li><i class="fi-cog"></i>&nbsp; Pengaturan</li>
                                        <li><i class="mdi mdi-account-multiple"></i>&nbsp; Data Pengguna</li>
                                        <li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Pengguna</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="card-box">
                            <?=form_open('pengguna/edit')?>
                            <?=form_hidden('namauser', $pengguna['namauser'])?>
                                <div class="form-group">
                                    <label>NAMA USER</label>
                                    <div>
                                        <input type="text" class="form-control" name="namauser" value="<?=$pengguna['namauser']?>" disabled autofocus data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Masukkan namauser"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <div>
                                        <input type="password" class="form-control" name="katasandi" value="<?=$pengguna['katasandi']?>" disabled autofocus data-parsley-minlength="3" data-parsley-maxlength="100" placeholder="Masukkan kata sandi"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <div>
                                        <input type="text" class="form-control" name="namalengkap" value="<?=$pengguna['namalengkap']?>" required  autofocus data-parsley-minlength="3" data-parsley-maxlength="20" placeholder="Masukkan nama pengguna"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="heard">Level</label>
                                    <select id="heard" class="form-control" name="kodelevel" required autofocus>
                                        <option value="">Pilih Level Pengguna</option>
                                        <?php foreach ($level as $l):?>
                                            <option value="<?=$l->kodelevel?>" <?php if($pengguna['kodelevel']==$l->kodelevel) { echo "selected=selected";} ?>><?=$l->namalevel?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                <label>Foto</label>
                                    <div>
                                        <input type="file" class="filestyle" data-placeholder="Tidak ada gambar" name="fotofile" autofocus>
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <?php 
                                            $foto = 'avatar.jpg';
                                            if($pengguna['foto'] && file_exists('uploads/pengguna/'.$pengguna['foto'])) {
                                                $foto = $pengguna['foto'];
                                            }
                                        ?>
                                        <div class="fileupload-new thumbnail" style="width: 300px; height: 150px;">
                                            <img src="<?=base_URL().'uploads/pengguna/'.$foto?>" alt="foto" style="height: 140px;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div>
                                        <?=anchor('pengguna', '<i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali', array('class' => 'btn btn-warning waves-effect m-l-5'))?>
                                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-save"></i>&nbsp; Simpan</button>
                                    </div>
                                </div>
                            </form>

                            <div class="visible-lg" style="height: 194px;"></div>

                        </div> <!-- end card-box -->


                    </div> <!-- container -->

                </div> <!-- content -->
