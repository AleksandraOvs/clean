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
	<div class="fixed-container">
		<div class="page-content">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', get_post_type());

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'liks') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'liks') . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>

	</main><!-- #main -->

<?php
get_footer();
