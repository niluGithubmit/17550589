

<?= $this->extend('layouts/customer_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>
<!-- <style type="text/css">
	.card-counter{
   
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 200px;
    border-radius: 5px;
    transition: .3s linear all;
    padding: 10px;
  }

  

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: #ffc107;

    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }

  .number_plate{
  	background-color:  #FFD700;
  	color: black;
  	border: 10px solid black;
  	border-radius: 20px;

  }

  .number_plate h2 {
  	font-weight: bolder;
  	font-family: Charles Wright;
  }

  .number_plate h4 {
  	font-weight: bolder;
  	
  }

    hr{
        background-color: black;
        height: 5px;
        margin-bottom: 1px;
        width: 15px;
    }

    h3{
    	margin-top: 1px;
    }

    .row{
    	padding-left: 3px !important;
    	padding-right: 3px !important;
    }

</style> -->

    <?= view('App\Views\components\notifications') ?>
   <!-- <section class="shopping all">
        <div class="container">


           
            <div class="row">
                <div class="col-md-12">
                    <h1 class="check-domain-h pull-left">All Vehicles</h1>
                    <p class="check-domain-p clearfix clr"><b><b>
 </p>

      <div class="card-counter info">
      	<div class="row">
      		<div class="col-md-3">
      			<div class="number_plate">
        	<div class="row">
        		<div class="col-sm-4 text-center"><div class="row"><h4><img width="40%" src="<?= base_url().'/images/gov_logo.png'?>"><br>WP</h4></div></div>
        		<div class="col-sm-4 text-center">
        			<div class="row"><h2>BGX <br>8693</h2></div>
        			
        		</div>
        		<div class="col-sm-4 text-center"><div class="row"><hr><br><h3>P</h3></div></div>
        	</div>
        	
        </div>
      		</div>
      	</div>
       
        
       
      </div>
   
                        
                        <p></p><br>

            
                   
                </div>
                
            </div>
        </div>
    </section>
   -->

  <section class="our-pricing" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center our-pricing-h">My Vehicles Information</h1>
                <p class="text-center our-pricing-p"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row db-padding-btm db-attached">
            <div class="right-one">
              
              <?php foreach ($my_vehicles as $data):?>
                
                <div class="col-md-12 col-xs-6 respon-width">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-two">
                           
                            <div class="type2_2">
                                <?= $data['vehicle_number']?><br><span class="sub-t2 yearly-sub2"></span>
                            </div>
                            <div class="box1-text">
                             
                                <ul>
                                    <li class="shared-li">vehicle Type<span class="pull-right"><?= $data['vehicle_type']?></span></li>
                                    <li class="shared-li">Vehicle Number <span class="pull-right"><?= $data['vehicle_number']?></span></li>
                                    <li class="shared-li">vehicle Brand <span class="pull-right"><?= $data['vehicle_brand']?></span></li>
                                    <li class="shared-li">vehicle Model<span class="pull-right"><?= $data['vehicle_model']?></span></li>
                                    <li class="shared-li">Province<span class="pull-right"><?= $data['province']?></span></li>
                                    <li class="shared-li">Fuel Type<span class="pull-right"><?= $data['fuel_type']?></span></li>
                                    <li class="shared-li">Capacity<span class="pull-right"><?= $data['capacity']?></span></li>
                                    <li class="shared-li">Average Km<span class="pull-right"><?= $data['average_km']?></span></li>
                                </ul>
                            </div>
                            <div class="invest-btn-box">
                              <div class="row">
                              <div class="col-md-4">
                                <ul>
                                  <!-- <li class="shared-li">Last Service Date<span class="pull-right">2022.01.05</span></li> -->
                                </ul>
                              </div>
                              <div class="col-md-4">
                                <ul>
                                  <!-- <li class="shared-li">Last Service Station<span class="pull-right">station 1</span></li> -->
                                </ul>
                              </div>
                              <div class="col-md-4">
                              
                                <a href="<?= base_url()."/edit_vehicle/".$data['id'];?>" class=" btn btn-info">Edit</a>
                            
                              </div>
                            </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            
            <?php endforeach;?>
            </div>
            
        </div>
    </div>
</section>


             
<?= $this->endSection() ?>

