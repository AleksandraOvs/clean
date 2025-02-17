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
				<div class="blog-section">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

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
