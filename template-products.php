<?php 
    /**
     * Template Name: Products Template
     */

     get_header();

     $banner_image      = get_field('banner_image');
     $page_title        = get_field('page_title');
     $page_introduction = get_field('page_introduction');

     $products_heading = get_field('products_heading');
     $products_intro   = get_field('products_intro');
?>

<header style="background-image: url('<?php echo $banner_image ?>')">

</header>

<section class="lead no-border">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h1><?php echo $page_title ?></h1>
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

<section class="clients section-bg">
    <div class="container">
        <div class="row">
            <div class="col col-12 heading">
                <h2><?php echo $products_heading ?></h2>
                <div class="dot-rule">...</div>
            </div>
        </div>
        <div class="row">
            <div class="col col-11 content-centre">
                <?php echo $products_intro ?>
            </div>
        </div>
        <div class="logo-grid">
            <?php 
                if ( have_rows('products_grid') ):
                    while ( have_rows('products_grid') ): the_row();
                        ?> 
                            <div class="logo-grid-item">
                                <img src="<?php echo get_sub_field('product_image') ?>" alt="">
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