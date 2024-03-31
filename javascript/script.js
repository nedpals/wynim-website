///<reference types="jquery" />

/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import jQuery from 'jquery';

jQuery(function ($) {
	$('.faq-item').on('click', function () {
		const arrowIcon = $(this).children('div').first().children('svg');
		const answerDiv = $(this).children('div').last();

		arrowIcon.toggleClass('rotate-180');
		if (answerDiv.is(':visible')) {
			answerDiv.slideUp();
		} else {
			$('.faq-item div:last-child').slideUp();
			answerDiv.slideDown();
		}
	});
});
