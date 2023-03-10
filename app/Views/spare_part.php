
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

 .sa-content-seller{
 	background-color: #eee;
 	padding-left: 20px;
 	padding-top: 10px;
 	padding-bottom: 10px;
 }

 .sa-content-seller:hover{
 	transition: 0.2;
 	background-color: #222;
 	color: #eee;
 	padding-left: 20px;
 	padding-top: 10px;
 	padding-bottom: 10px;
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
                            <h3 class="sort-by">ALL SPARE PART</h3>
                            
                        </div>
                        <div class="col-md-2 col-xs-1 bg-white">
                          <h3 class="sort-by"><input placeholder="search spare part"  style="padding:10px; border: 2px solid #eee; border-radius: 5px; width: 300px;" class="" type="text" id="myInput" name=""></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-inline grid-list shop" id="myUl">
                            	<?php foreach ($data as $data) {
                            		   if($data['activation']==2 && $data['exp_date'] >= date("Y-m-d")){ 
                            	 ?>
                                <li id="s_li" class="col-md-4 col-xs-6">
                                    <div class="sa-gridlist-item all_grid all_grid">
                                        <!-- content img -->
                                        <div class="sa-content-img">
                                            <?php if(!empty($data['image'])){ ?>
                                               <img class="" src="<?= base_url().'/uploads/spare_part/'.$data['image']?>" >
                                           <?php }else{ ?>
                                               <img src="<?= base_url().'/images/station_profile/no_image.jpg'?>" class="img-responsive" />
                                           <?php } ?>
                                            
                                          
                                            
                                        </div>
                                        <!-- ./content img -->
                                        <div class="sa-content-info">
                                            <!-- content info -->
                                            <div class="sa-content-details">
                                                <!-- content title -->
                                                <div class="sa-content-title">
                                                    <a href="shopping_info.html">
                                                        <h6 class="reli"><?= $data['spare_name']?></h6>
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
                                                        <div class="col-sm-6">Brand:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['brand']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6">weight:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['weight']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-6">quantityInStock:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['quantityInStock']?></i></div>
                                                    </div>
                                                    
                                                </li>
                                                <li>
                                                    <!--<div class="row">
                                                        <div class="col-sm-6"></span>description:</div>
                                                        <div style="padding-top: 3px;" class="col-sm-6"><i><?= $data['description']?></i></div>
                                                    </div>-->
                                                    
                                                </li>
                                                
                                            </ul>
                                            </div>
                                            <!-- ./content info -->
                                            <!-- content price -->
                                            <a href="<?= base_url()."/service_station_details/".$data['station_id']?>">
                                             <div class="sa-content-seller">
                                                <div class="row">
                                                    <div class="col-sm-10 text-left">
                                                         <p>Seller</p>
                                                         <span class=""><?= $data['station_name']?></span>
                                                    </div>
                                                   
                                                </div>
                                                </a>
                                                   
                                                
                                            </div>
                                            <div class="sa-content-price">
                                                <div class="row">
                                                    <div class="col-sm-6 text-left">
                                                         <p>Price</p>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                         <!-- <span class="badge badge-bad">BAD</span> -->
                                                         <span class="">LKR:&nbsp;<?= $data['price']?>.00</span>
                                                         <!-- <span class="badge badge-info">NORMAL</span>
                                                         <span class="badge badge-excellent">EXCELLENT</span> -->
                                                    </div>
                                                </div>
                                            
                                                
                                            </div>
                                            <!-- ./content price -->
                                        </div>
                                    </div>
                                </li>

                            <?php } }?>
                                
                              
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

