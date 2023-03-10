

<?= $this->extend('layouts/customer_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>
<style type="text/css">

    h4{
        color: white;
        font-size: 1.9rem;
        font-weight: bolder;
    }

    hr{
        background-color: white;
        height: 2px;
        margin-bottom: 40px;
    }
    option{
    	color: black !important;
    }

    label{
    	color: white;
    	margin-top: 30px;
    	margin-bottom: 0px;
    }
    .capaity{
        font-size: 1.5rem;
        margin-top: 10px;
        margin-top: 0px;
    }

</style>

    <?= view('App\Views\components\notifications') ?>
   <section class="hotels all">
        <div class="container">
           
            <div class="row">
                <div class="col-md-12">
                    <h1 class="check-domain-h pull-left">Edit Vehicle</h1>
                    <p class="check-domain-p clearfix clr"><b><b></p>
                        
                        <p></p><br>

                   
                    <form method="post" id="add_vehicle_form" action="<?= base_url().'/update-vehicle'?>" method="POST" accept-charset="UTF-8"  role="form text-left">

                            
                        <div class="row">
                        <div class="col-sm-3">
                            
                            <label>vehicle Type</label>

                            <select name="vehicle_type" id="vehicle_type" class="form-control" required>
                            	<option value="">--Select Vehicle Type--</option>
                            	<option <?php if($data['vehicle_type']=="car"){echo "selected";} ?> value="car">Car</option>
                            	<option <?php if($data['vehicle_type']=="Van"){echo "selected";} ?> value="Van">Van</option>
                            	<option <?php if($data['vehicle_type']=="Bike"){echo "selected";} ?> value="Bike">Bike</option>
                            </select>
                            <input value="<?=$data['id'];?>" type="hidden" name="v_id">
                            <input type="hidden" id="owner_id" name="owner_id" class="form-control" value="<?= $ownerData['id'] ?>" autocomplete="name" required><br>
                            <label>vehicle Number</label><br>

                             
                                  <input value="<?=$data['vehicle_number'];?>" type="text" id="v_number" placeholder="BGX-8092 or 68-1457" name="v_number" class="form-control" value="" autocomplete="name" required>
                            
                                

                                <!-- <div class="row">
                                	<div class="col-sm-6">
                                		<input type="text" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="letters" name="letters" class="form-control" autocomplete="name" placeholder="BGX" required>
                                	</div>
                                	<div class="col-sm-6">
                                		<input type="number" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="8092" id="num" name="num" class="form-control" autocomplete="name" required>
                                	</div>
                                </div> -->
                            <label>vehicle Brand</label>
                                <input value="<?=$data['vehicle_brand'];?>" type="text" id="vehicle_brand" name="vehicle_brand" class="form-control" autocomplete="name" required><br>
                            <label>vehicle Model</label>
                                <input value="<?= $data['vehicle_model']?>" type="text" id="vehicle_model" name="vehicle_model" class="form-control" autocomplete="name" required><br>
                            
                        
                        </div>

                        <div class="col-sm-3">
                        	<label>Average KM(weekly)</label>
                                <input type="number" value="<?= $data['average_km']?>" id="average_km" name="average_km" class="form-control" autocomplete="name" required><br>
                                
                                <label>Province </label>
                                <select name="province" id="province" class="form-control" required>
                                	<option value="" >--Select Province--</option>
                                	<option <?php if($data['province']=="CP"){echo "selected";} ?> value="CP">Central Province</option>
                                	<option <?php if($data['province']=="EP"){echo "selected";} ?> value="EP">East Province</option>
                                	<option <?php if($data['province']=="NC"){echo "selected";} ?> value="NC">Northcentral Province</option>
                                	<option <?php if($data['province']=="NP"){echo "selected";} ?> value="NP">North Province</option>
                                	<option <?php if($data['province']=="NW"){echo "selected";} ?> value="NW">Northwest Province</option>
                                	<option <?php if($data['province']=="SB"){echo "selected";} ?> value="SB">Sabaragamuwa Province</option>
                                	<option <?php if($data['province']=="SP"){echo "selected";} ?> value="SP">South Province</option>
                                	<option <?php if($data['province']=="UP"){echo "selected";} ?> value="UP"> Uva Province</option>
                                	<option <?php if($data['province']=="WP"){echo "selected";} ?> value="WP">West Province</option>
                                </select><br>

                                <label>Fuel Type </label>
                                <select name="fuel_type" id="fuel_type" class="form-control" required>
                                	<option  value="">--Select Fuel Type--</option>
                                	<option <?php if($data['fuel_type']=="Diesel"){echo "selected";} ?> value="Diesel">Diesel</option>
                                	<option <?php if($data['fuel_type']=="Petrol"){echo "selected";} ?> value="Petrol">Petrol</option>
                                	<option <?php if($data['fuel_type']=="Electric"){echo "selected";} ?>  value="Electric">Electric</option>
                                	
                                </select><br>

                                 <label>Capacity</label>
                                 <div class="row">
                                     <div class="col-sm-8">
                                         <input value="<?= $data['capacity']?>" type="text" id="capacity" name="capacity" class="form-control" autocomplete="name" required>
                                     </div>
                                     <div class="col-sm-4 pt-4">
                                        <p class="capacity">WATTS</p>
                                         <input type="hidden"  min="0" id="cap_ext" name="cap_ext" value="WATS" class="form-control" autocomplete="name" >
                                     </div>
                                 </div>
                        </div>

                        <div class="col-sm-6 check-domain-left-col">
                            <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/car-reg.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                        </div>
                        
                    </div>
                        	<div class="row text-center">
                        		<div class="col-sm-12 "></div>
                                <button class="subscribe-btn btn btn-default">Update Vehicle</button>
                                      
                            </div>
                               
                              <br>
                
                </form>
                   
                </div>
                
            </div>
        </div>
    </section>
        

             
<?= $this->endSection() ?>

