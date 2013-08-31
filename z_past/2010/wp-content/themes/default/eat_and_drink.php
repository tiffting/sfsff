<?php
/*
Template Name: Eat and Drink
*/
get_header(); ?>


<div class="template2">
  
  <div id="canvas">
    <div id="col1">
      <h1><?= e('The Food', 'La Comida') ?></h1>
      
      <?php
      query_posts(array('post_parent' => get_page_id_by_name('eat'), 'post_type' => 'page', 'orderby' => 'menu_order', 'order'=>'ASC', 'posts_per_page'=>-1));
      while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <?php #echo the_excerpt(); ?>
        </div>
      </div>
      
      
      <?php
      }

      wp_reset_query();  // Restore global post data
      ?>

    </div>
    <div id="col2">
      <h1><?= e('The Drink','La Bebida') ?></h1>

      <?php
      $post_parent= get_page_id_by_name('Drink');
      if(is_null($post_parent))
      {
        $post_parent = 353;
      }
      
      query_posts(array('post_parent' => $post_parent, 'post_type' => 'page', 'orderby' => 'menu_order', 'order'=>'ASC', 'posts_per_page'=>-1));
      while (have_posts()) { the_post();
      ?>
      
      <div class="item">
        <?php echo the_post_thumbnail(); ?>
        <div class="text">
          <h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <?php #echo the_excerpt(); ?>
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

