<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div class="template_blog">
  <div id="canvas">
    <div id="col2">
  	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
          $c = get_the_category();
          $category_name = $c[0]->{'name'};
          $category_id = $c[0]->{'cat_ID'};
        ?>
  			<h2><?php the_title(); ?></h2>
  			<div class="shove"><?php the_content(); ?></div>
  	  <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
