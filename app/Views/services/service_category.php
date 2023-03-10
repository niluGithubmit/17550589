
<!-- load main layout with datatable -->

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
                <div class="card-header"><h2>Add New Category</h2></div>
                <div class="card-body">

                    
                    <form action="<?= base_url().'/add-category'; ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left">
                        <input type="hidden" name="station_id" id="station_id" value="10" name="">
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">Category Name</span>
                      </div>
                      <input type="text" id="cat_name" name="cat_name" class="form-control" required>
                      <span class="invalid-feedback"></span>
                     
                    </div>
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">Description</span>
                      </div>
                      <textarea id="cat_des" name="cat_des" class="form-control" required>
                      </textarea>
                      <span class="invalid-feedback"></span>
                     
                    </div>
                  </div>
                        </div>
                        
                      <div class="col-md-6">
                        <button name="add_cat" id="add_cat" class="btn btn-success mb-2">Add Category</button>
                      </div>
                    </div>

                   
                </form>
                </div>
            </div>

            <br>
        
       
            <div class="card">
                <div class="card-header"><h2>All Categories</h2></div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover table-striped" id="users_table" data-order='[[ 0, "asc" ]]'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item):?>
                                <tr>
                                 
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['cat_name'] ?></td>
                                    <td><?= $item['description'] ?></td>
                                  
                                    
                                    
                                    
                                    
                                    <td class="text-center">
                                        

                                        <button class="btn btn-info btn-sm cat_edit_btn" eid="<?=$item['id']; ?>" des="<?=$item['description']; ?>" cat_name_val="<?=$item['cat_name']; ?>"> Edit</button>
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

<div class="modal fade" id="cat_edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url().'/update-category'; ?>" method="POST" accept-charset="UTF-8" role="form text-left">
                        <input type="hidden" name="cat_id" id="cat_id" >
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">Category Name</span>
                      </div>
                      <input type="text" id="cat_name_update" name="cat_name_update" class="form-control" required><br>
                      
                     
                    </div>
                    <br>
                     <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-primary text-white">Description</span>
                      </div>
                      <textarea id="cat_des_update" name="cat_des_update" class="form-control" required>
                      </textarea>
                      <span class="invalid-feedback"></span>
                     
                    </div>
                  </div>

                  <span class="text-danger invalid-feedback-updare"></span>
                        </div>
                        
                     
                    </div>

                   
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="update_cat" id="update_cat" class="btn btn-info">Update Category</button>
        </form>
      </div>
    </div>
  </div>
</div>












                

             
<?= $this->endSection() ?>

