<?php

	get_header();
/*
Template Name: Gallery
*/

?>



<div class="container">

			<div class="row">

				<!--<aside class="col-md-2">

					<?php get_sidebar(); ?>	

				</aside>-->
				<section class="col-md-12" style="background: white;">


					<?php get_template_part('loops/loop-paintings'); ?>
					
						12412431243
				</section>

			</div>
			
			<?php get_template_part('templates/comments.php', 'comments'); ?>

		</div>


<?php  get_footer(); ?>