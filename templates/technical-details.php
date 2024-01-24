<?php /* Template Name: Page Détails techniques */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<section class="tabs_all_box tabs_all_box_start type_two">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="tab_over_all_box">
        <div class="tabs_header clearfix">
            <ul class="showcase_tabs_btns nav-pills nav clearfix">
                <li class="nav-item">
                    <a class="s_tab_btn nav-link active" data-tab="#noix-de-cajou">Noix de cajou</a>
                </li>
                <li class="nav-item">
                    <a class="s_tab_btn nav-link" data-tab="#soja">Soja</a>
                </li>
            </ul>
        </div>
        <div class="s_tab_wrapper">
            <div class="s_tabs_content">
                <div class="s_tab fade active-tab show" id="noix-de-cajou">
                    <div class="tab_content one">
                        <div class="row justify-content-center">
                            <div class="tab_content_element col-xl-7 col-lg-10 col-md-12 mb-5 mb-lg-0">
                                <div class="image">
                                    <img src="<?= BIONATURA_IMG_URL . '1000x1200.png'; ?>" alt="img" class="w-100 img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s_tab fade" id="soja">
                    <div class="tab_content one">
                        <div class="row justify-content-center">
                            <div class="tab_content_element col-xl-7 col-lg-10 col-md-12 mb-5 mb-lg-0">
                                <div class="image">
                                    <img src="<?= BIONATURA_IMG_URL . '1000x1200.png'; ?>" alt="img" class="w-100 img-fluid">
                                </div>
                            </div>
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