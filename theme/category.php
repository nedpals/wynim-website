<?php
/**
 * Category template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<?php if ( have_posts() ): ?>

			<header class="entry-header bg-secondary-100">
				<div class="text-center text-primary-500 py-12 px-2 space-y-3">
					<p class="text-lg">Category</p>
					<h1 class="entry-title text-5xl md:text-6xl mb-0 text-primary-600"><?php echo single_cat_title('', true) ?></h1>
				</div>
			</header><!-- .entry-header -->

			<div class="posts-list max-w-content mx-auto">
			<?php
				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content', 'excerpt' );
				}

				// Previous/next page navigation.
				wynim_website_the_posts_navigation();

			else:

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			endif;
			?>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
