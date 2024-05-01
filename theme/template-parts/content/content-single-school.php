<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

function wynim_single_school_logo() {
	$logo_id = get_post_meta(get_the_ID(), "logo", true);
	return wp_get_attachment_image_url($logo_id, 'thumbnail');
}

function wynim_single_school_description() {
	echo wp_kses(
		get_post_meta(get_the_ID(), "school_description", true),
		wp_kses_allowed_html('post')
	);
}

function wynim_single_school_requirements() {
	$requirements = get_post_meta(get_the_ID(), "requirements", true);
	echo wp_kses(
		$requirements,
		wp_kses_allowed_html('post')
	);
}

function wynim_single_school_location() {
	// get the location taxonomy term
	$location = get_the_terms(get_the_ID(), 'location');
	if ($location) {
		return $location[0]->name;
	}
	return '';
}

function wynim_single_school_photos() {
	$photos_attachments = get_posts( array(
		'post_type' => 'attachment',
		'posts_per_page' => -1,
		'post_parent' => get_the_ID(),
		'exclude'     => [
			get_post_meta(get_the_ID(), "logo", true),
			get_post_thumbnail_id()
		],
	) );

	return array_map(function ($photo) {
		return wp_get_attachment_image_url($photo->ID, 'full');
	}, $photos_attachments);
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col lg:flex-row'); ?>>
	<section class="w-full lg:w-2/3">
		<header class="pb-8">
			<div class="flex flex-col lg:flex-row mb-8 lg:mb-0">
				<img src="<?php echo wynim_single_school_logo() ?>"
					 class="h-32 w-32 rounded-lg object-cover mr-4 shadow-lg border"
					 alt="<?php echo get_the_title() ?>">
				<div class="lg:pl-4 pt-3">
					<?php the_title( '<h1 class="entry-title text-3xl lg:text-5xl mb-4">', '</h1>' ); ?>
					<p class="text-xl text-slate-400">
						<?php echo get_post_meta(get_the_ID(), "institution_type", true) ?> Institution
						in <?php echo wynim_single_school_location() ?>, <?php echo get_post_meta(get_the_ID(), "country", true) ?>
					</p>
				</div>
			</div>
		</header><!-- .entry-header -->

		<div class="mb-8 overflow-x-auto flex flex-nowrap pb-8">
			<?php foreach (wynim_single_school_photos() as $photo) { ?>
				<img src="<?php echo $photo ?>" class="rounded-lg object-cover mr-4 shadow-lg border max-h-[24rem]">
			<?php } ?>
		</div>

		<?php get_template_part( 'template-parts/layout/single-school-aside', args: [
			'content_class' => 'lg:hidden'
		] ); ?>

		<div class="space-y-8">
			<div>
				<p class="font-bold text-lg mb-4">About</p>

				<div <?php wynim_website_content_class( 'entry-content' ); ?>>
					<?php wynim_single_school_description() ?>
				</div><!-- .entry-content -->
			</div>

			<div>
				<p class="font-bold text-lg mb-4">Requirements</p>

				<div <?php wynim_website_content_class( 'entry-content' ); ?>>
					<?php wynim_single_school_requirements() ?>
				</div><!-- .entry-content -->
			</div>
		</div>

		<footer class="entry-footer mb-4">
			<?php get_template_part( 'template-parts/layout/loggedin-content-footer' ); ?>
		</footer><!-- .entry-footer -->
	</section>

	<aside class="lg:pl-4 w-full lg:w-1/3">
		<?php get_template_part( 'template-parts/layout/single-school-aside', args: [
			'content_class' => 'hidden lg:block mb-8'
		]); ?>

		<!-- Programs offered -->
		<div class="bg-gray-50 border border-gray-300 flex flex-col mb-8 px-4 py-3 rounded-lg">
			<p class="font-bold text-lg">Programs Offered</p>
			<ul class="py-1">
				<?php
				$programs = get_terms([
					'taxonomy' => 'course_offered',
					'object_ids' => get_the_ID(),
				]);

				foreach ($programs as $program) {
					?>
					<li class="py-2">
						<a href="<?php echo get_permalink(get_page_by_path('finder')) ?>?programs=<?php echo $program->term_id ?>" class="text-primary-500 hover:underline">
							<?php echo $program->name ?>
						</a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</aside>
</article><!-- #post-${ID} -->
