<?php /* Template Name: Page Accueil */ ?>

<?php get_header(); ?>

<!---slider-->
<section class="slider style_four nav_position_one pag_position_two">
    <div class="owl-carousel owl_nav_block owl_dots_block theme_carousel owl-theme"
        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
        <div class="slide-item-content">
            <div class="slide-item content_left">
                <div class="image-layer" style="background-image:url(<?= BIONATURA_IMG_URL . 'sliders/slider-1-1.jpg'; ?>)"></div>
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slider_content pd_top_180 pd_bottom_200">
                                <h6 class="animate_up d-inline-block">Our Vision to Grow Better</h6>
                                <h1 class="animate_left">Inspired <br> Performance</h1>
                                <p class="description animate_right">Duty obligations of business it will frequently occur that pleasures <br> have to be repudiated and annoyances accepted.</p>
                                <div class="button_all animate_down">
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item-content">
            <div class="slide-item content_center">
                <div class="image-layer" style="background-image:url(<?= BIONATURA_IMG_URL . 'sliders/slider-1-2.jpg'; ?>)"></div>
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slider_content pd_top_180 pd_bottom_200">
                                <h6 class="animate_up d-inline-block">Hire the Best</h6>
                                <h1 class="animate_left">Hire Better, <br> Faster!</h1>
                                <p class="description animate_right">On the other hand, we denounce with righteous indignation and <br> dislike men who are so beguiled.</p>
                                <div class="button_all animate_down">
                                    <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item-content">
            <div class="slide-item content_right">
                <div class="image-layer" style="background-image:url(<?= BIONATURA_IMG_URL . 'sliders/slider-1-3.jpg'; ?>)"></div>
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="slider_content pd_top_180 pd_bottom_200">
                                <h6 class="animate_up d-inline-block">Our Vision to Grow Better</h6>
                                <h1 class="animate_left">Countless <br> Happy Clients</h1>
                                <p class="description animate_right">These cases are perfectly simple and easy to distinguish. In a free <br> hour, when our power of choice is untrammelled.</p>
                                <a href="#" target=_blank rel=nofollow class="theme-btn one  animated _zoomIn"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---slider-end--->

<!---image-box-section---->
<section class="image-box-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 mb-5 mb-lg-5 mb-xl-0">
                <div class="image_boxes style_three">
                    <img src="<?= BIONATURA_IMG_URL . 'about/about-8.jpg'; ?>" class="img-fluid height_500 object-fit-cover" alt="image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections ">
                        <div class="before_title"> Dedicated Team </div>
                        <h2>Professional Individuals</h2>
                        <p>Our power of choice is untrammelled and when nothing prevents being able to do what we like best every pleasure.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aut voluptate, quisquam officiis dignissimos cupiditate quas non dolore quia? Asperiores, ipsa natus. Illum fuga placeat fugiat perferendis sunt. Reiciendis, corporis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, sunt illo. Fuga perferendis at in.</p>
                        <!--===============spacing==============-->
                        <div class="theme_btn_all color_one mr_top_20">
                            <a href="#" target="_blank" rel="nofollow" class="theme-btn two">En savoir plus</a>
                        </div>
                        <!--===============spacing==============-->
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