<?php require 'functions.inc.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="La Cocina Presents the 5th Annual San Francisco Street Food Festival, August 18 11am-7pm" />
    <title>San Francisco Street Food Festival<?php if(!empty($page_title)){ echo " - $page_title";}  ?></title>
    <script type="text/javascript" src="http://use.typekit.com/lyx5lil.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/eat_drink.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/element_positioner.js"></script>
    <link rel="stylesheet" href="main.css" />
    <?php if($page_id == 'list'){ ?>
      <link rel="stylesheet" href="list.css" />
      <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <?php } ?>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="<?= $page_id ?>">
    <div id="wrap">
      <header>
        <a href="index.php" id="streetfood_header"><img src="images/<?= ($page_id == 'night_market') ? 'market_' : '' ?>header_2012.png" /></a>
      </header>
      <div id="content" class="cf">
        <div class="navigation kraft blue<?= $full_nav ? " full_nav" : " standard_nav" ?>">
          <?php require 'inc/nav.inc.php' ?>
        </div>
