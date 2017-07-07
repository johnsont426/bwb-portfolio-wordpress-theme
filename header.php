<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Johnson Tai</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="container">
		<nav class="group">
			<a class="logo" href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
			<div id="nav-icon">
			  <span></span>
			  <span></span>
			  <span></span>
			</div>
			<?php

				$defaults = array(
	        'container' => false,
	        'theme_location'  => 'primary-menu'
	      );

	      wp_nav_menu( $defaults );

			?>
			<!-- <ul>
				<li><a href="about.html">About</a></li>
				<li><a href="works.html">My Works</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="#" class="social-button">Social</a></li>
				<li class="social-links"><a href="https://www.linkedin.com/in/johnson-tai/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li class="social-links"><a href="https://github.com/johnsont426" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li class="social-links"><a href="https://johnsontai.com" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
			</ul> -->
		</nav>
		<h1><?php the_field('header_text'); ?></h1>
		<div class="header-img-div">
			<?php the_field('header_image'); ?>
		</div>
		<div class="hidden-menu">
			<ul>
				<li><a href="about.html">About</a></li>
				<li><a href="works.html">My Works</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<br><br>
				<li class="social-links"><a href="https://www.linkedin.com/in/johnson-tai/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> - LinkedIn</a></li>
				<li class="social-links"><a href="https://github.com/johnsont426" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> - GitHub</a></li>
				<li class="social-links"><a href="https://johnsontai.com" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i> - Blog</a></li>
			</ul>
		</div>
	</header>