
	<?php get_header(); ?>



		<?php get_template_part('templates/nav'); ?>


		<div class="container mt-40 mb-40 blog-body">
			
			<div class="row">

				<section class="col-md-12">

					<?php get_template_part('loops/loop-single-blog', 'single'); ?>

				</section>
			
			</div>

		</div>

	<?php get_footer(); ?>
