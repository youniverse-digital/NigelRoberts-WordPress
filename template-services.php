<?php 
    /**
     * Template Name: Services Template
     */

     get_header();

     $banner_image      = get_field('banner_image');
     $page_heading      = get_field('page_heading');
     $page_introduction = get_field('page_introduction');
?>

<header style="background-image: url('<?php echo $banner_image ?>')">

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
        
    </div>
</section>

<?php 
    $iterator = 0;

    if ( have_rows('service_info') ):
        while ( have_rows('service_info') ): the_row();

            if ( $iterator % 2 == 0 ):
                ?>
                    <section class="clients" id="service<?php echo $iterator + 1 ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 heading">
                                    <h2><?php echo get_sub_field('service_title') ?></h2>
                                    <div class="dot-rule">...</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-11 content-centre">
                                    <?php echo get_sub_field('service_heading_paragraph') ?>
                                </div>
                            </div>
                            <div class="lr-content pad-top">
                                <div class="row">
                                    <div class="col col-6">
                                        <img class="img-fit" src="<?php echo get_sub_field('service_image') ?>" alt="">
                                    </div>
                                    <div class="col col-6">
                                        <?php echo get_sub_field('service_description') ?>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </section>
                <?php
            else: 
                ?>
                    <section class="clients section-bg" id="service<?php echo $iterator + 1 ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 heading">
                                    <h2><?php echo get_sub_field('service_title') ?></h2>
                                    <div class="dot-rule">...</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-11 content-centre">
                                    <?php echo get_sub_field('service_heading_paragraph') ?>
                                </div>
                            </div>
                            <div class="lr-content pad-top">
                                <div class="row">
                                    <div class="col col-6">
                                        <?php echo get_sub_field('service_description') ?>
                                    </div>
                                    <div class="col col-6">
                                        <img class="img-fit" src="<?php echo get_sub_field('service_image') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php
            endif;

            $iterator++;
        endwhile;
    endif;
?>



<?php 
    get_footer();
?>