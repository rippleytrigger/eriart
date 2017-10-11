<?php

	get_header();
/*
Template Name: Gallery
*/

?>

		<?php get_template_part('templates/nav'); ?>

<div class="back-gallery">
		<div class="container">

					<div class="row">

					
						<section class="col-md-12" style="background: white;">


							<?php get_template_part('loops/loop-paintings'); ?>
							

						</section>

					</div>
					
					<?php get_template_part('templates/comments.php', 'comments'); ?>

		</div>
</div>

<?php  get_footer(); ?>