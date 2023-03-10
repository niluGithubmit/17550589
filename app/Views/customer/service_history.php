

<?= $this->extend('layouts/customer_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<input id="base_url" value="<?= base_url()?>" type="hidden" name="">    

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
    .col-md-12 > .sa-gridlist-item .sa-content-info .sa-content-details{
        width: 100%;
    }

    .col-md-12 > .sa-gridlist-item :hover{
        background-color: #eee;
        transition: 0.3s;
    }

    .dataTables_filter input  {
    float: none;
    
    color: #111 !important;
}

.service{
	font-size: 1.7rem;
	color: #888;
}

.details{
	font-size: 1.4rem;
	color: #888;
}

.topic{
	font-size: 1.3rem;
	color: #888;
}

.detail{
	font-size: 1.3rem;
	color: #666;
}

hr{
	height:2px;border-width:0;color:gray;background-color:#dde
	
}


</style>
<div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation">
                       
                        <li class="active">
                            <a href="#" class="menu3"> Service History</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
     <?= view('App\Views\components\notifications') ?>
     <br>
<div class="container">
        <div class="tp-banner">
           <div class="row">
                <div class="col-md-12">
                    <h4>Service History</h4>

                    <table id="test">
                        <thead>
                            <tr>
                                <th></th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php if(!empty($data)){ foreach($data as $item){ ?>
                            	<?php if($item['status']==3){ ?>
                            <tr>
                                <td width="1200px">
                                    <div class="card">
                                    	<div class="card-body">
                                    		<div class="row">
                                    			<div class="col-md-6 text-left service"><?=$item['cat_name']; ?></div>
                                    			<div class="col-md-6 text-right service"><?=$item['request_date']; ?> AT <?=$item['time_slot']; ?>  HRS</div>
                                    		</div>
                                    		<hr>
                                    		<div class="row">
                                    			<div class="col-md-6"><div class="details">SERVICE STATION DETAILS</div>
                                    				<hr>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Station Name</div>
                                    					<div class="col-sm-6 detail"><?=$item['station_name']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Address</div>
                                    					<div class="col-sm-6 detail"><?=$item['address']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Email</div>
                                    					<div class="col-sm-6 detail"><?=$item['email']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Contact Number</div>
                                    					<div class="col-sm-6 detail"><?=$item['phone_number']; ?></div>
                                    				</div>
                                    			</div>
                                    			<div class="col-md-6"><div class="details">VEHICLE DETAILS</div>
                                    				<hr>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Vehicle Type</div>
                                    					<div class="col-sm-6 detail"><?=$item['vehicle_type']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Vehicle Number</div>
                                    					<div class="col-sm-6 detail"><?=$item['vehicle_number']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Brand</div>
                                    					<div class="col-sm-6 detail"><?=$item['vehicle_brand']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Model</div>
                                    					<div class="col-sm-6 detail"><?=$item['vehicle_model']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Fuel Type</div>
                                    					<div class="col-sm-6 detail"><?=$item['fuel_type']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Capacity</div>
                                    					<div class="col-sm-6 detail"><?=$item['capacity']; ?></div>
                                    				</div>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Avarage KM (Weekly)</div>
                                    					<div class="col-sm-6 detail"><?=$item['average_km']; ?></div>
                                    				</div>
                                    			</div>
                                    		</div>
                                    		<hr>
                                    		<div class="row">
                                    			<div class="col-md-2 text-left">
                                    				<?php if($item['rate']!=0){ ?>
                                    					<h4>Your Feedback</h4>
                                    				<?php } ?>
                                    				
                                    			
                                    			</div>
                                    			<div class="col-md-4 text-left">

                                    				<?php if($item['rate']==0){ ?>
                                    					
                                    				<?php } ?>
                                    				<?php if($item['rate']==1){ ?>
                                    					<h4 class="badge btn-danger">BAD</h4>
                                    				<?php } ?>
                                    				<?php if($item['rate']==2){ ?>
                                    					<h4 class="badge btn-warning">NOEMAL</h4>
                                    				<?php } ?>
                                    				<?php if($item['rate']==3){ ?>
                                    					<h4 class="badge btn-info">GOOD</h4>
                                    				<?php } ?>
                                    				<?php if($item['rate']==4){ ?>
                                    					<h4 class="badge btn-success">EXELLENT</h4>
                                    				<?php } ?>
                                    				
                                    				
                                    			</div>
                                    			<div class="col-md-6 text-right">
                                                    <?php if ($item['status']==0) {?>
                                    				<button disabled class="btn btn-warning">pending appointment approvel</button>
                                                <?php }else if ($item['status']==1){ ?>
                                                    <button disabled class="btn btn-danger">appointment canceled</button>
                                                <?php }else if ($item['status']==2){ ?>
                                                     <button disabled class="btn btn-success">appointment accepted</button>
                                                <?php }else{ ?>
                                                	<button disabled class="btn btn-success ">Job completed</button>
                                                	   <?php if($item['rate']==0){ ?>
                                                        <button ap_id='<?= $item['id']?>' station_id='<?= $item['station_id']?>' user_id=<?=$_SESSION['ownerData']['id'];?> data-toggle="modal" data-target="#exampleModal" class="btn btn-info feedback">service feedback</button>
                                                        <?php } ?>
                                                  <?php } ?>
                                                <?php if($item['rate']!=0){ ?>
                                                	<a class="btn btn-success" href="<?=base_url()."/print_invoice"?>">Invoice</a>
                                                	<?php } ?>
                                                
                                    			</div>
                                    			
                                    		</div>
                                    		
                                    	</div>
                                    </div>
                                </td>
                                
                            </tr>
                        <?php   }}else{echo "No Data";}  ?>
                        </tbody>

                    </table>
                              
                 </div>
            </div>
        </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sevice Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden"  id="ap_id" name="">
      	<input type="hidden"  id="station_id" name="">
      	<input type="hidden"  id="user_id" name="">
      	
      		<div class="row">
        	<div class="col-sm-3"><button type="1"  class="btn btn-danger feedback-type">BAD</button></div>
        	<div class="col-sm-3"><button type="2"  class="btn btn-warning feedback-type">NORMAL</button></div>
        	<div class="col-sm-3"><button type="3"  class="btn btn-info feedback-type">GOOD</button></div>
        	<div class="col-sm-3"><button type="4" class="btn btn-success feedback-type">EXCELLENT</button></div>
       
      	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
             
<?= $this->endSection() ?>

