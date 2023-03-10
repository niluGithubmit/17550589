<?php if (session()->has('success')) : ?>
   
    <div class="alert alert-success" role="alert">
  <span class="alert-text"><strong>Well done!</strong> <?= session('success') ?></span>
</div>
<?php endif ?>


<?php if (session()->has('deactive')) : ?>
    <div class="alert alert-warning" role="alert">
  <span class="alert-text"><strong>Deactived</strong> <?= session('success') ?></span>
</div>
<?php endif ?>


<?php if (session()->has('error')) : ?>
    <div class="alert alert-warning" role="alert">
  <span class="alert-text"><strong>Sorry there was a problem!</strong> <?= session('error') ?></span>
</div>
<?php endif ?>


<?php if (session()->has('errors')) : ?>
  <div class="alert alert-danger" role="alert">
  <span class="alert-text"><strong>Error</strong>
    <?php foreach (session('errors') as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach ?>
  </span>
</div> 
<?php endif ?>


<?php if (session()->has('warning')) : ?>
    <div class="alert alert-warning" role="alert">
  <span class="alert-text"><strong>Warning</strong> <?= session('warning') ?></span>
</div>
<?php endif ?>

