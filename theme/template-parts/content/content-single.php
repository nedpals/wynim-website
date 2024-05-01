<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header pb-8">
		<!-- catgegories list -->
		<div class="entry-categories text-lg flex flex-wrap -mx-1 pb-2">
			<?php $categories_list = get_the_category(get_the_ID()); ?>

			<?php if ( $categories_list ) : ?>
				<?php foreach ( $categories_list as $category ) : ?>
					<div class="p-1">
						<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"
						   class="px-3 py-1 border border-tertiary-500 rounded hover:bg-tertiary-600 hover:text-white <?php echo $category->parent == 0 ? 'text-white bg-tertiary-500' : ' text-tertiary-500' ?>">
							<?php echo esc_html( $category->name ); ?>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<?php the_title( '<h1 class="entry-title text-5xl mb-0">', '</h1>' ); ?>

		<div class="entry-meta divide-x flex items-center mt-4 text-lg">
			<div class="pr-4">
				<?php wynim_website_posted_by(); ?>
			</div>

			<div class="text-gray-500 pl-4">
				<?php wynim_website_posted_on(); ?>
			</div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if (wynim_website_can_show_post_thumbnail())	: ?>
		<div class="entry-thumbnail mb-8">
			<?php wynim_website_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<div <?php wynim_website_content_class( 'entry-content' ); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'wynim-website' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'wynim-website' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wynim_website_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
