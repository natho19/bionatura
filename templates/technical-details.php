<?php /* Template Name: Page Détails techniques */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!-- Détails techniques -->
<section class="tabs_all_box tabs_all_box_start type_two">
    <div class="pd_top_80"></div>
    <div class="tab_over_all_box">
        <div class="tabs_header clearfix">
            <ul class="showcase_tabs_btns nav-pills nav clearfix">
                <li class="nav-item">
                    <a class="s_tab_btn nav-link active" data-tab="#soja">Soja</a>
                </li>
                <!-- Pas de classe active pour le nav-link sans contenu
                <li class="nav-item">
                    <a class="s_tab_btn nav-link" data-tab="#noix-de-cajou">Noix de cajou</a>
                </li> -->
            </ul>
        </div>
        <div class="s_tab_wrapper">
            <div class="s_tabs_content">
                <div class="s_tab fade active-tab show" id="soja">
                    <div class="tab_content one">
                        <div class="row justify-content-center">
                            <div class="tab_content_element col-xl-7 col-lg-10 col-md-12 mb-5 mb-lg-0">
                                <div class="image">
                                    <img src="<?= BIONATURA_IMG_URL . 'spec_soja_1.jpg'; ?>" alt="img" class="w-100 img-fluid">
                                    <img src="<?= BIONATURA_IMG_URL . 'spec_soja_2.jpg'; ?>" alt="img" class="w-100 img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd_bottom_80"></div>
</section>

<?php get_footer(); ?>