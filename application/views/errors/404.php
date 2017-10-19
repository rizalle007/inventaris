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
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="text-center p-t-10">
                                    <h1 class="text-error m-t-50 p-t-10">404</h1>
                                    <h2 class="text-uppercase text-danger m-t-30">Halaman Tidak Ditemukan</h2>
                                    <p class="text-muted m-t-30">Halaman yang kamu maksudkan tidak ditemukan.... </p>
                                    <p class="text-muted">Silahkan kembali ke halaman sebelumnya atau ke Dashboard Utama.</p>
                                    <a class="btn btn-md btn-warning waves-effect waves-light m-t-20" onclick="goBack()"> Kembali ke Halaman Sebelumnya</a>
                                    <a class="btn btn-md btn-primary waves-effect waves-light m-t-20" href="<?=base_URL()?>"> Kembali ke Dashboard</a>
                                </div>

                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->


                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>