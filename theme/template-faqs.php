<?php
/**
 * Template Name: FAQs Page
 * Template Post Type: page
 * */

get_header();
?>

	<section id="primary">
		<header class="bg-secondary-100">
			<div class="max-w-wide mx-auto py-8 px-2 space-y-3">
				<?php the_title( '<h1 class="entry-title text-4xl mb-0 text-primary-600">', '</h1>' ); ?>
			</div>
		</header>

		<main id="main" class="max-w-5xl mx-auto py-8 pt-8 pb-24 lg:px-0">

			<?php if (function_exists('pods')):
				$faq_pod = pods('faq')->find();
				?>
				<div class="w-full divide-y border-t-2">
					<?php while ($faq_pod->fetch()): ?>
						<div class="faq-item hover:bg-slate-300/10 transition-colors pb-5 px-5">
							<div class="pt-5 flex items-center justify-between cursor-pointer">
								<span class="inline-block text-lg font-semibold"><?php echo $faq_pod->display('question') ?></span>
								<svg class="rotate-180" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 1L8 8L1 1" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>

							<div style="display: none;" class="pt-3">
								<!--							<p class="text-slate-500/75"></p>-->
								<?php echo $faq_pod->display('answer') ?>
							</div>
						</div>
					<?php endwhile ?>
				</div>
			<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
