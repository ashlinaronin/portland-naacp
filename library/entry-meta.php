<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<h4 class="text-orange"><time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date() ) . '</time></h4>'; ?>
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php echo '<p class="byline author"><b>' . __( 'Posted by', 'foundationpress' ) . ' </b><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
