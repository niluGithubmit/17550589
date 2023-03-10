

<?= $this->extend('layouts/service_station_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>


    <?= view('App\Views\components\notifications') ?>
   <section class="our-pricing" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center our-pricing-h">Subscription payment</h1>
                <p class="text-center our-pricing-p"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row db-padding-btm db-attached text-center">
        	<div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-two">
                            <div class="price price2" style="background-color: #113344;">
                                <h2 class="satndart-heading"><?= $subscription_plan['subscription_name'];?></h2>
                                <p class="calendar3 cl3">subscription plan</p>
                            </div>
                            <div class="type2 text-center" style="font-size: 4.5rem; font-weight: bold; padding: 30px; text-align: center; background-color: #112244;">
                                <?= $subscription_plan['fee']."LKR"?><br>
                                <span class="sub-t3 yearly-sub3"></span>
                            </div>
                            <div class="box1-text">
                                <?php $id= $service_stationData['station_id'];
                                $st_name= $service_stationData['station_name'];
                                ?>
                            	<a href="<?= base_url()."/bank_slip/".$subscription_plan['subscription_name']."/".$subscription_plan['fee']."/".$id."/".$st_name;?>">
                                    
                                    
                                <button class="btn btn-info"><i class="fa fa-download pr-4"></i>&nbsp;Download Bank Slip</button></a>
                                <ul>
                                    <li class="shared-li">Amount <span class="pull-right"><?= $subscription_plan['fee']."LKR"?></span></li>
                                    <li class="shared-li">Time Period<span class="pull-right"><?= $subscription_plan['fee_description'];?></span></li>
                                    
                                </ul>
                            </div>
                            <div class="invest-btn-box text-center">
                                <div class="container">
                                    <form enctype="multipart/form-data" method="post" action="<?=base_url().'/subcription_payments'?>">
                                    <input value="<?= $id;?>" type="hidden" name="station_id" id="station_id">
                                    <input value="<?= $subscription_plan['duration'];?>" type="hidden" name="duration" id="duration">
                                    <label>Payment date</label>
                                    <input class="form-control text-info" type="date" name="payment_date" id="payment_date" required><br>
                                    <input value="<?= $subscription_plan['id'];?>" type="hidden" name="subscription_id" id="subscription_id">
                                    <input accept=".pdf" class="form-control text-info" type="file" name="slip" id="slip" required><br>
                                    <button class="invest-btn btn btn-default">Submit</button>
                                </form>
                                </div>

                                
                                
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
    

             
<?= $this->endSection() ?>

