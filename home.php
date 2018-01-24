<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">

	  <?php $found_posts = get_posts( array('posts_per_page' => 4)) ?>
	  <?php $first_post = $found_posts[0];
	    setup_postdata($first_post);
	  ?>

    <div class="callout large">
      <div class="callout secondary">
        <h2><?php the_title(); ?></h2>
        <p><?php the_time( get_option( 'date_format' ))?></p>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div>

    <div class="grid-x grid-padding-x">
    <main class="small-6 cell">
    <?php foreach ( $found_posts as $post ) : setup_postdata( $post ); ?>
      <div class="callout secondary">
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?> (<?php the_time( get_option( 'date_format' ))?>)</h5>
        </a>
        <p><?php the_excerpt(); ?></p>
      </div>
  <?php endforeach; ?>
	    <?php wp_reset_postdata(); ?>

      <div class="callout secondary">
        Pagination Controls
      </div>
    </main>

    <aside class="small-6 cell">
      <div class="callout secondary">
        <h3>Sidebar of news related functionality</h3>
        <ul>
          <li>Issues</li>
          <li>Events</li>
          <li>Committee</li>
          <li>Resources</li>
          <li>Tags</li>
        </ul>
      </div>
      <div class="callout secondary">
        Some sort of CTA to take them to another section of the site (get involved?)
      </div>

    </aside>
    </div>

  </div>

	<?php get_template_part( 'template-parts/inspirational-closing-cta' ); ?>

	<?php get_footer();
