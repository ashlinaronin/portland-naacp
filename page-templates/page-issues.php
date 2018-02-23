<?php
/*
Template Name: Issues
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="text-center">
  <div class="callout large callout-issues">
    <div class="callout secondary">
      <h2>Issues lead-in copy</h2>
    </div>
  </div>

  <div class="callout large callout-issues">
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

  <div class="callout large secondary callout-issues">
    <h3><?php get_field('headline-description'); ?></h3>

    <?php if ( have_rows('links')): ?>
      <div class="grid-x">
      <?php while( have_rows('links')): the_row();
        $link1 = get_sub_field('link_1');
        $link2 = get_sub_field('link_2');
    		$link3 = get_sub_field('link_3');
      ?>

        <div class="small-4 cell card">
          <h4><?php echo($link1['headline']) ?></h4>
          <p><?php echo($link1['copy']) ?></p>
          <a href="<?php echo($link1['link']['url']); ?>" target="<?php echo($link1['link']['target']); ?>"><?php echo($link1['link']['title']); ?></a>
        </div>
        <div class="small-4 cell card">
          <h4><?php echo($link2['headline']) ?></h4>
          <p><?php echo($link2['copy']) ?></p>
          <a href="<?php echo($link2['link']['url']); ?>" target="<?php echo($link2['link']['target']); ?>"><?php echo($link2['link']['title']); ?></a>
        </div>
        <div class="small-4 cell card">
          <h4><?php echo($link3['headline']) ?></h4>
          <p><?php echo($link3['copy']) ?></p>
          <a href="<?php echo($link3['link']['url']); ?>" target="<?php echo($link3['link']['target']); ?>"><?php echo($link3['link']['title']); ?></a>
        </div>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
