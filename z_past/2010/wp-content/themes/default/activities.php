<?php
/*
Template Name: Activities
*/
get_header(); ?>

  <div class="template1">

    <div id="canvas">
      <div id="col1">
        <h1 class="<?= e('en', 'es') ?>"><?= e('Activities', 'Actividades') ?></h1>
        <div class="shove">
          <ul>
            <?php wp_list_pages( array('depth'=>1, 'title_li'=>'','child_of' => get_page_id_by_name('Activities'), 'orderby' => 'menu_order', 'order'=>'ASC') ); ?>
          </ul>
        </div>
      </div>
      
      <div id="col2">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<h2><?php the_title(); ?></h2>
    			<div class="shove">
    				<?php the_content(); ?>
    			</div>
    		</div>
    		<?php endwhile; endif; ?>
      </div>
    </div>
    
  </div>

<?php get_footer(); ?>

