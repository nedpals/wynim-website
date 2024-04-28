<?php
/*
 * Template Name: Program/University Finder Page
 * Template Post Type: page
 */

get_header();
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
					<?php get_template_part('template-parts/layout/search-form'); ?>
				</div>
			</div>

			<div class="flex max-w-wide mx-auto px-2">
				<div class="w-1/4 border-r px-4">
					<p>Filter goes here</p>
				</div>

				<div class="w-3/4 pb-12">
					<div class="border-b px-8 py-4">
						<p>34 results found.</p>
					</div>

					<div class="flex items-top px-4 pt-4">
						<?php for ($i = 0; $i < 3; $i++) { ?>
							<a href="#" class="w-1/3 p-3 flex flex-col shadow-none rounded-xl bg-transparent border-0 hover: hover:border hover:bg-white hover:shadow-lg hover:scale-[1.03] transition-all">
								<div class="h-48 w-full bg-slate-400 rounded-lg"></div>
								<div class="w-full pt-4 flex items-center">
									<div class="flex-1 pr-4">
										<p class="font-semibold">Computer Science</p>
										<p class="text-slate-500/75">Offered by 3 universities</p>
									</div>

									<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.33331 6.49998H12M12 6.49998L7.33331 1.83331M12 6.49998L7.33331 11.1666" stroke="black" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
									</svg>
								</div>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</main>
	</section>

<?php get_footer();
