<?php get_header() ?>

<main id="primary" class="site-main">
	<div class="fixed-container">
		<div class="page-content">
        <div class="_services-section__services-list">
			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/service/service-item');

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'liks') . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'liks') . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );

				// If comments are open or we have at least one comment, load up the comment template.
			endwhile; // End of the loop.
			?>
        </div>
		</div>
	</div>

	</main><!-- #main -->

    <?php get_footer() ?>