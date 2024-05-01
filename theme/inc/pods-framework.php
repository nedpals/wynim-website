<?php
/**
 * Modifications for Pods Framework
 *
 * @package wynim-website
 */

function wynim_website_faq_slug_set_title($pieces, $is_new_item) {
	// change the post_title to the question field
	if (isset($pieces['fields']['question']['value']) &&
		is_string($pieces['fields']['question']['value'])) {
		if (!isset($pieces['fields_active']['post_title'])) {
			$pieces['fields_active'][] = 'post_title';
		}

		$pieces['object_fields']['post_title']['value'] = $pieces['fields']['question']['value'];
	}
	return $pieces;
}

add_filter( 'pods_api_pre_save_pod_item_faq', 'wynim_website_faq_slug_set_title', 10, 2);

function wynim_website_school_set_tuition_fee($pieces, $is_new_item) {
	// set the max tuition fee based on the min tuition fee
	if (!isset($pieces['fields']['min_tuition_fee'])) {
		$pieces['fields']['min_tuition_fee']['value'] = 0;
	}

	$should_set_max_tuition_fee = !isset($pieces['fields']['max_tuition_fee']['value']) ||
		!is_numeric($pieces['fields']['max_tuition_fee']['value']) ||
		$pieces['fields']['max_tuition_fee']['value'] < $pieces['fields']['min_tuition_fee']['value'];

	// set only if the max tuition fee is not set
	if ($should_set_max_tuition_fee) {
		// swap the values if the max tuition fee is less than the min tuition fee
		if ($pieces['fields']['max_tuition_fee']['value'] != 0 && $pieces['fields']['max_tuition_fee']['value'] < $pieces['fields']['min_tuition_fee']['value']) {
			$old_max_tuition_fee = $pieces['fields']['max_tuition_fee']['value'];
			$old_min_tuition_fee = $pieces['fields']['min_tuition_fee']['value'];

			$pieces['fields']['max_tuition_fee']['value'] = $old_min_tuition_fee;
			$pieces['fields']['min_tuition_fee']['value'] = $old_max_tuition_fee;
		} else {
			$pieces['fields']['max_tuition_fee']['value'] = $pieces['fields']['min_tuition_fee']['value'];
		}
	}

	return $pieces;
}

add_filter( 'pods_api_pre_save_pod_item_school', 'wynim_website_school_set_tuition_fee', 10, 2);
