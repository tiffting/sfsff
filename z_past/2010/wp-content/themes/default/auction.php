<?php
/*
Template Name: Activities
*/
get_header(); ?>


<style type="text/css" media="screen">
  #col2 .item .text {width:260px;}
</style>
  <div class="template1">

    <div id="canvas">
      <div id="col1">
        <h1 class="<?= e('en', 'es') ?>"><?= e('Activities', 'Actividades') ?></h1>
        <div class="shove">
          <ul>
            <?php wp_list_pages( array('title_li'=>'', 'depth'=>1,'child_of' => get_page_id_by_name('Activities'), 'orderby' => 'menu_order', 'order'=>'ASC') ); ?>
          </ul>
        </div>
      </div>
      
      <div id="col2">

        <h2><?= e('Silent Auction', 'Subasta Silenciosa') ?></h2>

        <?php
          query_posts(array('post_parent' => get_page_id_by_name('silent-auction-2'), 'post_type' => 'page', 'orderby' => 'menu_order', 'order'=>'ASC', 'posts_per_page'=>-1));
          while (have_posts()) { the_post();
        ?>

        <div class="item">
          <?php $thumbnail_link = get_post_meta(get_the_ID(), 'thumb_link', true); ?>
          <?php if(empty($thumbnail_link)){ ?>
            <?php echo the_post_thumbnail(); ?>
          <?php }else{ ?>
            <a href="<?= $thumbnail_link ?>"><?php echo the_post_thumbnail(); ?></a>
          <?php } ?>
          
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

