<?php get_header(); ?>

	
<div class="home-content row">

	<div class="side-bar col-md-3">

		<?php dynamic_sidebar( 'social-content' ); ?>

	</div>

	<div class="col-md-9">

		<div class="row main-feed">

			<?php query_posts('cat=5'); ?>
		    <?php if( have_posts() ) {
		        while( have_posts()){
		            the_post();
		    ?>

		    <!-- Start of Post -->

		        <div class="content_widget col-sm-3" >
			        <div class="widget-container" >
						<a class="" href="<?php the_permalink(); ?>" >
				            <h2 class="main-title"> <?php the_field('album_title'); ?> </h2>
				            <?php 
								$image = get_field('album_artwork');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
					    </a>
				    </div>
		        </div>

		    <?php
		        }
		    } 
		    ?>

			<?php dynamic_sidebar( 'content' ); ?>

			<?php query_posts('cat=6'); ?>
		    <?php if( have_posts() ) {
		        while( have_posts()){
		            the_post();
		    ?>

		    <!-- Start of Post -->

		        <div class="content_widget col-sm-3" >
			        <div class="widget-container" >
						<a class="" href="<?php the_field('article_link'); ?>" >
				            <?php 
								$image = get_field('article_image');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
				            <h2 class="main-title"> <?php the_field('article_title'); ?> </h2>
				            <p class="main-content"> <?php the_field('article_content'); ?> </p>
					    </a>
			        </div>
		        </div>

		    <?php
		        }
		    } 
		    ?>
			
			<?php query_posts('cat=7'); ?>
		    <?php if( have_posts() ) {
		        while( have_posts()){
		            the_post();
		    ?>

		    <!-- Start of Post -->

		        <div class="content_widget col-sm-3" >
			        <div class="widget-container" >
						<a class="" href="<?php the_permalink(); ?>" >
				            <?php 
								$image = get_field('ann_image');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							<?php endif; ?>
				            <h2 class="main-title"> <?php the_field('ann_title'); ?> </h2>
				            <p class="main-content"> <?php the_field('ann_content'); ?> </p>
					    </a>
				    </div>
		        </div>

		    <?php
		        }
		    } 
		    ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>