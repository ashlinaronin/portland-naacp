<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>
<?php the_breadcrumb(); ?>
<div class="grid-container">
	<div class="grid-x">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
			$classes = array(
				'main-content',
				'small-12',
				'medium-8',
				'medium-offset-2'
			);
		?>
		<article <?php post_class($classes) ?> id="post-<?php the_ID(); ?>">
			<header>
				<?php foundationpress_entry_meta(); ?>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
			<!-- <footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer> -->
			<?php // the_post_navigation(); ?>
			<?php // do_action( 'foundationpress_post_before_comments' ); ?>
			<?php // comments_template(); ?>
			<?php // do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
</div>
<?php get_footer();
