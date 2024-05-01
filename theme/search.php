<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wynim-website
 */

get_header();
?>

	<section id="primary">
		<main id="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="bg-gradient-to-b from-secondary-100 to-secondary-50">
					<div class="max-w-xl flex flex-col items-center space-y-4 mx-auto px-2 py-8">
						<h1 class="m-0 page-title text-4xl text-primary-500">Search results</h1>

						<?php get_template_part( 'template-parts/layout/search-form'); ?>
					</div>
				</div>

				<div class="bg-slate-50/30">
					<div class="max-w-xl mx-auto py-4 text-lg text-center">
						<p>Looking for programs/universities? Search in our <a class="hover:bg-primary-500 hover:text-white border-b-4 border-primary-500 font-bold" href="#">finder tool</a> instead.</p>
					</div>
				</div>
			</header><!-- .page-header -->

			<div class="posts-list max-w-content mx-auto pt-8">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			wynim_website_the_posts_navigation();

			else :

				// If no content is found, get the `content-none` template part.
				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
