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
import Alpine from 'alpinejs';
import {collapse} from "@alpinejs/collapse";

import jQuery from 'jquery';

/**
 * Toggle a menu item
 * @param {string} menuId
 * @param {{ menuIds: string[] }} data
 */
function toggleNavMenu(menuId, data) {
	const idx = data.menuIds.indexOf(menuId);
	if (idx === -1) {
		showNavMenu(menuId, data);
	} else {
		hideNavMenu(menuId, data);
	}
}

/**
 * Show a menu item
 * @param {string} menuId
 * @param {{ menuIds: string[] }} data
 */
function showNavMenu(menuId, data) {
	if (data.menuIds.includes(menuId)) {
		return;
	}
	data.menuIds.push(menuId);
}

/**
 * Hide a menu item
 * @param {string} menuId
 * @param {{ menuIds: string[] }} data
 */
function hideNavMenu(menuId, data) {
	const idx = data.menuIds.indexOf(menuId);
	if (idx === -1) {
		return;
	}
	data.menuIds.splice(idx, data.menuIds.length - idx);
}

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

	window.toggleNavMenu = toggleNavMenu;
	window.showNavMenu = showNavMenu;
	window.hideNavMenu = hideNavMenu;

	window.Alpine = Alpine;
	Alpine.plugin(collapse);
	Alpine.start();
});
