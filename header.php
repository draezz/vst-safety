<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vst-safety
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default">
		<div class="container-fluid">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
								<span class="icon-bar top-bar"></span>
								<span class="icon-bar middle-bar"></span>
								<span class="icon-bar bottom-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="VST Safety Engineering"></a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
				      <li><a href="#">Home</a></li>
				      <li><a href="#">Page 1</a></li>
				      <li><a href="#">Page 2</a></li>
				      <li><a href="#">Page 3</a></li>
				    </ul>

				</div><!--/.nav-collapse -->

		      </div><!--/.container-fluid -->
	
	</nav>
<div id="content" class="site-content">
