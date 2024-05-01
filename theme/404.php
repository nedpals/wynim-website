<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wynim-website
 */

get_header();
?>

	<section id="primary" class="flex bg-gradient-to-b from-secondary-50 to-white h-full min-h-[55vh]">
		<main id="main" class="my-auto w-full">
			<div class="max-w-lg mx-auto px-2">
				<header class="page-header text-center">
					<h1 class="page-title text-6xl text-primary-500"><?php esc_html_e( 'Page Not Found', 'wynim-website' ); ?></h1>
				</header><!-- .page-header -->

				<div <?php wynim_website_content_class( 'page-content text-center flex flex-col items-center' ); ?>>
					<p class="text-xl"><?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'wynim-website' ); ?></p>
					<?php get_template_part( 'template-parts/layout/search-form'); ?>
				</div><!-- .page-content -->
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
