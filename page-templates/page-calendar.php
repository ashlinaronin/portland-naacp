<?php
/*
Template Name: Calendar
*/
get_header(); ?>
<?php //get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">
		    <?php
	        $calendar_shortcode = get_field('calendar_shortcode');
          echo apply_filters('the_content', $calendar_shortcode);
        ?>
  </div>

<?php get_footer();
