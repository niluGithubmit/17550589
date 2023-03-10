
<!-- load main layout with datatable -->

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
        color: #000 !important;
    }
}

</style>
 
    <br>
     <?= view('App\Views\components\notifications') ?>
    <section class="check-domain all" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(106,26,218,0.711922268907563) 0%, rgba(0,255,115,1) 100%);">
        <div class="container">
            <!-- `id`, `vehcal_number`, `owner_name`, `address`, `contact`, `email`, `password_hash`, `nic`, `vehical_model`, `average_km`, `vehical_brand`, `created_at`, `uptated_at` -->
            <div class="row">
                <div class="col-md-12" style="margin-top: -10%;">
                    <h1 class="check-domain-h pull-left">Vehicle Owner Appointment</h1>
                    <p class="check-domain-p clearfix clr"><b>New Appointment here?<b>
 </p>
                        
                  <!--  onsubmit="registerButton.disabled = true; -->
                        <form method="post" action="<?= base_url().'/customer_appointment'?>" method="POST" accept-charset="UTF-8"  role="form text-left" id="customer_regitration_form">
                            
                            <div class="row"> 
                                <div class="col-sm-4">
                                     <hr><br>
                                   
                                <label>Service Station</label><br>

                                <input type="text" class="form-control" value="<?=$station['station_name']?>" name="" readonly>

                                <input type="hidden" class="form-control" value="<?=$_SESSION['ownerData']['id']?>" name="owner_id" readonly>

                                <input type="hidden" class="form-control" value="<?=$station['station_id']?>" id="station_id" name="station_id" readonly>
                               
                              <br>

                               <label>Select Vehicle</label>
                                <select name="vehicle" id="vehicle" class="form-control" required>
                                    <option value="">--SELECT VEHICLE--</option>
                                    <?php foreach($vehicles as $data) { ?>
                                    <option value="<?= $data['id']?>"><?= $data['vehicle_number']?></option>
                                <?php } ?>
                                </select>
                                <br>
                                <label>Select Time Slot</label>
                                    
                                    <input id="time_slot" name="time_slot" type="text" class="form-control" readonly="true" required>
                         
                                </div>

                        <div class="col-sm-4">
                            
                            <hr><br>
                            <label>Select Service</label>
                                <select name="service" id="service" class="form-control" required>
                                    <option value="">--SELECT SERVICE--</option>
                                    <?php foreach($station_services as $data){ ?>
                                    <option value="<?= $data['id']?>"><?= $data['cat_name']?></option>
                                <?php } ?>
                                </select>
                                <br>
                           
                            <label>Request Date</label>
                                <input type="date" id="request_date" min ='<?php echo date('Y-m-d');?>' max="<?php echo date('Y-m-d', strtotime('+7 days'));?>" name="request_date" class="form-control" autocomplete="name" required><br>
                                <label>Available Time Slots</label>
                                <div id="av_time_slot"></div>
                                <div class="row" style="margin-top:10%">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                         <button class="subscribe-btn btn btn-default">submit</button>
                                    </div>
                                    
                                </div>
                        </div>

                        <div class="col-sm-4 check-domain-left-col" >
                    <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/appointment_img.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                </div>
                            </div>
                                 
                              <br>

                    </form>
                   
                </div>
                
            </div>
        </div>
    </section>
<div   class="">

        
</div>


             
<?= $this->endSection() ?>

