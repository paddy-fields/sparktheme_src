<?php include('header.php'); ?>

<?php include('navbar-main.php') ; ?>

<div class="container mb-20 mb-0-xs">

	<div class="feature-title-thin">
	  <div class="title-block text-center">
	    <h2>3 Column - Caption</h2>
	    <hr>
	  </div>
	</div><!--feature-title-thin-->

	<?php 

	$col_count = 3; 
	include('components/gallery-caption.php'); 

	?>

</div><!--/container-->

<?php include('footer.php'); ?>