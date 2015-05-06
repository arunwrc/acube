<!DOCTYPE html>

<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>



    <!-- Basic Page Needs

  ================================================== -->

    <meta charset="utf-8">

    <title><?php echo $title;?></title>

     <meta name="keywords" content="Acube Innovations, Web Development, Web Application Development Kochi, Infopark">
     <meta name="description" content="Acube Innovations Private Limited.">

    <meta name="author" content="">



    <!-- Mobile Specific Metas

  ================================================== -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- CSS

  ================================================== -->

    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"  media="all">

    <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Slab:300,400" rel="stylesheet" type="text/css">





    <!-- JS

  ================================================== -->

   <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js" ></script>

    <!--[if lt IE 9]>

    <script src="<?php echo base_url();?>js/modernizr.custom.11889.js" type="text/javascript"></script>

    <![endif]-->

    <!-- HTML5 Shiv events (end)-->

    

    

    

    <!-- Favicons

  ================================================== -->

    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico">



    </head>

<body>



    <!-- Primary Page Layout

    ================================================== -->



        <div id="wrap" class="colorskin-0">

        <div id="sticker">

                <header id="header">

            

            <div  class="container">

                <div class="four columns">

                <div class="logo"><a href="/home"><img src="<?php echo base_url();?>images/logo.png" width="150" id="img-logo" alt="logo"></a></div>

                </div>



<!-- Navigation starts

  ================================================== -->

<nav id="nav-wrap" class="nav-wrap1 twelve columns">

    <div id="search-form">

                    <form action="#" method="get">

                        <input type="text" class="search-text-box" id="search-box">

                    </form>

                </div>

        <ul id="nav">

          <?php

          $class="current";



          ?>

          

          <li><a href="<?php echo $home=base_url(); ?>home"> Home </a> </li>

          <li ><a href="<?php echo base_url(); ?>services"> Services </a> 
            <ul>

               <li><a href="/web-development">Web Development</a></li>

              <li><a href="/mobile-development">Mobile Development</a></li>

              <li><a href="/cloud-services-support">Cloud Service Support</a></li>


            </ul>
          </li>

          <!--<li><a href="<?php //echo base_url(); ?>portfolio"> Products </a> </li>-->





          <li><a  href="#">Products</a>

            <ul>

               <li><a href="/accounting">Accounting</a></li>

              <li><a href="/drupal">Drupal</a></li>

              <li><a href="/opencart">Opencart</a></li>

              <li><a href="/openerp">Openerp</a></li>

              <li><a href="/fkeetmanagment">Fleet Management</a></li>

            </ul>

          </li>

          <li><a href="<?php echo base_url(); ?>about"> About </a> </li>

          <li ><a href="<?php echo base_url(); ?>contact"> Contact </a> </li>

        </ul>

      </nav>

      <!-- /nav-wrap -->



<!-- Navigation ends

  ================================================== -->

</div>

<div id="search-form2">

                    <form action="#" method="get">

                        <input type="text" class="search-text-box2">

                    </form>

                </div>

</header>

</div>

<!-- end-header -->
