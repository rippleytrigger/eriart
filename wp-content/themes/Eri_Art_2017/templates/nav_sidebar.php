
<aside>

<nav class="navbar navbar-default" role="navigation" affix="250" >

						    
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="<?php echo home_url(); ?>">
						              
						               <img class="logo" src="<?php echo get_theme_mod('curso_logo'); ?>" />
						            </a>
						    </div>




						        <?php
						            wp_nav_menu( array(
						            	'url_nav'           => 'nav_format.php',
						                'menu'              => 'sidebar',
						                'theme_location'    => 'sidebar',
						                'depth'             => 3,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-collapse',
						                'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'        => 'nav navbar-nav',
						                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						                'walker'            => new WP_Bootstrap_Navwalker())
						            );
						        ?>

						  
</nav>

</aside>