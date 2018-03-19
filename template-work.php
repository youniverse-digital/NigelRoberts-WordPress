<?php 
    /**
     * Template Name: Our Work Template
     */

     get_header();

     $work_banner_image = get_field('work_banner_image');
     $work_heading      = get_field('work_heading');
     $work_introduction = get_field('work_introduction');

     $grid_title     = get_field('grid_title');
     $grid_paragraph = get_field('grid_paragraph');
?>

<header style="background-image: url('<?php echo $work_banner_image ?>')">

</header>

<section class="lead no-border">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h1><?php echo $work_heading ?></h1>
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



<section class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2><?php echo $grid_title ?></h2>
                <div class="dot-rule p-bottom-small">...</div>
            </div>
        </div>
        <div class="row">
            <div class="col col-11 content-centre">
                <?php echo $grid_paragraph ?>
            </div>
        </div>
        <div class="work-grid">
            <?php 
                $query = new WP_Query( array(
                    'post_type' => 'work'
                ) );

                if ( $query->have_posts() ):
                    while ( $query->have_posts() ): $query->the_post();
                        ?>
                            <div class="work-item">
                                <a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="work-img"></a>
                                <div class="work-item-info">
                                    <h4><?php echo get_the_title() ?></h4>
                                    <p><?php echo get_field('work_description') ?></p>
                                </div>
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>