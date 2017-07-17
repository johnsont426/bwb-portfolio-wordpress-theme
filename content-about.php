<div id="about-text">
	<?php
		$args = array(
			'post_type' => 'about_post'
		);
		$query = new WP_Query( $args ); 
	?>
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<p><?php the_field('content'); ?></p>
	<?php endwhile; endif; ?>			
</div>