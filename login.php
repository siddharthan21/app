<?php
include 'libs/load.php'
?>
<!doctype html>
<html lang="en">
  <head>
 <?php load_templete('head'); ?>
  </head>
  <body>
<header>

 <?php load_templete('header') ?>
</header>  
<main>
  <?php load_templete('_login');?>
  
 <?php //load_templete('body');?>
</main>
<?php // load_templete('footer');
?>
<script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>