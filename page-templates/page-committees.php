<?php
/*
Template Name: Committees
*/
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>


  <div class="main-wrap" role="main">

	  <?php do_action( 'foundationpress_before_content' ); ?>
	  <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'main-content' ) ?> id="post-<?php the_ID(); ?>">
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
          <div class="entry-content">
			  <?php the_content(); ?>


			  <?php // display ACF Committee fields (Lead-in) - dpc180407 ?>

            <h2><?php the_field( 'lead-in_heading' ); ?></h2>
            <p><?php the_field( 'lead-in_copy' ); ?></p>


            <!--ACF Repeater with nested image repeater using image variables plus conditional link to another page-->

			  <?php
			  // check if the repeater field has rows of data
			  if ( have_rows( 'committee_information' ) ):
				  // loop through the rows of data
				  while ( have_rows( 'committee_information' ) ) : the_row(); ?>

                    <!--display sub field values-->
                    <h3 class="committee-title"><?php the_sub_field( 'title' ); ?></h3>

                    <div class="image-group">
						<?php
						// check if the repeater field has rows of data
						if ( have_rows( 'images' ) ):
							// loop through the rows of data
							while ( have_rows( 'images' ) ) : the_row(); ?>


								<?php
								$image       = get_sub_field( 'image' );
								if ( ! empty( $image ) ):

									// vars
									$title = $image['title'];
									$alt     = $image['alt'];
									$caption = $image['caption'];

									// thumbnail
									$size   = 'thumbnail';
									$thumb  = $image['sizes'][ $size ];
									$width  = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];

									//thumbnail image plus caption
									if ( $caption ): ?>
                                      <div class="committee-leader">
									<?php endif; ?>
                                  <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"
                                       title="<?php echo $title; ?>" width="<?php echo $width; ?>"
                                       height="<?php echo $height; ?>"/>
									<?php if ( $caption ): ?>
                                  <p class="wp-caption-text"><?php echo $caption; ?></p>
                                  </div>
									<?php endif; ?>
								<?php endif; ?>

							<?php endwhile;
						else :
							// no rows found
						endif;
						?>
                    </div>

									<!--Committee Description-->
									 	<div class="committee-description">
											<?php the_sub_field( 'description' ); ?>
										</div>

										<?php //conditional link to another page
										$link = get_sub_field( 'link' );
										if ( ! empty( $link ) ): ?>
											<a href="<?php the_sub_field( 'link' ); ?>">Learn more...</a>
										<?php endif; ?>
										<p>&nbsp;</p>

							<?php

							// check if the repeater field has rows of data
							if( have_rows('committee_emails') ):

								// loop through the rows of data
									while ( have_rows('committee_emails') ) : the_row(); ?>

									<?php// display a conditional sub-field value?>
									<!--Email-->
									<div class="resource-email"><?php $email = get_sub_field('email_address');
									if( $email ): ?>
										<p><span>Email: </span><?php echo ('<a href="mailto:'.$email.'">'.$email.'</a>'); ?></p>
									<?php endif;?>
									</div>
							<?php
									endwhile;
							else :
									// no rows found
							endif;
							?>


								<p class="clear-after-images"></p>
								<p class="divider">&nbsp;</p>

				  <?php endwhile;
			  else :
				  // no rows found
			  endif;
			  ?>
            <!--end ACF Repeater with nested image repeater using image variables plus conditional link to another page-->

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
	  <?php endwhile; ?>

	  <?php do_action( 'foundationpress_after_content' ); ?>

  </div>

<?php get_footer();
