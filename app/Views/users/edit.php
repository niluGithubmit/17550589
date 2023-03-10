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
                <div class="card-body text-black">
                    <form action="<?= site_url('users/update-user'); ?>" method="POST" accept-charset="UTF-8" onsubmit="Button.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="firstname">First name</label>
                <input class="form-control" required type="text" name="firstname" value="<?= $user['firstname'] ?>" />
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input class="form-control" required type="text" name="lastname" value="<?= $user['lastname'] ?>" />
            </div>
            <div class="form-group">
                <label for="name">Nickname</label>
                <input class="form-control" required type="text" name="name" value="<?= $user['name'] ?>" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" required type="email" name="email" value="<?= $user['email'] ?>" />
            </div>
            <div class="form-group">
                <label for="user_role">User Type</label>
                <select id="user_role" name="user_role" class="form-control">
                    <option value="1">Adminitrator</option>
                    <option value="2">Service stations Offices</option>
                    <option value="3">Other Officer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="active">Status</label>
                <select class="form-control" name="active" required>
                    <?php if ($user['active'] === 1) : ?>
                        <option value="1" selected>Enable</option>
                    <?php else : ?>
                        <option value="1">Enable</option>
                    <?php endif ?>

                    <?php if ($user['active'] === 0) : ?>
                        <option value="0" selected>Disable</option>
                    <?php else : ?>
                        <option value="0">Disable</option>
                    <?php endif ?>
                </select>
              </div>
            <div class="form-group">
                <input name="id" type="hidden" value="<?= $user['id'] ?>" readonly/>
                <button type="submit" class="mini-btn center-block colr6 btn btn-success" name="Button"></i> Update</button>
            </div>
        </form>
                </div>
        
    </div>
        </div>
</div>

    

<?= $this->endSection() ?>

