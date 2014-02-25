<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Biennale
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
    

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<link rel="stylesheet" href="<?php print get_template_directory_uri() . '/css/flipmenu.css'; ?>" type="text/css" />


<script type="text/javascript" src="<?php print get_template_directory_uri() . '/js/flipmenu-min.js'; ?>"></script>





<script type="text/javascript">
            $(document).ready(function(){
                var menu = new Flipmenu("flip_menu");
            });
</script>


<script type="text/javascript" src="<?php print get_template_directory_uri() . '/js/fancybox/jquery.mousewheel-3.0.4.pack.js'; ?>"></script> 

<script type="text/javascript" src="<?php print get_template_directory_uri() . '/js/fancybox/jquery.fancybox-1.3.4.pack.js'; ?>"></script> 

<link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri() . '/js/fancybox/jquery.fancybox-1.3.4.css'; ?>">




        
</head>





