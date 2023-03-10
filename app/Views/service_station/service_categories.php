

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
        height: 288px !important;
    }
    .col-md-12 > .sa-gridlist-item .sa-content-price{
        height: 288px !important;
    }
</style>


    <?= view('App\Views\components\notifications') ?>
    <br>
    <section class="sa-main-layout-contents">
    	<div class="container">
            <div class="row">
                 <div class="col-md-12" >
                    <h4>Add New Service</h4>
                 <form action="<?= base_url().'/add-category'; ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left">
                        <input type="hidden" name="station_id" id="station_id" value="10" name="">
                      
                      <label>Service Name</label>
                      <input style="color: #444 !important;" type="text" id="cat_name" name="cat_name" class="form-control" required>
                      <span class="invalid-feedback"></span>
                     
                      <br>
                  
                      <label>Description</label>
                      <textarea style="color: #444 !important;" id="cat_des" name="cat_des" class="form-control" required>
                      </textarea>
                      <span class="invalid-feedback"></span>
                     
                      <br>
        
                      <button name="add_cat" id="add_cat" class="btn btn-success mb-2">Add Service</button>
                      
                </form>
            </div>
            </div>
            <br>

    		<div class="row">
    			<div class="col-md-12">
                    <h4>Add or remove Services</h4>
                            <ul class="list-inline grid-list home_restaurant" id="grid-list">
                            	<?php foreach($data as $item): ?>

                                    <?php 
                                    $db = \Config\Database::connect();
                                    //$query = $db->query("select id from station_category where cat_id='".$item['id']."'");
                                    $query = $db->query("SELECT * FROM `station_category` WHERE cat_id ='".$item['id']."' AND station_id ='".$service_stationData['station_id']."'");
                                    $result= $query->getResultArray();
                                    if(is_array($result) && count($result)>0){

                                        foreach ($result as $row) {
                                           $price= $row['price'];
       
                                        }

                                    } 

                                   
                                    ?>
                                <li class="col-xs-6 col-md-12">
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
                                                <div>
                                                    <span class="av_price pr-4">Average Cost Price :  &nbsp;&nbsp;&nbsp;</span><span class="price">LKR &nbsp; &nbsp;

                                                        <?php if(is_array($result) && count($result)>0){
                                                            echo $price;
                                                        }else{
                                                            echo "0";
                                                        } ?>

                                                       </span> 
                                                </div>
                                                <div >
                                                    
                                                </div>
                                               
                                            </div>
                                            <!-- ./content info -->
                                            <!-- content price -->
                                            <div class="sa-content-price">
                                                
                                                <div class="text-center align-middle">

                                                    <?php if(is_array($result) && count($result)>0){ ?>
                                    <a href="<?= base_url().'/delete_st_cat/'.$item['id']."/".$service_stationData['station_id']?>" class="btn btn-danger">Remove</a><br><br>
                                    
                                    <label class="text-info">Change Price</label><br>
                                    <form method="POST" action="<?= base_url()."/update_price"?>">
                                    <input type="hidden" value="<?=$item['id'];?>" name="cat_id">
                                    <input type="hidden" value="<?=$service_stationData['station_id'];?>" name="station_id">
                                    <input value="<?= $price;?>" class="form-control-price" type="number" name="price" required><br>
                                    <button type="submit" class="btn btn-info">Submit</button>

                                    </form>
                                    
                                   <?php }else{ ?>
                                    <a href="<?= base_url().'/add_st_cat/'.$item['id']."/".$service_stationData['station_id']?>" class="btn btn-success">Add</a>
                                   <?php } ?>
                                                    
                                                   
                                                    
                                                </div>
                                            </div>
                                            <!-- ./content price -->
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>
                            </ul>
                            
                        </div>
    		</div>
    	</div>
    </section>
   
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

             

             
<?= $this->endSection() ?>

