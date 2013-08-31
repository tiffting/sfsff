<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">

<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8">
    <script type="text/javascript" src="http://use.typekit.com/lyx5lil.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div id="wrap">
    
    <div id="presslink" style="position:absolute; bottom:-30px; right:10px; text-align:right;">
      <a style="font-size:12px; color:#2E57A4" href="http://www.sfstreetfoodfest.com/2010/?page_id=1559<?= ($_GET['lang']=='') ? '' : '&lang='.$_GET['lang'] ?>">News Room</a>
    </div>
    
    
    <style type="text/css" media="screen">
      body{background-color:#a0c3d4;}
      #wrap{position:relative;}
      #sponsors{position:absolute; right:-120px; top:120px;}
      #sponsors ul{list-style-type:none;}
      #sponsors ul li{margin-bottom:5px;}
      #sponsors ul li a{cursor:pointer;}
      #sponsors ul li a img{}
    </style>

    <div id="sponsors">
      <ul> 
        <li><strong>Thanks to<br />our Sponsors</strong></li>
        <li><a href="http://www.peptobismol.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/pepto.png" width="106" height="77"></a></li>
        <li><a href="http://www.tecate.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/tecate.png" width="106"></a></li>
        <li><a href="http://www.wholefoods.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/whole_foods.png" width="106" height="79"></a></li>
        <li><a href="http://www.jdvhotels.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/joie.png" width="106" height="35"></a></li>
        <li><a href="http://www.tonysfinefoods.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/tonys.png" width="106" height="59"></a></li>
        <li><a href="http://www.skyy.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/skyy.png" width="106" height="79"></a></li>
        <li><a href="http://www.funkymonkeysnacks.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/funky_monkey.png" width="106" height="68"></a></li>
        <li><a href="http://www.biritemarket.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/bi_rite.png" width="106" height="68"></a></li>
        <li><a href="http://giustos.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/giustos.png" width="106" height="77"></a></li>
        <li><a href="http://hotwire.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/hotwire.png" width="106" height="47"></a></li>
        <li><a href="http://magners.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/magners.png" width="106" height="61"></a></li>
        <li><a href="http://salesforce.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/salesforce.png" width="106" height="52"></a></li>
        <li><a href="http://www.wellsfargo.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/wells_fargo.png" width="106" height="70"></a></li>
        <li><a href="http://www.foodspotting.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/foodspotting.png" width="106" height="27"></a></li>
        <li><a href="http://www.7x7.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/7x7.png" width="106" height="78"></a></li>
        
        <li><a href="http://www.pge.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/pge.png" width="106" height="82"></a></li>
        <li><a href="http://seedlingprojects.org/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/seedling.png" width="106" height="40"></a></li>
        <li><a href="http://www.foodandwaterwatch.org/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/foodwaterwatch.png" width="106" height="52"></a></li>
        <li><a href="http://www.thegogame.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/gogame.png" width="105" height="41"></a></li>
        <li><a href="http://www.sfcartproject.com/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/sfcartproject.png" width="106" height="79"></a></li>
        <li><a href="http://www.uspw.net/"><img src="<?php echo bloginfo('template_directory'); ?>/images/sponsor/uspw.png" width="106" height="73"></a></li>
        
      </ul>
    </div>
    
    <div id="header">      
      <a href="<?php echo get_page_link(get_page_id_by_name('About La Cocina')); ?>" id="lacocina_card">La Cocina</a>
      <?php if(empty($_GET['lang'])): ?>
        <a href="?lang=es" id="language_cloud">Ver en Espa&ntilde;ol</a>
      <?php else: ?>
        <a href="?" id="language_cloud" class="english">See in English</a>
      <?php endif; ?>
      <a href="<?php bloginfo('url'); ?>" id="home"></a>
    </div>
    <div id="nav">
      <ul class="<?= e('en', 'es') ?>">
        <li><a href="<?php bloginfo('url'); ?>"><?= e('home', 'Inicio') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('about')); ?>"><?= e('about', 'Informaci&oacute;n') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('eat-and-drink')); ?>"><?= e('Eat &amp; Drink', 'Come y Bebe') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('activities')); ?>"><?= e('activities', 'Actividades') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('get-involved')); ?>"><?= e('get involved', 'Involucrese') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('shop')); ?>"><?= e('shop', 'Tienda') ?></a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('contact')); ?>"><?= e('contact', 'Contacto') ?></a></li>
      </ul>
    </div>


