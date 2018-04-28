<?php
/*
Template Name: Issues
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<?php // lead-in?>
<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1><?php the_field('lead-in_heading'); ?></h1>
        <h3><?php the_field('lead-in_copy'); ?></h3>
      </div>
    </div>
  </div>
</div>

<div class="grid-container content">
  <?php // issues ?>
  <div class="grid-x main-content">
  	<div class="cell small-12 medium-8 medium-offset-2">
      <?php if ( have_rows('issues')): ?>
      <?php while( have_rows('issues')): the_row(); ?>
        <?php $issue = get_sub_field('issue'); ?>
        <?php $issue_description = get_sub_field('issue_description');?>
        <h4><?php echo $issue; ?></h4>
	      <?php echo $issue_description; ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  
  <?php // three-column section ?>
  <div class="grid-x three-column-links">
    <?php if ( have_rows('links')): ?>
      <?php while( have_rows('links')): the_row();
        $link1 = get_sub_field('link_1');
        $link2 = get_sub_field('link_2');
    		$link3 = get_sub_field('link_3');
      ?>
      <div class="cell small-12 medium-4">
        <h5><?php echo($link1['headline']) ?></h5>
        <p><?php echo($link1['copy']) ?></p>
        <a href="<?php echo($link1['link']['url']); ?>" target="<?php echo($link1['link']['target']); ?>"><?php echo($link1['link']['title']); ?></a>
      </div>
      <div class="cell small-12 medium-4">
        <h5><?php echo($link2['headline']) ?></h5>
        <p><?php echo($link2['copy']) ?></p>
        <a href="<?php echo($link2['link']['url']); ?>" target="<?php echo($link2['link']['target']); ?>"><?php echo($link2['link']['title']); ?></a>
      </div>
      <div class="cell small-12 medium-4">
        <h5><?php echo($link3['headline']) ?></h5>
        <p><?php echo($link3['copy']) ?></p>
        <a href="<?php echo($link3['link']['url']); ?>" target="<?php echo($link3['link']['target']); ?>"><?php echo($link3['link']['title']); ?></a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer();
