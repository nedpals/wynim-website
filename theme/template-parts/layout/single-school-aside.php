<?php
/** @var array $args */

$args = wp_parse_args($args,
	[
		'content_class' => '',
	]
);
?>

<div class="w-full <?php echo $args['content_class'] ?>">
	<!-- Website -->
	<div class="w-full space-y-2 mb-4">
		<a class="button is-primary text-center flex items-center justify-center" href="<?php echo pods_field_display("website") ?>" target="_blank">
			<span>Visit website</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
				<path fill="currentColor" d="M17 17H3V3h5V1H3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-2z"/>
				<path fill="currentColor" d="m11 1l3.3 3.3L8.6 10l1.4 1.4l5.7-5.7L19 9V1z"/>
			</svg>
		</a>
		<p class="text-center text-xs text-gray-600"><?php echo pods_field_display('website') ?></p>
	</div>

	<div class="bg-gray-50 border border-gray-300 flex flex-col mb-8 px-4 py-3 rounded-lg divide-y">
		<!-- Location -->
		<div class="w-full space-y-2 py-2">
			<p class="font-bold text-lg">Location</p>
			<p><?php echo wynim_single_school_location() ?></p>
		</div>

		<!-- Country -->
		<div class="w-full space-y-2 py-2">
			<p class="font-bold text-lg">Country</p>
			<p><?php echo pods_field_display("country") ?></p>
		</div>

		<!-- Registered Students (if available) -->
		<?php if (pods_field_display('registered_students')) { ?>
			<div class="w-full space-y-2 py-2">
				<p class="font-bold text-lg">Registered Students</p>
				<p><?php echo pods_field_display('registered_students') ?></p>
			</div>
		<?php } ?>

		<!-- Tuition -->
		<div class="w-full space-y-2 py-2">
			<p class="font-bold text-lg">Tuition</p>
			<p><?php echo pods_field_display('min_tuition_fee') ?> - <?php echo pods_field_display('max_tuition_fee') ?></p>
		</div>

		<!-- PGWP Eligibility -->
		<div class="w-full space-y-2 py-2">
			<p class="font-bold text-lg">PGWP Eligibility</p>
			<p><?php echo pods_field_display('pgwp_eligibility') ?></p>
		</div>

		<!-- Intakes Available (if available) -->
		<?php if (pods_field_display('intakes_available')) { ?>
			<div class="w-full space-y-2 py-2">
				<p class="font-bold text-lg">Intakes Available</p>
				<p><?php echo pods_field_display('intakes_available') ?></p>
			</div>
		<?php } ?>
	</div>
</div>
