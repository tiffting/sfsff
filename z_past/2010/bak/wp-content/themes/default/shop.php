<?php
/*
Template Name: Shop
*/
get_header(); ?>



<div class="template2">
  
  <div id="canvas">
    <div id="col1">
      <h1>Passports</h1>
      
      <?php
        query_posts(array('post_parent' => get_page_id_by_name('passports'), 'post_type' => 'page'));
        while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><?php echo the_title(); ?></h3>
          <?php echo the_content(); ?>
        </div>
      </div>
      
      
      <?php
      }

      wp_reset_query();  // Restore global post data
      ?>

    </div>
    <div id="col2">
      <h1>Merchandise</h1>

      <?php
      query_posts(array('post_parent' => get_page_id_by_name('merchandise'), 'post_type' => 'page'));
      while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><?php echo the_title(); ?></h3>
          <?php echo the_content(); ?>
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

