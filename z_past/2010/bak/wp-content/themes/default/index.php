<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



  <div id="canvas">
    <div id="col1">
      <h1>About</h1>
      <img src="<?php bloginfo('template_directory'); ?>/images/we_cart_street_food.png" />
      <p id="space_intro"><strong>7 times the space, 4 times the vendors. eat to your cart's content san francisco.</strong></p>
      
      <div class="callout" id="food_drink_callout">
        <a href="<?php echo get_page_link(get_page_id_by_name('eat-and-drink')); ?>" id="the_food_link">
          the food<br />
          the drink
        </a>
      </div>
      
      <div class="callout" id="lacocina_callout">
        <a href="#">
          La Cocina: Incubating Food Businesses
        </a>
      </div>
      
      <div class="callout" id="extra_nav_items">
        <a href="#" class="passports">Get Passports</a>
        <a href="#" class="faq">FAQ</a>
      </div>
                
    </div>
    <div id="col2">
      <h1 class="ribbon">News</h1>
      <div id="news_feed" class="ribbon">
        
        <?php query_posts('category_name=news&showposts=3'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
        <?php endwhile;?>
          
        <div class="social_icons">
          <strong>Follow Us</strong>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/fb_16.png" /></a>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_16.png" /></a>
        </div>
      </div>
      
      <h1>Play</h1>
      <div id="home_play_shove">
        <?php query_posts('category_name=activities&showposts=2'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
            <?php echo the_excerpt(); ?>
        <?php endwhile;?>
      </div>
    </div>
  </div>
  





<?php # get_sidebar(); ?>
<?php get_footer(); ?>
