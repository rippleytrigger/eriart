<?php 

		if (have_posts()):while(have_posts()):the_post(); 
		
	 ?>

	 <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); ?>

					

	<div class="header-post subir" style="background-image: url(<?php echo $url; ?>) ">

		<article class="post-title">

			<h2 class="text-center">
				
				<?php the_title(); ?>

			</h2>

		</article>

	 	<div class="container">
			<article class="pie-img">

				<span>
				<i class="fa fa-calendar"></i>
					<?php the_date(); ?>
				</span>

				<br />
							
				<span>
				<i class="fa fa-user"></i>
					<?php the_author(); ?>
				</span>

				<br />

				<span>
				<i class="fa fa-tags"></i>
					<?php the_category(','); ?>
					
				</span>
							
			</article>
		</div>

	</div>

		<section class="container">

				<div class="row">

					<article class="col-sm-8 col-md-offset-2">

						<p>

							<?php the_content(); ?>	
						</p>
						
					</article>

					
					
				</div>
			
		</section>
			




<?php endwhile; else: ?>

	<p> <?php _e("Lo sentimos no hay contenido de su busqueda"); ?> </p>



	<?php endif; ?>