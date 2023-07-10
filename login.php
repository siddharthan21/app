<?php
include 'libs/load.php'
?>
<!doctype html>
<html lang="en">
  <head>
 <?php load_templete('head'); ?>
    <style>
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
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