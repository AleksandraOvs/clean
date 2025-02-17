<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package liks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if (is_front_page()) :
	?>
		<a class="blog-item" href="<?php echo the_permalink() ?>">
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

			<div class="blog-item__title">
				<?php
				the_title('<h3 class="entry-title">', '</h3>');
				?>
				<div class="list-arrow">
					<svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 15.125H28.25M28.25 15.125L15.125 2M28.25 15.125L15.125 28.25" stroke="#202020" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>

		</a>
	<?php
	else :
		the_title('<h2 class="entry-title">', '</h2>');
	?>
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'liks'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'liks'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

	<?php
	endif;

	if ('post' === get_post_type()) :
	?>
		<!-- <div class="entry-meta">
				<?php
				//liks_posted_on();
				//liks_posted_by();
				?>
			</div> -->
		<!-- .entry-meta -->
	<?php endif; ?>


	<?php //liks_post_thumbnail(); 
	?>



	<!-- <footer class="entry-footer">
		<?php //liks_entry_footer(); 
		?>
	</footer> -->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->