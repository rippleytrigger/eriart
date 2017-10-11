<div>

	<?php 

		if (have_posts()):while(have_posts()):the_post(); 
		
	 ?>

	 <?php if (is_single()): ?> 
	 
	 <h4><?php the_date(); ?> </h4>

	<?php endif; ?>

	<div class="row">

		<article class="col-sm-12">
			
			<h2> <?php the_title() ?> </h2>

			<!--<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>-->

				<div class="">

					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); ?>

					<!-- <?php echo ($url); ?> -->
					
				</div>

			<a  href="<?php the_permalink(); ?>"> 
				
						<div class="header-post" style="background: url('<?php echo $url; ?>')">

							<article class="post-title">
							<h2 class="text-center">

								<?php the_title(); ?>

							</h2>
						</article>
							
						</div>



			</a>
			 

			<p>
				<?php the_content(); ?>	
			</p>

			</article>

		</article>
		
	</div>

<?php endwhile; else: ?>

	<p> <?php _e("Lo sentimos no hay contenido de su busqueda"); ?> </p>

 <?php endif; ?>

 	
	
</div>
