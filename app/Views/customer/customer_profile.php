

<?= $this->extend('layouts/customer_layout') ?>

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

    h4{
    	color: #eee;
    	font-weight: bolder ;
    }
    hr{
    	background-color: #eee;
    }
</style>


    
    <div class="menu-bar menu-bar_services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation breadcrumb-navigation_services">
                        <li>
                            <a href="" class="menu1">VEHICLE OWNER PROFILE</a>
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
                    <h1 class="check-domain-h pull-left">Vehicle Owner Profile Update</h1>
                    
 </p>
                        
                       <br><br><br><br><br>

                   
                        <form name="customer_update_form" action="<?= base_url().'/customer_update'?>" method="post"  id="customer_update_form">
                            <br>
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <!-- <h4>Owner Infomation</h4>
                                    <hr> -->
                               

                                <label>Owner Name</label>
                                <input type="hidden" value="<?= $data['id'];?>" id="id" name="id">
                                <input value="<?= $data['owner_name'];?>" type="text" id="owner_name" name="owner_name" class="form-control" autocomplete="name" required><br>

                                <label>NIC Number</label>
                                <input value="<?= $data['nic'];?>" type="text" id="nic" name="nic" class="form-control" autocomplete="name" required><br>
                          
                        
                       
                          
                               

                                <label>Phone Number</label>
                                <input type="number" value="<?= "0".$data['contact'];?>" id="contact" maxlength="10" name="contact" class="form-control" autocomplete="off" pattern="07[1,2,5,6,7,8][0-9]{7}" required><br>

                                
                        </div>

                        <div class="col-sm-6">
                            <!-- <h4>Login Infomation</h4>
                            <hr> -->
                             <label>Address</label>
                                <input type="text" value="<?= $data['address'];?>" id="address2" name="address" class="form-control" autocomplete="off" required><br>
                            <label>Email Address</label>
                                <input type="email" value="<?= $data['email'];?>" id="email" name="email" class="form-control" autocomplete="off" required><br>
                           
                          
                                <div class="row" style="margin-top:10%">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                         
                                    </div>
                                    
                                </div>
                            
                        </div>
                        
                            </div>

                            
                        <!-- station_id`, `station_name`, `address`, `phone_number`, `email -->
                            
                                

                                 
                             
                        
                   <button type="submit" id="owner_update_button" name="submit" class="subscribe-btn btn btn-default">Update</button>


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
                       <a href="<?= base_url().'/change_customer_progile_image'?>"><button class="btn btn-info">Change Profile Picture</button></a> 
                    </div>
                    <br>
                   
                </div>
            </div>
        </div>
    </section>
                    
                
   
    



             

             
<?= $this->endSection() ?>

