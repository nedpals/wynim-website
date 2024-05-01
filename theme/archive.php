<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

get_header();
?>

	<section id="primary">
		<header class="entry-header bg-gradient-to-b from-secondary-100 to-secondary-50">
			<div class="text-center text-primary-500 py-12 px-2 space-y-3">
				<p class="text-lg">Archives</p>
				<h1 class="entry-title text-5xl md:text-6xl mb-0 text-primary-600">
					<?php echo get_the_archive_title() ?>
				</h1>
			</div>
		</header><!-- .entry-header -->

		<main id="main" class="posts-list max-w-content mx-auto px-8 lg:px-0">

		<?php if ( have_posts() ) : ?>
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

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
