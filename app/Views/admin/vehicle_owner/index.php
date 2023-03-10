
<!-- load main layout with datatable -->

<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<?= view('App\Views\components\notifications') ?>
<div class="container">
            
    <br>
    <div class="card">
                <div class="card-header">
                    <h2>Vehicle Owners Table</h2>
                </div>
                <div class="card-body text-black">

                    <div class="table-responsive">
            <table class="table table-hover table-striped" id="users_table" data-order='[[ 0, "asc" ]]'>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['owner_name'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['contact'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td class="text-center">
                            <?php if ($item['status'] == 1) : ?>
                                
                                <span class="badge badge-success">Active</span>
                            <?php else : ?>
                                
                                <span class="badge badge-primary">Deactive</span>
                            <?php endif ?>
                        </td>
                  
                        <td class="">
                            <?php if ($item['status'] == 0) : ?>
                                <a class="btn btn-success btn-sm" href="<?= base_url().'/owner/enable/'.$item['id'] ?>"> Enable</a>
                            <?php else : ?>
                                <a class="btn btn-warning  btn-sm" href="<?= base_url().'/owner/disable/'.$item['id'] ?>"> Disable</a>
                            <?php endif ?>

                            <button user_id="<?=$item['id'];?>" class="btn btn-danger mt-1 btn-sm delete_owner"> Delete</button>

                              
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
                </div>
        
    </div>
        
</div>

    

<?= $this->endSection() ?>

