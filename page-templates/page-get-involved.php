<?php
/*
Template Name: Get Involved
*/
get_header(); ?>

<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1><?php the_field('lead-in_heading'); ?></h1>
        <?php 
        if(get_field('lead-in_copy')) {
          echo '<h3>' . get_field('lead-in_copy') . '</h3>';
        } ?>

       <?php  if (have_rows('lead-in_CTA')):
          while(have_rows('lead-in_CTA')): the_row();
            $link_1 = get_sub_field('lead-in_link-1');
            $link_2 = get_sub_field('lead-in_link-2');
            $link_3 = get_sub_field('lead-in_link-3');
        ?>
          <div class="small-12 cta-block get-involved__cta-links">
            <?php if ($link_1): ?>
            <a class="button" href="<?php echo $link_1['url']; ?>"
               target="<?php echo $link_1['target']; ?>"><?php echo $link_1['title']; ?></a>
            <?php endif; ?>
            <?php if ($link_2): ?>
                <a class="button" href="<?php echo $link_2['url']; ?>"
                   target="<?php echo $link_2['target']; ?>"><?php echo $link_2['title']; ?></a>
            <?php endif; ?>
            <?php if ($link_3): ?>
                <a class="button last" href="<?php echo $link_3['url']; ?>"
                   target="<?php echo $link_3['target']; ?>"><?php echo $link_3['title']; ?></a>
            <?php endif; ?>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="grid-container content">
  <div class="grid-x main-content">
    <div class="cell small-12 medium-8 medium-offset-2">
      <h2 class="text-center">Make a donation</h2>
      <div class="paypal-link"><?php the_field('donation_form_link'); ?></div>
    </div>
    <?php 
      if( have_rows('direct_donation_info') ):
        while ( have_rows('direct_donation_info') ): the_row();
          //vars
          $instructions = get_sub_field('donate_mailing_instructions');
          $address = get_sub_field('donate_mailing_address');
          ?>
          <div class="cell small-12 medium-8 medium-offset-2">
            <h5><?php echo $instructions; ?></h5><br />

              <h4><?php echo $address; ?></h4>
          </div>
        <?php 
          endwhile; 
          endif;
        ?>
  </div>

  <div class="grid-x main-content">
    <div class="cell small-12 medium-8 medium-offset-2">
      <h2 class="text-center">Become a Member</h2>
      <p><?php the_field('membership_copy'); ?></p>
      <div class="callout secondary membership-form">
        <?php the_field('membership_form_link'); ?>
      </div>
    </div>
  </div>

<?php //Resources 	?>
  <?php //<div class="grid-x main-content">
    //<div class="cell small-12 medium-8 medium-offset-2">
      //<h2 class="text-center">Resources</h2>
      //<div class="callout secondary">
      //  Relevant resources + local representative contact info
     // </div>
    //</div>
  //</div>?>
</div>


<?php get_footer();
