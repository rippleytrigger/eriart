<?php

		if(!function_exists('eri_customize'))
		{
			//Creando el panel de la barra de navegacion

			function eri_customize($wp_customize)
			{
				$wp_customize->add_panel('Opciones Generales', array(

						'priority' => 19,
						'title' => __('Opciones Generales', 'Eri_Art'),
						'description' => __( 'Panel de Configuración del Tema', 'Eri_Art' )
					));

				 // Logo
			   $wp_customize->add_section( 'Modificar_la_barra' , array(
			     'title'       => __( 'Color de la barra', 'Eri_Art' ),
			     'description' => __('Modificar el color de la barra'),
			     'priority'    => 42,
			     'panel' => 'Opciones Generales'
			   ));

			   //Color barra

			   $wp_customize->add_setting('Barra_col', array(
			  'default' => '#fff'
			   ));


			   $wp_customize->add_control(new Wp_Customize_Color_Control(

					$wp_customize,
					'Barra_col',
					array(
						'label' => __('Cambio de colores a la barra', 'Eri_Art'),
						'section' => 'Modificar_la_barra',
						'settings' => 'Barra_col',
						'context' => 'Mi contex'
					)

				));

			   //Color_hipervinculos_barra

			   $wp_customize->add_setting('Barra_hip_col', array(
			  'default' => 'black'
			   ));


			   $wp_customize->add_control(new Wp_Customize_Color_Control(

					$wp_customize,
					'Barra_hip_col',
					array(
						'label' => __('Cambio de colores a los hipervínculos', 'Eri_Art'),
						'section' => 'Modificar_la_barra',
						'settings' => 'Barra_hip_col',
						'context' => 'Mi contex'
					)

				));

			   //Color_hipervinculos_barra_bordes

			    $wp_customize->add_setting('Barra_hip_border_col', array(
			    'default' => 'black'
			   ));


			   $wp_customize->add_control(new Wp_Customize_Color_Control(

					$wp_customize,
					'Barra_hip_border_col',
					array(
						'label' => __('Cambio de colores a los bordes desplegables', 'Eri_Art'),
						'section' => 'Modificar_la_barra',
						'settings' => 'Barra_hip_border_col',
						'context' => 'Mi contex'
					)

				));	

				// Fin Barra

				// Carrusel

			    $args = array(

			   	 'title'  => __( 'Carusel de imágenes', 'Eri_Art' ),
			     'description' => __('Modificar las imagenes del Carrusel'),
			     'priority'    => 42,
			     'panel' => 'Opciones Generales'

			     );


			   $wp_customize->add_section( 'Modificar_carrusel', $args);

			  
			   //Img 1

			   $wp_customize->add_setting('img_1', array(
			    'default' => get_template_directory_uri().'/assets/img/img_1.jpg'
			   ));

			   $wp_customize->add_control(new WP_Customize_Image_Control(

			   	$wp_customize,
			   	'img_1',
			   	array(
			   			'label' => __('Imagen 1', 'Eri_Art'),
						'section' => 'Modificar_carrusel',
						'settings' => 'img_1',
						'context' => 'Mi contex'
			   		)

			   	));

					   //Texto Img 1

					   $wp_customize->add_setting('text_img_1', array(

					   		'default' => 'Hola Dibujo'
					   	));

					   		$args = array(

					   				'label'=>__('Caption del primer slide'),
					   				'description' => __('Agrega la información que tu quieras'),
					   				'section' => 'Modificar_carrusel',
					   				'settings' => 'text_img_1',
					   				'type' => 'input'

					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Control(
					   					$wp_customize,
					   					'text_img_1',
					   					$args
					   				)
					   			
					   			);

			   //img 2

			   $wp_customize->add_setting('img_2', array(
			   	 'default' => get_template_directory_uri().'/assets/img/img_2.jpg'
			   	));


			   $wp_customize->add_control(new WP_Customize_Image_Control(

			   	$wp_customize,
			   	'img_2',
			   	array(
			   			'label' => __('Imagen 2', 'Eri_Art'),
						'section' => 'Modificar_carrusel',
						'settings' => 'img_2',
						'context' => 'Mi contex'
			   		)

			   	));

			   			   //Texto Img 2

					   $wp_customize->add_setting('text_img_2', array(

					   		'default' => 'Hola Dibujo'
					   	));

					   		$args = array(

					   				'label'=>__('Caption del segundo slide'),
					   				'description' => __('Agrega la información que tu quieras'),
					   				'section' => 'Modificar_carrusel',
					   				'settings' => 'text_img_2',
					   				'type' => 'input'

					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Control(
					   					$wp_customize,
					   					'text_img_2',
					   					$args
					   				)
					   			
					   			);

					



			   //img 3

			   $wp_customize->add_setting('img_3', array(

			   		'default' => get_template_directory_uri().'/assets/img/img_3.jpg'

			   	));

			   $wp_customize->add_control(new WP_Customize_Image_Control(

			   	$wp_customize,
			   	'img_3',
			   	array(
			   			'label' => __('Imagen 3', 'Eri_Art'),
						'section' => 'Modificar_carrusel',
						'settings' => 'img_3',
						'context' => 'Mi contex'
			   		)

			   	));

			   			   //Texto Img 3

					   $wp_customize->add_setting('text_img_3', array(

					   		'default' => 'Hola Dibujo'
					   	));

					   		$args = array(

					   				'label'=>__('Caption del tercer slide'),
					   				'description' => __('Agrega la información que tu quieras'),
					   				'section' => 'Modificar_carrusel',
					   				'settings' => 'text_img_3',
					   				'type' => 'input'

					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Control(
					   					$wp_customize,
					   					'text_img_3',
					   					$args
					   				)
					   			
					   			);


										        //Color del textos captions 

										     $wp_customize->add_setting('Color_caption', array(

										   		'default' => '#fff'
										   	));

										   		$args = array(

										   				'label'=>__('Color de los Captions'),
										   				'description' => __('Colocales un color de tu gusto'),
										   				'section' => 'Modificar_carrusel',
										   				'settings' => 'Color_caption'

										   			);

										   $wp_customize->add_control(
										   			new Wp_Customize_Color_Control(
										   					$wp_customize,
										   					'Color_caption',
										   					$args
										   				)
										   			
										   			);

				//-------------------------------------------------------------------


					//Customizando el Front-Page

					$args = array(

			   	 	'title'  => __( 'Front-Page', 'Eri_Art' ),
			     	'description' => __('Modificar los colores del Sidebar'),
			     	'priority'    => 50,
			     	'panel' => 'Opciones Generales'

			     );


			   $wp_customize->add_section( 'Modificar_colores_front', $args);


			   //Sidebar



					   $wp_customize->add_setting('Modificar_colores_sidebar_palette', array(

					   		'default' => '#0020db'
					   	));

					   		$args = array(

					   				'label'=>__('Modificar colores del sidebar'),
					   				'description' => __('Colocale el color de tu preferencia'),
					   				'section' => 'Modificar_colores_front',
					   				'settings' => 'Modificar_colores_sidebar_palette',

					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Color_Control(
					   					$wp_customize,
					   					'Modificar_colores_front_palette',
					   					$args
					   				)
					   			
					   			);

				//Text Sidebar

					   	$wp_customize->add_setting('Modificar_texto_sidebar', array(

					   			'default' => 'Mis Últimos Dibujos'
					   		));

					   		$args = array(

					   				'label'=>__('Modificar título sidebar'),
					   				'description' => __('Colocale el título de tu preferencia'),
					   				'section' => 'Modificar_colores_front',
					   				'settings' => 'Modificar_texto_sidebar',
					   				'type' => 'text'
					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Control(
					   					$wp_customize,
					   					'Modificar_texto_sidebar',
					   					$args
					   				)
					   			
					   			);

			   //Front-Page


					   $wp_customize->add_setting('Modificar_colores_body-text_palette', array(

					   		'default' => '#999898'
					   	));


					   			$args = array(

					   				'label'=>__('Modificar colores del body text'),
					   				'description' => __('Colocale el color de tu preferencia'),
					   				'section' => 'Modificar_colores_front',
					   				'settings' => 'Modificar_colores_body-text_palette',

					   			);

					    $wp_customize->add_control(
					   			new Wp_Customize_Color_Control(
					   					$wp_customize,
					   					'Modificar_colores_body-text_palette',
					   					$args
					   				)
					   			
					   			);

			    //Footer

					    $args = array(

					    	'title' => __('Modificar el Footer'),
					    	'description' => __('Sección para modificar el Footer'),
					    	'priority' => 60,
					    	'panel' => 'Opciones Generales'
					    	);

					    $wp_customize->add_section(
					    		'footer_customize',
					    		$args
					    	);

					    //Copyright

					    $wp_customize->add_setting('Modificar_copyright', array(

					    		'default' => '© @Eri_Art 2017 .Todos los derechos reservados.'
					    	));


					    $args = array(

					    			'label'=>__('Modificar contenido del Copyright'),
					   				'description' => __('Colocale el texto que tu desees como Copyright'),
					   				'section' => 'footer_customize',
					   				'settings' => 'Modificar_copyright'
					    	);


					    $wp_customize->add_control(

					    		new Wp_Customize_Control(
					    				$wp_customize,
					    				'Modificar_copyright',
					    				$args

					    			));



					    //Colores - Footer

							    $wp_customize->add_setting('Modificar_color_copyright', array(

							    		'default' => '#fff'
							    	));


							    $args = array(

							   				'description' => __('Color del Footer'),
							   				'section' => 'footer_customize',
							   				'settings' => 'Modificar_color_copyright',
							    	);


							    $wp_customize->add_control(

							    		new Wp_Customize_Color_Control(
							    				$wp_customize,
							    				'Modificar_color_copyright',
							    				$args

							    			));




			    //Customizando la Galeria


							$args = array(

					   	 	'title'  => __( 'Colores de la Galería', 'Eri_Art' ),
					     	'description' => __('Modificar los colores del Sidebar'),
					     	'priority'    => 60,
					     	'panel' => 'Opciones Generales'

					     );


					    $wp_customize->add_section( 'Modificar_colores_galeria', $args);



					   $wp_customize->add_setting('Modificar_colores_galeria_setting', array(

					   		'default' => '#0020db'
					   	));

					   		$args = array(

					   				'label'=>__('Modificar colores de la Galería'),
					   				'description' => __('Colocale el color de tu preferencia'),
					   				'section' => 'Modificar_colores_galeria',
					   				'settings' => 'Modificar_colores_galeria_setting',

					   			);

					   $wp_customize->add_control(
					   			new Wp_Customize_Color_Control(
					   					$wp_customize,
					   					'Modificar_colores_galeria_setting',
					   					$args
					   				)
					   			
					   			);

				//Fin


				//Body - Customization


							$args = array(

					   	 	'title'  => __( 'Body', 'Eri_Art' ),
					     	'description' => __('Propiedades generales del sitio web'),
					     	'priority'    => -60,
					     	'panel' => 'Opciones Generales'

					     );


					     $wp_customize->add_section( 'Body', $args);



								   $wp_customize->add_setting('Body_color', array(

								   		'default' => '#f1f7f6'

								   	));


								   $args = array(

								   		'label'=>__('Modificar colores del Body'),
							   			'description' => __('Colocale el color de tu preferencia'),
							   			'section' => 'Body',
							   			'settings' => 'Body_color',

								   	);




								   $wp_customize->add_control(
								   	  new WP_Customize_Color_Control(
								   	  		$wp_customize,
								   	  		'Body',
								   	  		$args
								   	  	)
								   	);

				 //Posts

								   	$args = array(

					   	 	'title'  => __( 'Posts', 'Eri_Art' ),
					     	'description' => __('Modificación de los Posts'),
					     	'priority'    => 160,
					     	'panel' => 'Opciones Generales'

					     );


					     $wp_customize->add_section( 'Posts', $args);



								   $wp_customize->add_setting('Posts_colors', array(

								   		'default' => '#f1f7f6'

								   	));


								   $args = array(

								   		'label'=>__('Modificar colores del Post'),
							   			'description' => __('Colocale el color de tu preferencia'),
							   			'section' => 'Posts',
							   			'settings' => 'Posts_colors',

								   	);




								   $wp_customize->add_control(
								   	  new WP_Customize_Color_Control(
								   	  		$wp_customize,
								   	  		'Posts_colors',
								   	  		$args
								   	  	)
								   	);


			}
		}

		if(!function_exists('customize_eri'))
		{
			 function customize_css_eri ()
			 {
			 	?>
					
					<style type="text/css">

					    body
					    {
					    	background: <?php echo get_theme_mod('Body_color'); ?> !important;
					    }
						
						.navbar-alternative
						{
							background: <?php echo get_theme_mod('Barra_col') ?>;
						}

						 .navbar-alternative li a:hover
						{
  							background: inherit;
				 
						}

						.navbar-nav li a
						{
							color: <?php echo get_theme_mod('Barra_hip_col'); ?> !important;
						}

						.active a
				    	{
				    		border-bottom: 4px solid <?php echo get_theme_mod('Barra_hip_border_col'); ?>; 
				    		
				    	}


						.navbar-nav li:not(.active):hover
						{
							background: none !important;
				    		border-bottom: 4px solid <?php echo get_theme_mod('Barra_hip_border_col'); ?>; 
				    		transition: all .5s;
						}

						.carousel-caption
						{
							color: <?php echo get_theme_mod('Color_caption'); ?>
						}

						.front-body
						{
							background: <?php echo get_theme_mod('Modificar_colores_body-text_palette'); ?>
						}

						.aside_front
   						{	
    						background: <?php echo get_theme_mod('Modificar_colores_sidebar_palette') ?>;
    					}
						
						/*Footer*/

						.copyright
						{
							background: <?php echo get_theme_mod('Modificar_color_copyright'); ?>
						}


    					/*Galeria */

    					.back-gallery
    					{
    						background: <?php echo get_theme_mod('Modificar_colores_galeria_setting') ?>;
    					}

    					/* Posts */

    					.blog-row
    					{
    						background: <?php echo get_theme_mod('Posts_colors'); ?>
    					}


					</style>

			 	<?php
			 }
		}

		add_action('wp_head', 'customize_css_eri');



		add_action('customize_register', 'eri_customize');



?>