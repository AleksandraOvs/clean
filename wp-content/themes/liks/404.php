<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ichi
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="page-section error-404 not-found">
		<div class="fixed-container">

			<header class="page-header">
				<h1 class="page-title">Такой страницы у нас нет</h1>
				<div class="error-pic"></div>

			</header><!-- .page-header -->

			<div class="page-content">
				<a style="margin-top:10vh;" href="<?php echo site_url() ?>" class="btn">На главную страницу</a>


			</div><!-- .page-content -->
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();