<?php /* Template Name: Page Notre Mission */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!---image-box-section---->
<section class="image-box-section bg_light_1 tabs_all_box tabs_all_box_start type_two">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="image_boxes style_three">
                    <img src="<?= get_field('our_mission_image') ? esc_url(get_field('our_mission_image')['sizes']['bionatura900x600']) : esc_url(BIONATURA_IMG_URL . '900x600.png'); ?>" class="img-fluid object-fit-cover" alt="<?= get_field('our_mission_image') ? esc_attr(get_field('our_mission_image')['alt']) : '900x600'; ?>">
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

<?php get_footer(); ?>