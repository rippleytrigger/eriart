<?php 

		if (have_posts()):while(have_posts()):the_post(); 


		
	 ?>

	 		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); ?>

	 <div class="container mt-40">

	 		<section class="row">

	 			<div class="col-md-2">

	 				<span>
				<i class="fa fa-calendar"></i>
					<?php the_date(); ?>
				</span>

				<br />
							
				<span>
				<i class="fa fa-user"></i>
				Autor: <?php the_author(); ?>
				</span>

				<br />

				<span>
				<i class="fa fa-tags"></i>
					<?php the_category(','); ?>
					
				</span>

	 				
	 			</div>

	 			<div class="col-md-8 header-post" style="background-image: url(<?php echo $url; ?>) ">

	 					<div class="header-post">

								<article class="post-title">

							
									<h2 class="text-center">
				
										

									</h2>

								</article>



					     </div>

	 			</div>

	 			<div class="col-md-2">
	 				
	 			</div>
	 			
	 		</section>
	 		
			<article class="pie-img">

				

							
			</article>
		</div>

					

	

		<section class="container">

				<div class="row">

					<article class="col-sm-8 col-md-offset-2">

						<h1 class="text-center">
							<?php the_title(); ?>
						</h1>	

						<p>

							<?php the_content(); ?>	
						</p>
						
					</article>

					
					
				</div>
			
		</section>
			




<?php endwhile; else: ?>

	<p> <?php _e("Lo sentimos no hay contenido de su busqueda"); ?> </p>



	<?php endif; ?>