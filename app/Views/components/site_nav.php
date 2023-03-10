    <!--Left Menu Button-->
    <div id="wrapper">
        <!-- Sidebar -->
        
        <!-- /#page-content-wrapper -->
    </div>
    <!--wrapper -->
    <!--Left Menu Button end-->
    <!--header section-->
    <header>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div  class="navbar-header">
                   
                  <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-links" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  href='"index-2.html"'>
                        <img style="margin-top: 25%;" src="<?= base_url().'/images/logo.png'?>" alt="logo" class="global-logo ">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-links">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= base_url();?>">Home</a>
                        </li>
                        <li>
                            <a href='<?= base_url()."/services_station"; ?>'>Service Stations</a>
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
                    
                    <ul class="text-right">
                        <li style="margin-top:38px"><a href="<?= base_url().'/customer_login' ?>"><button class="btn btn-sm btn-success">Login</button></a></li>

                       
                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>