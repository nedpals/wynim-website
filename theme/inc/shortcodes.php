<?php

function contact_form() {
	ob_start();
	get_template_part('template-parts/shortcodes/contact-form');
	return ob_get_clean();
}

add_shortcode('contact_form', 'contact_form');
