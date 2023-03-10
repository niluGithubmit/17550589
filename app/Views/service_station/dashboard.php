

<?= $this->extend('layouts/service_station_layout') ?>

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

<?php 
$db = \Config\Database::connect();
      $query1 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=0");
      $pending= $query1->getResultArray();
      $p=count($pending);

      $query2 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=1");
      $cancel= $query2->getResultArray();
      $c=count($cancel);

      $query3 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=3");
      $complete= $query3->getResultArray();
      $com=count($complete);

      $query3 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."'");
      $appointment= $query3->getResultArray();
      $ap=count($appointment);
 ?>

    <?= view('App\Views\components\notifications') ?>
    <section class="review all">
        <div class="container">
            <div class="row">
                <div class="col-md-7 check-domain-left-col">
                    <img class="img-responsive wow bounceInLeft" src="images/st1.png" alt="pets image8">
                </div>
                <div class="col-md-5 wow bounceInRight">
                    <p style="font-size: 6.5rem;" class="wow fadeIn check-domain-h pull-left">Hello ! <br> <?= $service_stationData['station_name'] ?> </p><br>
                    <p style="font-size: 3.5rem;">WELCOME TO  <img class="img-responsive " src="images/logo.png" alt="pets image8">AUTOMOBILE SERVICE ASSISTANT PLATFORM </p>
                  
                </div>
            </div>
        </div>
    </section>
    
    <br>
    <section class=" all">
    	<div class="container">

        <div class="row">
          <div class="col-md-3">
            <div class="card-counter success">
              <i class="fa fa-wrench"></i>
              <span class="count-numbers"><?=$com;?></span>
              <span class="count-name"> Completed Services</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card-counter info">
              <i class="fa fa-calendar"></i>
              <span class="count-numbers"><?=$ap;?></span>
              <span class="count-name">Appointments</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card-counter warning">
              <i class="fa fa-wrench"></i>
              <span class="count-numbers"><?=$p?></span>
              <span class="count-name">Pending Appointments</span>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card-counter danger">
              <i class="fa fa-calendar"></i>
              <span class="count-numbers"><?=$c;?></span>
              <span class="count-name">Canceled Appointments</span>
            </div>
          </div>
      </div>
    </div>
  </section>
 <br><br>
    

        
<?= $this->endSection() ?>

