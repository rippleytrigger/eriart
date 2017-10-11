

<div id="timeline">

		<h1 class="text-center">Mis dibujos</h1>

	<?php 


		$args = array( 'post_type' => 'dibujos', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
 	
 		$url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID)); 
	 ?>

	 	
		<article class="col-lg-6 col-md-6">
			
			<div class="header-post" style="background-image: url('<?php echo $url; ?>'); ">

				<!--<img class="img-responsive thumbnail" src="<?php echo $url; ?>" />-->

				<div class="post-title">

						<h2 class="text-center">

							<a href="<?php the_permalink(); ?>">
										
								<?php the_title(); ?>
							</a>
								
						</h2>
				</div>

			</div>

			
		</article>



<?php endwhile; ?>


 	
	
</div>



		<?php get_template_part('templates/comments.php', 'comments'); ?>
