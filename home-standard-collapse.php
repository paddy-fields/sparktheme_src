<?php include('header.php');?>

<?php include('navbar-main-collapse.php'); ?>

<!-- Feature Text -->
<?php include('components/feature-text-parallax-slider.php'); ?>

<!-- Feature CLients-->
<?php include('components/feature-clients.php'); ?>

<!-- Feature Image Split Left -->
<?php include('components/feature-image-split-left.php'); ?>

<!-- Feature Image Right -->
<?php include('components/feature-image-split-right.php'); ?>

<!-- Feature 4 Col -->
<?php include('components/feature-4col.php'); ?>

<!-- Feature Background Image -->
<?php include('components/feature-contact.php'); ?>

<div class="container-wide">

  <!-- 4 Col Portfolio -->
  <?php 
  $filter = false;
  include('components/gallery-4col-nogutter.php'); 
  ?>

</div>

<?php include('footer.php'); ?>