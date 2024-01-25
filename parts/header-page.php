<!----page header----->
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <img src="<?= BIONATURA_IMG_URL . '1200x400.png'; ?>"  alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page"><?php the_title(); ?></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="<?= esc_url(get_home_url()); ?>">Accueil</a></li>
                            <li class="active"><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----page header----->