<?php include('header.php'); ?>
  
<?php include('navbar-clear.php') ; ?> 

<div class="parallax-container" style="background-image: url('img/large.jpg'); height: 100vh; background-size: cover;" data-paroller-factor="0.5"></div>

<!-- Feature Contact -->
<?php include('components/feature-clients.php'); ?>

<!-- Feature 4 col -->
<?php include('components/feature-4col.php'); ?>

<div class="container-wide">

  <!-- 4 Col Portfolio -->
  <?php 
  $filter = false;
  include('components/gallery-4col-nogutter.php'); 
  ?>

</div>

<?php include('footer.php'); ?>