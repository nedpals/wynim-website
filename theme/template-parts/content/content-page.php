<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

/** @var array $args */

$args = wp_parse_args($args,
	[
		'content_class' => '',
	]
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<header class="entry-header">
		<div class="max-w-wide mx-auto py-8 px-2">
			<?php
			if ( ! is_front_page() ) {
				the_title( '<h1 class="entry-title text-primary-500 text-center text-4xl md:text-6xl mb-0">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title text-primary-500 text-center text-4xl text-6xl mb-0">', '</h2>' );
			}
			?>
		</div>
	</header><!-- .entry-header -->

	<?php wynim_website_post_thumbnail(); ?>

	<div <?php wynim_website_content_class( 'entry-content px-2 mt-8' ); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'wynim-website' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<div class="<?php echo $args['content_class'] ?>">
		<?php get_template_part( 'template-parts/layout/loggedin-content-footer' ); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
