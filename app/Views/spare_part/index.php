<!-- load main layout with datatable -->

<?= $this->extend('layouts/service_station_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<style type="text/css">
    #price{
        padding-left: 50px;
        padding-right: 40px;
    }

    span{
        padding: 0;
        margin: 0;
        font-size: 1.9rem;
    }

    #weight_liters{
        padding-right: 40px;
    }
</style>
   
    <?= view('App\Views\components\notifications') ?>
    <br>
<div class="container">

    <!-- 'spare_id', '', 'brand', 'capacity','weight','liters', 'description', 'quantityInStock', 'price' -->
        
            <div class="card">
                <div class="card-header"><h2>Add New Spare Parts</h2></div>
                <div class="card-body">
                    
                    <form enctype="multipart/form-data" action="<?= base_url().'/add-part'; ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left" id="spare_part_form">
                        
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Spare Code</label>
                            <input type="text" class="form-control" id="spare_id" name="spare_id" style="color: #000 !important;" required>
                            <span class="invalid-feedback"></span>
                           <input type="hidden" id="station_id" name="station_id"  value="<?= $service_stationData['station_id'] ?>" name="">
                        </div>
                        </div>
                        
                      <div class="col-md-6">
                        <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Spare Name</label>
                            <input type="text" class="form-control" id="spare_name" name="spare_name" style="color: #000 !important;" required>
                           
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Brand</label>
                            <input type="text" class="form-control" id="brand" name="brand" style="color: #000 !important;" required>
                            
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Capacity</label>
                            <input type="number" class="form-control" min="0" id="capacity" name="capacity" style="color: #000 !important;" required>
                            
                        </div>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2">
                          <div class="form-group">
                            <label for="i92i" class="control-label">Select Type</label>
                              <select id="weight_liters_type" class="form-control">
                                    <option value="Weight">Weight</option>
                                    <option value="Liters">Liters</option>
                                   
                                </select>
                                <input type="hidden" value="weight" id="selected_weight_liters" name="selected_weight_liters">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                            <label for="i92i" class="control-label">Weight/Liters</label>
                              <input type="number" class="form-control" min="0" id="weight_liters" name="weight_liters" style="color: #000 !important;" required>
                              <i class=" pull-right inputcss"><span id="weight_liters_ext">Kg</span></i>
                          </div>
                      </div>
                      <div class="col-md-6">
                           <div class="form-group  is-empty">
                               <label for="i92i" class="control-label">Price</label>
                              
                                
                                <input type="number" name="price" id="price" min="1" max="10000000" class="form-control" required>
                                <i class=" pull-left inputcss"><span>LKR</span></i>
                                <i class=" pull-right inputcss"><span>.00</span></i>
                               
                            
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Quantity In Stock</label>
                            <input type="number" class="form-control" id="quantityInStock" min="1" max="10000000" name="quantityInStock" style="color: #000 !important;" required>
                            
                        </div>
                      </div>
                        
                        <div class="col-md-6">
                          <div class="form-group  is-empty">
                            <label>updated date</label>
                                    <input class="form-control text-info" type="date" value="<?= date('Y-m-d');?>" name="update_date" id="update_date" required><br>
                        
                        </div>
                        </div>

                        <div class="col-md-6">  
                          <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" style="color: #000 !important; " required>

                          </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group  is-empty">
                            <label for="i92i" class="control-label">Spare Part Image</label>
                            <input onchange="readURL(this);" type="file" class="form-control" id="img" name="img" style="color: #000 !important; " >
                          
                        </div>
                        </div>
                        <div class="col-md-4">
                             <img width="30%" id="blah" src="<?=base_url()."/uploads/spare_part/no_image.jpg"?>"> 
                        </div>
                    </div>
                  
                  <div class="text-center">
                    <button name="add_part" id="add_part" class="btn btn-success mb-2">Add Part</button>
                    
                  </div>
                 
                </form>
                </div>
            </div>

            <br>
        
       
            <div class="card">
                <div class="card-header"><h2>All Spare Parts</h2></div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover table-striped" id="users_tableu" data-order='[[ 0, "asc" ]]'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Spare Code</th>
                                <th>Spare Name</th>
                                <th>Brand</th>
                                <th>Capaciry</th>
                                <th>Weight</th>
                                <th>Liters</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>updated date</th>
                                <th></th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item):?>
                                <tr>
                                 
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['spare_id'] ?></td>
                                    <td><?= $item['spare_name'] ?></td>
                                    <td><?= $item['brand'] ?></td>
                                    <td><?= $item['capacity'] ?></td>
                                    <td><?= $item['weight'] ?></td>
                                    <td><?= $item['liters'] ?></td>
                                    <td><?= $item['price'] ?></td>
                                    <td><?= $item['description'] ?></td>
                                    <td><?= $item['quantityInStock'] ?></td>
                                    <td><?= $item['date'] ?><td>

                                    <td class="text-right">
                                        
                                        <a class="btn btn-info btn-sm" href="<?= base_url().'/part-edit/'.$item['id'] ?>"> Edit</a>
                                        <a class="btn btn-danger btn-sm" href="<?= site_url('/part/delete/').$item['id'] ?>"> Delete</a>
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


<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

  

             
<?= $this->endSection() ?>

