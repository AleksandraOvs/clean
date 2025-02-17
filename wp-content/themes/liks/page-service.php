<?php
/**
 * Template name: Страница услуги
 */

 get_header() ?>

<main id="primary" class="site-main">
	<?php get_template_part('template-parts/service/service-hero') ?>
	<?php
	get_template_part('template-parts/04form-section');

	get_template_part('template-parts/05works-slider');

	get_template_part('template-parts/06about-us');

	get_template_part('template-parts/07our-clients');

	get_template_part('template-parts/08feedback');

	get_template_part('template-parts/09form-section2');

	get_template_part('template-parts/10blog');

	get_template_part('template-parts/11faq');

	get_template_part('template-parts/12form-section3');

	?>

</main><!-- #main -->

 <?php get_footer() ?>