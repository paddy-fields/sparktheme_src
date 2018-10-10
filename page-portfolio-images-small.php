<?php include('header.php'); ?>

<?php include('navbar-main.php'); ?>

<div class="container">

  <!--[2 Column]-->
  <div class="row"> 

    <div class="col-xs-12 col-sm-4 pull-right">
      <!--portfolio title-->
      <div class="title-block">
        <h1>Portfolio Item - Small Images</h1>
        <hr>
      </div>
    </div>

    <!--[Image List]-->
    <div class="portfolio-image-list col-xs-12 col-sm-8">
      <img class="img" src="img/bunny1.jpeg"/>
      <img class="img" src="img/bunny2.jpeg"/>
      <img class="img" src="img/bunny3.jpeg"/>
    </div>
    <!--[/Image List]-->

    <!--[Content]-->
    <div class="col-xs-12 col-sm-4 pull-right">

      <?php include('components/portfolio-details-sidebar.php');?>

    </div>
    <!--[/Content]-->

  </div>
  <!--/[2 Column]-->

  <?php include('page-portfolio-nav-arrows.php'); ?>
  
</div><!--/container-->

<?php include('footer.php'); ?>