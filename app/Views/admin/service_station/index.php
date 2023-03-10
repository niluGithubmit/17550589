
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
                    <h2>Add Service Station</h2>
                </div>
                <div class="card-body text-black">
                	<form method="post" action="<?= base_url().'/station_register'?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left">
                    <div class="row">
                        <div class="col-sm-6">
                        	<div class="form-group">
                        	    <label class="control-label">Station Name</label>
                                <input type="text" id="station_name" name="station_name" class="form-control" autocomplete="name" required>
                            </div>
                        
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" id="address" name="address" class="form-control" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Phone Number</label>
                                <input type="text" id="phone_number" maxlength="10" name="phone_number" class="form-control" autocomplete="off" pattern="07[1,2,5,6,7,8][0-9]{7}" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                        	<div class="form-group">
                        	<label class="control-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                            <label class="control-label">Password</label>
                                <input type="password" id="password" name="password" value="" class="form-control" required>
                            </div>

                            <div class="form-group">
                            <label class="control-label">Confirm Password</label>
                                <input type="password" id="password_confirm" value="" name="password_confirm" class="form-control" required>
                            </div>
                        </div>

                    </div>

                          
                     <br>
                        
                    <button class="btn btn-success">Add Station</button>

                    </form>
                    
                </div>
        
    </div>
    <br>
    <div class="card">
        <div class="card-header">
                    <h2>Service Station Table</h2>
        </div>

        <div class="card-body text-black">

            <div class="table-responsive">
            <table class="display table table-hover table-striped" cellspacing="0" width="100%"  id="users_table" data-order='[[ 0, "asc" ]]'>
                <thead>
                	<!-- `station_id`, `station_name`, `address`, `phone_number`, `email`, `password_hash`, `active`, `created_at`, `updated_at` -->
                    <tr>
                        <th>station ID</th>
                        <th>Station Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['station_id'] ?></td>
                        <td><?= $item['station_name'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['phone_number'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td class="text-center">
                            <?php if ($item['active'] == 1) : ?>
                                
                                <span class="badge badge-success">Active</span>
                            <?php else : ?>
                                
                                <span class="badge badge-primary">Deactive</span>
                            <?php endif ?>
                        </td>

                  
                        <td class="text-right">
                            <?php if ($item['active'] == 0) : ?>
                                <a class="btn btn-success btn-sm" href="<?= base_url().'/station/enable/'.$item['station_id'] ?>"> Enable</a>
                            <?php else : ?>
                                <a class="btn btn-warning  btn-sm" href="<?= base_url().'/station/disable/'.$item['station_id'] ?>"> Disable</a>
                            <?php endif ?>

                            <a class="btn btn-info btn-sm" href="<?= base_url().'/station-edit/'.$item['station_id'] ?>"> Edit</a>
                             <button user_id="<?=$item['station_id'];?>" class="btn btn-danger btn-sm delete_station"> Delete</button>
                        </td>
                        <td></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        
    </div>
        
</div>


<?= $this->endSection() ?>

