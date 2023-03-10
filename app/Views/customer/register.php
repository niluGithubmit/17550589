
<!-- load main layout with datatable -->

<?= $this->extend('layouts/site_layout') ?>

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

    }
    .check-domain{
        padding-top: 10% !important;
    }

    input{
        color: white !important;
    }

</style>
 
   
     <?= view('App\Views\components\notifications') ?>
    <!--  -->

    <section class="all" style="background: rgb(148,0,211);">

<div style="">
  <div class="row">
    <div class="col-12">
      <div class="card" style="background: rgb(148,0,211);">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Customer Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Service Station Registration</a>
            </li>
          
          </ul>
        </div>
        <div class="card-body">
          <h4 style="padding-left: 40px;" class="card-title text-danger">New here?</h4>
          <h6 style="padding-left: 40px; color: #eee;" class="card-subtitle mb-2">Signing up is easy. It only takes a few steps</h6>
          
           <div class="tab-content mt-3">
            <div class="tab-pane active" style="background-color: #6739b6; padding-top: 20px; border-radius: 20px;" id="description" role="tabpanel">
                <h4 style="padding-left: 40px;">Customer Registration</h4>

              <form method="post" action="<?= base_url().'/customer_register'?>" method="POST" accept-charset="UTF-8"  role="form text-left" id="customer_regitration_form">
                            
                            <div style="padding: 40px;" class="row">
                                
                                <div class="col-sm-4">
                                    <h4>Owner Infomation</h4>
                                    <hr>
                            
                                <label>Owner Name</label>
                                <input type="text" id="owner_name" name="owner_name" class="form-control" autocomplete="name" required><br>

                                <label>NIC Number</label>
                                <input type="text" id="nic" name="nic" class="form-control" autocomplete="name" required><br>
                          
                                <label>Address</label>
                                <input type="text" id="address" name="address" class="form-control" autocomplete="off" required><br>

                                <label>Phone Number</label>
                                <input type="number" id="contact" maxlength="10" name="contact" class="form-control" autocomplete="off" pattern="07[1,2,5,6,7,8][0-9]{7}" required><br>

                                 </div>

                            <div class="col-sm-4">
                            
                                <h4>Login Infomation</h4>
                                <hr>
                                <label>Email Address</label>
                               <input type="email" id="email" name="email" class="form-control" autocomplete="off" required><br>
                                
                                <label>Password</label>
                                <input type="password" id="password" name="password" value="" class="form-control" required><br>
                                
                                <label>Confirm Password</label>
                                    <input type="password" id="password_confirm" value="" name="password_confirm" class="form-control" required><br>
                                    <div class="row" style="margin-top:10%">
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6">
                                             <button class="subscribe-btn btn btn-default">Sign Up</button>
                                        </div>
                                    </div>
                            
                            </div>

                        <div class="col-sm-4 check-domain-left-col" >
                        <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/car_owner.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                        </div>
                    </div>
                        <br>
                        
                </form>
            </div>
             

            <div class="tab-pane" style="background-color: #8c1b9f; padding-top: 20px; border-radius: 20px;" id="history" role="tabpanel" aria-labelledby="history-tab">  
                <h4 style="padding-left: 40px;">Service Station Registration</h4>
              <div class="row">
                <br><br><br><br><br><br>
                <div class="col-md-7" style="margin-top: -10%;">
                   <br><br><br>

                   
                        <form method="post" action="<?= base_url().'/station_register'?>" method="POST" accept-charset="UTF-8" id="service_station_regitration_form" role="form text-left">
                            <div style="padding: 40px;" class="row">
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
                                    <input type="password" id="password2" name="password2" value="" class="form-control" required><br>
                                    <label>Confirm Password</label>
                                    <input type="password" id="password_confirm2" value="" name="password_confirm2" class="form-control" required>
                                </div>
                            </div>

                            <button style="margin-left: 40px;:" class="subscribe-btn btn btn-default">Sign Up</button>

                        </form>
                   
                </div>
                <div class="col-md-5 check-domain-left-col" style="margin-top: -10%;">
                    <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/car4.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                </div>
            </div>
             
            </div>
             
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div   class="">
      
</div>

             
<?= $this->endSection() ?>

