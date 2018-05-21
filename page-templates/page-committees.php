<?php
/*
Template Name: Committees
*/
get_header(); ?>

<?php // get_template_part( 'template-parts/featured-image' ); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="lead-in single-line text-center">
	  	<div class="grid-container">
		    <div class="grid-x">
		      	<div class="cell small-12 medium-10 medium-offset-1">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-margin-x">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="cell small-12 medium-8 medium-offset-2">
					<?php // Intro Copy ?>
					<div class="intro">
						<h2><?php the_field( 'lead-in_heading' ); ?></h2>
						<p><?php the_field( 'lead-in_copy' ); ?></p>
					</div>

			        
					<?php // Individual Committees Loop
					
					// check if the repeater field has rows of data
					if ( have_rows( 'committee_information' ) ):
					  // loop through the rows of data
					  while ( have_rows( 'committee_information' ) ) : the_row(); 
  						  	$committee_email = get_sub_field( 'committee_email' );
			            $escaped_committee_email = esc_html(antispambot($committee_email));
			    ?>

					  	<div class="committee">

						    <!--display sub field values-->
						    <h3 class="committee-title cell small-12"><?php the_sub_field( 'title' ); ?></h3>

							<!--Committee Description-->
						 	<div class="committee-description cell small-12">
								<?php the_sub_field( 'description' ); ?>
								<?php if ( ! empty( $committee_email ) ): ?>
									<p>
                    <b>Get in touch:</b>
                    <a href="mailto:<?php echo $escaped_committee_email; ?>"><?php echo $escaped_committee_email; ?></a>
                  </p>
								<?php endif; ?>
							</div>

							<!-- Committee members images -->
						    <div class="image-group cell small-12">
		                      	<h6>Committee Leadership</h6>
								<?php
									// check if the repeater field has rows of data
									if ( have_rows( 'members' ) ):
										// loop through the rows of data
										while ( have_rows( 'members' ) ) : the_row(); ?>
											<?php
											$image                = get_sub_field( 'image' );
											$member_name          = get_sub_field( 'member_name' );
											$member_title         = get_sub_field( 'member_title' );
											$member_email         = get_sub_field( 'member_email' );
											$escaped_member_email = esc_html(antispambot($member_email));

											// Grab image info
											if ( ! empty( $image ) ):

												// vars
												$title = $image['title'];
												$alt                = $image['alt'];
												$caption            = $image['caption'];

												// thumbnail
												$size   = 'thumbnail';
												$thumb  = $image['sizes'][ $size ];
												$width  = $image['sizes'][ $size . '-width' ];
												$height = $image['sizes'][ $size . '-height' ];
											?>
							                    
							                    <div class="committee-leader">
													<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"
													title="<?php echo $title; ?>" width="<?php echo $width; ?>"
													height="<?php echo $height; ?>"/>
													<p class="member-info name"><?php echo $member_name; ?></p>
													<p class="member-info title"><?php echo $member_title; ?></p>
													<?php if ( ! empty( $member_email ) ): ?>
														<p class="member-info email">
                              <a href="mailto:<?php echo $escaped_member_email; ?>"><?php echo $escaped_member_email; ?></a>
                            </p>
													<?php endif; ?>
												</div>
										<?php ; endif; ?>
										<?php endwhile;
									else : // no rows found ?>
										<p class="no-members">Interested in applying for this committee? <a href="<?php echo esc_url( home_url( '/' ) ); ?>about/contact-us" title="Apply to join this committee!">Get in touch!</a>
									<?php endif;
								?>
								<p class="clear"></p>
						    </div>
						</div>
				  	<?php endwhile;
					else :
				  	// no rows found
					endif;
					// end Individual Committees Loop ?>
				</div>

				<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</div>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
