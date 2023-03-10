<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Slip</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>
</head>
<body>

  <?php 
  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//echo $uri_segments[4];
  // $link = $_SERVER['PHP_SELF'];
  //   $link_array = explode('/',$link);
  //   $id = end($link_array);
                                    // $db = \Config\Database::connect();
                                    
                                    // $query = $db->query("SELECT * FROM `subscription_fee` WHERE id ='".$id."'");
                                    // $result= $query->getResult();

                                    // end $result['fee'];
                                   
                                    ?>

  <table width="100%">
    <tr>
      <td valign="top"><h5>CASH-PAYING-IN-SLIP <br>
        (To be filled in quadruplicate) <br>
      BANK COPY - 1</h5>
    </td>
    <td valign="top" align="right">
      <h4>GLOBLE VEHICLE SEVICE HELP CENTER - BANK SLIP FOR SERVICE STATION PAYMENT
      </h4>

    </td>
  </tr>
</table>
<table width="100%">
   <tr>
    <td valign="top"><h5>date</h5>
  </td>
  <td valign="top" align="right">
    <table border="1px">
      <tr>
        <th>D</th>
        <th>D</th>
        <th>M</th>
        <th>M</th>
        <th>Y</th>
        <th>Y</th>
        <th>Y</th>
        <th>Y</th>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </table>
  </td>
  <td style="padding-right: 250px; border: 1px solid black;" align="top" ><h5>Paid at People’s Bank <br>
Branch</h5></td>
<td style="padding-right: 100px; border: 1px solid black;" valign="top" align="left"><h5>Bank <br>
Code</h5></td>
</tr>
</table>


 

  

 <!--  <table width="100%">
    <tr>
        <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td>
    </tr>

  </table>
 -->
  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>Station ID</th>
        <th>Station Name</th>
        <th>Subcription Plan</th>
        <th>Amount</th>
        <th>Subcription Date</th>
      </tr>
    </thead>
    <tbody style="background-color: #eee;">
      <tr>
        <th scope="row"><?= $uri_segments[6];?></th>
        <td><?= urldecode($uri_segments[7]) ;?></td>
        <td align="center"><?= $uri_segments[4];?></td>
        <td align="center"><?= $uri_segments[5];?></td>
        <td align="center"><?= date("Y/m/d");?></td>
      </tr>
      
    </tbody>
  </table>
  <h6>PAID IN CREDIT OF: <br>
<b>UCSC EXTERNAL DEGREE PROGRAMME- PEOPLE’S BANK, THIMBIRIGASYAYA - AC No. 086-1001-111-89667</b>
</h6>
<table>
  <tr>
    <td ><h6>AMOUNT PAID RS.: ……………………………………</h6></td>
      <td style="border: 1px solid black; padding-left: 20px; padding-right: 180px;" rowspan="2" align="left">1. Depositer Full Name:(Rev./Dr./Mr./Mrs./Miss./Other)<br><br>
  ..............................................................................
   <br>
 
  
  2. Depositer National ID/Postal ID/Passport No. : <br><br>
..............................................................................</td>
  </tr>
   <tr>
    <td><h6>AMOUNT IN WORDS: ……………………………………</h6></td>
  </tr>
</table>
<br>
<table width="100%">
  <tr>
    <td align="center"><h6>................................................................... <br>
CASH DEPOSITOR’S SIGNATURE </h6></td>

  <td></td>
    <td align="center"><h6>.................................................................. <br>
CASHIER’S SIGNATURE </h6></td>
  </tr>
</table>

<h6 style="background-color: #aaa" align="center">DO NOT WRITE ANYTHING BELOW THIS LINE</h6>

  <table width="100%">
    <tr>
      <td valign="top"><h5>CASH-PAYING-IN-SLIP <br>
        (To be filled in quadruplicate) <br>
      VEHICLE OWNER - 1</h5>
    </td>
    <td valign="top" align="right">
      <h4>GLOBLE VEHICLE SEVICE HELP CENTER - BANK SLIP FOR SERVICE STATION PAYMENT
      </h4>

    </td>
  </tr>
</table>
<table width="100%">
   <tr>
    <td valign="top"><h5>date</h5>
  </td>
  <td valign="top" align="right">
    <table border="1px">
      <tr>
        <th>D</th>
        <th>D</th>
        <th>M</th>
        <th>M</th>
        <th>Y</th>
        <th>Y</th>
        <th>Y</th>
        <th>Y</th>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </table>
  </td>
  <td style="padding-right: 250px; border: 1px solid black;" align="top" ><h5>Paid at People’s Bank <br>
Branch</h5></td>
<td style="padding-right: 100px; border: 1px solid black;" valign="top" align="left"><h5>Bank <br>
Code</h5></td>
</tr>
</table>


 

  

 <!--  <table width="100%">
    <tr>
        <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td>
    </tr>

  </table>
 -->
  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>Station ID</th>
        <th>Station Name</th>
        <th>Subcription Plan</th>
        <th>Amount</th>
        <th>Subcription Date</th>
      </tr>
    </thead>
    <tbody style="background-color: #eee;">
      <tr>
        <th scope="row"><?= $uri_segments[6];?></th>
        <td><?= urldecode($uri_segments[7]) ;?></td>
        <td align="center"><?= $uri_segments[4];?></td>
        <td align="center"><?= $uri_segments[5];?></td>
        <td align="center"><?= date("Y/m/d");?></td>
      </tr>
      
    </tbody>
  </table>
  <h6>PAID IN CREDIT OF: <br>
<b>UCSC EXTERNAL DEGREE PROGRAMME- PEOPLE’S BANK, THIMBIRIGASYAYA - AC No. 086-1001-111-89667</b>
</h6>
<table>
  <tr>
    <td ><h6>AMOUNT PAID RS.: ……………………………………</h6></td>
      <td style="border: 1px solid black; padding-left: 20px; padding-right: 180px;" rowspan="2" align="left">1. Depositer Full Name:(Rev./Dr./Mr./Mrs./Miss./Other)<br><br>
  ..............................................................................
   <br>
  
  2. Depositer National ID/Postal ID/Passport No. : <br><br>
..............................................................................</td>
  </tr>
   <tr>
    <td><h6>AMOUNT IN WORDS: ……………………………………</h6></td>
  </tr>
</table>
<br>

<table width="100%">
  <tr>
    <td align="center"><h6>................................................................... <br>
CASH DEPOSITOR’S SIGNATURE </h6></td>

  <td></td>
    <td align="center"><h6>.................................................................. <br>
CASHIER’S SIGNATURE </h6></td>
  </tr>
</table>

</body>
</html>