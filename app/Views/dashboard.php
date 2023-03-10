<!-- load main layout with datatable -->
<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>


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
    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<div class="tp-banner-container">
    <!-- <img width="1000px" src="<?=base_url()."/images/logo.png"?>"> -->
        <section class=" all">
        <div class="container">

          
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-wrench"></i>
        <span class="count-numbers"><?=$count_stations;?></span>
        <span class="count-name"> Service Stations</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter warning">
        <i class="fa fa-wrench"></i>
        <span class="count-numbers"><?=$count_owners;?></span>
        <span class="count-name">Customers</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-calendar"></i>
        <span class="count-numbers"><?=$count_services;?></span>
        <span class="count-name">Services</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-calendar"></i>
        <span class="count-numbers"><?=$count_complete_service;?></span>
        <span class="count-name">Completed Services</span>
      </div>
    </div>
  </div>
</div>
    </section>
    </div>

    

<?= $this->endSection() ?>

