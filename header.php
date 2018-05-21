<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
		<?php if (is_page( 'Home' )): ?>
			<div class="callout homepage-alert grid-x" data-closable>
				<div class="small-12 large-9">
					<p><b>SATURDAY, MAY 26TH:</b><br class="alert-break"> X-Factor brunch w/ Special Guest Ilyasah Shabazz (Daughter&nbsp;of&nbsp;Malcolm&nbsp;X)</p>
				</div>
				<div class="small-12 large-3">
					<div id="alert-buttons">
						<button class="primary">
							<a href="https://xfactor.ticketleap.com/xfactor/dates/May-26-2018_at_1000AM" title="Get Tickets"  target="_blank">Get Tickets</a>
						</button>
						<button class="secondary">
							<a href="<?php echo esc_url(home_url('')); ?>/2018/05/16/ilyasah-shabazz-the-daughter-of-malcolm-x-comes-to-portland-to-help-the-naacp-honor-him/" title="Ilyasah Shabazz comes to Portland to help NAACP honor her father, Malcolm X"target="_blank">More Info</a>
						</button>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="site-title-bar title-bar text-center" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="naacp-logo style-svg" src="/wp-content/uploads/2018/04/NAACP-362889.svg" />
					<span class="portland-branch">Portland Branch 1120</span>
				</a>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="naacp-logo style-svg" src="/wp-content/uploads/2018/04/NAACP-362889.svg"/>
							<div class="portland-branch">&nbsp;Portland Branch 1120</div>
							<div class="naacp-text">NAACP</div>
						</a>
					</div>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
