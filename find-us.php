<?php include('header.php'); ?>

<?php include('navbar-main.php') ; ?>

<div class="title-block text-center">
  <h1>Find Us</h1>
  <hr>
</div>

<div id="map" class="findus-map"></div>       

<div class="container">
   
  <!--[3 Column]-->
  <div class="row findus-details">

    <div class="col-sm-4">
      <div class="circle_icon small_box_shadow animated fadeIn">
        <span class="fa fa-phone"></span>
      </div>
      <div class="info-label">
        <p>01274 333 111</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="circle_icon small_box_shadow animated fadeIn">
        <span class="fa fa-map-marker"></span>
      </div>
      <div class="info-label">
        <p>36 Russell Square</p>
        <p>Brighton</p>
        <p>BN12EF</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="circle_icon small_box_shadow animated fadeIn">
        <span class="fa fa-envelope"></span>
      </div>
      <div class="info-label">
        <p>info@sparkthemes.com</p>
      </div>
    </div>

  </div><!--/row-->
  
</div><!--/container-->

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLZNyluXhquKVaEV8RCIN9YTNapX5PM3E&callback=initMap"></script>
<?php include('footer.php'); ?>