<section class="container">

	<div class="row">

	<br />

		<h2 class="text-center"> 
				
				<i class="fa fa-tag"></i>

				<?php single_tag_title(); ?>

		</h2>

<?php 

		if (have_posts()):while(have_posts()):the_post(); 
		
	 ?>

	 <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); ?>

					

		

					<article class="col-sm-6 mb-20">
						<a  href="<?php the_permalink(); ?>">
							<div class="header-post subir" style="background-image: url(<?php echo $url; ?>) ">


									<h2 class="text-center titulo"> <?php the_title(); ?> </h2>



							</div>
						</a>
						
					</article>



<?php endwhile; else: ?>

	<p> <?php _e("Lo sentimos no hay contenido de su busqueda"); ?> </p>



	<?php endif; ?>

	
			</div>
			
		</section>