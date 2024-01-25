<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<section class="project-detail-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-12 mb-5 mb-md-5 mb-xl-0">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_10"></div>
                <!--===============spacing==============-->
                <?php if (!empty(get_the_content())) : ?>
                    <div class="description_box">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'bionatura900x600') : BIONATURA_IMG_URL . '900x600.png'; ?>" class="img-fluid single_project_image" alt="<?= esc_attr(get_the_title()); ?>">
            </div>
            <?php if (get_field('project_client') || get_field('project_location')) : ?>
                <div class="col-xl-4 col-lg-3 col-md-12">
                    <div class="project_information">
                        <h2>Information</h2>
                        <div class="project_information_bo">
                            <?php if (get_field('project_client')) : ?>
                                <div class="repeat_informtion">
                                    <h6>Client :</h6>
                                    <p><?php the_field('project_client'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('project_location')) : ?>
                                <div class="repeat_informtion">
                                    <h6>Localité :</h6>
                                    <p><?php the_field('project_location'); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>    
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->                          
</section>

<?php get_footer(); ?>