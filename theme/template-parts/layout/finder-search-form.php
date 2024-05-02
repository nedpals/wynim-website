<?php
/** @var array $args */
$args = wp_parse_args($args, [
	'css_class' => ''
]);
?>

<form
	x-data="{
		current: '<?php echo get_query_var("type", "programs") ?>',
		typ: [{ v: 'programs', l: 'Programs' }, { v: 'universities', l: 'Universities' }],
		open: false
	}"
	x-ref="searchform"
	action="/finder" method="GET" class="<?php echo $args['css_class'] ?>">
	<div tabindex="-1"
		 @blur="open = false"
		 class="group w-full flex border rounded-full border-slate-100 focus-within:outline outline-1 outline-primary-400">
		<input type="hidden" name="type" :value="current" />

		<div class="relative">
			<button type="button" @click="open = !open" class="button is-secondary rounded-r-none">
				<span x-text="typ.find(opt => opt.v === current).l"></span>
				<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M7.5 10L12.5 15L17.5 10" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>

			<div x-show="open" :class="open && '!flex'" class="hidden w-full flex-col absolute top-[100%] bg-white shadow rounded-lg p-2">
				<template x-for="fOpt in typ" :key="fOpt.v">
					<button @click.prevent="current = fOpt.v; open = false"
							:class="current === fOpt.v ? 'bg-primary-100 text-primary-500' : 'hover:bg-primary-100/20'"
							class="p-2 rounded-md flex justify-between items-center text-secondary-500">
						<span x-text="fOpt.l" class="text-slate-900"></span>
						<template x-if="current === fOpt.v">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<path fill="currentColor" d="m10 16.4l-4-4L7.4 11l2.6 2.6L16.6 7L18 8.4z"/>
							</svg>
						</template>
					</button>
				</template>
			</div>
		</div>

		<div class="flex-1 bg-white rounded-r-full flex items-stretch">
			<input name="q" type="text" :placeholder="'Search for ' + typ.find(opt => opt.v === current).l.toLowerCase() + '...'"
				   value="<?php echo apply_filters( 'get_search_query', get_query_var( 'q' ) ); ?>"
				   @keydown.enter="$refs.searchform.submit()"
				   class="flex-1 pl-6 pr-[3rem] py-3 bg-transparent border-0 focus:outline-none" />

			<button type="submit" class="py-3 pr-6">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g opacity="0.6">
						<path d="M21 21L15 15M3 10C3 10.9193 3.18106 11.8295 3.53284 12.6788C3.88463 13.5281 4.40024 14.2997 5.05025 14.9497C5.70026 15.5998 6.47194 16.1154 7.32122 16.4672C8.1705 16.8189 9.08075 17 10 17C10.9193 17 11.8295 16.8189 12.6788 16.4672C13.5281 16.1154 14.2997 15.5998 14.9497 14.9497C15.5998 14.2997 16.1154 13.5281 16.4672 12.6788C16.8189 11.8295 17 10.9193 17 10C17 9.08075 16.8189 8.1705 16.4672 7.32122C16.1154 6.47194 15.5998 5.70026 14.9497 5.05025C14.2997 4.40024 13.5281 3.88463 12.6788 3.53284C11.8295 3.18106 10.9193 3 10 3C9.08075 3 8.1705 3.18106 7.32122 3.53284C6.47194 3.88463 5.70026 4.40024 5.05025 5.05025C4.40024 5.70026 3.88463 6.47194 3.53284 7.32122C3.18106 8.1705 3 9.08075 3 10Z" stroke="#545454" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"/>
					</g>
				</svg>
			</button>
		</div>
	</div>
</form>
