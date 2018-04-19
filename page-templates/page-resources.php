<?php
/*
Template Name: Resources
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
			
			

<!--ACF Resource Category Repeater with nested Sub-category Repeater, nested Resource Repeater and conditional sub_fields-->					
			
<?php

// check if the Resource Category Repeater field has rows of data
if( have_rows('resource_category_repeater') ):

// loop through the rows of data
while ( have_rows('resource_category_repeater') ) : the_row(); ?>

<div class="accordion" data-accordion data-multi-expand="false" data-allow-all-closed="true">
	<div class="accordion-item" data-accordion-item>
		<a href="#" class="accordion-title"><?php the_sub_field('category_name'); ?></a> 
		<div class="accordion-content" data-tab-content>

	<!--display sub_field values-->
	
	<!--Category Name-->
	<h2 class="category-name"><?php the_sub_field('category_name'); ?></h2>

		<?php

		// check if the Resource Sub-category Repeater field has rows of data
		if( have_rows('sub_category_repeater') ):

		// loop through the rows of data
			while ( have_rows('sub_category_repeater') ) : the_row(); ?>

				<div class="accordion" data-accordion data-multi-expand="false" data-allow-all-closed="true">
					<div class="accordion-item" data-accordion-item>
						<a href="#" class="accordion-title accordion-sub-category"><?php the_sub_field('sub_category_name'); ?></a> 
						<div class="accordion-content" data-tab-content>

						<!--display sub_field values-->

						<!--Category Name-->
						<h3 class="sub-category-name"><?php the_sub_field('sub_category_name'); ?></h3>

							<?php

							// check if the Resource Repeater field has rows of data
							if( have_rows('resource_repeater') ):

							// loop through the rows of data
								while ( have_rows('resource_repeater') ) : the_row(); ?>

									<!--display sub_field values-->

									<!--Name-->
										<h5 class="resource-name"><?php the_sub_field('resource_name'); ?></h5>

									<!--Description-->
										<div class="resource-description"><?php $description = get_sub_field('resource_description');
										if( $description ): ?>
												<p><?php echo $description; ?></p>
											<?php endif;?></div>

									<!--Address-->
										<div class="resource-address"><?php $address = get_sub_field('resource_address1');
										if( $address ): ?>
											<p><span>Address: </span></p>
											<p class="resource-address"><?php echo $address; ?></p>
											<?php endif;?></div>

									<!--Contact person-->
										<div class="contact-person"><?php $contact = get_sub_field('contact_person');
										if( $contact ): ?>
												<p><span>Contact: </span><?php echo $contact; ?></p>
											<?php endif;?></div>

									<!--Phone-->
										<div class="resource-phone"><?php $phone = get_sub_field('phone');
										if( $phone ): ?>
												<p><span>Phone: </span><?php echo ('<a href="tel:'.$phone.'">'.$phone.'</a>'); ?></p>
											<?php endif;?></div>

									<!--Email-->
										<div class="resource-email"><?php $email = get_sub_field('email');
										if( $email ): ?>
												<p><span>Email: </span><?php echo ('<a href="mailto:'.$email.'">'.$email.'</a>'); ?></p>
											<?php endif;?></div>

									<!--Additional notes-->
										<div class="additional-notes"><?php $notes = get_sub_field('additional_notes');
										if( $notes ): ?>
												<p><span>Additional Notes: </span><?php echo $notes; ?></p>
											<?php endif;?></div>

									<!--Website-->
										<div class="resource-website-link"><?php $link = get_sub_field('resource_website_link'); 
										if( $link ): ?>
												<a class="button" href="<?php echo $link; ?>" target="_blank">Visit them on the web...</a>
											<?php endif;?></div> 

										<p class="divider"><?php the_sub_field('divider'); ?></p>

									<?php
											endwhile;
									else :
											// no rows found
									endif;
									?>	

								</div><!--end accordion sub-category content-->
							</div><!--end accordion sub-category pane-->
						</div><!--end accordion sub-category wrapper-->					

			<?php
					endwhile;
			else :
					// no rows found
			endif;
			?>	

		</div><!--end accordion content-->
	</div><!--end accordion pane-->
</div><!--end accordion wrapper-->					
			
<?php
    endwhile;
else :
    // no rows found
endif;
?>			

<!--end ACF Resource Category Repeater with nested Sub-category Repeater, nested Resource Repeater and conditional sub_fields-->	
			
</div><!--end entry-content-->
		
		
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
