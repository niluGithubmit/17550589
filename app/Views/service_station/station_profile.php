

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

    label{
        color: #aaa;
    }

    .p_image img{
        border-radius: 30px;
        -moz-box-shadow: 10px 10px 50px #ccc;
      -webkit-box-shadow: 10px 10px 50px #ccc;
      box-shadow: 10px 10px 50px #ccc;
    }
</style>


    
    <div class="menu-bar menu-bar_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation breadcrumb-navigation_services">
                        <li>
                            <a href="" class="menu1">SERVICE STATION PROFILE</a>
                        </li>
                        
                    </ol>
                </div>
            </div>
        </div>
    </div>
 <?= view('App\Views\components\notifications') ?>
                    <section class="check-domain all" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(20,20,214,0.711922268907563) 60%, rgba(0,212,255,1) 100%);">
        <div class="container">
            <div class="row">
                <div class="col-md-7" style="margin-top: -10%;">
                    <h1 class="check-domain-h pull-left">Servise Station Profile Update</h1>
                    
 </p>
                        
                       <br>

                   
                        <form method="post" action="<?= base_url().'/station_update'?>" method="POST" accept-charset="UTF-8" id="service_station_regitration_form" role="form text-left">
                            <div class="row">
                                <div class="col-sm-6">
                            <label>Station Name</label>
                            <input type="hidden" id="station_id" name="station_id" value="<?=$data['station_id'];?>">
                                <input type="text" value="<?=$data['station_name'];?>" id="station_name" name="station_name" class="form-control" autocomplete="name" required><br>
                          
                        
                       
                          
                                <label>Address</label>
                                <input type="text" value="<?=$data['address'];?>" id="address" name="address" class="form-control" autocomplete="off" required><br>

                                
                        </div>

                        <div class="col-sm-6">
                            <label>Email Address</label>
                                <input type="email" value="<?=$data['email'];?>" id="email" name="email" class="form-control" autocomplete="off" required><br>
                                <label>Phone Number</label>
                                <input type="text" value="<?=  "0".$data['phone_number'];?>" id="phone_number" maxlength="10" name="phone_number" class="form-control" autocomplete="off" pattern="07[1,2,5,6,7,8][0-9]{7}" required>
                           
                           
                        </div>
                            </div>

                            
                        <!-- station_id`, `station_name`, `address`, `phone_number`, `email -->
                            
                                

                                 
                              <br>
                        
                    <button class="subscribe-btn btn btn-default">Update</button>


                    </form>
                   
                </div>
                <div class="col-md-5 check-domain-left-col text-center p_image" style="margin-top: -8%;">
                    <div class="row text-center">
                    <?php if(!empty($data['profile_image'])){ ?>
                         <img class="" src="<?= base_url().'/'.$data['profile_image']?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                    <?php }else{ ?>
                         <img src="<?= base_url().'/images/station_profile/no_image.jpg'?>" id="uploaded_imageh" class="img-responsive" />
                    <?php } ?>
                    </div>
                    <br>
                    <div class="row text-center">
                       <a href="<?= base_url().'/change_progile_image'?>"><button class="btn btn-info">Change Profile Picture</button></a> 
                    </div>
                    <br>
                   
                </div>
            </div>
        </div>
    </section>
                    
                
   
    



             

             
<?= $this->endSection() ?>

