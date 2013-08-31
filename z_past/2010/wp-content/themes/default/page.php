<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

  <div>

    <div id="canvas" style="overflow:hidden;">

      <div id="col1">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		  <h1><?php the_title(); ?></h1>
    			<div class="shove">
    				<?php the_content(); ?>
    			</div>
    		<?php endwhile; endif; ?>
    	</div>

      <?php $meta_values = get_post_meta(get_the_ID(), 'food_image', true); ?>
			<?php if($meta_values){ ?>
			<div id="food_image" style="float:right;"><img class="resize" width="300" src="<?php echo $meta_values; ?>" /></div>
			<?php } ?>


    </div>

  </div>


<?php get_footer(); ?>
