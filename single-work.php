<?php 
    get_header();

    $banner_image       = get_field('banner_image');
    $work_introduction  = get_field('work_introduction');

    $project_lead = get_field('project_lead');

    $testimonial_content = get_field('testimonial_content');
    $testimonial_author  = get_field('testimonial_author');
?>

<header style="background-image: url('<?php echo $banner_image ?>')">

</header>

<section class="lead no-border">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h1><?php echo get_the_title() ?></h1>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="row col-centre">
            <div class="col col-11 content-centre">
                <?php echo $work_introduction ?>
            </div>
        </div>
        
    </div>
</section>

<section class="fullwidth-images no-border">
    <div class="image-container">
        <img src="/img/home.jpg" alt="">
    </div>
    <div class="image-container">
        <img src="/img/house.jpg" alt="">
    </div>
</section>

<section class="clients section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2>The Project</h2>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="row">
            <div class="col col-11 content-centre">
                <?php echo $project_lead ?>
            </div>
        </div>
        <div class="lr-content pad-top">
            <?php 
                if ( have_rows('project_content') ):
                    while ( have_rows('project_content') ): the_row();
                        if ( get_row_layout() == "text_image_split" ):
                            get_template_part('inc/text-image-split');
                        elseif ( get_row_layout() == "image_text_split" ):
                            get_template_part('inc/image-text-split');
                        endif;
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <?php echo $testimonial_content ?>
                    </div>
                    <h3 class="testimonial-author"><?php echo $testimonial_author ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>