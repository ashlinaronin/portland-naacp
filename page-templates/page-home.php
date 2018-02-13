<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

	<div class="c-hero callout large text-center">
	       <h1>Ensuring the <span>political</span>, <span>educational</span>, <span>social</span> and <span>economic equality of rights</span> of all persons and to <span>eliminate racial hatred and discrimination</span></h1>
      <div class="expanded stacked-for-small button-group margin-horizontal-2 button-group--home-cta">
        <a class="button">Learn more</a>
        <a class="button hollow">Join us</a>
      </div><br><br><br><br><br>
	</div>

    <div class="module-events callout large">
      <div class="module-events__header callout text-center">
        <h3>Next general session</h3>
        <h2>Sunday, August 27th</h2>
        <h5><span>12-2 PM</span> | Concordia University Hall</h5>
        <div class="large button-group stacked-for-small align-center button-group--home-meeting">
          <a class="button">RSVP on F</a>
          <a class="button hollow">More info</a>
        </div>
      </div>
      <h2 class="text-left events">Events</h2>
<!--      <div class="module-events__events grid-x align-justify grid-margin-2 warning align-left">-->
      <div class="module-events__events columns political-action">
        <div class="module-events__event large-auto political-action cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button small">></a>
          </div>
        </div>
        <div class="module-events__event large-auto political-action cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button small">></a>
          </div>
        </div>
        <div class="module-events__event large-auto political-action cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button small">></a>
          </div>
        </div>
        <div class="module-events__event large-auto political-action cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button small">></a>
          </div>
        </div>
      </div>
    </div>

  <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
  <div class="module-news callout large">
    <h2 class="text-center">Latest news</h2>
    <div class="grid-x grid-margin-2 align-justify align-middle">
      <?php while ($the_query -> have_posts()): $the_query -> the_post(); ?>
        <div class="module-news__news-item large-auto cell">
          <div class="module-news__news-item-content">
            <p><?php the_time( get_option( 'date_format' )); ?></p>
            <h5><?php the_title(); ?></h5>
            <p><?php the_excerpt(__('more...)')); ?></p>
          </div>
          <div class="module-news__news-item-cta">
            <a class="button hollow news expanded" href="<?php the_permalink(); ?>">></a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>

  <?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
