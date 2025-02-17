<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liks
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="blog-section">
		<div class="fixed-container">
			<div class="page-content">
			<?php
					the_archive_title('<h2 class="page-title">', '</h2>');
					the_archive_description('<div class="archive-description">', '</div>');
					?>
				<div class="blog-section">
					<?php
					while (have_posts()) :
						the_post();
					?>
						<a href="<?php the_permalink() ?>" class="services-list__item fromOpacity">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail(
									'post-thumbnail',
									array(
										'alt' => the_title_attribute(
											array(
												'echo' => false,
											)
										),
									)
								);
							} else {
								echo '<img src="' . get_stylesheet_directory_uri() . '/images/svg/placeholder.svg" />';
							}
							?>
							<div class="service-item__heading">
								<div class="service-item__heading__inner">
									<h3><?php the_title() ?></h3>
								</div>

								<div class="list-arrow">
									<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2 15.125H28.25M28.25 15.125L15.125 2M28.25 15.125L15.125 28.25" stroke="#202020" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</div>
							</div>

							<?php //the_excerpt(); 
							?>
						</a>

					<?php

					endwhile;
					?>
				</div>
			</div>
		</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
