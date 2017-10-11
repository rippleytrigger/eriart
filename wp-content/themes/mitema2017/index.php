
<?php get_header(); ?>


<section class="container">

	<h1 class="text-center">
		<?php bloginfo('name'); ?>
	</h1>

	<div class="row">

		<article class="col-md-8">

			<!-- LOOP GENERAL WP -->

				<?php get_template_part('loops/loop'); ?>
			

		</article>
		
		
	</div>

		
		<?php require_once 'inc/paginacion.php'; ?>


</section>


<?php get_footer(); ?>

