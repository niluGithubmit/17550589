<!-- load main layout with datatable -->
<?= $this->extend('layouts/admin_layout2') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

<div class="container">
        <div class="tp-banner">
            <div class="card">
              <div class="card-header">
                <h4>Add New User</h4>
              </div>
               <div class="card-body">
<?= view('App\Views\components\notifications') ?>
                <form action="<?= base_url().'/register'; ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;" role="form text-left">
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control" required type="text" name="firstname" value="<?= old('firstname') ?>" placeholder="First Name"/>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" required type="text" name="lastname" value="<?= old('lastname') ?>" placeholder="Last Name"/>
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control" required type="text" name="name" value="<?= old('name') ?>" placeholder="Nickname"/>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" required type="email" name="email" value="<?= old('email') ?>" placeholder="<?= lang('Auth.email') ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <input class="form-control" required type="password" name="password" value="" placeholder="<?= lang('Auth.password') ?>" />
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" required type="password" name="password_confirm" value="" placeholder="Confirm Password" />
                      </div>
                    </div>
                  </div>
                  
                  <div class="text-center">
                    <button name="registerButton" class="btn btn-success mb-2"><?= lang('Auth.register') ?></button>
                    
                  </div>
                
                </form>

               
              </div>
        
    </div>
        </div>
</div>

    

<?= $this->endSection() ?>

