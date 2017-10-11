<?php 

	//Archivo para personalizar nuestro tema
	
	function curso_customize_registro($wp_customize)
	{
		//Panel de opciones generales
		
		$wp_customize->add_panel('general', array(

				'priority' => 10,
				'capability' => 'edit_theme_options',
				'title' => __('opciones Generales', 'mitema2017'),
				'description' => __('Sección de configuración')

			));

		$wp_customize->add_section('curso_generales_section',

			array(
					'title' => __('Logo', 'mitema2017'),
					'description' => 'Modificar el logo',
					'priority' => 42,
					'panel' => 'general'

				)
			);

			$wp_customize->add_setting('curso_logo', array(
			'default' => get_template_directory_uri(). '/assets
			/img/logo.jpg'
			));



			//Control 
			
			$wp_customize->add_control(new
				WP_Customize_Image_Control(
					$wp_customize,
					'curso_logo',
					array(
							'label' => __('Sube tu logo', 'mitema2017'),
							'section' => 'curso_generales_section',
							'settings' => 'curso_logo',
							'context' => 'Mi contex'
						)

					));

			//Colores Titulos
			

			$wp_customize->add_section('curso_generales_colores',
				array(

					'title' => __('Colores', 'mitema2017'),
					'description' => 'Modificar los colores de las fuentes',
					'priority' => 43,
					'panel' => 'general' 


			));

			$wp_customize->add_setting('curso_colores', array(

					'default' => '#2980b9'

				));

			$wp_customize->add_control(new Wp_Customize_Color_Control(

					$wp_customize,
					'curso_colores',
					array(
						'label' => __('Cambio de colores a los titulos', 'mitema2017'),
						'section' => 'curso_generales_colores',
						'settings' => 'curso_colores',
						'context' => 'Mi contex'
					)

				));

			//Colores enlaces
			
			$wp_customize->add_setting('curso_colores_a', array(

					'default' => 'gray'

				));

			$wp_customize->add_control(new Wp_Customize_Color_Control(

					$wp_customize,
					'curso_colores_a',
					array(
						'label' => __('Cambio de colores a los enlaces', 'mitema2017'),
						'section' => 'curso_generales_colores',
						'settings' => 'curso_colores_a',
						'context' => 'Mi contex'
					)

				));


			//Landing Page
			
			$wp_customize->add_panel('Landing', array(

					'priority'=>11,
					'capitability'=>'edit_theme_options',
					'title'=>__('Personalizacion del landing', 
						'mitema2017'),
					'description'=>__('Seccion para personalizar el landing', 'mitema2017')

				));

			$wp_customize->add_section('Slides_section',array(

					'title'=>__('carousel', 'mitema2017'),
					'description'=>'Modificar las imagenes del slider',
					'priority'=>42,
					'panel'=>'Landing'
				));

			//Primer imagen 
			
			$wp_customize->add_setting('slide_s1', array(

				'default'=>get_template_directory_uri().'/assets/img/slide1.jpg', 

				));

			$wp_customize->add_control(new WP_Customize_Image_Control(

				$wp_customize,
				'slide_s1',
				array(
					'label'=>__('Primera Imagen'),
					'section'=>'Slides_section',
					'settings'=>'slide_s1',
					'context'=>'Slide'
				)
				));

			//Segunda imagen 

			$wp_customize->add_setting('slide_s2', array(

				'default'=>get_template_directory_uri().'/assets/img/slide2.jpg',

				));

			$wp_customize->add_control(new WP_Customize_Image_Control(

				$wp_customize,
				'slide_s2',
				array(
					'label'=>__('Segunda Imagen'),
					'section'=>'Slides_section',
					'settings'=>'slide_s2',
					'context'=>'Slide'
				)
				));

			//Tercera imagen 

			$wp_customize->add_setting('slide_s3', array(

				'default'=>get_template_directory_uri().'/assets/img/error404.jpg',

				));

			$wp_customize->add_control(new WP_Customize_Image_Control(
				$wp_customize,
				'slide_s3',
				array(
					'label'=>__('Tercera Imagen'),
					'section'=>'Slides_section',
					'settings'=>'slide_s3',
					'context'=>'Slide'
				)
				));


			//Contenido del Slide
			
			//Primer Slide
			
				$wp_customize->add_setting('slide_texto1', array(
				'default'=>'Texto 1',
				));

				$wp_customize->add_control(new Wp_Customize_Control
					(
						$wp_customize,
						'slide_texto1',
						array(
							'label' => 'Texto del primer slide',
							'section' => 'Slides_section',
							'settings' => 'slide_texto1'
							)
						));





			//Seccion de Nosotros
			
			  $wp_customize->add_section('curso_nosotros',array(
					'title'=>__('Nosotros', 'mitema2017'),
					'description'=>'Modificar el contenido de',
					'priority'=>42,
					'panel'=>'Landing'
				));

			  		//Primer Bloque
			  		

			  			 $wp_customize->add_section('curso_nosotros',
			  			 array(
			  			 	'default' => get_template_directory_uri(). '/assets/img/nosotros1.jpg'

			  			 	));

			  			 $wp_customize->add_control(new Wp_Customize_Control
							(
							$wp_customize,
							'nosotros_titulo1',
							array(
								'label' => 'Primer Titulo','mitema2017',
								'section' => 'curso_nosotros',
								'settings' => 'nosotros_titulo1'
								)
							));

			  		  //Parrafo del primer bloque
			  		  
			  		  $wp_customize->add_control(new WP_Customize_Control
			  		  	(
			  		  		array(
			  		  				'label'=>'Primer parrafo', 'mitema2017',
			  		  				'section' => 'curso_nosotros',
			  		  				'settings' => 'nosotros_parrafo1',
			  		  				'type' => 'textarea'
			  		  			))
			  		  	);

			  		  //Primer  Enlace
			  		  

			  		 $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nosotros_icono1',
			  		 		array(
			  		 				'label' => 'Primer icono', 'mitema2017',
			  		 				'section' => 'curso_nosotros',
			  		 				'settings' => 'nosotros_icono1'

			  		 			)

			  		 	));

			  		 //Primer Enlace del bloque 
			  		 //






			  		 //Formulario de Contacto
			  		 
			  		 $wp_customize->add_section('curso_contacto',array(
					'title'=>__('Nosotros', 'mitema2017'),
					'description'=>'Modificar opciones de contacto',
					'priority'=>44,
					'panel'=>'Landing'
				));
			  		 
			  		 //Imagen de Fondo
			  		 
			  		 $wp_customize->add_setting('curso_contacto_fondo',
			  		 	array(
			  		 			'default' => get_template_directory_uri().'/assets/img/contacto.jpg'

			  		 		)
			  		 	);

			  		 $wp_customize->add_control(new WP_Customize_Image_Control
			  		 	(
			  		 		$wp_customize,
			  		 		'curso_contacto_fondo',
			  		 		array(
			  		 				'label' => __('Bg contacto', 'mitema2017'),
			  		 				'section'=>'curso_contacto',
									'settings'=>'curso_contacto_fondo',
									'context'=>'Slide'

			  		 			)
			  		 		));

			  		  $wp_customize->add_control(new WP_Customize_Control
			  		 	(
			  		 		$wp_customize,
			  		 		'curso_contacto_fondo',
			  		 		array(
			  		 				'label' => __('Bg contacto', 'mitema2017'),
			  		 				'section'=>'curso_contacto',
									'settings'=>'curso_contacto_fondo',
									'context'=>'Slide'

			  		 			)
			  		 		));


			  	/* MAPA */

			  		  $wp_customize->add_section('curso_contacto_mapa',array(
					'title'=>__('Mapa', 'mitema2017'),
					'description'=>'Modificar opciones de contacto',
					'priority'=>44,
					'panel'=>'Landing'
				));

			  		  $wp_customize->add_setting('curso_contacto_mapa',
			  		 	array(
			  		 			'default' => 'Agrege el shortcut del mapa'

			  		 		)
			  		 	);


	}


		add_action('customize_register', 'curso_customize_registro');


		function customize_css()
		{
		?>
			<style type="text/css">

				h1, h2, h3, h4, h5, h6
				{
					color: <?php echo get_theme_mod('curso_colores'); ?>;
				}

				a
				{
					color: <?php echo get_theme_mod('curso_colores_a'); ?>;
				}
				
				
			</style>

		<?php
		}

		add_action('wp_head', 'customize_css');

		//add_action('customize_register', 'curso_customize_registro');
?>