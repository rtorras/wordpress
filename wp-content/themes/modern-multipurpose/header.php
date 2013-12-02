<!doctype html>
<!--[if gte IE 9]>
<html class="ie ie9">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8">
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7">
<![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>>
 <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title><?php wp_title( '', true, 'right' );?></title> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	
	<header>
		<div>
			
			<div class="head-area">
            	<p class="title"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></p>
           		<p class="tagline"><?php bloginfo('description'); ?></p>
            </div>
            <?php get_search_form(); ?>
			
		</div>
	</header>
	<nav>
		<?php wp_nav_menu( array('fallback_cb' => 'modern_multipurpose_page_menu', 'depth' => '3', 'theme_location' => 'primary', 'link_before' => '', 'link_after' => '', 'container' => false) ); ?>
		<div class="clear"><!-- --></div>
	</nav>
	<section class="content"><div>
		