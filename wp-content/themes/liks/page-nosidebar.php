<?php
/**
 * Template name: No sidebar page
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="fixed-container">
		<div class="page-content">
			<div class="page-title">
                <h2 class="title"><?php the_title() ?></h2>
            </div>

            <div class="page-content__inner">
                <?php the_content() ?>
            </div>


		</div>
	</div>

	</main><!-- #main -->
<?php
get_footer();
