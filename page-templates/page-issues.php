<?php
/*
Template Name: Issues
*/
get_header(); ?>


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

<div class="grid-container">
  <?php // issues ?>
  <div class="grid-x">
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
  <div class="grid-x grid-margin-x three-column-links">
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
