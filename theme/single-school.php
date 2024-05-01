<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wynim-website
 */

get_header();
?>

	<section id="primary">
		<div class="entry-header bg-gradient-to-b from-secondary-100 to-secondary-50">
			<div class="max-w-wide mx-auto py-8 px-2 space-y-3">
				<h1 class="entry-title text-4xl mb-0 text-primary-600">Schools</h1>
			</div>
		</div>

		<main id="main" class="max-w-6xl mx-auto px-8 lg:px-0 flex py-8">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single-school' );
				// End the loop.
			endwhile;
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
