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
    <div id="header">
      <a href="http://lacocinasf.org" id="lacocina_card">La Cocina</a>
      <?php if(empty($_GET['lang'])): ?>
        <a href="?lang=es" id="language_cloud">Ver en Espa&ntilde;ol</a>
      <?php else: ?>
        <a href="?" id="language_cloud">Ver en Espa&ntilde;ol</a>
      <?php endif; ?>
      <a href="<?php bloginfo('url'); ?>" id="home"></a>
    </div>
    <div id="nav">
      <ul>
        <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('about')); ?>">about</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('eat-and-drink')); ?>">Eat &amp; Drink</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('activities')); ?>">activities</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('get-involved')); ?>">get involved</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('shop')); ?>">Shop</a></li>
        <li><a href="<?php echo get_page_link(get_page_id_by_name('contact')); ?>">Contact</a></li>
      </ul>
    </div>
