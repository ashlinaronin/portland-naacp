<?php
/*
Template Name: Get Involved
*/
get_header(); ?>

<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
      <h2><?php the_field('lead-in_heading'); ?></h2>
      <p><?php the_field('lead-in_copy'); ?></p>

      <?php
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

<div class="grid-container content">

  <div class="grid-x main-content">
    <div class="cell small-12 medium-8 medium-offset-2">
      <h3>Make a donation</h3>
      <div class="callout secondary">
        Donation form link: <?php the_field('donation_form_link'); ?>
      </div>
    </div>
    <div class="cell small-12 medium-8 medium-offset-2">
      <?php the_field('direct_donation_info'); ?>
    </div>
  </div>



  <div class="grid-x main-content">
    <div class="cell small-12 medium-8 medium-offset-2">
      <h3><?php the_field('membership_copy'); ?></h3>
      <div class="callout secondary">
        <?php the_field('membership_form_link'); ?>
      </div>
    </div>
  </div>

  <div class="grid-x main-content">
    <div class="cell small-12 medium-8 medium-offset-2">
      <h3>Resources</h3>
      <div class="callout secondary">
        Relevant resources + local representative contact info
      </div>
    </div>
  </div>
</div>


<?php get_footer();
