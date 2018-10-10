<?php include('header.php'); ?>

<?php include('navbar-main.php') ; ?>


<div class="container contact-us">

  <!--[2 Column]-->
  <div class="row text-center text-sm-left">

    <div class="col-sm-4">

      <img class="img main-image" src="img/circle2.png"/>

    </div>
    
    <div class="col-sm-7 col-sm-offset-1 animated fadeIn">

      <div class="title-block text-center text-sm-left">
        <h1>Contact Us</h1>
        <hr>
      </div>

      <!--[Contact Form]-->
      <form>

        <div class="form-group">
          <label class="sr-only" for="input-name">Name</label>
          <input type="text" class="form-control-input" id="input-name" placeholder="Your Name">
        </div>

        <div class="form-group">
          <label class="sr-only" for="input-email">Email</label>
          <input type="email" class="form-control-input" id="input-email" placeholder="Email">
        </div>

        <div class="form-group">
          <label class="sr-only" for="input-email">Message</label>
          <textarea class="form-control-text" rows="5" placeholder="Say Hello..."></textarea>
        </div>
        
        <button type="submit" class="btn btn-default">Send</button>

      </form>
      <!--[/Contact Form]-->

    </div><!--/col-->

  </div><!-- /row -->
  <!--/[2 Column]-->

</div><!--/container-->


<?php include('footer.php'); ?>