
				        <?php
				            wp_nav_menu( array(
				            	'nav'               => 'nav_format.php',
				                'menu'              => 'secondary',
				                'theme_location'    => 'secondary',
				                'depth'             => 3,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
				                'container_id'      => 'bs-example-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				                'walker'            => new WP_Bootstrap_Navwalker())
				            );
				        ?>