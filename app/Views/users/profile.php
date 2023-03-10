<?= $this->extend('layouts/admin_layout2') ?>

<?= $this->section('main') ?>



    <?= view('App\Views\components\notifications') ?>
    <br>


      <div class="container">
        <div class="row">
         <!--  <div class="col-md-4">
            <div class="card" style="background-color:black; margin-right: 0px;">
              <ul class="nav sidebar-nav">
                
                <li class="profile-box">
                    <div class="sidebar-brand pb-5">
                        <img src="<?= base_url().'/images/userprofile.png'?>" class="img-responsive profile" alt="userprofile">
                        <a href="#" class="profile-name">
                            <?= $userData['name'] ?>
                        </a>
                        <a href="#" class="user">
                            <?= $userData['email'] ?>
                        </a>
                    </div>

                </li>
            </ul>
            </div>
            
          </div> -->
         

        
          <div class="col-md-12">
            <div class="card">
              <div class="card-header"><h4>PROFILE UPDATE</h4></div>
              <div class="card-body">
                <form action="<?= site_url('update-profile'); ?>" method="POST" accept-charset="UTF-8" onsubmit="updateProfile.disabled = true; return true;">
      <?= csrf_field() ?>
      <h5 class="pb-2 mb-0 mt-4">Name</h5>
      <hr>

      <div class="form-group row mt-3">
        <label class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-10">
          <input type="text" name="firstname" class="form-control col-md-6 text-capitalize" value="<?= $userData["firstname"] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-10">
          <input type="text" name="lastname" class="form-control col-md-6 text-capitalize" value="<?= $userData["lastname"] ?>">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nickname</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control col-md-6 text-capitalize" value="<?= $userData["name"] ?>">
        </div>
      </div>

      <h5 class="pb-2 mb-0 mt-4">Contact Info</h5>
      <hr>

      <div class="form-group row mt-3">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control col-md-6 text-lowercase" value="<?= $userData["email"] ?>">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-10">
          <button name="updateProfile" type="submit" class="mini-btn center-block colr6 btn btn-success">Update Profile</button>
         
        </div>
      </div>
    </form>
              </div>
            </div>  
            
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><h2>Login Access</h2></div>
              <div class="card-body">
                <form action="<?= site_url('change-password'); ?>" method="POST" accept-charset="UTF-8" onsubmit="changePassword.disabled = true; return true;">
      <?= csrf_field() ?>
    

      <div class="form-group row mt-3">
        <label class="col-sm-4 col-form-label">Current Password</label>
        <div class="col-sm-8">
          <input type="password" name="password" class="form-control col-md-12" value="" minlength="5" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-4 col-form-label">New Password</label>
        <div class="col-sm-8">
          <input type="password" name="new_password" class="form-control col-md-12" value="" minlength="5" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-4 col-form-label">Confirm New Password</label>
        <div class="col-sm-8">
          <input type="password" name="new_password_confirm" class="form-control col-md-12" value="" minlength="5" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button name="changePassword" type="submit" class="mini-btn center-block colr6 btn btn-success">Update Password</button>
        </div>
      </div>
    </form>
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header"><h2>Account Removal</h2></div>
              <div class="card-body">
                <form action="<?= site_url('delete-account') ?>" method="POST" accept-charset="UTF-8" onsubmit="deleteAccount.disabled = true; return true;">
      <?= csrf_field() ?>
      
      <p><?= lang('Auth.deleteAccountInfo') ?></p>

      <div class="form-group row mt-3">
        <label class="ml-3 col-form-label">Current Password</label>
        <div class="col-sm-12">
          <input type="password" name="password" class="form-control col-md-12" value="" minlength="5" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button name="deleteAccount" type="submit" class="btn btn-danger" onclick="return confirm('<?= lang('Auth.areYouSure') ?>')"> <?= lang('Auth.deleteAccount') ?></button>
        </div>
      </div>
    </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>





        

  

  
  <br>


  

  

</div>
</div>
<?= $this->endSection() ?>