<?php
session_start();
 ?>
 <!DOCTYPE html>
 <!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
 <!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
 <!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
     <head>

         <!-- Basic Page Needs -->
         <meta charset="utf-8">
         <title>My ride - Rides</title>
         <meta name="description" content="">
         <meta name="author" content="">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <!-- Mobile Specific Metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
         <!-- Bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <!-- Forms -->
         <link href="css/jquery.idealforms.css" rel="stylesheet">
         <!-- Select  -->
         <link href="css/jquery.idealselect.css" rel="stylesheet">
         <!-- Slicknav  -->
         <link href="css/slicknav.css" rel="stylesheet">
         <!-- Main style -->
         <link href="css/style.css" rel="stylesheet">
         <link href="css/forms.cdd" rel="stylesheet">
         <!-- Modernizr -->
         <script src="js/modernizr.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
         <!-- Fonts -->
         <link href="css/font-awesome.min.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->


         <!-- Time Picker -->
         <link rel="stylesheet" type="text/css" href="css/chung-timepicker.css" />
         <script src="jQuery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
         <script src="js/chung-timepicker.js" type="text/javascript" charset="utf-8"></script>

         <!-- <style type="text/css">
           .myDiv {
             width: 1200px;
             min-height: 300px;
             margin: 50px auto;
             border: 1px solid gainsboro;
             padding: 20px;
           }

           .myDiv>div {
             margin: 20px;
           }

           .myDiv>div>span {
             margin-right: 20px;
           }
         </style> -->
     </head>


<header class="header">

    <div class="top-menu">

        <!-- <section class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="user-log">

                        <a data-toggle="modal" data-target="#loginModal">
                            Log in
                        </a> /
                        <a data-toggle="modal" data-target="#regModal">
                            Sign up
                        </a>

                    </div>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">

                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="google" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </section> -->

    </div><!-- end .top-menu -->

    <div class="main-baner">

        <div class="background parallax clearfix" style="background-image:url('img/tumblr_n7yhhvUQtx1st5lhmo1_1280.jpg');" data-img-width="1600" data-img-height="1064">

            <div class="main-parallax-content">

                <div class="second-parallax-content">

                    <section class="container">

                        <div class="row">

                            <div class="main-header-container clearfix">

                                <div class="col-md-4 col-sm-12 col-xs-12">

                                    <div class="logo">
                                        <h1>Vozi</h1>
                                    </div><!-- end .logo -->

                                </div><!-- end .col-sm-4 -->

                                <div class="col-md-8 col-sm-8 col-xs-12">

                                    <nav id="nav" class="main-navigation">

                                        <ul class="navigation">
                                            <li>
                                                <a href="index.php">Pocetna</a>
                                            </li>
                                            <li>
                                                <a href="rides.php">Pretrazi Voznje</a>
                                            </li>
                                            <li>
                                                <a href="add-ride.php">Dodaj voznju</a>
                                            </li>
                                            <li>
                                              <div class="container button">
                                                <?php

                                                  if (isset($_SESSION['userId'])) {
                                                    echo '<a href="includes/logout.inc.php" class="btn btn-warning">Odjava</a>';
                                                  }
                                                  else{
                                                    //echo "<h1>Nikola</h1>";
                                                    echo "<li>";
                                                    echo '<a href="login.form.php" class="btn btn-success">Prijava</a>';
                                                    echo '</li>';
                                                    echo '<li>';
                                                    echo '<a href="signup.form.php" class="btn btn-warning">Registracija</a>';
                                                    echo '</li>';
                                                  }

                                                 ?>

                                              </div>
                                            </li>
                                            <!--<li>
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="events.html">Events</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-post.html">Single post</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-article.html">Single article</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="contact-page.html">Contact</a>
                                            </li>-->
                                        </ul>

                                    </nav><!-- end .main-navigation -->

                                </div><!-- end .col-md-8 -->

                            </div><!-- end .main-header-container -->

                        </div><!-- end .row -->

                    </section><!-- end .container -->

                </div><!-- end .second-parallax-content -->

            </div><!-- end .main-parallax-content -->

        </div><!-- end .background .parallax -->

    </div><!-- end .main-baner -->

</header><!-- end .header -->
