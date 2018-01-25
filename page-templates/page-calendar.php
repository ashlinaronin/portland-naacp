<?php
/*
Template Name: Calendar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">
    <div class="callout large">
      <div class="callout secondary">

	      <?php echo $post->post_content ?>

      </div>
    </div>
  </div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
