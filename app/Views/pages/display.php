<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('/fonts/icomoon/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/fonts/flaticon/font/flaticon.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/aos.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('/css/style.css') ?>">
  </head>
  <body>
  
  

    <div class="site-section">
      <div class="container">
      <div class="row mb-5">
          <div class="col-12">
            <h2>Blogs</h2>
          </div>
        </div>
        <div class="row">
        <?php foreach ($table as $k) { ?>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="#"><img src="<?php echo $k['image']; ?>" alt="Images" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3"><?php echo $k['description'] ?></span>

              <h2><a href="<?php  ?>"><?php echo $k['title'] ?></a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="<?php echo base_url('/images/person_1.jpg') ?>" alt="Image" class="img-fluid"></figure>
                
                
              </div>
              
                <p><?php echo $k['body'] ?></p>
                
              </div>
            </div>
          </div>
        <?php } ?> 
        </div>
      </div>
    </div>
          

  <script src="<?php echo base_url('/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/jquery-migrate-3.0.1.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/jquery-ui.js') ?>"></script>
  <script src="<?php echo base_url('/js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/jquery.stellar.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/jquery.countdown.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/bootstrap-datepicker.min.js') ?>"></script>
  <script src="<?php echo base_url('/js/aos.js') ?>"></script>

  <script src="<?php echo base_url('/js/main.js') ?>"></script>


  </body>
</html>