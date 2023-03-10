<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Service My car</title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url().'/admin_theam/vendors/typicons.font/font/typicons.css'?>">
    <link rel="stylesheet" href="<?= base_url().'/admin_theam/vendors/css/vendor.bundle.base.css'?>">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url().'/admin_theam/css/vertical-layout-light/style.css'?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url().'/admin_theam/images/favicon.png'?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/datatables/datatables.css'?>">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <link href="<?= base_url('sweetalert2/sweetalert2.css'); ?>" rel="stylesheet">
  </head>

  <style type="text/css">
      td{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }

      th{
        padding-top: 12px !important;
        padding-bottom: 12px !important;

      }
      thead{
        background-color: #cccccc !important;
      }
  </style>

<body class="bg-light">
    
    
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>

    <!-- navbar -->
    <?= view('App\Views\components\admin_nav') ?>

    <main id="main">
     

      <!-- load content from other views -->
      <?= $this->renderSection('main') ?>
    </main>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

   <input type="hidden" id="base_url" value="<?= base_url(); ?>" name="">
    
    <script src="<?= base_url().'/admin_theam/vendors/js/vendor.bundle.base.js'?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url().'/admin_theam/js/off-canvas.js'?>"></script>
    <script src="<?= base_url().'/admin_theam/js/hoverable-collapse.js'?>"></script>
    <script src="<?= base_url().'/admin_theam/js/template.js'?>"></script>
    <script src="<?= base_url().'/admin_theam/js/settings.js'?>"></script>
    <script src="<?= base_url().'/admin_theam/js/todolist.js'?>"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?= base_url().'/admin_theam/vendors/progressbar.js/progressbar.min.js'?>"></script>
    <script src="<?= base_url().'/admin_theam/vendors/chart.js/Chart.min.js'?>"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?= base_url().'/admin_theam/js/dashboard.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/datatables/datatables.js'?>"></script>

    <script type="text/javascript" src="<?= base_url().'/script/users.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/script/spare-parts.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/script/service.js'?>"></script>
     <script src="<?= base_url('sweetalert2/sweetalert2.js'); ?>"></script>
    <!-- End custom js for this page-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js
"></script>




    
    <?= $this->renderSection('script') ?>
</body>
<!-- ======= Footer ======= -->
  

</html>