

jQuery('.container').css( 'background', 'lightblue');


jQuery(document).ready(function()
{
	var ias = jQuery.ias({
  container:  '#timeline',
  item:       '.publication-item',
  pagination: '.pagination',
  next:       '.pagination .next',
  triggetPageThreshold: 5
});

	var location =  window.location.pathname;

	var result = location.replace("/blog/","/")

	ias.extension(new IASSpinnerExtension({
    src: result + '/wp-content/themes/mitema2017/assets/img/default.svg', // optionally
	}));

	ias.extension(new IASNoneLeftExtension({
    text: 'No mas publicaciones.', // optionally
    }));

});
