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
	      <p>
	        <?php echo $post->post_content ?>
        </p>
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
  <div class="callout large secondary">
    <h3>Our community (?)</h3>
    <p>Various logos of community "partners" (?) that we work with, with links to their
      relevant content (website, jobs, etc.)</p>
  </div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
