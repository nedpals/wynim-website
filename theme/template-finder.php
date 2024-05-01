<?php
/*
 * Template Name: Program/University Finder Page
 * Template Post Type: page
 */

get_header();

$results = new WP_Query([
	'post_type' => 'school',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC',
]);

function get_wynim_single_school_location() {
	// get the location taxonomy term
	$location = get_the_terms(get_the_ID(), 'location');
	if ($location) {
		return $location[0]->name;
	}
	return '';
}

function get_wynim_single_school_logo() {
	$logo_id = get_post_meta(get_the_ID(), "logo", true);
	return wp_get_attachment_image_url($logo_id, 'thumbnail');
}


function get_wynim_first_single_school_photos() {
	$photos_attachments = get_posts( array(
		'post_type' => 'attachment',
		'posts_per_page' => 1,
		'post_parent' => get_the_ID(),
		'exclude'     => [
			get_post_meta(get_the_ID(), "logo", true),
			get_post_thumbnail_id()
		],
	) );

	if (empty($photos_attachments)) {
		return '';
	}

	return wp_get_attachment_image_url($photos_attachments[0]->ID, 'full');
}
?>

	<section id="primary">
		<main id="main">
			<header class="bg-secondary-100">
				<div class="max-w-wide mx-auto py-8 px-2 space-y-3">
					<h1 class="entry-title text-4xl mb-0 text-primary-600">Program/University Finder</h1>
				</div>
			</header>

			<div class="bg-secondary-100/30">
				<div class="max-w-wide mx-auto py-8 px-2">
					<?php get_template_part('template-parts/layout/finder-search-form'); ?>
				</div>
			</div>

			<div class="flex max-w-wide mx-auto px-2">
				<div class="w-1/4 border-r px-4 pt-4 space-y-2">
					<!-- Location -->
					<div class="space-y-2">
						<p class="font-bold text-lg">Location</p>
						<?php echo do_shortcode('[facetwp facet="location"]') ?>
					</div>

					<!-- Programs Offered -->
					<div class="space-y-2">
						<p class="font-bold text-lg">Programs Offered</p>
						<?php echo do_shortcode('[facetwp facet="programs_offered"]') ?>
					</div>

					<!-- Tuition -->
					<div class="space-y-2">
						<p class="font-bold text-lg">Tuition</p>
						<?php echo do_shortcode('[facetwp facet="tuition_fee"]') ?>
					</div>

					<!-- PGWA Eligibility -->
					<div class="space-y-2">
						<p class="font-bold text-lg">PGWP Eligibility</p>
						<?php echo do_shortcode('[facetwp facet="pgwp_eligibility"]') ?>
					</div>
				</div>

				<div class="w-3/4 pb-12">
					<div class="border-b px-8 py-4">
						<p>34 results found.</p>
					</div>

					<div class="flex items-top px-4 pt-4">
						<?php while ($results->have_posts()): $results->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="w-1/3 p-3 flex flex-col shadow-none rounded-xl bg-transparent border-0 hover: hover:border hover:bg-white hover:shadow-lg hover:scale-[1.03] transition-all">
								<div style="background-image: url('<?php echo get_wynim_first_single_school_photos() ?>'); background-size: cover; background-position: center;"
									class="h-48 w-full bg-slate-200 rounded-lg p-4 flex items-end bg-center bg-cover bg-no-repeat">
									<img src="<?php echo get_wynim_single_school_logo() ?>" class="h-16 w-16 rounded">
								</div>

								<div class="w-full pt-4 flex items-center">
									<div class="flex-1 pr-4">
										<?php the_title('<p class="font-semibold">', '</p>') ?>
										<p class="text-slate-500/75">
											<?php echo get_wynim_single_school_location() ?>, <?php echo pods_field_display('country') ?>
										</p>
									</div>

									<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.33331 6.49998H12M12 6.49998L7.33331 1.83331M12 6.49998L7.33331 11.1666" stroke="black" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
									</svg>
								</div>
							</a>
						<?php endwhile ?>
					</div>
				</div>
			</div>
		</main>
	</section>

<?php get_footer();
