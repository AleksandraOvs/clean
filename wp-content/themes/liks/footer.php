<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package liks
 */

?>

<footer id="colophon" class="site-footer">
	<div class="fixed-container">
		<div class="site-info">
			<?php
			the_custom_logo();
			?>
			<!-- <a href="<?php //echo esc_url(__('https://wordpress.org/', 'liks')); 
							?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf(esc_html__('Proudly powered by %s', 'liks'), 'WordPress');
				?>
			</a> -->
			<!-- <span class="sep"> | </span> -->
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			//printf(esc_html__('Theme: %1$s by %2$s.', 'liks'), 'liks', '<a href="https://purple-web.ru">purple</a>');
			?>
			<?php
			if ($footer_info = carbon_get_theme_option('crb_footer_info')) {
				echo '<div class="site-info__text">' . $footer_info . '</div>';
			}
			?>
		</div><!-- .site-info -->

		<div class="footer-widgets">
			<?php if (is_active_sidebar('footer-widget1')) { ?>
				<ul id="sidebar">
					<?php dynamic_sidebar('footer-widget1'); ?>
				</ul>
			<?php } ?>
		</div>

		<div class="footer-links">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
				)
			);
			?>

			<?php
			if ($fmessengers = carbon_get_theme_option('footer_messengers')) {
			?>
				<ul class="footer-messengers__list">
					<?php
					foreach ($fmessengers as $fmes) {
						$fmes_img = wp_get_attachment_image_url($fmes['crb_fmes_image']);
						$fmes_link = $fmes['crb_fmes_link'];
						$fmes_link_text = $fmes['crb_fmes_name'];
					?>

						<li class="footer-messengers__list__item">
							<a href="<?php echo $fmes_link ?>">
								<img src="<?php echo $fmes_img ?>" alt="<?php echo $fmes_link_text ?>">
							</a>
						</li>
					<?php
					}
					?>
				</ul>
			<?php
			}
			?>

			<?php get_template_part('template-parts/feedback-button')
			?>
		</div>


	</div>

</footer><!-- #colophon -->
<?php
if (current_user_can('administrator')) {
	echo '<div style="position: fixed;bottom: 10px;right: 10px;background: rgba(255, 255, 255, .2);color: #cacaca;padding: 5px;font-size: 12px;z-index: 1000;"class="show-temp">' . get_current_template() . '</div>';
}

?>

<div style="display: none; width: 500px;" id="form-popup">
	<?php
	if ($footer_contactform = carbon_get_theme_option('crb_feedback_button_shortcode')) {
		echo do_shortcode(" $footer_contactform ");
	}
	?>
</div>

<div class="arrow-up">
	<svg width="23" height="37" viewBox="0 0 23 37" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M12.4166 1.15529C12.3647 1.10387 12.308 1.0575 12.2473 1.0168L12.155 0.966794C12.0857 0.922317 12.0087 0.891019 11.928 0.874471L11.8319 0.847544C11.6845 0.818513 11.533 0.818513 11.3856 0.847544L11.2856 0.878319L11.1702 0.912939C11.1306 0.931257 11.0921 0.951807 11.0548 0.974489L10.974 1.02065C10.9103 1.06337 10.8511 1.11234 10.7971 1.16683L0.445356 11.507C0.316232 11.6075 0.209948 11.7343 0.133556 11.8789C0.0571638 12.0236 0.0124093 12.1829 0.00226167 12.3462C-0.00788593 12.5095 0.0168053 12.6731 0.0746971 12.8261C0.132589 12.9791 0.222357 13.1181 0.338049 13.2338C0.45374 13.3495 0.592709 13.4393 0.745737 13.4972C0.898765 13.555 1.06236 13.5797 1.22565 13.5696C1.38895 13.5594 1.54822 13.5147 1.69291 13.4383C1.83759 13.3619 1.96438 13.2556 2.06485 13.1265L10.447 4.75588L10.447 35.8226C10.447 36.1286 10.5686 36.4222 10.785 36.6386C11.0014 36.855 11.295 36.9766 11.601 36.9766C11.9071 36.9766 12.2006 36.855 12.4171 36.6386C12.6335 36.4222 12.7551 36.1286 12.7551 35.8226L12.7551 4.75588L21.1372 13.1265C21.3593 13.2993 21.6368 13.385 21.9175 13.3675C22.1983 13.3501 22.4631 13.2307 22.662 13.0317C22.8609 12.8328 22.9803 12.5681 22.9978 12.2873C23.0152 12.0065 22.9295 11.729 22.7567 11.507L12.4166 1.15529Z" fill="white" />
	</svg>
	<div>
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>