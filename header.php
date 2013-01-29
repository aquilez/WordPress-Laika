<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<title><?php wp_title('&laquo;', TRUE, 'right'); bloginfo('name'); ?></title>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class('show-columns'); ?>>

<header id="header">
	<div class="container">
		<h1><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr(get_bloginfo('description')); ?>"><?php bloginfo('name'); ?></a></h1>

		<nav class="primary">
			<?php wp_nav_menu(array('menu' => 'header')); ?>
		</nav>
	</div><!-- .container -->
</header><!-- #header -->

<div id="page" class="container row">