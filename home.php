<?php
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>

<div class="lead-in text-center">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
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
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php the_excerpt(); ?></p>
        <a class="decorated-link decorated-link--double-right" href="<?php the_permalink(); ?>">Read article</a>
    </div>
  </div>
</div>

  <?php
    // Remove the first post from found_posts so that we don't display it again in the short list below
    unset($found_posts[0]);
  ?>
<div class="grid-container">
  <div class="grid-x grid-margin-x">
  <main class="cell small-12 medium-7 large-8">
    <?php foreach ( $found_posts as $post ) : setup_postdata( $post ); ?>
      <div class="news-item">
        <h4 class="date"><?php the_time( get_option( 'date_format' ))?></h4>
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php the_excerpt(); ?></p>
        <a class="decorated-link decorated-link--double-right" href="<?php the_permalink(); ?>">Read article</a>
        <hr class="light-grey-hr">
      </div>
    <?php endforeach; ?>

    <nav aria-label="Pagination">
      <ul class="no-bullet grid-x grid-margin-x align-justify">
        <li class="cell small-6 text-left">
	        <?php next_posts_link(__('Older Posts')); ?>
        </li>
        <li class="cell small-6 text-right">
	        <?php previous_posts_link(__('Newer Posts')); ?>
        </li>
      </ul>
    </nav>
  </main>

  <aside class="cell small-12 medium-5 large-4">
    <?php get_sidebar(); ?>
  </aside>
  </div>

</div>

	<?php get_footer();
