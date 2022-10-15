<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hexo Lite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found text-center">
	 			<div class="nf404">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'hexo-lite' ); ?></h1>
				  	<h2 class="nf"><?php esc_html_e( '404', 'hexo-lite' ); ?></h2>
	 			</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
