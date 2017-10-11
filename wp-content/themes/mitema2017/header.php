<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>
		<?php bloginfo('name'); ?>
	</title>

	<?php wp_head(); ?>

	<!-- font awesome -->

	<script src="https://use.fontawesome.com/36a8bfad31.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
</head>

<body>

	<header>

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="<?php echo home_url(); ?>">
				               <!-- <?php bloginfo('name'); ?>-->
				               <img class="logo" src="<?php echo get_theme_mod('curso_logo'); ?>" />
				            </a>
				    </div>



				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'Principal',
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
		
	</header><!-- /header -->
	
