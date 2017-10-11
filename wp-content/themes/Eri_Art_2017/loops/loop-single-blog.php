	  
	  	 <!-- Body del Blog -->

	  

<?php 

		//Si hay posts, mientras haya post, imprime el post
			if (have_posts()):while(have_posts()):the_post(); 


		
	 ?>

		 		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); ?>

		 		<!--  Los tags de Wp
					https://www.wordpress.org/Template_Tags/
		 		-->

		
		
			
	
		 		<article class="row blog-row">

		 			<div class="col-md-4 img-blog" style="background: url(<?php echo $url; ?>);">
		 				

		 			</div>

		 			<div class="col-md-7">

		 					<h1>

		 						<?php the_title(); ?>
		 						
		 					</h1>
							
							<small>
			 						 <i class="fa fa-address-card-o fa-1x"></i>						
			 						<?php the_author_posts_link(); ?> 

			 						<i class="fa fa-folder fa-1x"></i>
			 						<?php the_category(' , ') ?> 	

			 						<i class="fa fa-tags fa-1x"></i>
			 						<?php the_tags('Etiquetas: ', ' / ') ?>

			 						<i class="fa fa-calendar fa-1px"></i>
			 						<?php the_date(); ?>
			 				
			 				</small>
		 						
		 					<hr />

		 					<p>

		 						<?php the_excerpt(); ?>
		 						
		 					</p>

		 					<a href="<?php the_permalink(); ?>" class="btn btn-info">
								<?php _e('Leer Más') ?>
		 					</a>
		 				

		 			</div>
		 			
		 		</article>

		 		<!-- Se pagina al final -->


					
		<?php endwhile; ?>

			<p> <?php posts_nav_links(" -- ", "<b>Anteriores</b>", "Siguientes") ?> </p>

		<?php else: ?>

			<p> <?php _e("Lo sentimos no hay contenido de su busqueda"); ?> </p>



			<?php endif; ?>

