

<?= $this->extend('layouts/service_station_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<?php 
$db = \Config\Database::connect();
$link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $id = end($link_array);

        $query = $db->query("SELECT
  appointments.id,
  appointments.request_date,
  appointments.time_slot,
  appointments.cat_id,
  appointments.station_id,
  appointments.status,
  vehicle_owners.owner_name,
  vehicle_owners.email,
  vehicle_owners.contact,
  vehicle_owners.address,
  vehicle_owners.profile_image,
  vehicle.id as v_id,
  vehicle.vehicle_number,
  vehicle.vehicle_type,
  vehicle.province,
  vehicle.fuel_type,
  vehicle.capacity,
  vehicle.vehicle_model,
  vehicle.average_km,
  vehicle.vehicle_brand,
  service_categories.cat_name
FROM appointments
JOIN vehicle_owners
  ON appointments.owner_id = vehicle_owners.id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.id ='".$id."' ORDER BY appointments.request_date DESC");

        
        $result= $query->getResultArray();
        $data=$result[0];
        $query2 = $db->query("SELECT * FROM `station_category` WHERE station_id='".$data['station_id']."' AND cat_id ='".$data['cat_id']."'");
        $result2= $query2->getResultArray();
        $data2 = $result2;




 ?>
<meta charset = "UTF-8" />
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
    .col-md-12 > .sa-gridlist-item .sa-content-details{
        height: 247px !important;
    }

    .col-md-12 > .sa-gridlist-item .sa-content-info{
        width: auto;
    }
    .col-md-12 > .sa-gridlist-item .sa-content-price{
        height: 247px;
    }
    .col-md-12 > .sa-gridlist-item .sa-content-info .sa-content-details{
        width: 100%;
    }

    .col-md-12 > .sa-gridlist-item :hover{
        background-color: #eee;
        transition: 0.3s;
    }

    .dataTables_filter input  {
    float: none;
    
    color: #111 !important;
}

.service{
    font-size: 1.7rem;
    color: #888;
}

.details{
    font-size: 1.4rem;
    color: #888;
}

.topic{
    font-size: 1.3rem;
    color: #888;
}

.detail{
    font-size: 1.3rem;
    color: #666;
}

hr{
    height:2px;border-width:0;color:gray;background-color:#dde
    
}


</style>
<div class="menu-bar">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation">
                       
                        <li class="active">
                            <a href="#" class="menu3"> Completed Service</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
     <?= view('App\Views\components\notifications') ?>
     <br>
<div class="container">
        <div class="tp-banner">
           <div class="row">
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td width="1000px"><h2>INVOICE</h2></td>
                            <td style="text-align: right;" width="100px"><?= date('Y-m-d');?></td>
                        </tr>
                    </table>
                    <br>
                    <h3>APPOINTMENT & SERVISE DETAILS</h3>
                    <table>
                        <tr>
                            <td width="200px"><h4>appointment number</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['id'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="150px"><h4>appointment date</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['request_date'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="150px"><h4>station name</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $_SESSION['service_stationData']['station_name'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="150px"><h4>service</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['cat_name'];?></h4></td>
                        </tr>
                        
                    </table>
                   
                    <h3>CUSTOMER DETAILS</h3>
                    <table>
                   
                        <tr>
                            <td width="150px"><h4>customer name</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['owner_name'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="200px"><h4>customer contact No.</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['contact'];?></h4></td>
                        </tr>
                        
                    </table>
                    <h3>VEHICLE DETAILS</h3>
                    <table>
                   
                        <tr>
                            <td width="150px"><h4>vehicle No.</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['vehicle_number'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="200px"><h4>Brand</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['vehicle_brand'];?></h4></td>
                        </tr>
                        <tr>
                            <td width="200px"><h4>Model</h4></td>
                            <td width="150px"><h4>:</h4></td>
                            <td width="200px"><h4><?= $data['vehicle_model'];?></h4></td>
                        </tr>
                        
                    </table>
                    <h3>SPARE PART OR OTHER ADDED ACCESSORIES</h3>
                    

                                <form id="myform" method="post" action="<?= base_url()."/complete_service_add"?>">

  <input type="hidden" readonly="true" value="<?=$data['id']; ?>" id="id" name="id">
  <input type="hidden" readonly="true" value="<?=$data['request_date']; ?>" id="request_date" name="request_date">
  <input type="hidden" readonly="true" value="<?=$data['time_slot']; ?>" id="time_slot" name="time_slot">
  <input type="hidden" readonly="true" value="<?=$data['status']; ?>" id="status" name="status">
  <input type="hidden" readonly="true" value="<?=$data['owner_name']; ?>" id="owner_name" name="owner_name">
  <input type="hidden" readonly="true" value="<?=$data['email']; ?>" id="email" name="email">
  <input type="hidden" readonly="true" value="<?=$data['contact']; ?>" id="contact" name="contact">
  <input type="hidden" readonly="true" value="<?=$data['address']; ?>" id="address" name="address">
  <input type="hidden" readonly="true" value="<?=$data['profile_image']; ?>" id="profile_image" name="profile_image">
  <input type="hidden" readonly="true" value="<?=$data['v_id']; ?>" id="v_id" name="v_id">
  <input type="hidden" readonly="true" value="<?=$data['vehicle_number']; ?>" id="vehicle_number" name="vehicle_number">
  <input type="hidden" readonly="true" value="<?=$data['vehicle_type']; ?>" id="vehicle_type" name="vehicle_type">
  <input type="hidden" readonly="true" value="<?=$data['province']; ?>" id="province" name="province">
  <input type="hidden" readonly="true" value="<?=$data['fuel_type']; ?>" id="fuel_type" name="fuel_type">
  <input type="hidden" readonly="true" value="<?=$data['capacity']; ?>" id="capacity" name="capacity">
  <input type="hidden" readonly="true" value="<?=$data['vehicle_model']; ?>" id="vehicle_model" name="vehicle_model">
  <input type="hidden" readonly="true" value="<?=$data['average_km']; ?>" id="average_km" name="average_km">
  <input type="hidden" readonly="true" value="<?=$data['vehicle_brand']; ?>" id="vehicle_brand" name="vehicle_brand">
  <input type="hidden" readonly="true" value="<?=$data['cat_name']; ?>" id="cat_name" name="cat_name">

  <div class="row">
      <div class="col-md-6">service</div>
      <div class="col-md-6">Price</div>
  </div>
  <div class="row">
      <div class="col-md-6"><h4><?=$data['cat_name']; ?></h4></div>
      <div class="col-md-6"> <input value="<?=$data2[0]['price'];?>" style="color:black;" id="price" type="number" class="form-control" name="price"></div>
  </div>
  <div class="row">
      <div class="col-md-6"><h4>Additional Prices</h4></div>
      <div class="col-md-6"><input value="g" style="color:black;" id="ad_price" type="number" class="form-control" name="ad_price"></div>

     
       
  </div>
  <div class="row">
      <div class="col-md-6"><h4>Total</h4></div>
      <div class="col-md-6"><input readonly id="total" style="color:black;" type="number" class="form-control" name="total" required/></h4></div>
       
  </div>


                              
                        
                                
                           
                          
                           
                           
                        
                     
                          
                     <!-- <table>
                        <thead>
                            <tr>
                            <th width="350px"><h4>Part name</h4></th>
                            <th width="150px"><h4>price</h4></th>
                            <th width="100px"><h4>price</h4></th>

                            
                        </tr>
                        </thead>
                        <tbody id="tbody">
                            
                        </tbody>
                   
                        
                        
                        
                    </table> -->


                 
   <input type="submit" value="submit" class="btn btn-success" name="">

                        </form>

                    <!-- pdf section end -->

                    
                            <!-- <a href="<?=base_url()."/print_invoice"?>">print</a> -->

                            
                            
                        </div>
            </div>
        </div>
</div>


             
<?= $this->endSection() ?>

