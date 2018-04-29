<?php
/*
Template Name: About
*/
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>

<?php // lead-in?>
<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1><?php the_field('lead-in_heading'); ?></h1>
      <?php 
        if(get_field('lead-in_copy')) {
          echo '<h3>' . the_field('lead-in_copy') . '</h3>';
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

<div class="grid-container">
  <?php // Content ?>
  <div class="grid-x grid-padding-x">
    <div class="cell small-8">
      <div>
        <h3>About NAACP</h3>
	      <?php the_field('main_content'); ?>
      </div>
    </div>
    <div class="cell small-4">
      <div>
        <?php

          // check if the repeater field has rows of data
          if( have_rows('sidebar-content') ):

            // loop through the rows of data
              while ( have_rows('sidebar-content') ) : the_row();

                // vars
                $image = get_sub_field('image');
                $heading = get_sub_field('heading');
                $description = get_sub_field('link-description');
                $link = get_sub_field('link');

                //post items
      ?>
                <div class="sidebar-item">
                  <?php // image
                    if( !empty($image) ):

                      // vars
                      $url = $image['url'];
                      $title = $image['title'];
                      $alt = $image['alt'];
                    ?>

                    <img src="<?php echo $url; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" />
                  <?php endif; ?>

                  <?php // heading
                    if( $heading ): ?>
                      <h4><?php echo $heading; ?></h4>
                  <?php endif; ?>

                  <?php //description
                    if( $description ): ?>
                      <p><?php echo $description; ?></p>
                  <?php endif; ?>

                  <?php // link 
                    if( $link ): ?>
                      <a class="button" href="<?php $link['url'] ?>"><?php echo $link['title']; ?></a>
                  <?php endif; ?>
                </div> 
        <?php
              endwhile;

          else :
              // no rows found
          endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
