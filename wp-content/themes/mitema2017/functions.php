<?php
	//Soporte del Tema
	
	add_action('after_setup_theme', 'curso_setup');


	if (!function_exists('curso_setup')):
		function curso_setup()
	    {
	    	add_editor_style();
	    	add_theme_support('post-thumbnails');
	    	add_theme_support('post-formats', array('aside','gallery','video'));

	    	add_image_size('max-thumbnail', 640, 250, true);

	    	add_theme_support('html5');
	    	add_theme_support('menus');
	    	add_theme_support('woocomerce');
	
		register_nav_menus(array ('primary' => __('Menu superior', 
			'mitema2017' ), 
			'footer-menu' => __('Menu Footer', 
			'mitema2017')

			));

		} 

		endif;


		//Encolar archivos CSS y JS

		add_action('wp_enqueue_scripts',
			'incrustar_js', 11);

		function incrustar_js ()
		{


			if(!is_admin())
			{
				wp_register_script('bootstrap', get_bloginfo('template_directory').'/assets/js/bootstrap.min.js', array('jquery'), '1', true);

				wp_register_script('ias', get_bloginfo('template_directory').'/assets/js/jquery-ias.min.js', array('bootstrap'), '1', true);

				wp_register_script('main', get_bloginfo('template_directory').'/assets/js/main.js', array('ias'), '1', true);

				wp_enqueue_script('bootstrap');
				wp_enqueue_script('ias');
				wp_enqueue_script('main');


				//TRUE -> FOOTER. FALSE -> HEADER
			}

	     }

	
	if (!function_exists ('encolar_css')) 
	{
		function encolar_css()
		{
			wp_register_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css');

			wp_register_style('estilos', get_template_directory_uri(). '/assets/css/estilos.css'
				,array('bootstrap'));

			wp_enqueue_style("estilos");
		}
		add_action('wp_enqueue_scripts', 'encolar_css');
	}


	//REGISTRAR  WIDGETS AREA
	

	if (!function_exists('crear_widget_area')):
	
		function crear_widget_area()
		{
			register_sidebar(array(

					'name' => __('Sidebar Widget Area', 'mitema2017'),
					'id' => 'sidebar-widget-area',
					'description' => __('Sidebar principal lateral', 'mitema2017'),

					'before_widget' => '<div id="%1$s" class="widget-content %2$s">',

					'after-widget' => '</div>',

					'before-title' => '<h3 class="widget-title">',

					'after-title' => '</h3>'
				));

			
		}
	
	endif;


	//Activar el Widget area
	

	add_action('widgets_init', 'crear_widget_area');


	//menu 
	

	require_once 'inc/wp-bootstrap-navwalker.php';


	//Crear Tipo Post para productos
	
	function create_post_type()
	{
		register_post_type('productos', 
		array(
				'labels' => (array(
					    'name' => __('Productos'),
					    'singular_name' => __('Producto'))),

				'menu_position' => 26,
				'rewrite' => array( 'slug' => 'productos'),
				'public' => true,
				'has_archive' => true,
				'publicly_queryable' => true,
				'supports' => array('title', 'editor', 'content', 'thumbnail', 'excerpt', 'author')

				)
			);
	}

	add_action('init', 'create_post_type');


//Personalizador

	require_once 'inc/customizer.php';
	
?>