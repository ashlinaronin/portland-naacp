<?php
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>

<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1>Latest News</h1>
      </div>
    </div>
  </div>
</div>
<div class="grid-container lead-in">
  <div class="grid-x">
    <?php
      $found_posts = get_posts( array('posts_per_page' => 4));
      $first_post = $found_posts[0];
      setup_postdata($first_post);
    ?>

    <div class="cell small-12 medium-8 medium-offset-2">
        <h4 class="date"><?php the_time( get_option( 'date_format' ))?></h4>
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?></h5>
        </a>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read article</a> <span>»</span>
    </div>
  </div>
</div>

  <?php
    // Remove the first post from found_posts so that we don't display it again in the short list below
    unset($found_posts[0]);
  ?>
<div class="grid-container">
  <div class="grid-x grid-margin-x">
  <main class="cell small-8">
    <?php foreach ( $found_posts as $post ) : setup_postdata( $post ); ?>
      <div class="news-item">
        <h4 class="date"><?php the_time( get_option( 'date_format' ))?></h4>
        <a href="<?php the_permalink(); ?>">
          <h5><?php the_title(); ?></h5>
        </a>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Read article</a> <span>»</span>
        <hr class="light-grey-hr">
      </div>
    <?php endforeach; ?>

    <div class="callout secondary pagination">
      Pagination Controls
    </div>
  </main>

  <aside class="cell small-4">
    <?php get_sidebar(); ?>
    <!-- <div class="callout secondary">
      Some sort of CTA to take them to another section of the site (get involved?)
    </div> -->

  </aside>
  </div>

</div>

	<?php get_footer();
