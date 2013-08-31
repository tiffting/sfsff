<?php
/*
Template Name: Shop
*/
get_header(); ?>



<div class="template2">
  
  <div id="canvas">
    <div id="col1">
      <h1 class="<?= e('en', 'es') ?>"><?= e('Passports','Pasaportes') ?></h1>
      <div class="item" style="border-bottom:none; margin-bottom:none;">
        <div class="text">
          <a href="http://sfstreetfoodfest.eventbrite.com/"><img class="alignnone size-full wp-image-878" title="eventbrite" src="http://www.sfstreetfoodfest.com/2010/wp-content/uploads/2010/05/eventbrite1.png" alt="" width="90" height="51" /></a>
        </div>
      </div>
      <?php
        query_posts(array('post_parent' => get_page_id_by_name('passports'), 'post_type' => 'page', 'orderby' => 'menu_order', 'order'=>'ASC', 'posts_per_page'=>-1));
        while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <?php echo the_excerpt(); ?>
        </div>
      </div>
      
      
      <?php
      }

      wp_reset_query();  // Restore global post data
      ?>

    </div>
    <div id="col2">
      <h1 class="<?= e('en', 'es') ?>"><?= e('Merchandise','La Tienda') ?></h1>
      <?php
      query_posts(array('post_parent' => get_page_id_by_name('merchandise'), 'post_type' => 'page', 'orderby' => 'menu_order', 'order'=>'ASC', 'posts_per_page'=>-1));
      while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <?php echo the_excerpt(); ?>
        </div>
      </div>
      
      
      <?php
      }

      wp_reset_query();  // Restore global post data
      ?>

    </div>
  </div>

</div>



<?php get_footer(); ?>

