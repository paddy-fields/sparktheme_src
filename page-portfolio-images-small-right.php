<?php include('header.php'); ?>

<?php include('navbar-main.php'); ?>

<div class="container">

  <!--[2 Column]-->
  <div class="row"> 

    <div class="col-xs-12 col-sm-4">
      <!--portfolio title-->
      <div class="title-block">
        <h1>Portfolio Item - Small Images (Right)</h1>
        <hr>
      </div>
    </div>

    <!--[Image List]-->
    <div class="portfolio-image-list col-xs-12 col-sm-8 pull-right">
      <img class="img" src="img/6.jpg"/>
      <img class="img" src="img/2.jpg"/>
      <img class="img" src="img/3.jpg"/>
    </div>
    <!--[/Image List]-->

    <!--[Content]-->
    <div class="col-xs-12 col-sm-4">

      <?php include('components/portfolio-details-sidebar.php'); ?>

    </div>
    <!--[/Content]-->

  </div>
  <!--/[2 Column]-->

  <?php include('page-portfolio-nav-arrows.php'); ?>
  
</div><!--/container-->

<?php include('footer.php'); ?>