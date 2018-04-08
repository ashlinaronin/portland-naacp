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

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer grid-x grid-padding-x">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php //dynamic_sidebar( 'footer-widgets' ); ?>

        <div class="small-6 footer__upper cell">
          <!-- Upper Footer -->
          <ul class="menu align-spaced">
            <li>
              <a href="#"><h4>Get Involved</h4></a>
            </li>
            <li>
              <a href="#"><h4>Issues</h4></a>
            </li>
            <li>
              <a href="#"><h4>News</h4></a>
              <ul class="menu vertical footer__sub-category-list">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><h4>Calendar</h4></a>
            </li>
            <li>
              <a href="#"><h4>About</h4></a>
              <ul class="menu vertical footer__sub-category-list">
                <li><a href="#">Committees</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="small-6 cell">
          <label for="updates-email" class="updates">Get updates</label>
          <div class="input-group">
            <input id="updates-email" class="input-group-field" type="email" placeholder="Enter your email address">
            <div class="input-group-button">
              <input type="submit" class="button" value="Sign Up">
            </div>
          </div>
        </div>


        <!-- Lower Footer -->
        <div class="footer__lower">
          <ul class="menu align-center">
            <li>
              <a href="#"><h4>Donate</h4></a>
            </li>
            <li>
              <a href="#"><h4>Join</h4></a>
            </li>
            <li>
              <a href="#"><h4>T</h4></a>
            </li>
            <li>
              <a href="#"><h4>F</h4></a>
            </li>
          </ul>

          <div class="text-center">
            <h5>Portland NAACP Chapter Information</h5>
            <h5>Address</h5>
            <h5>Main Contact Email</h5>
            <h5>Etc.</h5>
          </div>

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
<script id="__bs_script__">//<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
  //]]></script>

</body>
</html>
