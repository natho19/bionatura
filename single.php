<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<section class="project-detail-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 mb-5 mb-md-5 mb-xl-0">
                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : BIONATURA_IMG_URL . '900x600.png'; ?>" class="img-fluid single_project_image" alt="<?= esc_attr(get_the_title()); ?>">
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
            </div>            
            <div class="col-lg-4 col-md-12">
                <div class="project_information">
                    <h2>Détails de l'article</h2>
                    <div class="project_information_bo">
                        <div class="repeat_informtion">
                            <h6>Date de publication :</h6>
                            <p><?= get_the_date('d F Y'); ?></p>
                        </div>
                        <div class="repeat_informtion social_medias">
                            <h6>Partager :</h6>
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-linkedin"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->                          
</section>

<?php get_footer(); ?>