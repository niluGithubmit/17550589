
<!-- load main layout with datatable -->

<?= $this->extend('layouts/site_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>


 
    <br>
     <?= view('App\Views\components\notifications') ?>
    <section class="check-domain all" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(20,20,214,0.711922268907563) 60%, rgba(0,212,255,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="margin-top: -10%;">
                    <h1 class="check-domain-h pull-left">Servise Station Regitration</h1>
                    <p class="check-domain-p clearfix clr"><b>New here?<b>
 </p>
                        
                        <p>Signing up is easy. It only takes a few steps</p><br>

                   
                        <form method="post" action="<?= base_url().'/station_register'?>" method="POST" accept-charset="UTF-8" id="service_station_regitration_form" role="form text-left">
                        	<div class="row">
                        		<div class="col-sm-6">
                        	<label>Station Name</label>
                                <input type="text" id="station_name" name="station_name" class="form-control" autocomplete="name" required><br>
                          
                        
                       
                          
                                <label>Address</label>
                                <input type="text" id="address" name="address" class="form-control" autocomplete="off" required><br>

                                <label>Phone Number</label>
                                <input type="text" id="phone_number" maxlength="10" name="phone_number" class="form-control" autocomplete="off" pattern="07[1,2,5,6,7,8][0-9]{7}" required>
                        </div>

                        <div class="col-sm-6">
                        	<label>Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" autocomplete="off" required><br>
                            <label>Password</label>
                                <input type="password" id="password" name="password" value="" class="form-control" required>
                            <label>Confirm Password</label>
                                <input type="password" id="password_confirm" value="" name="password_confirm" class="form-control" required>
                        </div>
                        	</div>

                        	
                        <!-- station_id`, `station_name`, `address`, `phone_number`, `email -->
                            
                                

                                 
                              <br>
                        
                    <button class="subscribe-btn btn btn-default">Sign Up</button><a style="font-weight:bolder; color: white; margin-left:5%" href="<?= base_url().'/station_login'?>">Sign In</a>


                    </form>
                   
                </div>
                <div class="col-md-5 check-domain-left-col" style="margin-top: -10%;">
                    <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/car4.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                </div>
            </div>
        </div>
    </section>
<div   class="">

   
      
</div>



             

             
<?= $this->endSection() ?>

