<?php include 'inc/util.inc.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" />

<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>San Francisco Street Food Festival 2009</title>
    <link rel="stylesheet" href="css/application.css" type="text/css" media="screen" title="no title" charset="utf-8" />
  </head>
  <body>
    
  <div id="wrap">
    
    <style type="text/css" media="screen">
      #lang_link{text-transform:uppercase; font-weight:bold; display:block; position:absolute; top:-23px; right:0;}
    </style>
    
    <div id="lang_link"><?= l('<a href="?lang=es">Espa&ntilde;ol</a>','<a href="?lang=en">English</a>'); ?></div>
    
    
    <div id="masthead" <?= l('', 'class="es"') ?>>
      <?php if($page != 'index'){ ?><a id="home_link" href="index.php"><?php } ?>
        <h1>San Francisco Street Food Festival 2009</h1>
        <h2>Free to Come. Cash for Food. Passport Savings.</h2>
        <div id="fair_details">
          <div class="when"><strong>August 22, 2009</strong> / 11am to 7pm</div>
          <div class="where"><strong>Folsom Street</strong> Between 25th &amp; 26th / In Front of <strong>La Cocina</strong></div>
        </div>
      <?php if($page != 'index'){ ?></a><?php } ?>
    </div>

    <div id="main_nav" class="nav<?= l('', ' es') ?>">
      <ul class="clearfix">
        <li class="food_vendors<?= $page == 'food_vendors' ? ' active' : '' ?>"><a href="food_vendors.php">Food vendors</a></li>
        <li class="silent_auction<?= $page == 'silent_auction' ? ' active' : '' ?>"><a href="silent_auction.php">Silent Auction</a></li>
        <li class="scavenger_hunt<?= $page == 'scavenger_hunt' ? ' active' : '' ?>"><a href="scavenger_hunt.php">Scavenger Hunt</a></li>
        <li class="street_food_photo_contest<?= $page == 'street_food_photo_contest' ? ' active' : '' ?>"><a href="street_food_photo_contest.php">Street Food Photo Contest</a></li>
        <li class="food_and_drink_passports<?= $page == 'food_and_drink_passports' ? ' active' : '' ?>"><a href="http://www.brownpapertickets.com/event/72618">Food and Drink Passports</a></li>
      </ul>
    </div>
    
    <div class="clearfix" id="content_clear">


      <div id="content">