<!-- Paginacion -->

	<?php  if ($wp_query ->max_num_pages>1): ?>

	<?php

		global $wp_query;


		$big = 999999999; //Importante siempre va a ser un integer


		$args = array(

			'base' => str_replace($big, '%#%', esc_url(
					get_pagenum_link($big) ) ),
			'format' => '?page=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages,
			'end_size' => 1,
			'mid_size' => 2,
			'prev_text' => true,
			'prev_text' => __('Anterior'),
			'text_text' => __('Siguiente'),
			'type' => 'list',
			'add_args' => False,
			'add_fragment' => '',
			'before_page_number' => '',
			'after_page_number' => ''

		)

	?>

	<div class="row">

		<article class="col-sm-12">

			<?php $paginacion = paginate_links($args); ?>



			<?php echo str_replace("<ul class='page-numbers'>",'<ul class="pagination">', $paginacion) ?>
			
		</article>
		
	</div>

	<?php
		endif;
	?>
	