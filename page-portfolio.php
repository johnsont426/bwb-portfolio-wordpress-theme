<?php
	/*Template Name: Portfolio Page*/
?>

<?php get_header(); ?>

<main class="container">
	<div class="main-content flex-wrap works">
		<?php
			$args = array(
				'post_type' => 'portfolio_post'
			);
			$query = new WP_Query( $args ); 
		?>
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
		<div class="project-block">
			<div class="project-img-container">
				<?php the_post_thumbnail(); ?>
				<a href="<?php the_field('project_link'); ?>" target="_blank" class="more-detail">More Detail <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				<div class="middle">
					<a href="<?php the_field('project_link'); ?>" target="_blank"></a>
				</div>						
			</div>
			<h2><?php the_title(); ?></h2>
			<p>
				<?php 
					if(get_field('more_details')){
						the_field('more_details');
					}else{
						the_field('description');
					}; ?></p>
		</div>
		<?php wp_reset_postdata(); endwhile; endif; ?>
	</div>	
</main>
<?php get_footer(); ?>