 <?php 
$db = \Config\Database::connect();
//$ids=$csid;

$link = $_SERVER['PHP_SELF'];
 $link_array = explode('/',$link);
    $id = end($link_array);

  $query = $db->query("SELECT
  appointments.id,
  appointments.request_date,
  appointments.time_slot,
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
  service_categories.cat_name,
  service_stations.station_name,
  complete_services.price,
  complete_services.ad_price,
  complete_services.total
FROM appointments
JOIN vehicle_owners
  ON appointments.owner_id = vehicle_owners.id
JOIN service_stations
  ON appointments.station_id = service_stations.station_id
JOIN vehicle
  ON vehicle.id = appointments.vehicle_id
JOIN complete_services
  ON complete_services.appointment_id = appointments.id
JOIN service_categories
  ON service_categories.id = appointments.cat_id AND appointments.id ='".$id."' ORDER BY appointments.request_date DESC");

 		
		$result= $query->getResultArray();
	//if (!$result) {
     // // list is empty.
	//return "";
	// 	}else{
	// 		return $result[0];
	// 	}
		$data=$result[0];
 ?>

 <table>
                    	<tr>
                    		<td width="600px"><h2>INVOICE</h2></td>
                    		<td style="text-align: right;" width="100px"><?= date('Y-m-d');?></td>
                    	</tr>
                    	
                    </table>
                    
                    <h3>APPOINTMENT & SERVICE DETAILS</h3>
                    <table>
                    	<tr>
                    		<td width="200px">appointment number</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['id'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="150px">appointment date</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['request_date'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="150px">station name</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['station_name'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="150px">service</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['cat_name'];?></td>
                    	</tr>
                    	
                    </table>
                   
                    <h3>CUSTOMER DETAILS</h3>
                    <table>
                   
                    	<tr>
                    		<td width="150px">customer name</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['owner_name'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="200px">customer contact No.</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['contact'];?></td>
                    	</tr>
                    	
                    </table>
                    <h3>VEHICLE DETAILS</h3>
                    <table>
                   
                    	<tr>
                    		<td width="150px">vehicle No.</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['vehicle_number'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="200px">Brand</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['vehicle_brand'];?></td>
                    	</tr>
                    	<tr>
                    		<td width="200px">Model</td>
                    		<td width="150px">:</td>
                    		<td width="200px"><?= $data['vehicle_model'];?></td>
                    	</tr>
                    	
                    </table>
                    <h3>SPARE PART OR OTHER ADDED ACCESSORIES</h3>
                    <table>
                    	
                     		<tr>
                    		<td width="250px">SERVICE PRICE</td>
                    		<td width="150px"><?= $data['price'];?></td>
                    	  </tr>
                    	
                    	<tr>
                    		<td>ADDITIONAL PRICE</td>
                    		<td><?= $data['ad_price'];?></td>
                    		<td></td>
                    	</tr>
                      
                      <br>
                      <tr><td></td><td><hr></td><tr>
                      <tr>
                        <td>Total</td>
                        <td><?= $data['total'];?></td>
                        <td></td>
                      </tr>
                     	<tr><td></td><td><hr><hr></td><tr>
                     	
                    </table>