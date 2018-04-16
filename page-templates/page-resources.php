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
			
			
<!--ACF Resource Repeater with conditional sub_fields-->

<?php

// check if the repeater field has rows of data for HEALTHCARE
if( have_rows('resource_information_healthcare') ):

 	// loop through the rows of data
    while ( have_rows('resource_information_healthcare') ) : the_row(); ?>

        <!--display sub_field values-->
				<!--Name-->
        <h3 class="resource-name"><?php the_sub_field('resource_name'); ?></h3>

				<!--Description-->
				<p class="resource-description"><?php the_sub_field('resource_description'); ?></p>

				<!--Link-->
				<div class="resource-link"><?php $link = get_sub_field('resource_link'); 
				if( $link ): ?>
						<a class="button" href="<?php echo $link; ?>">Visit them on the web...</a>
					<?php endif;?></div> 

				<!--Contact person-->
				<div class="resource-contact-person"><?php $contact = get_sub_field('resource_contact_person');
				if( $contact ): ?>
						<p><span>Contact: </span><?php echo $contact; ?></p>
					<?php endif;?></div>

				<!--Address-->
				<div class="resource-address"><?php $address = get_sub_field('address');
				if( $address ): ?>
						<p><span>Address: </span><?php echo $address; ?></p>
					<?php endif;?></div>

				<!--Phone-->
				<div class="resource-phone"><?php $phone = get_sub_field('phone');
				if( $phone ): ?>
						<p><span>Phone: </span><?php echo $phone; ?></p>
					<?php endif;?></div>

				<!--Phone-->
				<div class="resource-email"><?php $email = get_sub_field('email');
				if( $email ): ?>
						<p><?php echo ('<a href="mailto:'.$email.'">'.$email.'</a>') ; ?></p>
					<?php endif;?></div>

<?php		
    endwhile;
else :
    // no rows found
endif;
?>			
<!--end ACF Resource Repeater with conditional sub_fields for HEALTHCARE-->
					
			
<?php

// check if the repeater field has rows of data for LEGAL SERVICES
if( have_rows('resource_information_legal') ):

 	// loop through the rows of data
    while ( have_rows('resource_information_legal') ) : the_row(); ?>

        <!--display sub_field values-->
				<!--Name-->
        <h3 class="resource-name"><?php the_sub_field('resource_name'); ?></h3>

				<!--Description-->
				<p class="resource-description"><?php the_sub_field('resource_description'); ?></p>

				<!--Link-->
				<div class="resource-link"><?php $link = get_sub_field('resource_link'); 
				if( $link ): ?>
						<a class="button" href="<?php echo $link; ?>">Visit them on the web...</a>
					<?php endif;?></div> 

				<!--Contact person-->
				<div class="resource-contact-person"><?php $contact = get_sub_field('resource_contact_person');
				if( $contact ): ?>
						<p><span>Contact: </span><?php echo $contact; ?></p>
					<?php endif;?></div>

				<!--Address-->
				<div class="resource-address"><?php $address = get_sub_field('address');
				if( $address ): ?>
						<p><span>Address: </span><?php echo $address; ?></p>
					<?php endif;?></div>

				<!--Phone-->
				<div class="resource-phone"><?php $phone = get_sub_field('phone');
				if( $phone ): ?>
						<p><span>Phone: </span><?php echo $phone; ?></p>
					<?php endif;?></div>

				<!--Phone-->
				<div class="resource-email"><?php $email = get_sub_field('email');
				if( $email ): ?>
						<p><?php echo ('<a href="mailto:$email">$email</a>') ; ?></p>
					<?php endif;?></div>

<?php		
    endwhile;
else :
    // no rows found
endif;
?>			
<!--end ACF Resource Repeater with conditional sub_fields-->
					
			
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
