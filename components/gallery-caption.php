<?php

if($col_count==2){
	$col_seg = 6;
}
elseif($col_count==3){
	$col_seg = 4; 
}
elseif($col_count==4){
	$col_seg = 3;
}     
else { $col_seg = 3;}

?>

<?php if($filter){ include('filter-buttons.php'); } ?>

<!--[2 Column]-->
<div id="portfolio-grid" class="row grid-gutter portfolio-grid text-center text-sm-left mb-10">

	 	<!--grid item-->
    <div class="portfolio-grid-item filter1 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/8.jpg)"></div>
      </a>
      
      <div class="grid-caption-wrap">
      
      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

	  <!--grid item-->
    <div class="portfolio-grid-item filter2 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/mockup1.jpg)"></div>
      </a>
        
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter1 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/6.jpg)"></div>
      </a> 
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter2 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/7.jpg)"></div>
      </a>
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter1 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/1.jpg)"></div>
      </a>
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter2 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/2.jpg)"></div>
      </a> 
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter1 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/3.jpg)"></div>
      </a>  
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <!--grid item-->
    <div class="portfolio-grid-item filter2 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/4.jpg)"></div>
      </a>
      
      <div class="grid-caption-wrap">

      	<a href="#">
      		<p class="grid-caption-title">Project Title</p>
      		<p class="grid-caption-category">Category</p>
      	</a>

      </div>

    </div>
    <!--/grid item-->

    <?php if($col_count==3){ ?>

    <!--grid item-->
    <div class="portfolio-grid-item filter2 col-xs-12 col-sm-6 col-md-<?php echo $col_seg;?>"> 

      <a href="#">
        <div class="portfolio-grid-image" style="background-image: url(img/9.jpg)"></div>
      </a>
      
      <div class="grid-caption-wrap">

        <a href="#">
          <p class="grid-caption-title">Project Title</p>
          <p class="grid-caption-category">Category</p>
        </a>

      </div>

    </div>
    <!--/grid item-->

    <?php } ?>

</div><!--[/2 Column]-->