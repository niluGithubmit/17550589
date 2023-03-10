<!-- load main layout with datatable -->

<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>


<div class="container">
        <div class="tp-banner">

<?= view('App\Views\components\notifications') ?>
            <div class="card">
                <div class="card-header">
                    <h2>User Table</h2>
                </div>
                <div class="card-body text-black">

                    <div class="table-responsive">
            <table class="table table-hover table-striped" id="users_table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="text-center">Status</th>
                        <th>User Type</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td class="text-center">
                            <?php if ($item['active'] == 1) : ?>
                                
                                <span class="badge badge-success">Active</span>
                            <?php else : ?>
                                
                                <span class="badge badge-primary">Deactive</span>
                            <?php endif ?>
                        </td>
                        <td>
                            <?php if ($item['user_role'] == 1) : ?>
                                Administrator
                            <?php elseif ($item['user_role'] == 2): ?>
                                Officers
                            <?php elseif ($item['user_role'] == 3) : ?>
                                Customer
                            <?php else : ?>
                                Not Set
                            <?php endif ?>
                        </td>
                        <td class="text-right">
                            <?php if ($item['active'] == 0) : ?>
                                <a class="btn btn-success btn-sm" href="<?= base_url().'/users/enable/'.$item['id'] ?>"> Enable</a>
                            <?php else : ?>
                                <a class="btn btn-warning  btn-sm" href="<?= base_url().'/users/disable/'.$item['id'] ?>"> Disable</a>
                            <?php endif ?>

                            <a class="btn btn-info btn-sm" href="<?= base_url().'/users-edit/'.$item['id'] ?>"> Edit</a>
                            <button user_id="<?=$item['id'];?>" class="btn btn-danger btn-sm delete_user"> Delete</button>

                            <!-- href=" //site_url('/users/delete/').$item['id'] ?>" -->
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

        <input type="text" id="base_url" value="<?=base_url()?>" name="">
                </div>
        
    </div>
        </div>
</div>

    

<?= $this->endSection() ?>

