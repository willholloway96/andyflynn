<?php get_header(); ?>



    <div class="container">
        <div class="row">
            <div class="col-sm-12">


                <?php if( have_posts() ) {
                    while( have_posts()){
                        the_post();
                ?>
                    
                



                <!-- Start of Post -->


                <div class="content">
                    <h2 class="main-title"> <?php the_title(); ?> </h2>
                    
                    <h6 class="main-date"> <?php the_time( 'l, F j, Y' ); ?> </h6>

		            <?php 
						$image = get_field('album_artwork');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

                    <p class="album-description"><?php the_field('album_description') ?> </p>        

		            <?php 
						$link = get_field('bandcamp_link');

						if( !empty($link) ): ?>

							<button class="buy-button"> <a  href="////<?php echo $link; ?>" ><?php the_field('button_content')?></a> </button>
					<?php endif; ?>  

		            <?php 
						$image = get_field('ann_image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

					<p class="main-content"> <?php the_field('ann_content'); ?> </p>

                    <section class="main-text"> <?php the_content(); ?> </section>
                </div>



                <?php
                    }
                } 
                ?>

            <!-- End of Post -->


            <div class="comments">
                <?php comments_template(); ?>
            </div>






        </div>
    </div>

<?php get_footer(); ?>
