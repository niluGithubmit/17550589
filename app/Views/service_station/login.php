
<!-- load main layout with datatable -->

<?= $this->extend('layouts/site_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>


    <?= view('App\Views\components\notifications') ?>
 
    <section class="check-domain">
        <div class="container">
            <div class="row">
                <div class="col-md-5" style="margin-top: -10%;">
                    <h1 class="check-domain-h pull-left">Servise Station Login</h1>
                    <p class="check-domain-p clearfix clr"><b>Hello! let's get started<b>
 </p>
                        
                        <p>Sign in to continue.</p>
                        <form method="post" action="<?= base_url().'/servise-station-login'?>" class="">
                        
                            
                                <label>FullName</label>
                                <input type="email" id="email" name="email" class="form-control" autocomplete="name">
                          
                        
                       
                          
                                <label>Email Address</label>
                                <input type="password" id="password" name="password" class="form-control" autocomplete="off">
                              <br>
                        
                    <button class="subscribe-btn btn btn-default">Sign In</button><a style="font-weight:bolder; color: white; margin-left:5%" href="<?= base_url().'/servise-station-registration'?>">Sign Up</a>


                    </form>
                   
                </div>
                <div class="col-md-7 check-domain-left-col" style="margin-top: -10%;">
                    <img class="img-responsive wow bounceInLeft" src="<?= base_url().'/images/car4.png'?>" alt="pets image10" style="visibility: visible; animation-name: bounceInLeft;">
                </div>
            </div>
        </div>
    </section>
<div   class="">

   
      
</div>



             

             
<?= $this->endSection() ?>

