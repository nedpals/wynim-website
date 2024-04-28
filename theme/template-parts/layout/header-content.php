<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

$navigation = \Log1x\Navi\Navi::make()->build('header-menu');

function renderMenuItem($item, $level = 0) {
	$menuId = "'" . $item->id . "'";

	ob_start();?>
	<li <?php if ($item->children && $level == 0) { ?>x-data="{menuIds: [], menuClicked: false}"<?php } ?>
		<?php if ($item->children) { ?> @mouseleave="if (!menuClicked) hideNavMenu(<?php echo $menuId ?>, $data);" <?php } ?>
		class="<?php echo $item->classes; ?> <?php echo $item->active ? 'current-item' : ''; ?> relative whitespace-nowrap w-full lg:w-auto">
		<a <?php if ($item->children) {?>
			@mouseleave="menuClicked = false"
			@mouseenter="showNavMenu(<?php echo $menuId ?>, $data)" <?php } ?>
			href="<?php echo $item->url; ?>"
		   	class="<?php echo $item->children ? 'hidden lg:flex' : 'flex' ?> hover:bg-primary-100/20 space-x-0.5 items-center w-full lg:w-auto lg:rounded-md px-3 py-3 lg:py-1 text-tertiary-400 transition-all">
			<span class="text-slate-900"><?php echo $item->label; ?></span>

			<?php if ($item->children) { ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
					<path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4z"/>
				</svg>
			<?php } ?>
		</a>

		<?php if ($item->children) { ?>
			<button @click="toggleNavMenu(<?php echo $menuId ?>, $data); console.log(menuIds); menuClicked = menuIds.length > 0;"
					:class="menuIds && menuIds.includes(<?php echo $menuId; ?>) ? 'bg-primary-100/30 text-primary-500' : 'hover:bg-primary-100/20'"
					class="flex lg:hidden space-x-0.5 items-center justify-between w-full rounded-none p-3 text-tertiary-400 transition-all">
				<span class="block text-slate-900"><?php echo $item->label; ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
					<path fill="currentColor" d="m12 15.4l-6-6L7.4 8l4.6 4.6L16.6 8L18 9.4z"/>
				</svg>
			</button>
		<?php } ?>

		<?php echo renderSubmenu($item, $level + 1); ?>
	</li>
<?php
	return ob_get_clean();
}

function renderSubmenu($item, $level = 0) {
	if (!$item->children) return "";
	$menuId = "'" . $item->id . "'";

	ob_start();?>
	<ul class="bg-secondary-50/40 border-secondary-100 border-l-4 lg:pl-2 flex-col items-stretch <?php echo $level == 1 ? 'top-[100%] left-0' : 'left-[100%] top-0' ?> hidden lg:bg-white lg:border-0 lg:py-2 lg:pr-2 lg:absolute lg:shadow lg:rounded-lg"
		:class="menuIds.includes(<?php echo $menuId; ?>) && '!flex'">
		<?php foreach($item->children as $child) {
			echo renderMenuItem($child, $level + 1);
		} ?>
	</ul>
<?php
	return ob_get_clean();
}
?>

<header id="masthead" class="z-[100] border-t-4 border-primary-400 bg-white sticky <?php echo is_admin_bar_showing() ? 'top-0 sm:top-[46px] lg:top-[32px]' : 'top-0' ?> inset-x-0 px-3 py-4">
	<div x-data="{isMenuOpen: false}" class="max-w-wide mx-auto flex flex-col lg:flex-row lg:items-center lg:justify-between">
		<div class="w-full lg:w-auto flex items-center justify-between">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl <?php echo has_custom_logo() ? 'max-w-[150px]' : '' ?>" rel="home">
				<?php
				if (has_custom_logo()) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
					?>
					<img src="<?php echo esc_url( $custom_logo_url ) ?>" class="custom-logo">
					<?php
				} else {
					bloginfo( 'name' );
				} ?>
			</a>

			<?php if ($navigation->isNotEmpty()) : ?>
				<button aria-controls="primary-menu"
						aria-expanded="false"
						class="rounded-full p-1 transition-colors lg:hidden"
						:class="isMenuOpen ? 'bg-primary-400 hover:bg-primary-500 text-white' : 'hover:bg-gray-400/40'"
						@click="isMenuOpen = !isMenuOpen">
					<svg x-show="!isMenuOpen" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
						<path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 17h18M3 12h18M3 7h18"/>
					</svg>
					<svg x-show="isMenuOpen" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
						<path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/>
					</svg>
				</button>
			<?php endif; ?>
		</div>

		<?php if ($navigation->isNotEmpty()) : ?>
			<nav class="w-full lg:w-auto" :class="isMenuOpen && 'pt-4 lg:pt-0'" id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'wynim-website' ); ?>">
				<ul x-show="isMenuOpen" x-collapse id="primary-menu" :class="isMenuOpen && 'flex'" class="items-stretch flex-col lg:!overflow-visible lg:!h-full lg:!flex lg:flex-row lg:items-center lg:-mx-2">
					<?php foreach($navigation->toArray() as $item) {
						echo renderMenuItem($item);
					} ?>
				</ul>
			</nav><!-- #site-navigation -->
		<?php endif; ?>
	</div>
</header>
