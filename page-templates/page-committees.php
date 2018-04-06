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
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			

<?php // display ACF Committee fields - dpc180405 ?>
			
	<?php while( have_rows('Committees') ): the_row(); ?> 
			<h3><?php the_sub_field('Committee_name'); ?></h3> 
			<p class="committee-description"><?php the_sub_field('Committee_description'); ?></p> 
			<img src="<?php the_sub_field('image'); ?>" class="float-right committee" alt=""/>        
			<p class="clearfloat">&nbsp;</p>
	<?php endwhile; ?> 
			
			
		</div>
		
		
		
		
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
