<!-- load main layout with datatable -->
<?= $this->extend('layouts/admin_layout') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>
<div class="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-navigation">
                        <li>
                            <a href="index-2.html" class="menu1">Home</a>
                        </li>
                        <li class="active">
                            <a href="#" class="menu3"> User Management</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
<div class="container">
        <div class="tp-banner">
            <div class="card">
                <div class="card-body text-black">
                    <div class="table-responsive">
            <table class="table table-hover" id="users_table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>User Type</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                
            </table>
        </div>
                </div>
        
    </div>
        </div>
</div>

    

<?= $this->endSection() ?>

