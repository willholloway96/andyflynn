<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<div class="about-container"> 
	<h2 class="about-title"> <?php the_field('your_name') ?> </h2>

    <?php 
		$image = get_field('head_shot');

		if( !empty($image) ): ?>

			<img class="about-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >

	<?php endif; ?>
	<div class="triangle"> </div>

	<p class="about-description"> <?php the_field('description'); ?> </p>
</div>

<?php get_footer(); ?>
