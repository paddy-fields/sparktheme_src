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

<div class="row grid-gutter portfolio-grid portfolio-lightbox">

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/mockup1.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/1.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/mockup2.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/2.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/3.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/3.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/4.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/4.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/5.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/5.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/6.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/6.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <?php if($col_count!=3){ ?>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/7.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/7.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-<?php echo $col_seg; ?>">
    <a href="img/8.jpg" data-lightbox="portfolio">
      <div class="portfolio-lightbox-item" style="background-image: url(img/8.jpg)">
        <div class="overlay-magnify">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </a>
  </div>

  <?php } ?>

</div><!--/row-->