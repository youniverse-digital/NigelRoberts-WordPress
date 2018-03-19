<?php 

    /**
     * Template Name: Homepage Template
     */

     get_header();

     $banner_image      = get_field('banner_image');
     $page_heading      = get_field('page_heading');
     $page_introduction = get_field('page_introduction');

     $clients_introduction = get_field('clients_introduction');

?>

<header style="background-image: url(<?php echo $banner_image ?>">

</header>

<section class="lead no-border">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h1><?php echo $page_heading ?></h1>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="row col-centre">
            <div class="col col-11 content-centre">
                <?php echo $page_introduction ?>
            </div>
        </div>
        <div class="row buttons">
            <div class="col col-4">
                <a href="/services#service1" class="button full-width">
                    Painting &amp decorating
                </a>
            </div>
            <div class="col col-4">
                <a href="/services#service2" class="button full-width">
                    Project refurbishment
                </a>
            </div>
            <div class="col col-4">
                <a href="/services#service3" class="button full-width">
                    Renovations
                </a>
            </div>
        </div>
    </div>
</section>

<section class="clients section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2>Clients</h2>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="row">
            <div class="col col-11 content-centre">
                <?php echo $clients_introduction ?>
            </div>
        </div>
        <div class="logo-grid">

            <?php 
                if ( have_rows('clients_grid') ):
                    while ( have_rows('clients_grid') ): the_row();
                        ?>
                            <div class="logo-grid-item">
                                <img src="<?php echo get_sub_field('client_image') ?>" alt="">
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>

        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="testimonial">

                <?php 
                
                    if ( have_rows('testimonial_list') ):
                        while ( have_rows('testimonial_list') ): the_row();
                            ?>
        
                                <div class="testimonial-content">
                                    <?php echo get_sub_field('testimonial_data') ?>
                                </div>
                                <h3 class="testimonial-author"><?php echo get_sub_field('testimonial_author') ?></h3>

                            <?php
                        endwhile;
                    endif;
                
                ?>


                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="selected-work section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2>Selected Work</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="image-grid">
                <?php 
                    $query = new WP_Query( array(
                        'post_type' => 'work',
                        'posts_per_page' => 9
                    ) );

                    if ( $query->have_posts() ):
                        while ( $query->have_posts() ): $query->the_post();
                            ?>
                                <div class="image-grid-item">
                                    <a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
                                </div>
                            <?php
                        endwhile;
                    endif;
                ?>
            <!-- <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work1.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work2.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work3.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work4.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work5.png" alt="">
            </div>  
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work6.png" alt="">
            </div>    
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work7.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work8.png" alt="">
            </div>
            <div class="image-grid-item">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/work9.png" alt="">
            </div> -->
        </div>
    </div>
</section>

<?php 
    get_footer();
?>