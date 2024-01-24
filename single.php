<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<section class="project-detail-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 col-md-12 mb-5 mb-md-5 mb-xl-0">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <h2>Company Values & The Relationship</h2>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_10"></div>
                <!--===============spacing==============-->
                <div class="description_box">
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue equal blame belongs.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi unde odio sint minus vitae sunt doloribus magnam facilis aperiam voluptates!</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus sit error eum hic. Id nulla velit veritatis, vero quisquam dignissimos eos amet, laborum reiciendis incidunt sit hic fugiat architecto iure?</p>
                </div>
                <img class="img-fluid single_project_image" src="<?= BIONATURA_IMG_URL . '900x600.png'; ?>" alt="Project Image">
            </div>
            <div class="col-xl-4 col-lg-3 col-md-12">
                <div class="project_information">
                    <h2>Information</h2>
                    <div class="project_information_bo">
                        <div class="repeat_informtion">
                            <h6>Client: </h6>
                            <p>The Sixmothers Group</p>
                        </div>
                        <div class="repeat_informtion">
                            <h6>Location: </h6>
                            <p>Philadelphia, United States</p>
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