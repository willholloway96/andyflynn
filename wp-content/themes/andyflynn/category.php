<?php get_header(); ?>



    <div class="container">
        <div class="row">

                <?php if( have_posts() ) {
                    while( have_posts()){
                        the_post();
                ?>
      
                <!-- Start of Post -->

                <div class="content-category col-sm-4">
					<a href="<?php the_permalink(); ?>">
	                	<h1 class="main-title"> <?php the_title(); ?> </h1>
			            <?php 
							$image = get_field('album_artwork');

							if( !empty($image) ): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>  
	                </a>                         
                	<h6 class="main-date"> <?php the_time( 'l, F j, Y' ); ?> </h6>                        
		            <?php 
						$link = get_field('bandcamp_link');

						if( !empty($link) ): ?>

							<button class="buy-button"> <a  href="////<?php echo $link; ?>" ><?php the_field('button_content')?></a> </button>
					<?php endif; ?>  
                	<section class="main-text"> <?php the_content(); ?> </section>
                </div>

                <?php
                    }
                } 
                ?>

            <!-- End of Post -->

        </div>

    </div>

<?php get_footer(); ?>
