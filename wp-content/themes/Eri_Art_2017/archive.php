
	<?php get_header(); ?>



		<?php get_template_part('templates/nav'); ?>
		
		<section class="container mt-40 mb-40">
			
			<h1 class="jumbotron"> 

					<?php single_cat_title();?> 
					
			</h1>

			<?php get_template_part('loops/loop-single-blog', 'single'); ?>

		</section>

		<?php get_template_part('templates/comments.php', 'comments'); ?>


	<?php get_footer(); ?>
