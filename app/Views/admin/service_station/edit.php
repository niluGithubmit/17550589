<!-- load main layout with datatable -->

<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>
<div class="container">
     
            <div class="card">
                <div class="card-header">
                    <h2>Subscription Details</h2>
                </div>
                <?php if(!empty($subscription_fee['subscription_name'])){ ?>
                <div class="card-body text-black">
                	<form method="post" action="<?= base_url().'/station/station-update'?>" method="POST" accept-charset="UTF-8"  return true; role="form text-left">
                        <div class="row">
                        <div class="col-sm-6">

                        	<div class="form-group">
                        	   <label class="control-label">Expiry Date</label>
                                <input value="<?= $station['exp_date']?>" min="1997-01-01" max="2030-12-31" type="date" id="exp_date" name="exp_date" class="form-control" autocomplete="name" required>
                            </div>

                        
                            <div class="form-group">
                                <label class="control-label">Activation</label>
                                <select class="form-control" name="activation">
                                    
                                <option <?php if($station['activation']==0){ echo "selected";} ?> value="0">not activate</option>
                               	<option <?php if($station['activation']==1){ echo "selected";} ?> value="1">pending</option>
                               	<option <?php if($station['activation']==2){ echo "selected";} ?> value="2">Active</option>
                               </select>
                            </div>
                               
                        </div>

                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<label class="control-label">Payment Slip</label><br>
                                <a href="<?= base_url()."/uploads/".$station['bank_slip']?>" class="btn btn-success">Download Slip</a>
                            </div>
                                
                            <div class="form-group">
                            <label class="control-label">Subscription plan</label><br>
                                <h2 class="badge badge-success"><?=$subscription_fee['subscription_name']?></h2>
                            </div>
                               
                        </div>
                        </div>

                                <input type="hidden" value="<?=$station['station_id'];?>" name="station_id">

                                <br>
                        
                    <button class="btn btn-success">Update</button>


                    </form>
                </div>

            <?php }else{ ?>
                <div class="card-body text-black">
                    <h4>No any subscription payment submitted yet</h4>
                </div>

            <?php } ?>
        
    </div>
    <br>
</div>  

<?= $this->endSection() ?>

