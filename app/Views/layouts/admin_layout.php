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
    <title>Best Bootstrap Directory Template | Business Directory Bootstrap Template -Globals</title>
    <!--bootstrap css link-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/roboto.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/bootstrap.min.css'?>">
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
    <!--custom css link-->
    <!--slider-->
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/index-slider.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/directory.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/index.css'?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/css/red-color.css'?>">
    


    
    <link rel="stylesheet" type="text/css" href="<?= base_url().'/datatables/datatables.css'?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

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
        
    </style>

    
</head>

<body class="bg-light">
    
    
    <!-- load extended modals -->
    <?= $this->renderSection('modals') ?>

    <!-- navbar -->
    <?= view('App\Views\components\navbar') ?>

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





    

    
    <?= $this->renderSection('script') ?>
</body>
<!-- ======= Footer ======= -->
  <footer class="footer-section home hover-red">
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <img src="<?= base_url().'/images/mainimages/footer-logo.png'?>" alt="footer_logo" class="footer-logo-p">
                    <p class="foot-logo-text">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.
                        <a href="about.html" class="read-more" id="load">Read More...
                        </a>
                    </p>
                    <p class="hidden foot-logo-text"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <h6 class="footer-heading-p social-pad">useful links</h6>
                            <ol class="breadcrumb footer-copy-right">
                                <li>
                                    <a href="index-2.html" class="">Home</a>
                                </li>
                                <li>
                                    <a href="#" class="">Forums</a>
                                </li>
                                <li>
                                    <a href="#" class="">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="">Help Center</a>
                                </li>
                                <li>
                                    <a href="#" class="">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="contacts.html" class="">Contacts</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4">
                    <h6 class="footer-heading-p">Recent News</h6>
                    <ul class="footer-news">
                        <li class="li-hover">
                            <h4 class="clock"><i class="mdi-action-schedule ad-clock"></i> 07 May, 2015</h4>
                            <p class="footer-col1 footer-left">
                                <a href="news.html"> Mirum est notare quam littera gothica, quam nunc putamus parum, anteposuerit litterarum.</a>
                            </p>
                        </li>
                        <li class="li-hover">
                            <h4 class="clock"><i class="mdi-action-schedule ad-clock"></i> 23 April, 2015</h4>
                            <p class="footer-col1 footer-left">
                                <a href="news.html"> Claritas est etiam processus dynamicus.</a>
                            </p>
                        </li>
                        <li class="border-none li-hover">
                            <h4 class="clock"><i class="mdi-action-schedule ad-clock"></i> 05 December, 2014</h4>
                            <p class="footer-col1 footer-left">
                                <a href="news.html">Eodem modo typi, qui nunc nobis videntur clari, sollemnes in futurum.</a>
                            </p>
                        </li>
                    </ul>
                    <div class="img-footer">
                        <div class="row dribble">
                            <ul class="shots list-inline"></ul>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 home_sub">
                    <h6 class="footer-heading-p">Email Newsletters</h6>
                    <p class="footer-col1">
                        Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.
                    </p>
                    <form class="home_form">
                        <div class="input-name form-group">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" for="fname">FullName</label>
                                <input type="email" id="fname" class="form-control">
                                <span class="material-input"></span></div>
                        </div>
                        <div class="input">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label" for="mail">Email Address </label>
                                <input type="email" id="mail" class="form-control">
                                <span class="material-input"></span></div>
                        </div>
                    </form>
                    <button class="subscribe-btn btn btn-default">Subscribe Now</button>
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb copy-right-box">
                        <li>
                            <img alt="copyright" class="copyright-img" src="<?= base_url().'/images/copyright.png'?>">&nbsp; &nbsp; &copy;
                        </li>
                        <li>2015 Good Investment
                            <a class="" href="#">Globals</a>
                        </li>
                        <li>Designed by
                            <a class="" href="http://codecanyon.net/user/jyostna">Jyostna</a>
                        </li>
                        <li>Only for
                            <a class="" href="#">Envato Market</a>
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