<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>


   
    <?= view('App\Views\components\notifications') ?>
    <br>
<div class="container">

    <!-- 'spare_id', '', 'brand', 'capacity','weight','liters', 'description', 'quantityInStock', 'price' -->
        
            

       
            <div class="card">
                <div class="card-header"><h2>All Stations</h2></div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover table-striped" id="users_table" data-order='[[ 0, "asc" ]]'>
                        <thead>
                            <tr>
                            	
                                <th>Station ID</th>
                                <th>Station Name</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
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
                                        

                                        <button class="btn btn-info btn-sm cat_edit_btn" eid="<?=$item['id']; ?>" cat_name_val="<?=$item['cat_name']; ?>"> Edit</button>
                                        <button class="btn btn-danger btn-sm cat_delete_btn" did="<?=$item['id']; ?>" >Delete</button>
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

