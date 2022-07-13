<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORDERKUY</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/newage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/newage/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/newage/vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/newage/device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/newage/css/new-age.min.css" rel="stylesheet">

    <style type="text/css">
      .navbar-expand-lg .navbar-collapse{
        display: block;
      }

      .portfolio-item {
        margin-bottom: 30px;
      }

      .pagination {
        margin-bottom: 30px;
      }

      .card {
        background-color: #1b1404;
        width: 230px;
      }

      .card-text {
        color: white;
      }

      .card-img-top {
        height: 200px;
      }

      .card-title{
        color: #fdcc52;
      }

      #order_v{
        width: 15%;
        height: 50%;
        padding-left: 500px
      }

    </style>

  </head>

  <body id="page-top" style="margin: 0px">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <section class="contact" id="contact" style="padding: 2px 0; width: 100%; text-align: center;">
        <div class="container ">
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="list-inline list-social">
              <li class="list-inline-item social-twitter">
                <a href="#order" style="width: 100px; height: 100px; line-height: 130px;" class="js-scroll-trigger">
                  <i class="fa fa-reorder"><p>ORDER</p></i> 
                </a>
              </li>
              <li class="list-inline-item social-facebook">
                <a href="#food" style="width: 100px; height: 100px; line-height: 130px;" class="js-scroll-trigger">
                  <i class="fa fa-spoon"><p>FOODS</p></i>
                </a>
              </li>
              <li class="list-inline-item social-google-plus">
                <a href="#drink" style="width: 100px; height: 100px; line-height: 130px;" class="js-scroll-trigger">
                  <i class="fa fa-glass"><p>DRINKS</p></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </nav>

    <div id="food">
    <section class="cta"  style="position: relative;padding: 50px 0;background-image: url(<?php echo base_url();?>assets/newage/img/steak.jpeg);background-position: center; padding-top: 100px">
      
      <?php
        $this->load->view('foodlist_view');
      ?>
    </section>
    </div>
    <section class="cta" id="drink" style="position: relative;padding: 50px 0;background-image: url(<?php echo base_url();?>assets/newage/img/drinks.jpg);background-position: center;">
      <?php
        $this->load->view('drinklist_view');
      ?>
    </section>

    <header class="masthead" id="order" style="height: auto;">
      <?php 
        $this->load->view('order_view');
      ?>
    </header>


    <footer>
      <div class="container">
        <p>&copy; 2017 Start Bootstrap. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/newage/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/newage/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/newage/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/newage/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>assets/newage/js/new-age.min.js"></script>

    <script src="<?php echo base_url();?>assets/4col/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/4col/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
