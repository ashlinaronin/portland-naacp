<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

    <div class="c-hero callout large text-center">
      <h1>Inspiring intro message</h1>
      <div class="expanded stacked-for-small button-group margin-horizontal-2">
        <a class="button hollow">Learn more</a>
        <a class="button">Join us</a>
      </div>
    </div>

    <div class="module-events callout large">
      <div class="module-events__header callout text-center">
        <h2>Next general session</h2>
        <h1>Sunday, August 27th</h1>
        <h5>12-2 PM | Concordia University Hall</h5>
        <div class="small button-group align-center">
          <a class="button">RSVP on F</a>
          <a class="button hollow">More info</a>
        </div>
      </div>
      <h2 class="text-center">Upcoming events</h2>
      <div class="module-events__events grid-x grid-margin-2 align-justify align-middle">
        <div class="module-events__event large-auto cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button expanded">View details ></a>
          </div>
        </div>
        <div class="module-events__event large-auto cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button expanded">View details ></a>
          </div>
        </div>
        <div class="module-events__event large-auto cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button expanded">View details ></a>
          </div>
        </div>
        <div class="module-events__event large-auto cell">
          <div class="module-events__event-content">
            <a>10/08</a>
            <h5>Political Action Committee Meeting</h5>
          </div>
          <div class="module-events__event-cta">
            <a class="button expanded">View details ></a>
          </div>
        </div>
      </div>
    </div>

    <div class="module__news callout large text-center">
      <h2>The latest</h2>
      <div class="callout secondary">
        Latest news post(s)
      </div>
      <div>
        <button class="button hollow">See all news</button>
      </div>
    </div>

    <?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
