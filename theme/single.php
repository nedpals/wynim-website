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

	<section id="primary" class="max-w-wide mx-auto px-2 lg:px-0 flex py-8">
		<main id="main" class="w-full lg:w-2/3">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', 'wynim-website' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'wynim-website' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', 'wynim-website' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', 'wynim-website' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End the loop.
			endwhile;
			?>

		</main><!-- #main -->

		<aside class="hidden lg:block lg:w-1/3 lg:pl-8">
			<?php if ( is_active_sidebar( 'single-post-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'single-post-sidebar' ); ?>
			<?php endif; ?>
		</aside><!-- #secondary -->
	</section><!-- #primary -->

<?php
get_footer();
