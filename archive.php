<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="lead-in single-line text-center">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-12 medium-10 medium-offset-1">
        <h1>View <?php the_archive_title(); ?></h1>
      </div>
    </div>
  </div>
</div>
<div class="grid-container">
  <div class="grid-x grid-margin-x">
	<main class="cell small-12 medium-7 large-8">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="news-item">
					<h4 class="date"><?php the_time( get_option( 'date_format' ))?></h4>
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<p><?php the_excerpt(); ?></p>
					<a class="decorated-link decorated-link--double-right" href="<?php the_permalink(); ?>">Read article</a>
					<hr class="light-grey-hr">
				</div>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
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
			<?php endif; ?>
	</main>

	<aside class="cell small-12 medium-5 large-4">
		<?php get_sidebar(); ?>
	</aside>
  </div>
</div>

<?php get_footer();
