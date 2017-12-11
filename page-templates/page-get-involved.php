<?php
/*
Template Name: Get Involved
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="text-center">
  <div class="callout large">
    <div class="callout secondary">
      <h2><?php the_field('lead-in_heading'); ?></h2>
      <p><?php the_field('lead-in_copy'); ?></p>

      <?php
        if (have_rows('lead-in_CTA')):
          while(have_rows('lead-in_CTA')): the_row();
            $link_1 = get_sub_field('lead-in_link-1');
            $link_2 = get_sub_field('lead-in_link-2');
            $link_3 = get_sub_field('lead-in_link-3');
            ?>

            <div class="expanded stacked-for-small button-group margin-horizontal-2">

              <?php if ($link_1): ?>
              <a class="button" href="<?php echo $link_1['url']; ?>"
                 target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
	            <?php endif; ?>
	            <?php if ($link_2): ?>
                  <a class="button" href="<?php echo $link_2['url']; ?>"
                     target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
	            <?php endif; ?>
	            <?php if ($link_3): ?>
                  <a class="button" href="<?php echo $link_3['url']; ?>"
                     target="<?php echo $link_3['target']; ?>"><?php echo $link_3['title']; ?></a>
	            <?php endif; ?>
            </div>
      <?php
          endwhile;
        endif;
      ?>

    </div>
  </div>

  <div class="callout large">
    <h3>Make a donation</h3>
    <div class="callout secondary">
      Donation form link: <?php the_field('donation_form_link'); ?>
    </div>
    <div class="callout secondary">
      <?php the_field('direct_donation_info'); ?>
    </div>
  </div>

  <div class="callout large">
    <h3><?php the_field('membership_copy'); ?></h3>
    <div class="callout secondary">
      <?php the_field('membership_form_link'); ?>
    </div>
  </div>

  <div class="callout large">
    <h3>Resources</h3>
    <div class="callout secondary">
      Relevant resources + local representative contact info
    </div>
  </div>
</div>


<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
