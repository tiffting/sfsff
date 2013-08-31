<?php get_header(); ?>

  <div class="template1">

    <div id="canvas">
      <div id="col1">
        <h1><?= e('News','Noticias') ?></h1>
        <div class="shove">
          <ul>
            <?php query_posts('category_name=news'); ?>
            <?php while (have_posts()) : the_post(); ?>
              <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
            <?php endwhile;?>
          </ul>
        </div>
      </div>
      
      <div id="col2">
        <?php query_posts('p='.$_GET['p'].'&showposts=1'); ?>
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

