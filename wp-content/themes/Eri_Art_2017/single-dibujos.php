
	<?php get_header(); ?>



		<?php get_template_part('templates/nav'); ?>

			<?php get_template_part('loops/loop-single-paintings', 'single'); ?>



		<?php get_template_part('templates/comments.php', 'comments'); ?>


	<?php get_footer(); ?>
