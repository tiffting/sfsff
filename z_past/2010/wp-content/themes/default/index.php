<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



  <div id="canvas">
    <div id="col1">
      <h1><?= e('About','Informaci&oacute;n') ?></h1>
      <img src="<?php bloginfo('template_directory'); ?>/images/we_cart_street_food.png" />
      <p id="space_intro"><strong><?= e('7 times the space, 4 times the vendors. eat to your cart\'s content san francisco.','7 veces mas espacio, 4 veces mas vendedores, vengan a comer en la calle!') ?></strong></p>
      
      <div class="callout" id="directions" style="margin-left:0; padding-left:0; margin-bottom:0">
        <a href="<?php echo get_page_link(get_page_id_by_name('directions')); ?>"><?= e('Location/Directions','C&oacute;mo Llegar') ?></a>
      </div>
      
      <div class="callout" id="food_drink_callout">
        <a href="<?php echo get_page_link(get_page_id_by_name('eat-and-drink')); ?>" id="the_food_link">
          <?= e('the food','la comida') ?><br />
          <?= e('the drink','la bebida') ?>
        </a>
      </div>
      
      <div class="callout" id="lacocina_callout">
        <a href="http://www.lacocinasf.org">
          <?= e('La Cocina: Incubating Food Businesses','La Cocina Cultivando Empresarios de Comida') ?>
        </a>
      </div>
      
      <div class="callout" id="extra_nav_items">
        <a href="<?php echo get_page_link(get_page_id_by_name('shop')); ?>" class="passports"><?= e('Looking for<br />a deal?<br />Buy a Passport!', 'Compre Pasaportes') ?></a>
        <a href="<?php echo get_page_link(get_page_id_by_name('faq')); ?>" class="faq"><?= e('FAQ', 'Preguntas Comunes') ?></a>
      </div>
                
    </div>
    <div id="col2">
      <h1 class="ribbon"><?= e('News','Noticias') ?></h1>
      <div id="news_feed" class="ribbon">
        
        <?php query_posts('category_name=news&showposts=1'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <?php echo the_excerpt(); ?>
        <?php endwhile;?>
        <a href="<?php bloginfo('url'); ?>/?category_name=news" style="display:block; margin-top:20px; font-size:12px;"><?= e('Read More News', 'Lee Más Noticias') ?> &raquo;</a>
        <div class="social_icons">
          <strong><?= e('Follow Us','S&iacute;guenos en') ?></strong>
          <a href="http://www.facebook.com/pages/San-Francisco-Street-Food-Festival/108586905834574?ref=ts"><img src="<?php bloginfo('template_directory'); ?>/images/fb_16.png" /></a>
          <a href="http://twitter.com/streetfoodsf"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png" /></a>
        </div>
      </div>
      
      <h1><?= e('Play','Actividades') ?></h1>
      <div id="home_play_shove">


        <?php

        query_posts(array('post_parent' => get_page_id_by_name('Activities'), 'post_type' => 'page', 'showposts' => '2', 'orderby' => 'menu_order', 'order'=>'ASC'));
        while (have_posts()) { the_post();
        ?>

            <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
            <?php echo the_excerpt(); ?>
        <?php
        }

        wp_reset_query();  // Restore global post data
        ?>
          <a href="<?php echo get_page_link(get_page_id_by_name('Activities')); ?>">More &raquo;</a>

        </div>
        

        
      </div>
    </div>
  </div>
  





<?php # get_sidebar(); ?>
<?php get_footer(); ?>
