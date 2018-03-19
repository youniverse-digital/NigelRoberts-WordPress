<?php 
    /**
     * Template Name: About Template
     */

     get_header();

     $about_banner_image = get_field('about_banner_image');
     $about_heading      = get_field('about_heading');

     $about_bottom_subheading    = get_field('about_bottom_subheading');
     $about_bottom_paragraph     = get_field('about_bottom_paragraph');
     $about_bottom_left_content  = get_field('about_bottom_left_content');
     $about_bottom_right_content = get_field('about_bottom_right_content');
?>

<header style="background-image: url('<?php echo $about_banner_image ?>')">

</header>

<section class="no-border">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h1><?php echo $about_heading ?></h1>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="lr-content">
            <?php 
                if ( have_rows('about_content') ):
                    while ( have_rows('about_content') ): the_row();
                        if ( get_row_layout() == "text_image_split" ):
                            get_template_part('inc/text-image-split');
                        elseif ( get_row_layout() == "image_text_split" ):
                            get_template_part('inc/image-text-split');
                        endif;
                    endwhile;
                endif;
            ?>
            <?php get_template_part('inc/text-image-split') ?>
            <?php get_template_part('inc/image-text-split') ?>
        </div>
    </div>
</section>

<section class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2><?php echo $about_bottom_subheading ?></h2>
                <div class="dot-rule p-bottom-small">...</div>
            </div>
        </div>
        <div class="row">
            <div class="col col-11 content-centre">
                <?php echo $about_bottom_paragraph ?>
            </div>
        </div>
        <div class="lr-content pad-top">
            <div class="row">
                <div class="col col-6">
                    <?php echo $about_bottom_left_content ?>
                </div>
                <div class="col col-6">
                    <?php echo $about_bottom_right_content ?>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php 
    get_footer();
?>