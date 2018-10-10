<?php include('header.php'); ?>

<?php include('navbar-main.php') ; ?>


<div class="container">

  <!--[1 Column]-->
  <div class="row row-centered">

    <!-- [Main Content] -->
    <div class="blog-item col-xs-12 col-sm-7 col-centered">

      <div class="title-block text-left">
        <h1>Blog Post - Single Column</h1>
        <hr>
      </div>

      <!-- main image-->
      <img class="blog-feature img" src="img/1.jpg"/>

      <!-- text content -->
      <div class="blog-content text-justify">

        <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et turpis mi. Maecenas ultrices orci mi, eu pellentesque nunc laoreet consequat. Nulla viverra nunc elit. Nam accumsan auctor pulvinar. Duis dignissim quam id lorem molestie, et accumsan turpis dapibus. Vivamus vitae ligula a augue luctus dignissim. Integer condimentum mauris eget arcu sodales, id hendrerit lorem laoreet. Suspendisse quis dolor molestie ante consequat finibus. Mauris mollis efficitur velit, at facilisis arcu sodales fermentum. Donec sed elit sed eros dapibus consequat vel quis ante. Morbi accumsan feugiat magna in accumsan. Suspendisse eu tincidunt odio. Aenean ut dignissim nisi, ac condimentum neque. Nulla vitae sollicitudin sapien.
        </p>
        <p>
          Vestibulum sodales, massa eu consectetur laoreet, eros lectus scelerisque odio, ac tincidunt tellus magna sed justo. Suspendisse scelerisque imperdiet mi, a sollicitudin augue mattis in. Sed convallis mi libero, vitae ultricies massa laoreet ac. Etiam quis ligula vestibulum, pellentesque diam quis, porta diam. Sed orci metus, elementum sit amet aliquet ut, ultricies tempus neque. Sed facilisis, magna in interdum feugiat, libero purus vulputate nisi, nec gravida magna purus eget mauris. Donec lorem ligula, dignissim vel lacinia ullamcorper, eleifend vitae mauris. Fusce eu tellus finibus, tempor odio vel, lacinia lacus. Nullam quis ligula quis neque aliquet mattis. Pellentesque convallis luctus accumsan. Quisque arcu sapien, condimentum faucibus lorem et, luctus rhoncus leo. 
        </p>
        <p>
          Vestibulum sodales, massa eu consectetur laoreet, eros lectus scelerisque odio, ac tincidunt tellus magna sed justo. Suspendisse scelerisque imperdiet mi, a sollicitudin augue mattis in. Sed convallis mi libero, vitae ultricies massa laoreet ac. Etiam quis ligula vestibulum, pellentesque diam quis, porta diam. Sed orci metus, elementum sit amet aliquet ut, ultricies tempus neque. Sed facilisis, magna in interdum feugiat, libero purus vulputate nisi, nec gravida magna purus eget mauris. Donec lorem ligula, dignissim vel lacinia ullamcorper, eleifend vitae mauris. Fusce eu tellus finibus, tempor odio vel, lacinia lacus. Nullam quis ligula quis neque aliquet mattis. Pellentesque convallis luctus accumsan. Quisque arcu sapien, condimentum faucibus lorem et, luctus rhoncus leo. 
        </p>

      </div>

    </div><!--/col-->

  
    <div class="col-xs-12 col-sm-7 col-centered comments-section">

      <div class="title-block text-left">
        <h2>Comments</h2>
        <hr>
      </div>

        <?php include('components/comments.php'); ?>

    </div><!--/col-->

  </div><!-- /row -->
  <!--/[2 Column]-->

  
</div><!-- /container -->


<?php include('footer.php'); ?>