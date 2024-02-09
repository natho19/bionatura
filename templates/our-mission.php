<?php /* Template Name: Page Notre Mission */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!-- Notre mission -->
<section class="image-box-section tabs_all_box type_two">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="image_boxes style_two">
                    <img src="<?= BIONATURA_IMG_URL . 'shape.png'; ?>" class="background_image shape_left" alt="Shape">
                    <div class="image one">
                        <img src="<?= get_field('our_mission_image') ? esc_url(get_field('our_mission_image')['sizes']['bionatura900x600']) : esc_url(BIONATURA_IMG_URL . '900x600.png'); ?>" class="img-fluid" alt="<?= get_field('our_mission_image') ? esc_attr(get_field('our_mission_image')['alt']) : '900x600'; ?>">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 tab_content one">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections ">
                        <?php if (get_field('our_mission_tag')) : ?>
                            <div class="before_title"><?php the_field('our_mission_tag'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('our_mission_title')) : ?>
                            <h2><?php the_field('our_mission_title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_field('our_mission_description')) : ?>
                            <div class="content_bx">
                                <?php the_field('our_mission_description'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('our_mission_read_more')) : ?>
                            <div class="theme_btn_all color_one mr_top_20">
                                <a href="<?= esc_url(get_field('our_mission_read_more')['url']); ?>" class="theme-btn two"><?= esc_html(get_field('our_mission_read_more')['title']); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

<?php get_footer(); ?>