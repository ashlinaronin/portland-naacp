<?php
/*
Template Name: Issues
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="text-center">
  <div class="callout large">
    <div class="callout secondary">
      <h2>Issues lead-in copy</h2>
    </div>
  </div>

  <div class="callout large">
  <?php if ( have_rows('issues')): ?>
    <?php while( have_rows('issues')): the_row();
      $issue = get_sub_field('issue');
      $issue_description = get_sub_field('issue_description');
    ?>
      <div class="callout secondary">
        <h5><?php echo $issue; ?></h5>
	      <?php echo $issue_description; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>

  <div class="callout large secondary">
    <h3>Learn more about us & get involved</h3>
    <div class="grid-x">
      <div class="small-4 cell card">Callout 1 / CTA (Committees?)</div>
      <div class="small-4 cell card">Callout 2 / CTA (Org history?)</div>
      <div class="small-4 cell card">Callout 3 / CTA (Get involved?)</div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
