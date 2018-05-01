<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12" role="main">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
		<?php endwhile;?>

		</div>
	</div>
</div>

<?php get_footer();
