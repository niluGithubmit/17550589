<?php 

//echo $session['ownerData'];
if(isset($_SESSION['ownerData'])){

    echo $this->extend('layouts/customer_layout');
}
else if(isset($_SESSION['service_stationData'])){

    echo $this->extend('layouts/service_station_layout');
}else{
    echo $this->extend('layouts/site_layout');
}

 ?>
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


</style>
<div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation">
                       
                        <li class="active">
                            <a href="#" class="menu3"> All Services</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
<div class="container">
        <div class="tp-banner">
           <div class="row">
                <div class="col-md-12">
                    <h4>All Services </h4>

                    <table id="test">
                        <thead>
                            <tr>
                                <th></th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php foreach($data as $item): ?>
                            <tr>
                                <td>
                                    <ul class="list-inline grid-list home_restaurant" id="grid-list">
                                    
                                <li class="col-xs-6 col-md-12">
                                    <div class="sa-gridlist-item all_grid all_grid">
                                        <!-- content img -->
                                        
                                        <!-- ./content img -->
                                        <div class="sa-content-info">
                                            <!-- content info -->
                                            <div class="sa-content-details">
                                                <!-- content title -->
                                                <div class="sa-content-title">
                                                    <a href="">
                                                        <h6 style="font-size: 16px;" class="reli"><?= $item['cat_name']?></h6>
                                                    </a>
                                                </div>
                                                <!-- ./content title -->
                                                <div class="sa-content-title">
                                                    <a href="">
                                                        <h6 class="reli">Description</h6>
                                                    </a>
                                                    <p>
                                                        <?= $item['description']?>
                                                    </p>
                                                    <div class="text-right">
                                                        <a href="<?=base_url()."/get_service_stations/".$item['id']?>"><button class="btn btn-sm btn-success">View Service Stations</button></a>
                                                    </div>
                                                    

                                                </div>
                                               <!--  <div>
                                                    <span class="av_price pr-4">Average Cost Price :  &nbsp;&nbsp;&nbsp;</span><span class="price">LKR &nbsp; &nbsp;

                                                     

                                                       </span> 
                                                </div> -->
                                                <div >
                                                    
                                                </div>
                                               
                                            </div>
                                            <!-- ./content info -->
                                            <!-- content price -->
                                           <!--  <div class="sa-content-price">
                                                
                                                <div class="text-center align-middle">

                                                    <h4 class="text-info font-weight-bold">Average Price</h4>

                                                    <h2 style="font-weight: bolder;" class="text-warning font-weight-bold">
                                                        
                                                    </h2>
                                                    <h6 class="text-info font-weight-bold">LKR</h6>
                                                   
                                                    
                                                </div>
                                            </div> -->
                                            <!-- ./content price -->
                                        </div>
                                    </div>
                                </li>
                            
                            </ul>
                            </td>
                                
                            </tr>
                            <?php   endforeach ?>
                        </tbody>

                    </table>
                           
                </div>
            </div>
        </div>
</div>

    

<?= $this->endSection() ?>

