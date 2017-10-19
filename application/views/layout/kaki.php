<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <!-- jQuery  -->
        <script src="<?=base_URL()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_URL()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_URL()?>assets/js/metisMenu.min.js"></script>
        <script src="<?=base_URL()?>assets/js/waves.js"></script>
        <script src="<?=base_URL()?>assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="<?=base_URL()?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="<?=base_URL()?>assets/plugins/echart/echarts-all.js"></script>

        <!-- Dashboard init -->
        <script src="<?=base_URL()?>assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="<?=base_URL()?>assets/js/jquery.core.js"></script>
        <script src="<?=base_URL()?>assets/js/jquery.app.js"></script>

        <!-- Modal-Effect -->
        <script src="<?=base_URL()?>assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/custombox/js/legacy.min.js"></script>

        <script src="<?=base_URL()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="<?=base_URL()?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="<?=base_URL()?>assets/pages/jquery.datatables.init.js"></script>

        <!-- Parsley js -->
        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/parsleyjs/parsley.min.js"></script>

        <!-- App js -->
        <script type="text/javascript">
            $(document).ready(function () {
                $('form').parsley();
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "<?=base_URL()?>assets/plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();


            $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                        .on('form:submit', function () {
                            return false; // Don't submit form for this demo
                        });
        </script>

        <!--Form Wizard-->
        <script src="<?=base_URL()?>assets/plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>

        <!--wizard initialization-->
        <script src="<?=base_URL()?>assets/pages/jquery.wizard-init.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>

        <!--Summernote js-->
        <script src="<?=base_URL()?>assets/plugins/summernote/summernote.min.js"></script>
        <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 200,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

                $('.inline-editor').summernote({
                    airMode: true
                });

            });
        </script>

        <script src="<?=base_URL()?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="<?=base_URL()?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="<?=base_URL()?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="<?=base_URL()?>assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="<?=base_URL()?>assets/pages/jquery.autocomplete.init.js"></script>

        <!-- Init Js file -->
        <script type="text/javascript" src="<?=base_URL()?>assets/pages/jquery.form-advanced.init.js"></script>


        <script type="text/javascript">
            jQuery(function($) {
                $('.autonumber').autoNumeric('init');
            });
        </script>

        <script>
            $("#alert").fadeTo(3000, 500).slideUp(500, function() {
                $("#alert").alert('close');
            });
        </script>

    </body>
</html>
