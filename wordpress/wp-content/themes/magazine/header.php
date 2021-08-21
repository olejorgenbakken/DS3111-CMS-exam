<?php ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php echo get_bloginfo('name') ?><?php echo wp_title('-')?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Roboto:400,700,900|Cinzel:900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php  include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
	<header id="global-header">
		<a href="<?php echo home_url(); ?>">
			<h1><?php echo get_bloginfo('name') ?></h1>
		</a>
		<?php wp_nav_menu(); ?>

	</header>