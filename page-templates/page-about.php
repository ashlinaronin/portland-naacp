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
        <h3>Sidebar of org highlights / CTAs</h3>
        <ul>
          <li>History</li>
          <li>Committees</li>
          <li>Volunteering</li>
          <li>Blog/News</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
