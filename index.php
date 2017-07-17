<?php get_header(); ?>

<main>
	<div class="containter">
		<div class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<p><?php the_content(); ?></p>
		<?php endwhile; else: ?>
			<h1>Oh no!</h1>
			<p>we could not find this page!!</p>
		<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>