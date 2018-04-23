<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

	<div class="c-hero callout large text-center">
	       <h1>Ensuring the <span>political</span>, <span>educational</span>, <span>social</span> and <span>economic equality of rights</span> of all persons and to <span>eliminate racial hatred and discrimination</span></h1>
      <div class="expanded stacked-for-small button-group button-group--home-cta">
        <a class="button">Learn more</a>
        <a class="button hollow">Join us</a>
      </div>
	</div>

  <div class="grid-x module-events callout large">
    <div class="module-events__header callout text-center next-meeting small-10">
        <h3>Next general session</h3>
        <a href="/event/naacp-general-meeting/all/"><h2>Every 4th Saturday</h2>
        <h5><span>12-2 PM</span> | Click for Location</h5></a>
		</div>
	</div>
	<div class="grid-container events-news"><!--dpc-added container for events plus news-->
    <div class="grid-x grid-padding-x">

        <div class="module-events__events cell medium-12 large-4" >
  				<h2 class="cell text-left events">Events&nbsp;&nbsp;<a href="/events/list/"><span>View All</span></a></h2>
	        <?php dynamic_sidebar( 'home-page-events-widget' ); ?>
        </div>
      

        <?php $the_query = new WP_Query( 'posts_per_page=4' ); ?>
        <div class="module-news cell medium-12 large-8">
          <h2 class="text-left latest-news cell">Latest news&nbsp;&nbsp;<a href="/news/"><span>View All</span></a></h2>
          <div class="grid-x grid-padding-x small-up-2">
            <?php while ($the_query -> have_posts()): $the_query -> the_post(); ?>
              <div class="module-news__news-item cell">
                <div class="module-news__news-item-content">
                  <h4 class="date"><?php the_time( get_option( 'date_format' )); ?></h4>
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read article</a> <span>>></span>
                  <hr class="light-grey-hr" />
                </div>
              </div><!--end cell-->
            <?php endwhile; ?>
          </div>
        </div>

    </div>
		
 </div><!--end events-news-container-->

	

  <?php wp_reset_postdata(); ?>
					<div class="cta-photos">
					</div>

<?php get_footer();
