

<?= $this->extend('layouts/service_station_layout') ?>

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
                            <a href="#" class="menu3"> All Appointments</a>
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
                    <h4>All Appointments</h4>

                    <table id="test">
                        <thead>
                            <tr>
                                <th></th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>

                             <?php if(!empty($data)){ ?>
                            <?php foreach($data as $item): ?>
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
                                    			<div class="col-md-6"><div class="details">CUSTOMER DETAILS</div>
                                    				<hr>
                                    				<div class="row">
                                    					<div class="col-sm-6 topic">Customer Name</div>
                                    					<div class="col-sm-6 detail"><?=$item['owner_name']; ?></div>
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
                                    					<div class="col-sm-6 detail"><?=$item['contact']; ?></div>
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
                                    			<div class="col-md-12 text-right">
                                                    <?php if ($item['status']==0) {?>
                                    				<a href="<?= base_url()."/ap_accept/".$item['id']?>" class="btn btn-success">Accept</a>
                                    				<a href="<?= base_url()."/ap_cancel/".$item['id']?>" class="btn btn-danger">Cancel</a>
                                                <?php }else if ($item['status']==1){ ?>
                                                    <button disabled class="btn btn-danger">Canceled</button>
                                                 <?php }else if ($item['status']==2){ ?>
                                                    <a href="<?= base_url()."/complete_service/".$item['id']?>"  class="btn btn-info">Job complete</a>
                                                <?php }else{ ?>
                                                    <button disabled class="btn btn-info">Job completed</button>
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
                        <?php } ?>
                            <?php   endforeach ?>
                        <?php } echo  "no data"; ?>
                        </tbody>

                    </table>
                            

                            
                            
                        </div>
            </div>
        </div>
</div>


             
<?= $this->endSection() ?>

