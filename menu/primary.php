<?php if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location. ?>

		<nav <?php hybrid_attr( 'menu', 'primary' ); ?>>
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'hybrid_s' ); ?></button>
			<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_class'      => 'nav-menu'
					)
			); ?>
		</nav><!-- #site-navigation -->

<?php endif; // End check for menu. ?>




