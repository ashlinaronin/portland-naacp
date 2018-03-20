<?php
/*
Template Name: About
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="grid-x grid-padding-x">
    <div class="cell small-8">
      <div class="callout secondary">
        <h3>About NAACP</h3>
	      <?php
	      	$aboutPost = get_post();
	      	echo apply_filters( 'the_content', $aboutPost->post_content );
	      ?>
      </div>
    </div>
    <div class="cell small-4">
      <div class="callout secondary">
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

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
