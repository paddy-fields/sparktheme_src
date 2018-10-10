<?php include('header.php'); ?>

<?php include('navbar-main.php') ; ?>

<div class="container">

  <div class="row">

    <div class="col-xs-12">

      <div class="title-block">
        <h1>Portfolio Item - Grid (With Gallery)</h1>
        <hr>
      </div>

      <!--Lightbox Grid-->
      <?php 
      $col_count = 4;
      include('components/gallery-lightbox.php'); 
      ?>
      <!--/Lightbox Grid-->

    </div><!--col-->

  </div><!--/row-->

  <?php include('components/portfolio-details-wide.php');?> 

  <?php include('page-portfolio-nav-arrows.php'); ?>  

</div><!-- /container -->

<?php include('footer.php'); ?>