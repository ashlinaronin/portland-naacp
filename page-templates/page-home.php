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

    <div class="module-news callout large">
      <h2 class="text-center">Latest news</h2>
      <div class="grid-x grid-margin-2 align-justify align-middle">
        <div class="module-news__news-item large-auto cell">
          <div class="module-news__news-item-content">
            <a>09/27/2017</a>
            <h5>Community Involvement Committee Now Accepting Applications</h5>
            <p>Join the Political Action Committee as they track the development of bills in preparation for the coming short...</p>
          </div>
          <div class="module-news__news-item-cta">
            <a class="button hollow news expanded">View details ></a>
          </div>
        </div>
        <div class="module-news__news-item large-auto cell">
          <div class="module-news__news-item-content">
            <a>09/27/2017</a>
            <h5>Community Involvement Committee Now Accepting Applications</h5>
            <p>Join the Political Action Committee as they track the development of bills in preparation for the coming short...</p>
          </div>
          <div class="module-news__news-item-cta">
            <a class="button hollow news expanded">View details ></a>
          </div>
        </div>
        <div class="module-news__news-item large-auto cell">
          <div class="module-news__news-item-content">
            <a>09/27/2017</a>
            <h5>Community Involvement Committee Now Accepting Applications</h5>
            <p>Join the Political Action Committee as they track the development of bills in preparation for the coming short...</p>
          </div>
          <div class="module-news__news-item-cta">
            <a class="button hollow news expanded">View details ></a>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
