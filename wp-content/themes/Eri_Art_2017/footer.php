<footer>

	<?php wp_footer(); ?>

	<?php //get_template_part('templates/nav_footer'); ?>

	<div class="footer container-fluid">

			<div class="row">

				<aside class="col-md-4">

				<?php if(is_active_sidebar('footer-widget-area-1')):
					   dynamic_sidebar('footer-widget-area-1');

					   endif;
					    ?>
					
				</aside>
				<aside class="col-md-4">

				<?php if(is_active_sidebar('footer-widget-area-2')):
					   dynamic_sidebar('footer-widget-area-2');

					   endif;
					    ?>
				
				</aside>
				<aside class="col-md-4">

				<?php if(is_active_sidebar('footer-widget-area-3')):
					   dynamic_sidebar('footer-widget-area-3');

					   endif;
					    ?>
				
				</aside>

			</div>

			
		
	</div>

	  <section class="copyright">
			<div class="container">	
				<div class="row">
					<small class="text-center"><?php echo get_theme_mod('Modificar_copyright'); ?></small>
				</div>
			</div>
	  </section>
</footer>	


	</body>
</html>