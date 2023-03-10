<!-- load main layout with datatable -->

<?= $this->extend('layouts/service_station_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<style type="text/css">
    #price{
        padding-left: 50px;
        padding-right: 40px;
    }

    span{
        padding: 0;
        margin: 0;
        font-size: 1.9rem;
    }

    #weight_liters{
        padding-right: 40px;
    }
</style>
   
    <?= view('App\Views\components\notifications') ?>
    <br>
<div class="container">

    <!-- 'spare_id', '', 'brand', 'capacity','weight','liters', 'description', 'quantityInStock', 'price' -->
        
            <div class="card">
                <div class="card-header"><h2>Edit Spare Part</h2><div class="text-right">
                    <a href="<?=base_url()."/service_spare_part"?>" class="btn btn-success">Back</a></div></div>
                <div class="card-body">

                    
                    <form enctype="multipart/form-data" action="<?= base_url().'/update-part'; ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left">
                        
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Spare Code</label>
                            <input value="<?= $data['spare_id']?>" type="text" class="form-control" id="spare_id" name="spare_id" style="color: #000 !important;" required>
                            <span class="invalid-feedback"></span>
                           
                           <input type="hidden" id="station_id" name="station_id"  value="<?= $service_stationData['station_id'] ?>" name="">
                           <input type="hidden" id="sp_id" name="sp_id"  value="<?= $data['id'] ?>" name="">
                        </div>
                        </div>
                        
                      <div class="col-md-6">
                        <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Spare Name</label>
                            <input value="<?= $data['spare_name']?>" type="text" class="form-control" id="spare_name" name="spare_name" style="color: #000 !important;" required>

                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Brand</label>
                            <input value="<?= $data['brand']?>" type="text" class="form-control" id="brand" name="brand" style="color: #000 !important;" required>
                        
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Capacity</label>
                            <input value="<?= $data['capacity']?>" type="text" class="form-control" id="capacity" name="capacity" style="color: #000 !important;" required>
                        
                        </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2">
                          <div class="form-group">
                            <label for="i92i" class="control-label">Select Type</label>
                              <select id="weight_liters_type" class="form-control">
                              	<?php if($data['weight']!=0){ ?>
                              		<option selected value="Weight">Weight</option>
                                    <option value="Liters">Liters</option>
                              	<?php }else{ ?>
                              		<option value="Weight">Weight</option>
                                    <option selected value="Liters">Liters</option>
                              	<?php } ?>
                                    
                                </select>
                                <input type="hidden" value="weight" id="selected_weight_liters" name="selected_weight_liters">
                          </div>
                      </div>
                      
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="i92i" class="control-label">Weight/Liters</label>
                            <?php $val=''; if($data['weight']!=0){
                            	$val=$data['weight'];
                            }else{
                            	$val=$data['liters'];
                            }?>

                              <input value="<?= $val;?>" type="number" class="form-control" min="0" id="weight_liters" name="weight_liters" style="color: #000 !important;" required>
                              

                              <?php if($data['weight']!=0){ ?>
                              		<i class=" pull-right inputcss"><span id="weight_liters_ext">Kg</span></i>
                              	<?php }else{ ?>
                              		<i class=" pull-right inputcss"><span id="weight_liters_ext">liters</span></i>
                              	<?php } ?>
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                           <div class="form-group  is-empty">
                               <label for="i92i" class="control-label">Price</label>
                                <input value="<?= $data['price']?>" type="number" name="price" id="price" min="1" max="10000000" class="form-control" required>
                                <i class=" pull-left inputcss"><span>LKR</span></i>
                                <i class=" pull-right inputcss"><span>.00</span></i>
                               
                            
                        </div>
                      </div>
                      
                    </div>

                  

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Quantity In Stock</label>
                            <input value="<?= $data['quantityInStock']?>" type="number" class="form-control" id="quantityInStock" min="1" max="10000000" name="quantityInStock" style="color: #000 !important;" required>
                            
                        </div>
                        <div class="col-md-6">
                          <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Updated date</label>
                            <input value="<?= $data['date']?>" type="date" class="form-control" id="update_date" name="update_date" style="color: #000 !important;" required>
                            
                          </div>
                        </div>
                      </div>
                        
                        
                        <div class="col-md-6">
                           
                            <div class="col-md-8">
                                <div class="form-group  is-empty">
                                <label for="i92i" class="control-label">Spare Part Image</label>
                                <input value="<?= $data['image']?>" onchange="readURL(this);" type="file" class="form-control" id="img" name="img" style="color: #000 !important; " >
                              
                            </div>
                            <div class="col-md-4">
                                 <img width="120%" id="blah" src="<?=base_url()."/uploads/spare_part/". $data['image']?>" alt="your image" />
                            </div>
                            </div>
                        
                        </div>
                    </div>
                    
                    <div class="row">
                         <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Description</label>
                            <input value="<?= $data['description']?>" type="text" class="form-control" id="description" name="description" style="color: #000 !important; " required>
                          
                        </div> 
                    </div>

                  
                  <div class="text-center">
                    <button name="add_part" id="add_part" class="btn btn-success mb-2">Update Part</button>
                    
                  </div>
                 
                </form>
                </div>
            </div>

            <br>
        
</div>


<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

   

             
<?= $this->endSection() ?>

