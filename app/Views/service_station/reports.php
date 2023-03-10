

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
      // $query1 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=0");
      // $pending= $query1->getResultArray();
      // $p=count($pending);

      // $query2 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=1");
      // $cancel= $query2->getResultArray();
      // $c=count($cancel);

      // $query3 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."' and status=3");
      // $complete= $query3->getResultArray();
      // $com=count($complete);

      // $query3 = $db->query("SELECT id FROM appointments where station_id='".$service_stationData['station_id'] ."'");
      // $appointment= $query3->getResultArray();
      // $ap=count($appointment);
 ?>

    <?= view('App\Views\components\notifications') ?>
    <div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation">
                       
                        <li class="active">
                            <a href="#" class="menu3"> Reports</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section id="print">
    	<br>
    	<br>
    	<input value="<?=$service_stationData['station_id'] ?>" id="station_id"name="station_id" type="hidden" name="">

    	<input value="<?=base_url(); ?>" id="base_url"name="base_url" type="hidden" name="">
    	<div class="container">
    		<table class="table" width="100%">
    	<tr>



        <form method="post" action="<?= base_url()."/complete_service"?>">
          <input type="hidden"  value="<?= $service_stationData['station_id'];?>" name="station_id">
    		<td>Complete service reports</td>
    		<td>Select Date</td>
    		<td> <input required max="<?=date('Y-m-d');?>" style="width: 150px; color: #999;" type="date" class="form-control" name="complete_report_date" id="complete_report_date"></td>
    		<td width="100px" class="text-center"><a id="complete_report_link" href=""><button type="submit" id='complete_services' class="mini-btn center-block colr7 btn btn-info">Get Report</button></a></td>
    	</tr>
      </form>




    	 <form method="post" action="<?= base_url()."/all_appointment"?>">
          <input type="hidden"  value="<?= $service_stationData['station_id'];?>" name="station_id">
        <td>All Appointment</td>
        <td>Select Date</td>
        <td><input required max="<?php echo date('Y-m-d', strtotime('+7 days'));?>" style="width: 150px; color: #999;" type="date" class="form-control" name="appointment_date" id="complete_report_date"></td>
        <td width="100px" class="text-center"><a id="complete_report_link" href=""><button type="submit" id='complete_services' class="mini-btn center-block colr7 btn btn-info">Get Report</button></a></td>
      </tr>
      </form>
    </table>

    
    	</div>	
    
    </section>
    
    <br>
    
 <br><br>
    



             

             
<?= $this->endSection() ?>

