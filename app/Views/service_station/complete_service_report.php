
<style type="text/css">
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php $count = count($data['data']);   //var_dump($data['data'][0]['id']);
//die(); ?>

<div id="print_c">
  
  <div class="contaier">
    <h4 style="">Complete Service Report</h4>
    <div class="row">
      <div class="col-sm-6">
        <h5>station name:<?=$_SESSION['service_stationData']['station_name']?></h5>
      </div>
      <div class="col-sm-6">
        <h5>date:<?=$data['data'][0]['request_date'];?></h5>
      </div>
    </div>
    <
    
    <table class="table">
    <thead>
      <tr>
        <th>Appintment Id</th>
        <th>Owner Name</th>
        <th>Owner Contact</th>
        <th>Vehicle Number</th>
        <th>Servise</th>
        <th>Price</th>
        <th>Additional Price</th>
        <th>Total</th>
        

      </tr>
    </thead>
    <tbody>
<?php $i=0; $net_total=0; ?>
      <?php if(isset($data)){ ?>


      <?php  while($i < $count){ ?>
      <tr>
        <td><?=$data['data'][$i]['id'];?></td>
        <td><?=$data['data'][$i]['owner_name'];?></td>
        <td><?=$data['data'][$i]['contact'];?></td>
        <td><?=$data['data'][$i]['vehicle_number'];?></td>
        <td><?=$data['data'][$i]['cat_name'];?></td>
        <td><?=$data['data'][$i]['price'];?></td>
        <td><?=$data['data'][$i]['ad_price'];?></td>
        <td><?=$data['data'][$i]['total'];?></td>
      </tr>
    <?php $net_total= $net_total+$data['data'][$i]['total']; $i++; } }?>
    </tbody>
  </table>
  <!-- <h4>Today Income = <?php // echo $net_total;?></h4> -->
  </div>
  


</div>


