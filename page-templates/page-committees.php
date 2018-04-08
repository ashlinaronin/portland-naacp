<?php
/*
Template Name: Committees
*/
get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>

 
<div class="main-wrap" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			

<?php // display ACF Committee fields (Lead-in) - dpc180407 ?>
			
<h2><?php the_field('lead-in_heading'); ?></h2>
<p><?php the_field('lead-in_copy'); ?></p>

			
			
<?php // display ACF Committee fields (Lead-in) - dpc180405 ?>
			
	<?php

		// check if the repeater field has rows of data
		if( have_rows('committees') ):

			// loop through the rows of data
				while ( have_rows('committees') ) : the_row(); ?>

				<h3><?php	the_sub_field('committee_name'); ?></h3>
				<p class="committee-description"><?php	the_sub_field('committee_description'); ?></p>


				<?php

				// check if the repeater field has rows of data
				if( have_rows('images') ):

					// loop through the rows of data
						while ( have_rows('images') ) : the_row(); ?>

								<img src="<?php the_sub_field('image'); ?>" class="committee-image" />

				<?php
						endwhile;

				else :

						// no rows found

				endif;

				?>
	<?php
				endwhile;
		else :
				// no rows found
		endif;
	?>
			
			
	<?php //while( have_rows('committees') ): the_row(); ?> 
			<h3><?php //the_sub_field('Committee_name'); ?></h3> 
			<p class="committee-description"><?php //the_sub_field('Committee_description'); ?></p> 
			<img src="<?php //the_sub_field('image'); ?>" class="float-right committee" alt=""/>        
	<?php //endwhile; ?> 
			
			
		</div>
		
		
<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		
		
		<footer>
			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php get_sidebar(); ?>

 </div>

 <?php get_footer();
