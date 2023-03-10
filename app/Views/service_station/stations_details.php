


<!-- load main layout with datatable -->

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

<style type="text/css">
 .badge-bad{
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(230,12,12,0.711922268907563) 0%, rgba(255,0,82,1) 100%);
 }
 .badge-good{
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(130,218,26,0.711922268907563) 0%, rgba(0,255,85,1) 100%);
 }
 .badge-info{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(26,159,218,0.711922268907563) 0%, rgba(0,254,255,1) 100%);
 }
 .badge-excellent{
    background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
 }

 .bg-success{
    background-color: gren !important;
 }


</style>


<body>
<div class="menu-bar menu-bar_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation breadcrumb-navigation_services">
                        <li>
                            <a href="" class="menu1">ALL SERVICE STATION</a>
                        </li>
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
<section class="sa-main-layout-contents">
        <div class="container">
            
            <div class="row">
                <div class="col-md-9">
                    <div class="row row-1">
                        <div class="col-md-10 col-xs-11 bg-white" id="map-sort">
                            <!-- Nav tabs -->
                            <h3 class="sort-by">ALL SERVICE STATION</h3>
                            
                        </div>
                        <div class="col-md-2 col-xs-1 bg-white">
                          <h3 class="sort-by"><input placeholder="search station"  style="padding:10px; border: 2px solid #eee; border-radius: 5px; width: 300px;" class="" type="text" id="myInput" name=""></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           
                            <ul class="list-inline grid-list shop pagination3" id="myUl">
                            	<?php if(!empty($service_station)){ ?>
                            	<?php foreach ($service_station as $data) {
                            		   if($data['activation']==2 && $data['exp_date'] >= date("Y-m-d")){ 
                            	 ?>
                                <li id="s_li" class="col-md-4 col-xs-6">
                                    <div class="sa-gridlist-item all_grid all_grid">
                                        <!-- content img -->
                                        <div class="sa-content-img">
                                            <?php if(!empty($data['profile_image'])){ ?>
                                               <img class="" src="<?= base_url().'/'.$data['profile_image']?>" >
                                           <?php }else{ ?>
                                               <img src="<?= base_url().'/images/station_profile/no_image.jpg'?>" class="img-responsive" />
                                           <?php } ?>
                                            
                                            <div  class="sa-grid-over">
                                                <ul>
                                                    <!-- <li class="sa-realestate-c-bg">
                                                        <a href="pets_info.html"><span class="mdi-maps-layers"></span>Add to Compare</a>
                                                    </li>
                                                    <li class="sa-realestate-b-bg">
                                                        <a href="pets_info.html"><span class="mdi-action-favorite-outline"></span>Add to Favorite</a>
                                                    </li> -->
                                                    <li style="line-height: 185px;" class="sa-realestate-bg">
                                                        <a href="<?= base_url()."/service_station_details/".$data['station_id']?>"><span class="mdi-action-receipt"></span>View Details</a>
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
                                                    <a href="shopping_info.html">
                                                        <h6 class="reli"><?= $data['station_name']?></h6>
                                                    </a>
                                                </div>
                                                <!-- ./content title -->


                                    <?php 
                                    $db = \Config\Database::connect();
                                    $query = $db->query("SELECT station_category.id,service_categories.cat_name FROM station_category INNER JOIN service_categories ON station_category.cat_id = service_categories.id AND station_category.station_id  ='".$data['station_id']."'");
                                    $result= $query->getResultArray();
                                   
                                    ?>
                                                <!-- <ul>
                                                    <?php if(is_array($result) && count($result)>0){ foreach($result as $cat){ ?>
                                                    <li><?= $cat['cat_name'];?></li>
                                                   
                                                <?php }} else{ ?>
                                                    <li>no category selected</li>
                                               <?php } ?>
                                                </ul> -->
                                                <ul>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6"><span class="mr-3 fa fa-map-marker"></span>Address:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['address']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6"><span class="mr-3 fa fa-envelope"></span>Email:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['email']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6"><span class="mr-3 fa fa-phone"></span>Cotact No:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['phone_number']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                <!-- <li><span class="mr-3 fa fa-map-marker"></span>Address: <i><?= $data['address']?></i></li>
                                                <li><span class="mr-1 fa fa-envelope"></span>Email: <i><?= $data['email']?></i></li>
                                                <li><span class="mr-1 fa fa-phone"></span>Cotact No: <i><?= $data['phone_number']?></i></li> -->
                                            </ul>
                                            </div>
                                            <!-- ./content info -->
                                            <!-- content price -->
                                            <div class="sa-content-price">
                                                <div class="row">
                                                   <!--  <div class="col-sm-6 text-left">
                                                         <p>Rate</p>
                                                    </div> -->
                                                    <div class="col-sm-12 text-right">




    <?php 

     
      $query1 = $db->query("SELECT id FROM rating where station_id='".$data['station_id']."' and rating_type=1");
      $bad= $query1->getResultArray();
      $b=count($bad);

      $query2 = $db->query("SELECT id FROM rating where station_id='".$data['station_id']."' and rating_type=2");
      $normal= $query2->getResultArray();
      $n=count($normal);

      $query3 = $db->query("SELECT id FROM rating where station_id='".$data['station_id']."' and rating_type=3");
      $good= $query3->getResultArray();
      $g=count($good);

      $query4 = $db->query("SELECT id FROM rating where station_id='".$data['station_id']."' and rating_type=4");
      $excellent= $query4->getResultArray();
      $e=count($excellent);

      $total=$b+$n+$g+$e;

      if($b!=0 && $total!=0){$b1=$b*100/$total;}else{$b1=0;}
      if($n!=0 && $total!=0){$n1=$n*100/$total;}else{$n1=0;}
      if($g!=0 && $total!=0){$g1=$g*100/$total;}else{$g1=0;}
      if($e!=0 && $total!=0){$e1=$e*100/$total;}else{$e1=0;}
    
     
      ?>


<div class="col-md-12">
                <div class="barWrapper progess1">
                    
                    
                    <div class="progress progress1">
                        <div class="progress-bar" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: <?= $b1."%"?>;">
                            <span class="popOver tooltip-colr" data-toggle="tooltip" data-placement="top" title="" data-original-title="56%" aria-describedby="tooltip869183"> </span><div class="tooltip fade top in text-right" role="tooltip" id="tooltip869183" style="top: -578px; left: 28.0312px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div></div>
                        </div>
                    </div>
                </div>
                <div class="barWrapper progess2">
                    <div class="progress progress2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: <?= $n1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="43%" aria-describedby="tooltip999547"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip999547" style="top: -578px; left: 28.0312px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div></div>
                        </div>
                    </div>
                </div>
                
                <div class="barWrapper progess4">
                    <div class="progress progress4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: <?= $g1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="22%" aria-describedby="tooltip130329"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip130329" style="top: -578px; left: 28.0312px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div></div>
                        </div>
                    </div>
                </div>
                <div class="barWrapper progess3">
                    <div class="progress progress3">
                        <div class="progress-bar" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: <?= $e1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="49%" aria-describedby="tooltip359311"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip359311" style="top: -578px; left: 28.0312px; display: block;"><div class="tooltip-arrow" style="left: 50%;"></div></div>
                        </div>
                    </div>
                </div>
            </div>


                                                         <!-- <span class="badge badge-bad">BAD</span> -->
                                                         <!-- <span class="badge badge-good">GOOD</span> -->
                                                         <!-- <span class="badge badge-info">NORMAL</span>
                                                         <span class="badge badge-excellent">EXCELLENT</span> -->
                                                </div>
                                                </div>
                                                  
                                                   
                                                
                                            </div>
                                            <!-- ./content price -->
                                        </div>
                                    </div>
                                </li>

                            <?php } } }else{ echo "No service station found for this service..";}?>
                                
                                
                                
                            </ul>
                            <div id="sa-mapview">
                                <!--google map section-->
                                <div id="test" style="height: 870px; width: 100%;">
                                </div>
                                <!--google map section closed-->
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>

</body>


<?= $this->endSection() ?>

