<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

$footer_menu = \Log1x\Navi\Navi::make()->build('footer-menu');
?>

<footer id="colophon" class="bg-primary-500 text-white">
	<div class="max-w-wide w-full mx-auto px-8 md:px-2">
		<div class="flex flex-wrap py-8 space-y-4 md:space-y-0">
			<div class="w-full md:w-1/3 space-y-2 flex flex-col items-start text-left">
				<div class="w-1/2 md:w-[90%] mb-4">
					<img src="<?php echo get_template_directory_uri() ?>/assets/wynim_white.png" class="h-auto w-full">
				</div>
				<h3 class="font-bold">About WYNIM</h3>
				<p>WYNIM Educational Consulting, provides consultancy services to institutions, organizations, and individuals related to international education, international development, community colleges, lifelong learning/continuing education/adult education and internationalization of higher education institutions.</p>
			</div>

			<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
				<aside class="footer-sidebar w-full md:w-2/3 flex flex-wrap md:pl-12 space-y-4 md:space-y-0" role="complementary" aria-label="<?php esc_attr_e( 'Footer', '_tw' ); ?>">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
				</aside>
			<?php endif; ?>
		</div>

		<div class="border-t border-primary-200 py-4">
			<?php
			$wynim_website_blog_info = get_bloginfo( 'name' );
			if ( ! empty( $wynim_website_blog_info ) ) :
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php
			endif;

			/* translators: 1: WordPress link, 2: WordPress. */
			printf(
				'<a href="%1$s">proudly powered by %2$s</a>.',
				esc_url( __( 'https://wordpress.org/', 'wynim-website' ) ),
				'WordPress'
			);
			?>
		</div>
	</div>
</footer><!-- #colophon -->
