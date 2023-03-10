    <!--Left Menu Button-->
    <div id="wrapper">
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
            <ul class="nav sidebar-nav">
                <li class="fixed-top"><i class="mdi-navigation-arrow-back back-icon"></i></li>
                <li class="profile-box">
                    <div class="sidebar-brand">
                        <?php if(!empty($_SESSION['service_stationData']['profile_image'])){ ?>
                        <img style="margin-left: 25px" width="28%" src="<?= base_url().'/'.$_SESSION['service_stationData']['profile_image'];?>" class="img-responsive img-circle" alt="userprofile">
                    <?php }else{ ?>
                        <img style="margin-left: 25px" width="28%" src="<?= base_url().'/images/user2.png'?>" class="img-responsive img-circle" alt="userprofile">
                    <?php } ?>
                        <a href="#" class="profile-name">
                            <?= $_SESSION['service_stationData']['station_name'] ?>
                        </a>
                        <a href="#" class="user">
                            <?= $_SESSION['service_stationData']['email'] ?>
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
                    <a href="<?= base_url().'/station_dashboard'?>" class="plan-a">Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url().'/services_station_appointment'?>" class="plan-a">Appointments</a>
                </li>
                <li>
                    <a href="<?= base_url().'/subscription-plan'?>" class="plan-a">Subscription Plans</a>
                </li>
                <li>
                    <a href="<?= base_url().'/service_spare_part'?>" class="plan-a">Add Spare Part</a>
                </li>
                <li>
                    <a href="<?= base_url().'/service_categories'?>" class="plan-a">Add Services</a>
                </li>
                <li>
                    <a href="<?= base_url().'/availability'?>" class="plan-a">Availability</a>
                </li>
                <li>
                    <a href="<?= base_url().'/reports'?>" class="plan-a">Reports</a>
                </li>
                <li>
                    <a href="<?= base_url().'/services_station_service_history'?>" class="plan-a">Service History</a>
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
                                    <a href="<?= base_url().'/station_profile/'.$_SESSION['service_stationData']['station_id'] ?>" class="icon-centent"><i class="material-icons menu-i">layers</i>MY PROFILE</a>
                                </li>
                               
                                <li class="drop li-h">
                                    <a href='<?= base_url()."/station_logout"; ?>' class="icon-centent"><i class="mdi-navigation-arrow-back menu-i"></i>LOGOUT</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>