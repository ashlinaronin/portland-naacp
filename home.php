<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

  <div class="text-center">

	  <?php
      $found_posts = get_posts( array('posts_per_page' => 4));
      $first_post = $found_posts[0];
	    setup_postdata($first_post);
	  ?>

    <div class="callout large news-title">
      <div class="callout secondary">
        <h2>Latest News</h2>
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?> (<?php the_time( get_option( 'date_format' ))?>)</h5>
        </a>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div>

    <?php
      // Remove the first post from found_posts so that we don't display it again in the short list below
      unset($found_posts[0]);
    ?>

    <div class="grid-x grid-padding-x">
    <main class="small-6 medium-8 cell">
      <?php foreach ( $found_posts as $post ) : setup_postdata( $post ); ?>
        <div class="callout secondary news-item">
          <a href="<?php the_permalink(); ?>">
	          <h5><?php the_time( get_option( 'date_format' ))?></h5>
            <h4><?php the_title(); ?></h4>
          </a>
          <p><?php the_excerpt(); ?></p>
        </div>
      <?php endforeach; ?>

      <div class="callout secondary pagination">
        Pagination Controls
      </div>
    </main>

    <aside class="small-6 medium-3 cell align-right">
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
