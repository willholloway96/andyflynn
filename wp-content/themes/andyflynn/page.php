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
                    <h1 class="main-title"> <?php the_title(); ?> </h1>
                    <h6 class="main-date"> <?php the_time( 'l, F j, Y' ); ?> </h6>
                    <img class="main-image" src="<?php the_field('album_artwork') ?>" alt="image">
                    <p class="album-description"><?php the_field('album_description') ?> </p>                           
                    <button class="bandcamp-link"> <a  href"<?php the_content(); ?>" >Buy Album</button>
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
