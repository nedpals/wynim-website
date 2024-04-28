<?php
if ( !get_edit_post_link() ) return;
?>
	<footer class="entry-footer max-w-wide w-full mx-auto px-2 mt-8">
		<div class="bg-secondary-100 rounded-md px-4 md:px-8 py-3 flex justify-between items-center">
			<p>You are logged in as <span class="font-bold"><?php echo wp_get_current_user()->display_name ?></span></p>

			<?php
			edit_post_link(
				sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Edit this article <span class="sr-only">%s</span>', 'wynim-website' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				css_class: 'button is-primary'
			);
			?>
		</div>
	</footer><!-- .entry-footer -->
<?php
