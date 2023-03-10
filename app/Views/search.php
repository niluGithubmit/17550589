<?php 

//echo $session['ownerData'];
if(isset($_SESSION['ownerData'])){

    echo $this->extend('layouts/customer_layout');
}

else if(isset($_SESSION['service_stationData'])){

    echo $this->extend('layouts/service_station_layout');
}else{
    echo $this->extend('layouts/site_layout');
}

 ?>



<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<body>
    <!--Left Menu Button-->
    <div id="wrapper">

    <!--header section end-->
    <!--breadcrumb-->
    <div class="menu-bar menu-bar_auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation breadcrumb-navigation_auto">
                        <li>
                          
                        </li>
                        <li class="active menu3">
                            <a href="#"> Service Stations Near You</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb closed-->
    <!--slider-->
    <!--
#################################
    - THEMEPUNCH BANNER -
#################################
-->
    
    <!--slider closed-->
    <!-- section Real-Estate Contents -->
    <div class="container">
        <div class="row mar10">
            <div class="col-md-9  col-xs-12">
                <div class="row row-1">
                    
              
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="grid-list list-inline" id="grid-list">

                           <?php foreach ($result as $r) {?>
                        <li class="col-md-4 col-xs-6">
                                <div class="sa-gridlist-item all_grid">
                                    <!-- content img -->
                                    <div class="sa-content-img">
                                        <img src="images/gridlist/car1.png" alt="car1" class="img-responsive">
                                        <div class="sa-grid-over">
                                            <ul>
                                                <li class="sa-realestate-c-bg">
                                                    <a href="automotive_info.html"><span class="mdi-maps-layers"></span>Add to Compare</a>
                                                </li>
                                                <li class="sa-realestate-b-bg">
                                                    <a href="automotive_info.html"><span class="mdi-action-favorite-outline"></span>Add to Favorite</a>
                                                </li>
                                                <li class="sa-realestate-bg">
                                                    <a href="automotive_info.html"><span class="mdi-action-receipt"></span>View Details</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ./content img -->
                                    <div class="sa-content-info">
                                        <!-- content info -->
                                        <div class="sa-content-details">
                                            <!-- content title -->
                                            <div class="sa-content-title">
                                                <a href="automotive_info.html">
                                                    <h6 class="reli"><?php echo $r->station_name; ?></h6>
                                                </a>
                                            </div>
                                            <!-- ./content title -->
                                            <ul>
                                                <li><span class="material-icons">store</span>Telephone: <i><?php echo $r->phone_number; ?></i></li>
                                                <li><span class="material-icons">today</span>Email: <i><?php echo $r->email; ?></i></li>
                                                <li><span class="material-icons">filter</span>Mileage: <i>87000</i></li>
                                                <a href="<?= base_url()."/service_station_details/".$r->station_id;?>">View Details</a>
                                            </ul>
                                        </div>
                                        <!-- ./content info -->
                                        <!-- content price -->
                                        <div class="sa-content-price">
                                            <p>Rs. 10,000</p>
                                            <div class="sa-agent">
                                                <img src="images/agent/agent1.png" alt="" class="img-responsive img-circle">
                                            </div>
                                            <div class="sa-agent-name">
                                                <p><?php echo $r->contact; ?></p>
                                                <!--<button class="btn btn-default contact">contacts</button>-->
                                            </div>
                                        </div>
                                        <!-- ./content price -->
                                    </div>
                                </div>
                            </li>
                        <?php }?>
                           
                        </ul>
                       
                    </div>
                </div>
            </div>
            <!-- filter-styles -->
        
               
        </div>
    </div>
   
 
   
 
</body>
<?= $this->endSection() ?>

<!-- Mirrored from demo.lorvent.com/globals/directory/automotive_gridlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 04:46:16 GMT -->
</html>