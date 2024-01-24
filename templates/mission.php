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
                    <img src="<?= BIONATURA_IMG_URL . '900x600.png'; ?>" class="img-fluid object-fit-cover" alt="image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 tab_content one">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections ">
                        <div class="before_title">Mission</div>
                        <h2>Notre mission</h2>
                        <div class="content_bx">
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, sed?</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minima omnis rem!</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nemo quis, iste ipsum rerum omnis.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quasi pariatur repudiandae tempore. Vitae error sed ullam impedit, omnis tempora.</li>
                            </ul>
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
<!---image-box-section-end---->

<?php get_footer(); ?>