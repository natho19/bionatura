<?php /* Template Name: Page A Propos */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!---about--->
<section class="about-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 ">
                <div class="about_content position-relative z_99">
                    <div class="title_all_box style_one text-left  dark_color">
                        <div class="title_sections">
                            <?php if (get_field('bionatura_tag')) : ?>
                                <div class="before_title"><?php the_field('bionatura_tag'); ?></div>
                            <?php endif; ?>
                            <?php if (get_field('bionatura_title')) : ?>
                                <h2><?php the_field('bionatura_title'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <?php if (get_field('bionatura_description')) : ?>
                        <div class="description_box">
                            <?php the_field('bionatura_description'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('bionatura_button')) : ?>
                        <div class="theme_btn_all color_one">
                            <a href="<?= esc_url(get_field('bionatura_button')['url']); ?>" class="theme-btn two"><?= esc_html(get_field('bionatura_button')['title']); ?></a>
                        </div>
                    <?php endif; ?>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="image_boxes style_two">
                    <img src="<?= BIONATURA_IMG_URL . 'shape.png'; ?>" class="background_image" alt="Shape">
                    <div class="image one">
                        <img src="<?= get_field('bionatura_image') ? esc_url(get_field('bionatura_image')['sizes']['bionatura900x600']) : esc_url(BIONATURA_IMG_URL . '900x600.png'); ?>" class="img-fluid" alt="<?= get_field('bionatura_image') ? esc_attr(get_field('bionatura_image')['alt']) : '900x600'; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
</section>
<!---about end--->

<?php get_footer(); ?>