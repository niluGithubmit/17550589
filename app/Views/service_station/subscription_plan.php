

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
                <h1 class="text-center our-pricing-h">Subscription plan</h1>
                <p class="text-center our-pricing-p"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row db-padding-btm db-attached">
            <div class="right-one">
                <div class="col-md-4 col-xs-6 respon-width">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-two">
                            <div class="price price2">
                                <h2 class="satndart-heading"><?= $subscription_plan[0]['subscription_name'];?></h2>
                                <p class="calendar3 cl3">subscription plan</p>
                            </div>
                            <div class="type2 text-center" style="font-size: 4.5rem; font-weight: bold; padding: 30px; text-align: center;">
                                <?= $subscription_plan[0]['fee']."LKR"?><br>
                                <span class="sub-t3 yearly-sub3"></span>
                            </div>
                            <div class="box1-text">
                                <ul>
                                    <li class="shared-li">Amount <span class="pull-right"><?= $subscription_plan[0]['fee']."LKR"?></span></li>
                                    <li class="shared-li">Time Period<span class="pull-right"><?= $subscription_plan[0]['fee_description'];?></span></li>
                                    
                                </ul>
                            </div>
                            <div class="invest-btn-box">
                                <a href="<?= base_url()."/subscription_payment/".$subscription_plan[0]['id'];?>">
                                <button class="invest-btn btn btn-default">Select</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 respon-width">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-two">
                            <div class="price price_a">
                                <h2 class="satndart-heading"><?= $subscription_plan[1]['subscription_name'];?></h2>
                                <p class="calendar3 cl3">subscription plan</p>
                            </div>
                            <div class="type2_2 text-center" style="font-size: 4.5rem; font-weight: bold; padding: 30px; text-align: center;">
                                <?= $subscription_plan[2]['fee']."LKR"?><br>
                                <span class="sub-t3 yearly-sub3"></span>
                            </div>
                            <div class="box1-text">
                                <ul>
                                    <li class="shared-li">Amount <span class="pull-right"><?= $subscription_plan[1]['fee']."LKR"?></span></li>
                                    <li class="shared-li">Time Period<span class="pull-right"><?= $subscription_plan[1]['fee_description'];?></span></li>
                                    
                                </ul>
                            </div>
                            <div class="invest-btn-box">
                                <a href="<?= base_url()."/subscription_payment/".$subscription_plan[1]['id'];?>">
                                <button class="invest-btn btn btn-default">Select</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-one">
                <div class="col-md-4 col-xs-6 respon-width">
                    <div class="db-wrapper">
                        <div class="db-pricing-eleven db-bk-color-three">
                            <div class="price price3">
                                <h2 class="satndart-heading"><?= $subscription_plan[2]['subscription_name'];?></h2>
                                <p class="calendar3 cl3">subscription plan</p>
                            </div>
                            <div class="type3 text-center" style="font-size: 4.5rem; font-weight: bold; padding: 30px; text-align: center;">
                                <?= $subscription_plan[2]['fee']."LKR"?><br>
                                <span class="sub-t3 yearly-sub3"></span>
                            </div>
                            <div class="box1-text">
                                <ul>
                                    <li class="shared-li">Amount <span class="pull-right"><?= $subscription_plan[2]['fee']."LKR"?></span></li>
                                    <li class="shared-li">Time Period<span class="pull-right"><?= $subscription_plan[2]['fee_description'];?></span></li>
                                    
                                </ul>
                            </div>
                            <div class="invest-btn-box">
                                <<a href="<?= base_url()."/subscription_payment/".$subscription_plan[2]['id'];?>">
                                <button class="invest-btn btn btn-default">Select</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
    



             

             
<?= $this->endSection() ?>

