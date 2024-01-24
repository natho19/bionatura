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
                            <div class="before_title">Nous sommes</div>
                            <h2>Bio Natura</h2>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="description_box">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi magni est ullam magnam nisi officiis veritatis culpa quam at, recusandae omnis sint ab tenetur ratione!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi maxime ea dolorem, quae, praesentium facilis culpa ipsa reprehenderit illum ab accusantium fugit voluptatibus velit eaque vitae, quibusdam aliquam repudiandae. Dicta aut ut enim doloribus cumque culpa fugiat, qui minima ipsa!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quam amet cumque, hic doloremque eius saepe vitae, ea libero exercitationem optio nam laborum sequi voluptatem. Aliquid maiores delectus dolore nisi.</p>
                    </div>
                    <!--===============spacing==============-->
                    <div class="theme_btn_all color_one">
                        <a href="#" target="_blank" rel="nofollow" class="theme-btn five">Notre mission<i class="icon-right-arrow"></i></a>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="image_boxes style_two">
                    <img src="<?= BIONATURA_IMG_URL . 'shape.png'; ?>" class="background_image" alt="image">
                    <div class="image one">
                        <img src="<?= BIONATURA_IMG_URL . '900x600.png'; ?>" class="img-fluid" alt="image">
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