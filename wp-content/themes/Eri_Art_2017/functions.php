<?php

		if (!function_exists('eri_theme_setup')):

			function eri_theme_setup()
		    {
		    	add_editor_style();
		    	add_theme_support('post-thumbnails');
		    	add_theme_support('post-formats', array('aside','gallery','video'));

		    	add_image_size('max-thumbnail', 640, 250, true);

		    	add_theme_support('html5');
		    	add_theme_support('menus');
		    	add_theme_support('woocomerce');
		
			register_nav_menus(array ('primary' => __('Menu superior', 
				'Eri_Art_2017' ), 
				'secondary' => __('Menu Footer', 
				'Eri_Art_2017'),
				 'sidebar' => __('Menu Sidebar',
				'Eri_Art_2017')
				));

			} 

		endif;

		//Soporte del Tema
	
	add_action('after_setup_theme', 'eri_theme_setup');




	//Encolar archivos CSS y JS

		add_action('wp_enqueue_scripts',
			'eri_js', 11);

		if (!function_exists('eri_js')) 
		{
				function eri_js ()
			{


			
				wp_register_script('bootstrap', get_bloginfo('template_directory').'/assets/js/bootstrap.min.js', array('jquery'), '1', true);

				//wp_register_script('ias', get_bloginfo('template_directory').'/assets/js/jquery-ias.min.js', array('bootstrap'), '1', true);

				wp_register_script('main', get_bloginfo('template_directory').'/assets/js/main.js', array('bootstrap'), '1', true);

				wp_enqueue_script('bootstrap');
				//wp_enqueue_script('ias');
				wp_enqueue_script('main');


				//TRUE -> FOOTER. FALSE -> HEADER

	     	}
		}

	

	
	if (!function_exists ('eri_css')) 
	{
		function eri_css()
		{
			wp_register_style('bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.min.css');

			wp_register_style('estilos', get_template_directory_uri(). '/assets/css/estilos.css'
				,array('bootstrap'));

			wp_enqueue_style("estilos");
		}
		add_action('wp_enqueue_scripts', 'eri_css');
	}



	//REGISTRAR  WIDGETS AREA
	

	if (!function_exists('crear_widget_area')):
	
		function crear_widget_area()
		{
			/*register_sidebar(array(

					'name' => __('Sidebar Widget Area', 'Eri_Art'),
					'id' => 'sidebar-widget-area',
					'description' => __('Sidebar principal lateral', 'Eri_Art'),

					'before_widget' => '<div id="%1$s" class="widget-content %2$s">',

					'after-widget' => '</div>',

					'before-title' => '<h3 class="widget-title">',

					'after-title' => '</h3>'
				));*/

			//Footer

			register_sidebar(array(

					'name' => __('Footer Widget Area 1', 'Eri_Art'),
					'id' => 'footer-widget-area-1',
					'description' => __('Widget 1 del footer', 'Eri_Art'),

					'before_widget' => '<div id="%1$s" class="widget-content %2$s">',

					'after-widget' => '</div>',

					'before-title' => '<h3 class="footer-widget-title">',

					'after-title' => '</h3>'
				));

			register_sidebar(array(

					'name' => __('Footer Widget Area 2', 'Eri_Art'),
					'id' => 'footer-widget-area-2',
					'description' => __('Widget 2 del footer', 'Eri_Art'),

					'before_widget' => '<div id="%1$s" class="widget-content %2$s">',

					'after-widget' => '</div>',

					'before-title' => '<h3 class="footer-widget-title">',

					'after-title' => '</h3>'
				));

			register_sidebar(array(

					'name' => __('Footer Widget Area 3', 'Eri_Art'),
					'id' => 'footer-widget-area-3',
					'description' => __('Widget 3 del footer', 'Eri_Art'),

					'before_widget' => '<div id="%1$s" class="widget-content %2$s">',

					'after-widget' => '</div>',

					'before-title' => '<h3 class="footer-widget-title">',

					'after-title' => '</h3>'
				));
		}
	
	endif;


	//Activar el Widget area
	

	add_action('widgets_init', 'crear_widget_area');



	//Seguridad 
		remove_action('wp_head', 'wp_generator'); 


	//Crear Tipo Post para productos
	
	function create_post_type()
	{
		register_post_type('dibujos', 
		array(
				'labels' => (array(
					    'name' => __('Dibujos'),
					    'singular_name' => __('Dibujos'))),

				'menu_position' => 10,
				'rewrite' => array( 'slug' => 'dibujos'),
				'public' => true,
				'has_archive' => true,
				'publicly_queryable' => true,
				'supports' => array('title', 'editor', 'content', 'thumbnail', 'excerpt', 'author', 'comments'
					,'custom-fields'),

				//Taxonomias para categorias
				 'taxonomies'  => array( 'category', 'post_tag' ),
				 'menu_icon'   => 'dashicons-art'

				)
			);
	}

	add_action('init', 'create_post_type');


	//Logo

	if (!function_exists('add_custom_logo')) 
	{

		function add_custom_logo()
		{

		  $defaults = array(
		    'height'      => 100,
       		'width'       => 200,
        	'flex-height' => false,
        	'flex-width'  => false,
        	'header-text' => array( 'site-title', 'site-description' ),
   		   );

   			 add_theme_support( 'custom-logo', $defaults );
		}
      
	}

	add_action( 'after_setup_theme', 'add_custom_logo' );


//Personalizador

	require_once 'inc/customizer.php';
	


?>