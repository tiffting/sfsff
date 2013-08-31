<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>


<?php
  // get children of current category to display on this page
  $children =  get_categories(array('child_of'=>get_cat_ID(single_cat_title(null, false))));

  $first_category_name = $children[0]->{'name'};
  $first_category_id = $children[0]->{'cat_ID'};

  $second_category_name = $children[1]->{'name'};
  $second_category_id = $children[1]->{'cat_ID'};
?>

<div class="template2">
  
  <div id="canvas">
    <div id="col1">
      <h1><?php echo $first_category_name; ?></h1>
      
      <?php query_posts('cat='.$first_category_id); ?>
      
        <?php while (have_posts()) : the_post(); ?>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/FPO_vendor.jpg" />
            <div class="text">
              <h3><?php echo the_title(); ?></h3>
              <?php echo the_content(); ?>
            </div>
          </div>
      <?php endwhile;?>
            

    </div>
    <div id="col2">
      <h1><?php echo $second_category_name; ?></h1>

      <?php query_posts('cat='.$second_category_id); ?>
      
        <?php while (have_posts()) : the_post(); ?>
          <div class="item">
            <img src="<?php bloginfo('template_directory'); ?>/images/FPO_vendor.jpg" />
            <div class="text">
              <h3><?php echo the_title(); ?></h3>
              <?php echo the_content(); ?>
            </div>
          </div>
      <?php endwhile;?>
      

    </div>
  </div>

</div>



<?php get_footer(); ?>
