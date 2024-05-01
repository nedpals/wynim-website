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
		<header class="entry-header bg-gradient-to-b from-secondary-100 to-secondary-50">
			<div class="text-center text-primary-500 py-12 px-2 space-y-3">
				<p class="text-lg">Category</p>
				<h1 class="entry-title text-5xl md:text-6xl mb-0 text-primary-600"><?php echo single_cat_title('', true) ?></h1>
			</div>
		</header><!-- .entry-header -->

		<div class="max-w-wide mx-auto px-8 xl:px-0 flex">
			<main id="main" class="posts-list w-full lg:w-2/3">
				<?php if ( have_posts() ):
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

			</main><!-- #main -->

			<aside class="hidden lg:block lg:w-1/3 lg:pl-8 divide-y">
				<!-- List date archives -->
				<section class="widget py-8">
					<h2 class="widget-title text-xl font-bold mb-4">By Date</h2>
					<ul class="space-y-2">
						<?php wp_get_archives( [
							'type' => 'monthly',
							'format' => 'wynim_categories',
							'show_post_count' => true,
							'before' => '<li>',
							'after' => '</li>',
						] ); ?>
					</ul>
				</section>

				<!-- Custom sidebar -->
				<?php if ( is_active_sidebar( 'category-tag-archive-sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'category-tag-archive-sidebar' ); ?>
				<?php endif; ?>
			</aside><!-- #secondary -->
		</div>
	</section><!-- #primary -->

<?php
get_footer();
