<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CreataliPortfolio
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
					</div>

				<div class='project-section'>
				<div class='project-page-border'>
				<div class='project-portfolio-page'>

		<header>
			<div class='project-header'>
			<a href="#"><img class="project-header-logo" src="http://localhost:8888/wp-content/uploads/2014/04/smlogo.png"></a>
			</div>
		<nav class="project-page-nav">
			<ul>
				<li><a href="#">projects | </a></li>
				<li><a href="#">about | </a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav>
	</header>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'creataliportfolio' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'creataliportfolio' ); ?></a>

</div>
</div>
</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
