<!-- Page Header -->
<?php $terms = get_queried_object(); ?>
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <img src="<?= BIONATURA_IMG_URL . 'banner.jpg'; ?>"  alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page"><?= is_home() ? $terms->post_title : get_the_title(); ?></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="<?= esc_url(get_home_url()); ?>">Accueil</a></li>
                            <li class="active"><?= is_home() ? $terms->post_title : get_the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>