<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div id="scroll-progress"></div>
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'liks'); ?></a>

		<header id="masthead" class="site-header">
			<div class="fixed-container">
				<div class="site-header__inner">
					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
						<a href="#" class="menu-toggle">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</a>
					</div><!-- .site-branding -->

					<div class="header-links__inner">
						<?php
						if ($header_links = carbon_get_theme_option('crb_header_links')) {
						?>
							<ul class="site-links">
								<?php
								foreach ($header_links as $header_link) {
								?>
									<li class="site-links__item">
										<?php
										if ($header_link_icon = $header_link['crb_header_link_icon']) {
											$header_link_icon_url = wp_get_attachment_image_url($header_link_icon, 'full');
											echo '<img src="' . $header_link_icon_url . '" />';
										}

										if ($header_link_url = $header_link['crb_header_link_link']) {
											echo '<a class="link" href="' . $header_link_url . '"><span>' . $header_link['crb_header_link_text'] . '</span></a>';
										} else {
											echo '<span>' . $header_link['crb_header_link_text'] . '</span>';
										}
										?>
									</li>
								<?php
								}
								?>
							</ul>
						<?php
						}
						?>


						<div class="site-contacts">
							<?php
							get_template_part('template-parts/messengers');
							?>

							<?php get_template_part('template-parts/feedback-button')
							?>
						</div>
					</div>



				</div>
				<nav id="site-navigation" class="main-navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e('Primary Menu', 'liks'); 
																										?></button> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>

					<div class="header-links__inner _mob">
						<?php
						if ($header_links = carbon_get_theme_option('crb_header_links')) {
						?>
							<ul class="site-links">
								<?php
								foreach ($header_links as $header_link) {
								?>
									<li class="site-links__item">
										<?php
										if ($header_link_icon = $header_link['crb_header_link_icon']) {
											$header_link_icon_url = wp_get_attachment_image_url($header_link_icon, 'full');
											echo '<img src="' . $header_link_icon_url . '" />';
										}

										if ($header_link_url = $header_link['crb_header_link_link']) {
											echo '<a class="link" href="' . $header_link_url . '"><span>' . $header_link['crb_header_link_text'] . '</span></a>';
										} else {
											echo '<span>' . $header_link['crb_header_link_text'] . '</span>';
										}
										?>
									</li>
								<?php
								}
								?>
							</ul>
						<?php
						}
						?>
						<div class="site-contacts">
							<?php
							get_template_part('template-parts/messengers');
							?>

							<?php get_template_part('template-parts/feedback-button')
							?>
						</div>
					</div>
				</nav>
				<!-- #site-navigation -->
			</div>

		</header><!-- #masthead -->