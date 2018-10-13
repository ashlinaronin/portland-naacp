<?php

/*
Template Name: Contact
*/

 get_header(); ?>

 <?php // get_template_part( 'template-parts/featured-image' ); ?>

<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php // lead-in?>
<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1><?php the_field('lead-in_heading'); ?></h1>
        <?php 
        if(get_field('lead-in_copy')) {
          echo '<h3>' . get_field('lead-in_copy') . '</h3>';
        }

        if (have_rows('lead-in_CTA')):
          while(have_rows('lead-in_CTA')): the_row();
            $link_1 = get_sub_field('lead-in_link-1');
            $link_2 = get_sub_field('lead-in_link-2');
            $link_3 = get_sub_field('lead-in_link-3');
      ?>
           <div class="expanded stacked-for-small button-group button-group-get-involved">

              <?php if ($link_1): ?>
              <a class="button button-get-involved" href="<?php echo $link_1['url']; ?>"
                 target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
              <?php endif; ?>
              <?php if ($link_2): ?>
                  <a class="button hollow button-get-involved" href="<?php echo $link_2['url']; ?>"
                     target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
              <?php endif; ?>
              <?php if ($link_3): ?>
                  <a class="button button-get-involved last" href="<?php echo $link_3['url']; ?>"
                     target="<?php echo $link_3['target']; ?>"><?php echo $link_3['title']; ?></a>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="grid-container" role="main">
 	<div class="grid-x grid-margin-x">
		<div class="cell small-12 medium-10 medium-offset-1 large-6 large-offset-3">

			<?php // Contact form
			if (get_field('form_shortcode')) {
				$shortcode = get_field('form_shortcode');

				echo do_shortcode($shortcode);
			} ?>
			
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>

		</div>
  </div>		
</div>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

 <?php get_footer();
