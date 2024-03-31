<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wynim-website
 */

?>

<header id="masthead" class="px-3 py-8 bg-white">
	<nav class="max-w-wide mx-auto flex items-center justify-between">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl" rel="home"><?php bloginfo( 'name' ); ?></a>

		<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'wynim-website' ); ?>">
			<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wynim-website' ); ?></button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->

<!--		<ul class="flex items-center space-x-8">-->
<!--			<li>-->
<!--				<a href="/" class="hover:underline underline-offset-2">Home</a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="/about" class="hover:underline underline-offset-2">About</a>-->
<!--			</li>-->
<!--		</ul>-->
	</nav>
</header>
