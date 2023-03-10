

<?= $this->extend('layouts/customer_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>
<style type="text/css">
	.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: #ffc107;

    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>

    <?= view('App\Views\components\notifications') ?>
    <section class="automotive all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/car_service.png" alt="pets image8">
                </div>
                <div class="col-md-5 wow bounceInRight">
                    <p style="font-size: 6.5rem;" class="wow fadeIn check-domain-h pull-left">Hello !! <br> <?= $ownerData['owner_name'] ?> </p><br>
                    <p style="font-size: 3.5rem;">WELCOME TO  <img class="img-responsive " src="images/logo.png" alt="pets image8"></p>
                  
                </div>
            </div>
        </div>
    </section>
    <br>
    
 <br><br>
    
             
<?= $this->endSection() ?>

