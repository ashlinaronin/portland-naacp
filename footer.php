<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php //dynamic_sidebar( 'footer-widgets' ); ?>


        <!-- Upper Footer -->
        <div class="grid-x grid-padding-x">
          <div class="auto cell">
            <h5>Get Involved</h5>
          </div>
          <div class="auto cell">
            <h5>Issues</h5>
          </div>
          <div class="auto cell">
            <h5>News</h5>
            <ul class="menu align-top">
              <li><a href="#">Category 1</a></li>
              <li><a href="#">Category 2</a></li>
              <li><a href="#">Category 3</a></li>
            </ul>
          </div>
          <div class="auto cell">
            <h5>Calendar</h5>
          </div>
          <div class="auto cell">
            <h5>About</h5>
            <ul class="menu">
              <li><a href="#">Committees</a></li>
              <li><a href="#">History</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="small-5 cell">
            <div>
              <label for="updates-email">Get updates</label>
              <div class="input-group">
                <input id="updates-email" class="input-group-field" type="email">
                <div class="input-group-button">
                  <input type="submit" class="button" value="Sign Up">
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Lower Footer -->
        <div>
          <ul class="menu menu-horizontal">
            <li><a href="#">Donate</a></li>
            <li><a href="#">Join</a></li>
            <li><a href="#">T</a></li>
            <li><a href="#">F</a></li>
          </ul>
          <ul class="menu menu-horizontal">
            <li><a href="#">Portland NAACP Chapter Information</a></li>
            <li><a href="#">Address</a></li>
            <li><a href="#">Main Contact Email</a></li>
            <li><a href="#">Etc.</a></li>
          </ul>
        </div>

				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
