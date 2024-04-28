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
				<div class="bg-secondary-100">
					<div class="max-w-xl flex flex-col items-center space-y-4 mx-auto px-2 py-8">
						<h1 class="m-0 page-title text-4xl text-primary-500">Search results</h1>

						<div class="focus-within:outline outline-1 outline-primary-400 w-full border flex-1 bg-white rounded-full flex items-stretch">
							<input type="text" placeholder="Enter your search query" value="<?php echo get_search_query() ?>" class="flex-1 pl-6 pr-[3rem] py-3 bg-transparent border-0 focus:outline-none" />

							<button class="py-3 pr-6">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g opacity="0.6">
										<path d="M21 21L15 15M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="#545454" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
									</g>
								</svg>
							</button>
						</div>
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
