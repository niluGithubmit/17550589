

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
                    <h1 class="check-domain-h pull-left">Add New Vehicle</h1>
                    <p class="check-domain-p clearfix clr"><b><b></p>
                        <p></p><br>

                        <form method="post" id="add_vehicle_form" action="<?= base_url().'/add-new-vehicle'?>" method="POST" accept-charset="UTF-8"  role="form text-left">
                            
                        <div class="row">
                                
                            <div class="col-sm-3">
                            
                            <label>vehicle Type</label>
                            <select name="vehicle_type" id="vehicle_type" class="form-control" required>
                            	<option value="">--Select Vehicle Type--</option>
                            	<option value="car">Car</option>
                            	<option value="Van">Van</option>
                            	<option value="Bick">Bike</option>
                            </select>
                            
                            <input type="hidden" id="owner_id" name="owner_id" class="form-control" value="<?= $ownerData['id'] ?>" autocomplete="name" required><br>
                             
                             <label>vehicle Number</label><br>
                                  <input type="text" id="v_number" placeholder="BGX-8092 or 68-1457" name="v_number" class="form-control" value="" autocomplete="name" required>
                            
                                <!-- <div class="row">
                                	<div class="col-sm-6">
                                		<input type="text" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="letters" name="letters" class="form-control" autocomplete="name" placeholder="BGX" required>
                                	</div>
                                	<div class="col-sm-6">
                                		<input type="number" maxlength="4" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="8092" id="num" name="num" class="form-control" autocomplete="name" required>
                                	</div>
                                </div> -->
                             <label>vehicle Brand</label>
                                <input type="text" id="vehicle_brand" name="vehicle_brand" class="form-control" autocomplete="name" required><br>
                            
                             <label>vehicle Model</label>
                                <input type="text" id="vehicle_model" name="vehicle_model" class="form-control" autocomplete="name" required><br>
                        
                            </div>
                        
                            <div class="col-sm-3">
                        	<label>Average KM(weekly)</label>
                                <input type="number" id="average_km" min="0" name="average_km" class="form-control" autocomplete="name" required><br>
                                
                            <label>Province </label>
                                <select name="province" id="province" class="form-control" required>
                                	<option value="" >--Select Province--</option>
                                	<option value="CP">Central Province</option>
                                	<option value="EP">East Province</option>
                                	<option value="NC">Northcentral Province</option>
                                	<option value="NP">North Province</option>
                                	<option value="NW">Northwest Province</option>
                                	<option value="SB">Sabaragamuwa Province</option>
                                	<option value="SP">South Province</option>
                                	<option value="UP">Uva Province</option>
                                	<option value="WP">West Province</option>
                                </select><br>
                                
                                <label>Fuel Type </label>
                                <select name="fuel_type" id="fuel_type" class="form-control" required>
                                	<option value="">--Select Fuel Type--</option>
                                	<option value="Diesel">Diesel</option>
                                	<option value="Petrol">Petrol</option>
                                	<option value="Electric">Electric</option>	
                                </select><br>
                                 
                                <label>Capacity</label>
                                 <div class="row">
                                    <div class="col-sm-8">
                                    <input type="number" id="capacity" name="capacity" class="form-control" autocomplete="name" required>
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
                                    <button class="subscribe-btn btn btn-default">Add Vehicle</button>
                            </div>
                            
                              <br>
                        

                    </form>
                   
                </div>
                
            </div>
        </div>
    </section>
  
         

             
<?= $this->endSection() ?>

