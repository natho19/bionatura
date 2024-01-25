<div class="project-wrapper grid-item col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="project_post style_one">
        <div class="image">
            <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'bionatura900x600') : BIONATURA_IMG_URL . '900x600.png'; ?>" class="img-fluid" alt="<?= esc_attr(get_the_title()); ?>">
        </div>
        <div class="project_caro_content">
            <div class="left_side">
                <h2 class="title_pro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="right_side">
                <a href="<?php the_permalink(); ?>"><i class="icon-right-arrow"></i></a>
                <a href="<?php the_permalink(); ?>" class="two"><i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
</div>