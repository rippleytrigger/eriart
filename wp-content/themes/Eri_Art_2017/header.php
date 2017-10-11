<!DOCTYPE html>
<html  <?php language_attributes(); ?> >
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, 
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

	<title>
		<?php wp_title('  -  ', true, 'right'); bloginfo('name'); ?>
	</title>

	<script src="https://use.fontawesome.com/36a8bfad31.js"></script>

</head>
<body <?php body_class(); ?> >

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<?php wp_head(); ?>
