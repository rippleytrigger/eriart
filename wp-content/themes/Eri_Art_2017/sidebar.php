 <?php 

		 global $post;  

			 $args = array(
			 'post_type' => 'dibujos',
			 'posts_per_page' => 5,
			        
		);

				?>

				<h3 class="text-center"><?php echo get_theme_mod('Modificar_texto_sidebar'); ?></h3>

		

					<ul class="last_drawings">

					<?php

					   $query = new WP_Query( $args );
        			while ($query->have_posts()) : $query->the_post();
   					
   					$url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); 

   				
   					?>

   					<li> <hr class="text-center" /> </li>

			        <li>
			          <a  href="<?php the_permalink(); ?>">
			          	<img src="<?php echo $url ?>" />
			          </a>
			        </li>

					<?php 
			        endwhile; ?>	

			         </ul>
<?php

	dynamic_sidebar('sidebar-widget-area');

	//get_template_part('templates/nav_sidebar');
	
?>