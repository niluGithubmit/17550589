    <!--Left Menu Button-->
    <div id="wrapper">
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
            <ul class="nav sidebar-nav">
                <li class="fixed-top"><i class="mdi-navigation-arrow-back back-icon"></i></li>
                <li class="profile-box">
                    <div class="sidebar-brand">
                        <?php if(!empty($_SESSION['ownerData']['profile_image'])){ ?>
                        <img style="margin-left: 25px" width="28%" src="<?= base_url().'/'.$_SESSION['ownerData']['profile_image'];?>" class="img-responsive img-circle" alt="userprofile">
                    <?php }else{ ?>
                         <img style="margin-left: 25px" width="28%" src="<?= base_url().'/images/user2.png'?>" class="img-responsive img-circle" alt="userprofile">
                    <?php } ?>
                        <a href="#" class="profile-name">
                            <?= $_SESSION['ownerData']['owner_name'] ?>
                        </a>
                        <a href="#" class="user">
                            <?= $_SESSION['ownerData']['email'] ?>
                        </a>
                    </div>

                </li>
            </ul>
            <div>
                <h5 class="plan-types">Services & Vehicle Infomation</h5>
            </div>
            <ul class="nav sidebar-nav">
                <li></li>
                <li>
                    <a href="<?= base_url().'/customer_dashboard'?>" class="plan-a">Dashboard</a>
                </li>
               <!--  <li>
                    <a href="<?php //echo base_url().'/customer_appointments/15'?>" class="plan-a">My Appointment</a>
                </li> -->
                <li>
                    <a href="<?= base_url().'/customer_appointments'?>" class="plan-a">My Appointment</a>
                </li>
                <li>
                    <a href="<?= base_url().'/vehicles-information'?>" class="plan-a">Vehicles Information</a>
                </li>
                <li>
                    <a href="<?= base_url().'/add-vehicle'?>" class="plan-a">Add Vehicles</a>
                </li>
                <li>
                    <a href="<?= base_url().'/service_history'?>" class="plan-a">Service History</a>
                </li>
            </ul>
           
        </nav>
        <!-- /#page-content-wrapper -->
    </div>
    <!--wrapper -->
    <!--Left Menu Button end-->
    <!--header section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="nav-expander" class="hamburger is-closed" data-toggle="offcanvas">
                        <i class="mdi-navigation-menu menu-icon"></i>
                    </a>
                    <a href='"index-2.html"'>
                        <img src="<?= base_url().'/images/logo.png'?>" alt="logo" class="global-logo ">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-links">
                   <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= base_url();?>">Home</a>
                        </li>
                        <li>
                            <a href='<?= base_url()."/services_station"; ?>'>Service Station</a>
                        </li>
                        <li>
                            <a href='<?= base_url()."/services"; ?>'>Services</a>
                        </li>
                        <li>
                            <a href='<?= base_url()."/spare_part"; ?>'>Spare Parts</a>
                        </li>
                        <li>
                            <a href="<?= base_url()."/contacts"; ?>">Contact Us</a>
                        </li>
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi-navigation-more-vert menu-icon2"></i></a>
                            <ul class="menu toggle-menu-possition">
                                
                                <li class="drop li-h">
                                    <a href="<?= base_url().'/customer_profile' ?>" class="icon-centent"><i class="material-icons menu-i">layers</i>MY PROFILE</a>
                                </li>
                               
                                <li class="drop li-h">
                                    <a href='<?= base_url()."/customer_logout"; ?>' class="icon-centent"><i class="mdi-navigation-arrow-back menu-i"></i>LOGOUT</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>