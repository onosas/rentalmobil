<?php  
cek_session_admin();
// $logo = $this->home->logo()->row_array();
// $rows = $this->home->identitas()->row_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <!-- <title>Wellcome Administrator</title> -->
    <!-- FAVICON -->
    
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url('assets/admin/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?php echo base_url('assets/admin/') ?>vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?php echo base_url('assets/admin/') ?>vendors/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>vendors/jquery-minicolors/jquery.minicolors.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?php echo base_url('assets/admin/') ?>css/main.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/admin/') ?>css/sweetalert.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
       
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <!-- <?php include "page_heading.php"; ?> -->
            <?php echo $content; ?>
            <!-- END PAGE CONTENT-->
            <!-- <?php include "footer.php"; ?> -->
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php include "theme.php"; ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <!-- <?php include "paga.php"; ?> -->
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?php echo base_url('assets/admin/') ?>vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url('assets/admin/') ?>js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="<?php echo base_url('assets/admin/') ?>js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>js/scripts/chartjs_demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendors/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>js/scripts/form-plugins.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/') ?>js/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/ckeditor/') ?>ckeditor.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assetss/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>

    <script>
        jQuery(document).ready(function($){
            $('.hapus').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                         title: "Apakah anda yakin?",
                          text: "Data yang terhapus tidak dapat dikembalikan!",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonClass: "btn-danger",
                          confirmButtonText: "Ya, hapus!",
                          cancelButtonText: "Tidak, batalkan!",
                          closeOnConfirm: false,
                          closeOnCancel: false
                        },function(){
                        window.location.href = getLink
                    });
                // return false;
            });
        });
     
    </script>

    <script>
      CKEDITOR.replace('editor1' ,{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder'); ?>'
      });
    </script>

    <script>
      $(function(){
          $('#success').delay(4000).fadeOut();
          $('#error').delay(4000).fadeOut();
      });
    </script>
    <?php include "modal.php"; ?>
</body>

</html>