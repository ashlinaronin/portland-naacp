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

			  <div class="small-7 footer__upper cell">
				  <?php dynamic_sidebar( 'footer-left-widgets' ); ?>
			  </div>

			  <div class="small-5 cell">
				<label for="updates-email" class="updates">Get updates</label>
				<div class="input-group">
				  <input id="updates-email" class="input-group-field" type="email" placeholder="Enter your email address">
				  <div class="input-group-button">
					<input type="submit" class="button" value="Sign Up">
				  </div>
				</div>
			  </div>

			  <div class="footer__lower">
				  <?php dynamic_sidebar( 'footer-widgets' ); ?>
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
