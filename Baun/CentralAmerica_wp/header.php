
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- 1 metas -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 2  wp_head -->
	<?php  wp_head(); ?>
	<!-- favicon -->
	<link href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon.png" rel="shortcut icon"/>
	
</head>

<!-- 3  BodyClass -->
<body <?php body_class(); ?>>
