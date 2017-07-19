<?php
	/* Template Name: Gallery Page */
?>

<?php get_header(); ?>
	<main class="container">
		<div class="main-content flex-wrap gallery">
			<div class="gallery-column">
				<?php
					$gallery = get_post_gallery_images();
					for($counter = 0; $counter < 14; $counter++){
						echo '<img src="' . $gallery[$counter] . '">';
					}
				?>
			</div>
			<div class="gallery-column">
				<?php
					for($counter = 14; $counter < 28; $counter++){
						echo '<img src="' . $gallery[$counter] . '">';
					}
				?>
			</div>
		</div>	
	</main>
<?php get_footer(); ?>