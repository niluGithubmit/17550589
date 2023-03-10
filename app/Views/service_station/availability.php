

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
    .av_price{
        font-size: 2.0rem;
        font-weight: bolder;

    }
    .price{
        font-size: 2.0rem;
        font-weight: bolder;
        color: #888;
    }
    .form-control-price{
        padding: 5px;
        border: 1px solid #aaa;
    }

    body {
  font-family: 'Roboto';
}



.day {
  width: 120px;
  height: auto;
  background-color: #efeff6;
  padding:10px;
  float:left;
  margin-right:7px;
  margin-bottom:5px;
}

.datelabel {
  margin-bottom: 15px;
  text-align: center;
}

.timeslot {
  background-color: #00c09d;
  width: auto;
  height: 40px;
  color: white;
  padding:7px;
  margin-top: 5px;
  font-size: 14px;
  border-radius: 3px;
  vertical-align: center;
  text-align:center;
}

.timeslot:hover { 
  background-color: #2CA893;
  cursor: pointer;
}

.selected-time{
  background-color: #555 !important;
}
</style>

<?php $db = \Config\Database::connect(); ?>
    <?= view('App\Views\components\notifications') ?>
    <br>
    <input type="hidden" id="base_url" value="<?= base_url(); ?>" name="">
    <input type="hidden" id="station_id" value="<?= $service_stationData['station_id'] ?>" name="">
    <section class="sa-main-layout-contents">
    	<div class="container">
        <div>
  <div class="days">
  <div class="day">
    <div class="datelabel week-days"><strong>Monday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Monday' and time_slot = '".$t."' ");
      //$query = $db->query("select id from availability where station_id=15 and day='Monday' and time_slot = '07:00' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Monday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Monday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div>
      <!-- return $result[0]->id; -->
    <?php } ?>

    <?php } ?>
   


  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Tuesday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Tuesday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Tuesday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Tuesday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
 
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Wednesday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Wednesday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Wednesday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Wednesday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
  

  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Thursday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Thursday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Thursday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Thursday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
  
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Friday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Friday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Friday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Friday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
  
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Saturday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Saturday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Saturday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Saturday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
  
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Sunday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
      <?php 

      $t =strval($data['time_slot']);
      $query = $db->query("select id from availability where station_id='".$service_stationData['station_id']."' and day='Sunday' and time_slot = '".$t."' ");
      
    $result= $query->getResult();

    if (!$result) { ?>
     <div day="Sunday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php }else{ ?>
      <div day="Sunday" slot="<?= $data['time_slot']?>" class="timeslot selected-time"><?= $data['time_slot']?></div><!-- return $result[0]->id; -->
    <?php } ?>
   <?php } ?>
    
  </div>
  <!--< div class="day">
    <div class="datelabel week-days"><strong>Tuesday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Tuesday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>  
  <div class="day">
    <div class="datelabel week-days"><strong>Wednesday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Wednesday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Thursday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Thursday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Friday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Friday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Saturday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Saturday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>
  <div class="day">
    <div class="datelabel week-days"><strong>Sunday</strong></div>
    <?php foreach ($time_slot as $data) { ?>
    <div day="Sunday" slot="<?= $data['time_slot']?>" class="timeslot"><?= $data['time_slot']?></div>
    <?php } ?>
  </div>
  </div>
</div> -->
            <!-- <form name="avaliability">
          <div class="row">
          	<div class="card">
          		<div class="row">
          			<div class="col-md-4">date</div>
          			<div class="col-md-4">frome</div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Monday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Tuesday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Wednesday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Thursday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Friday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Saturday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          		<div class="row">
          			<div class="col-md-4"><input type="text" value="Sunday" name="day" class="form-control"></div>
          			<div class="col-md-4"><input type="time" class="form-control"></div>
          			<div class="col-md-4">to</div>
          		</div>
          	</div>
          </div>
          <input type="submit" value="submit" name="">
    		</form> -->
    	</div>
    </section>
    

<!-- Modal -->
             
<?= $this->endSection() ?>

