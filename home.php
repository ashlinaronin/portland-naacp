<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">

    <div class="callout large">
      <div class="callout secondary">
        <h2>Latest news post</h2>
      </div>
    </div>

  <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>

    <div class="grid-x grid-padding-x">
    <main class="small-6 cell">
    <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
      <div class="callout secondary">
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?> (<?php the_time( get_option( 'date_format' ))?>)</h5>
        </a>
        <p><?php the_excerpt(); ?></p>
      </div>
  <?php endwhile; ?>
      <div class="callout secondary">
        Pagination Controls
      </div>
    </main>

    <?php wp_reset_postdata(); ?>
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
