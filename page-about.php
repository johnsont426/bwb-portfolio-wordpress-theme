<?php
	/*
		Template Name: About Page
	*/
?>

<?php get_header(); ?>

<main class="container">
	<div class="main-content flex-wrap about">
		<?php the_field('image'); ?>
		<?php get_template_part('content', 'about') ?>
	</div>
</main>

<?php get_footer(); ?>