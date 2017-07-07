<?php /* Template Name: Front Page */ ?>

<?php get_header(); ?>

<main>
	<div class="container">
		<div class="main-content" id="brief-about">
			<?php
				$args = array(
					'post_type' => 'about_post',
					'posts_per_page' => 1
				);
				$query = new WP_Query( $args ); 
			?>
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('content'); ?></p>
			<a href="<?php get_page_link(); ?>" class="link-button">More About Me</a>
			<?php wp_reset_postdata(); ?>
			<?php endwhile; endif; ?>
			<div class="dec-imgs-div group flex">
				<?php the_field('decoration_image_1'); ?>
				<?php the_field('decoration_image_2'); ?>
				<?php the_field('decoration_image_3'); ?>
				<?php the_field('decoration_image_4'); ?>
			</div>
		</div>
		<div class="main-content">
			<h1>Featured Projects</h1>
			<div class="featured-projects">
				<?php
					$args = array(
						'post_type' => 'portfolio_post',
						'posts_per_page' => 3
					);
					$query = new WP_Query( $args ); 
				?>
				<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
				<div class="flex-wrap project-div">
					<?php the_post_thumbnail('medium'); ?>
					<div class="project-detail-div">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('description'); ?></p>
					</div>
				</div>
				<?php wp_reset_postdata(); endwhile; endif; ?>
			</div>
			<a href="works.html" class="link-button">All Projects</a>
		</div>
	</div>	
</main>

<?php get_footer(); ?>
