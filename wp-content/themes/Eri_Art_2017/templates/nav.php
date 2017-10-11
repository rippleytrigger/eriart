<?php require_once 'wp-bootstrap-navwalker.php'; ?>

<header>
		
	
<div class="row">
	<div class="col-md-2 col-sm-5  col-xs-6">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

						    	
					
					?>
	</div>
	<div class="col-md-9 col-sm-7  col-xs-6">		
					
				
	</div>
</div>


		<nav class="navbar-alternative" role="navigation" >

						  <div class="container-fluid">
						   
						    <div class="navbar-header">
						    <?php

						    if ( has_custom_logo() ) 
						    	{
					        		echo '<a href="'.home_url().'"> <img class="logo-theme" src="'. esc_url( $logo[0] ) .'"/>
					        		</a>';
							   } 

 

						    ?>

					
						<h2 class="text-left site-title"> 
						<?php bloginfo('name'); ?> 
						</h2>
					
						<h2 class="text-left site-description">
						 <?php bloginfo('description'); ?> 
						 </h2>
				
						      
						      <a class="navbar-brand" href="<?php echo home_url(); ?>">
						               
						               <img class="logo" src="<?php echo get_theme_mod('curso_logo'); ?>" />
						            </a>
						    </div>

						    
						        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>


					

						        <?php
						            wp_nav_menu( array(
						            	'url_nav'           => 'nav_format.php',
						                'menu'              => 'primary',
						                'theme_location'    => 'primary',
						                'depth'             => 3,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-collapse',
						                'container_id'      => 'bs-example-navbar-collapse-1',
						                'menu_class'        => 'nav navbar-nav',
						                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						                'walker'            => new WP_Bootstrap_Navwalker())
						            );
						        ?>


						   </div>
		</nav>
				


</header>