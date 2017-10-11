
	<?php get_header(); ?>

	

		<?php get_template_part('templates/nav'); ?>
		


		<?php if ( have_posts() ) : the_post(); ?>


				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post -> ID));  ?>

			<header class="container-fluid img-background- header-post" style="background: url('<?php echo $url; ?>'); height: 400px;
			border-bottom: 1px solid gray">
				

			</header>

			<article class="container mt-40 mb-40 blog-body">
					
				<div class="row">

					<section class="col-md-8">

						<h1><?php  the_title(); ?></h1>

						<hr />

						<br />

						<h4><i class="fa fa-user-circle fa-1x"></i> <?php _e('Escrito por: ','Eri_Art'); the_author_posts_link(); ?></h4>
						
						<br />
						
						<h5> <i class="fa fa-calendar fa-1x"></i> <?php the_date(); ?></h5>

						<h5> <i class="fa fa-tags fa-1x"></i><?php the_category(','); ?> </h5>

						<h5> <?php the_tags( 'Etiquetas: ', ', ' ); ?> </h5> 

						
						<section>
								<?php the_content(); ?>
									
						</section>

					</section>
					<section class="col-md-4">
						

					</section>
			
			    </div>

			</article>

		<?php get_template_part('templates/comments.php', 'comments'); ?>


	<?php get_footer(); ?>

	
	<?php endif; ?>