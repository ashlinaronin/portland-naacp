<?php
/*
Template Name: Calendar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">
    <div class="callout large">
      <div class="callout secondary">
        <h2>Latest news post</h2>
        <p>
          Events calendar plugin
        </p>
        <p>(User experience based on plugin.. let's try to find the best one for that :) )</p>

        Events will be categorized:
        <ul>
          <li>Action</li>
          <li>Issues</li>
          <li>Group Meetings (general & committee)</li>
        </ul>
      </div>
    </div>
  </div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
