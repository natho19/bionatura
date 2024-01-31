<?php /* Template Name: Page Accueil */ ?>

<?php get_header(); ?>

<!---slider-->
<?php if (have_rows('slides')) : ?>
    <section class="slider style_four nav_position_one pag_position_two">
        <div class="owl-carousel owl_nav_block owl_dots_block theme_carousel owl-theme"
            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
            <?php while (have_rows('slides')) : the_row(); ?>
                <div class="slide-item-content">
                    <div class="slide-item content_left">
                        <?php if (get_sub_field('image')) : ?>
                            <div class="image-layer" style="background-image:url(<?= esc_url(get_sub_field('image')); ?>)"></div>
                        <?php endif; ?>
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="slider_content pd_top_180 pd_bottom_200">
                                        <?php if (get_sub_field('tag')) : ?>
                                            <h6 class="animate_up d-inline-block"><?php the_sub_field('tag'); ?></h6>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('title')) : ?>
                                            <h1 class="animate_left"><?php the_sub_field('title'); ?></h1>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('description')) : ?>
                                            <p class="description animate_right"><?php the_sub_field('description'); ?></p>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('read_more')) : ?>
                                            <div class="button_all animate_down">
                                                <a href="<?= esc_url(get_sub_field('read_more')['url']); ?>" class="theme-btn one  animated"><?= esc_html(get_sub_field('read_more')['title']); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
<!---slider-end--->

<!---image-box-section---->
<section class="image-box-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="image_boxes style_two">
                    <img src="<?= BIONATURA_IMG_URL . 'shape.png'; ?>" class="background_image shape_left" alt="Shape">
                    <div class="image one">
                        <img src="<?= get_field('about_image') ? esc_url(get_field('about_image')['sizes']['bionatura900x600']) : esc_url(BIONATURA_IMG_URL . '900x600.png'); ?>" class="img-fluid" alt="<?= get_field('about_image') ? esc_attr(get_field('about_image')['alt']) : '900x600'; ?>">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections ">
                        <?php if (get_field('about_tag')) : ?>
                            <div class="before_title"><?php the_field('about_tag'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('about_title')) : ?>
                            <h2><?php the_field('about_title'); ?></h2>
                        <?php endif; ?>
                        <?php the_field('about_description'); ?>
                        <?php if (get_field('about_read_more')) : ?>
                            <div class="theme_btn_all color_one mr_top_20">
                                <a href="<?= esc_url(get_field('about_read_more')['url']); ?>" class="theme-btn two"><?= esc_html(get_field('about_read_more')['title']); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
</section>
<!---image-box-section-end---->

<?php
$images = get_field('gallery');
if ($images) : ?>
    <!---gallery-section---->
    <section class="gallery bg_light_1">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <?php if (get_field('gallery_tag')) : ?>
                            <div class="before_title"><?php the_field('gallery_tag'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('gallery_title')) : ?>
                            <h2><?php the_field('gallery_title'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
                <div class="col-lg-7 col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php foreach ($images as $image) : ?>
                                <li data-thumb="<?= esc_url($image['sizes']['bionatura900x600']); ?>">
                                    <img src="<?= esc_url($image['sizes']['bionatura900x600']); ?>" class="img-fluid" alt="<?= esc_attr($image['alt']); ?>" />
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
    </section>
    <!---gallery-section-end---->
<?php endif; ?>

<!---service two---->
<?php if (have_rows('processes')) : ?>
    <section class="service-section-two <?= $images ? '' : 'bg_light_1'; ?>">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <div class="container pd_zero">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_one text-center dark_color">
                        <div class="title_sections">
                            <?php if (get_field('process_tag')) : ?>
                                <div class="before_title"><?php the_field('process_tag'); ?></div>
                            <?php endif; ?>
                            <?php if (get_field('process_title')) : ?>
                                <h2><?php the_field('process_title'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_70"></div>
                <!--===============spacing==============-->
            </div>
            <div class="row gutter_15px">
                <?php while (have_rows('processes')) : the_row(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mr_bottom_60">
                        <div class="service_box style_three dark_color">
                            <div class="service_content">
                                <div class="content_inner">
                                    <span class="icon-play"><i></i></span>
                                    <small class="nom"><?= get_row_index(); ?></small>
                                    <?php if (get_sub_field('name')) : ?>
                                        <h2><?php the_sub_field('name'); ?></h2>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
    </section>
<?php endif; ?>
<!---service two end---->

<!---call to action--->
<?php if (get_field('organisation_description')) : ?>
    <section class="call-to-action">
        <div class="call_to_action style_one">
            <div class="image">
                <img src="<?= get_field('organisation_background') ? esc_url(get_field('organisation_background')['url']) : esc_url(BIONATURA_IMG_URL . '1200x400.png'); ?>" class="img-fluid" alt="<?= get_field('organisation_background') ? esc_attr(get_field('organisation_background')['alt']) : '1200x400'; ?>">
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="left_content">
                            <div class="main_content">
                                <?php if (get_field('organisation_title')) : ?>
                                    <h1><?php the_field('organisation_title'); ?></h1>
                                <?php endif; ?>
                                <?php the_field('organisation_description'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!---call to action end--->

<?php get_footer(); ?>