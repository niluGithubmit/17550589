<!DOCTYPE html>
<html lang="en">

<head>
   <!--meta tag css link-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Bootstrap Business Directory Template, Best Responsive Directory Template, Bootstrap Directory Listing
Template">
    <meta name="description" content="Globals directory is the perfect business directory template used for different businesses. Directory
module helps to make the business listings around. It is the best directory template and accomplished
the top position in the market. Best web template used for directory.">
    <!--favicon-->
    <link rel="icon" href="images/fevicon.ico" type="image/x-icon">
    <!--title-->
    <title>Service My Car</title>
    <!--bootstrap css link-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/roboto.min.css'?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/bootstrap.min.css'?>"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href="<?= base_url().'/css/bootstrap-material-design.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/material.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/material-design-icon.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/ripples.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/font-awesome.min.css'?>">
    <!--leftmenu-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/leftmenu.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/custom.css'?>">
    <!--revolution-slider-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/revolution-slider/settings.css'?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/revolution-slider/layers.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/revolution-slider/navigation.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/revolution-slider/style.css'?>" media="screen" />
    <!--tooltip-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/tooltip/html5tooltips.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/tooltip/html5tooltips.animation.css'?>">
    <!--animated css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/animate.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/sa-plugin/sa-style.css'?>">
    <!--custom css link-->
    <!--slider-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/index-slider.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/directory.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/index.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/red-color.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/datatables/datatables.css'?>">


    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/about.css'?>">

    <style type="text/css">
        .form-group label{
            line-height: 2.2222 !important;
        }
        .card input{
            color: black;
            
        }
        .card select{
            color: black;
               
        }
        .card a{
            margin-top: 0px !important ;
            margin-bottom: 0px !important ;
              
        }
        .card{
            margin-bottom: 20px;
            padding: 20px;
        }
        .invalid-feedback{
            color: red;
            font-weight: bolder;
        }
        .error {
            background-color: rgba(255, 0, 0, 0);
            color: red;

            padding-bottom: 0% !important;
            padding-top: 0% !important;
            margin-top: 0 !important;
        }
        .has-success{
            border-bottom: 2px solid green !important;
            border-left: 0px ;
            border-top: 0px ;
            border-right: 0px ;
        }
        .has-error .form-control {
            border-bottom: 2px solid red !important;
            border-left: 0px !important;
            border-top: 0px !important;
            border-right: 0px !important;
        }
        
        input.form-control.error{border-bottom: 3px solid red !important;color: white;}
        
    </style>

</head>

<body class="bg-light">
    
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>

    <!-- navbar -->
    <?= view('App\Views\components\customer_navbar') ?>

    <main id="main">
     

      <!-- load content from other views -->
      <?= $this->renderSection('main') ?>
    </main>

   <input type="hidden" id="base_url" value="<?= base_url(); ?>" name="">
    
    <!-- load extended scripts -->
    <!--Back to top button end-->
    <!--jquery js file-->
    <script type="text/javascript" src="<?= base_url().'/js/jquery-1.11.3.min.js'?>"></script>
    <!--bootstrap js files-->
    <script type="text/javascript" src="<?= base_url().'/js/bootstrap.min.js'?>"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="<?= base_url().'/js/material.min.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/js/ripples.min.js'?>"></script>
    <!--revolution-slider-->
    <script type="text/javascript" src="<?= base_url().'/js/revolution-slider/jquery.themepunch.tools.min.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/js/revolution-slider/jquery.themepunch.revolution.min.js'?>"></script>
    <!--Quickview-->
    <script type="text/javascript" src="<?= base_url().'/js/quickview/jquery.fs.boxer.js'?>"></script>
    <!--tooltip js file-->
    <script type="text/javascript" src="<?= base_url().'/js/tooltip/html5tooltips.js'?>"></script>
    <!--wow-->
    <script type="text/javascript" src="<?= base_url().'/js/wow/wow.min.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/js/custom.js'?>"></script>
    <!--page js-->
    <script type="text/javascript" src="<?= base_url().'/js/index.js'?>"></script>

    <script type="text/javascript" src="<?= base_url().'/datatables/datatables.js'?>"></script>

    <script type="text/javascript" src="<?= base_url().'/script/users.js'?>"></script>

    <script type="text/javascript" src="<?= base_url().'/script/spare-parts.js'?>"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="<?= base_url().'/script/customer.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/script/time_slot.js'?>"></script>
    <script type="text/javascript" src="<?= base_url().'/script/rate.js'?>"></script>
    <?php if($page_name=='services'){ ?>
        <script type="text/javascript" src="<?= base_url().'/script/datatables.js'?>"></script>
    <?php } ?>
    
    
    <?= $this->renderSection('script') ?>
</body>
<div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb copy-right-box">
                        <li>
                            <img alt="copyright" class="copyright-img" src="<?= base_url().'/images/copyright.png'?>">&nbsp; &nbsp; &copy;
                        </li>
                        <li>&copy Copyright 2022
                            <a class="" href="#">servicemycar.com</a>
                        </li>
                        <li>Designed by
                            <a class="" href="http://codecanyon.net/user/jyostna">Niluka Liyanage</a>
                        </li>
                        <li>
                            <a class="" href="#">for Masters Final Project</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--Footer section ends-->
    <!--Back to top button-->
    <a href="#" id="back-to-top" title="Back to top" class="arrow-btn btn btn-default">
        <i class="mdi-hardware-keyboard-arrow-up arrow-footer"></i>
    </a>

</html>