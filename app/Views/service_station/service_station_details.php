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
	.sa-content-details ,.sa-content-price{
		border-bottom: 5px solid #b8c728;
	}
    .av_price{
        font-size: 2.0rem;
        font-weight: bolder;

    }
    .price{
        font-size: 2.0rem;
        font-weight: bolder;
        color: #888;
    }
    .form-control-price{
        padding: 5px;
        border: 1px solid #aaa;
    }
    .col-md-12 > .sa-gridlist-item .sa-content-details{
        height: 247px !important;
    }

    .col-md-12 > .sa-gridlist-item .sa-content-info{
        width: auto;
    }
    .col-md-12 > .sa-gridlist-item .sa-content-price{
        height: 247px;
    }

    .bg-dark{
        padding: 20px !important;
        background-color:#ccc ;
        border-radius: 20px;
        margin-top: 12px;
    }
    img{
        border-radius: 20px;
    }

</style>
    <?php 
    $db = \Config\Database::connect();
     
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

    <?= view('App\Views\components\notifications') ?>
    <div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation"> 
                        <li class="active">
                            <a href="#" class="menu3"> All Details of <?= $data['station_name']?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <section class="sa-main-layout-contents">
    	<div class="container">
            <div class="row">
                 <div class="col-md-6">
                 	<br>
                 	<?php if(!empty($data['profile_image'])){ ?>
                 		<img width="85%" class="" src="<?= base_url().'/'.$data['profile_image']?>" >
                 	<?php }else{ ?>
                 		<img src="<?= base_url().'/images/station_profile/no_image.jpg'?>" class="img-responsive" />
                 	<?php } ?>
                 </div>
                 <div class="col-md-6">
                 	<div class="row">
                 		<div class="col-sm-12">
                 			<h3><?= $data['station_name']?></h3>
                 		</div>
                 		<br>
                 	</div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                    <div class="media">
                        <div class="media-left">
                            <div class="contact-address bg-13"><span class="mdi-maps-navigation contact-icon contact-icon-rotate"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Address</h4>
                            <p class="light-blue regular alt-p"><?= $data['address']?>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1"><span class="mdi-notification-phone-in-talk contact-icon"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Number</h4>
                            <p class="light-blue regular alt-p"><?= $data['phone_number']?></p>
                            </p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14"><span class="mdi-content-mail contact-icon"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Email Address</h4>
                            <p class="light-blue regular alt-p">
                                <a href="#"> <?= $data['email']?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
            <br>

           <div class="row bg-dark">

                <div class="col-md-12">
                <div class="barWrapper progess1">
                    <h5 class="progressText progress-text">Bad</h5>
                    <div class="progress progress1">
                        <div class="progress-bar" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: <?= $b1."%"?>;">
                            <span class="popOver tooltip-colr" data-toggle="tooltip" data-placement="top" title="" data-original-title="56%" aria-describedby="tooltip266243"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip266243" style="top: -578px; left: 41.0312px; display: block;"><div class="tooltip-arrow" style="left: 26.7857%;"></div><div class="tooltip-inner"></div></div>
                        </div>
                    </div>
                </div>
                <div class="barWrapper progess2">
                    <h5 class="progressText progress-text">Normal</h5>
                    <div class="progress progress2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: <?= $n1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="43%" aria-describedby="tooltip245944"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip245944" style="top: -578px; left: 41.0312px; display: block;"><div class="tooltip-arrow" style="left: 26.7857%;"></div><div class="tooltip-inner"></div></div>
                        </div>
                    </div>
                </div>
                
                <div class="barWrapper progess4">
                    <h5 class="progressText progress-text">Good</h5>
                    <div class="progress progress4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: <?= $g1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="22%" aria-describedby="tooltip970801"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip970801" style="top: -578px; left: 41.0312px; display: block;"><div class="tooltip-arrow" style="left: 26.7857%;"></div><div class="tooltip-inner"></div></div>
                        </div>
                    </div>
                </div>
                <div class="barWrapper progess3">
                    <h5 class="progressText progress-text">Excellent</h5>
                    <div class="progress progress3">
                        <div class="progress-bar" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: <?= $e1."%"?>;">
                            <span class="popOver" data-toggle="tooltip" data-placement="top" title="" data-original-title="49%" aria-describedby="tooltip994598"> </span><div class="tooltip fade top in" role="tooltip" id="tooltip994598" style="top: -578px; left: 41.0312px; display: block;"><div class="tooltip-arrow" style="left: 26.7857%;"></div><div class="tooltip-inner"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <br>

            <div class="row">
    			<div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>All Services & Price</h4>
                        </div>
                        <div class="col-sm-6 text-right">
                            <input placeholder="search Services"  style="padding:10px; border: 2px solid #eee; border-radius: 5px; width: 300px;" class="" type="text" id="myInput" name="">
                        </div>
                    </div>
                    <br>
                   
                            <ul class="list-inline grid-list home_restaurant" id="myUl">
                            	<?php foreach($allcategory as $item): ?>

                                    <?php 
                                    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                                    $uri_segments = explode('/', $uri_path);

                                    //echo $uri_segments[4];

                                    $db = \Config\Database::connect();
                                    //$query = $db->query("select id from station_category where cat_id='".$item['id']."'");
                                    $query = $db->query("SELECT * FROM `station_category` WHERE cat_id ='".$item['id']."' AND station_id ='".$uri_segments[4]."'");
                                    $result= $query->getResultArray();

                                    if(is_array($result) && count($result)>0){

                                        foreach ($result as $row) {
                                        $price= $row['price'];
       
                                        }
                                    } 
                                    	$error = "f";
                                   
                                    ?>



                                    <?php if(is_array($result) && count($result)>0){ $error = "";?>
                                <li id="s_li" class="col-xs-6 col-md-12">
                                    <div class="sa-gridlist-item all_grid all_grid">
                                        <!-- content img -->
                                        
                                        <!-- ./content img -->
                                        <div class="sa-content-info">
                                            <!-- content info -->
                                            <div class="sa-content-details">
                                                <!-- content title -->
                                                <div class="sa-content-title">
                                                    <a href="">
                                                        <h6 style="font-size: 16px;" class="reli"><?= $item['cat_name']?></h6>
                                                    </a>
                                                </div>

                                                <!-- ./content title -->
                                                <div class="sa-content-title">
                                                    <a href="">
                                                        <h6 class="reli">Description</h6>
                                                    </a>
                                                    <p>
                                                    <?= $item['description']?>

                                                    </p>


                                                </div>
                                               <!--  <div>
                                                    <span class="av_price pr-4">Average Cost Price :  &nbsp;&nbsp;&nbsp;</span><span class="price">LKR &nbsp; &nbsp;

                                                        <?php if(is_array($result) && count($result)>0){
                                                            echo $price;
                                                        }else{
                                                            echo "0";
                                                        } ?>

                                                       </span> 
                                                </div> -->
                                                <div >
                                                    
                                                </div>
                                               
                                            </div>
                                            <!-- ./content info -->
                                            <!-- content price -->
                                            <div class="sa-content-price">
                                                
                                                <div class="text-center align-middle">

                                                    <h4 class="text-info font-weight-bold">Average Price</h4>

                                                    <h2 style="font-weight: bolder;" class="text-warning font-weight-bold">
                                                    	 <?php if(is_array($result) && count($result)>0){
                                                            echo $price.".00";
                                                        }else{
                                                            echo "0";
                                                        } ?>
                                                    </h2>
                                                    <h6 class="text-info font-weight-bold">LKR</h6>
                                                    
                                                    <?php if (isset($data['station_id'])) {
                                                       
                                                     ?>
                                                     <?php if (!empty($_SESSION['ownerData'])) {
                                                         // code...
                                                      ?>
                                                    <a href="<?= base_url().'/customer_appointments/'.$data['station_id']?>">
                                                         <button class="btn btn-success rounded">Book Service</button>
                                                    </a>
                                                <?php }else{ ?>
                                                    <a href="<?= base_url().'/customer_login/'?>">
                                                         <button class="btn btn-success rounded">Book Service</button>
                                                    </a>

                                                <?php } ?>

                                                <?php } ?>
                                                    <br>
                                                </div>
                                                
                                            </div>
                                            <!-- ./content price -->
                                        </div>
                                    </div>
                                </li>
                            <?php } else{ $error = "NO SERVICES";} endforeach ?>
                            </ul>

                            
                            
                        </div>
    		</div>

    		<br><br><br><br>
           

    		
    	</div>
    </section>
   
    


             

             
<?= $this->endSection() ?>

