<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!-- Actualités -->
<section class="project_all filt_style_four">
    <div class="container">
        <div class="pd_top_80"></div>
        <?php if (have_posts()) : ?>
            <div class="project_all filt_style_three">
                <div class="project_container clearfix">
                    <div class="row clearfix">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('parts/content', 'post'); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <?php get_template_part('parts/content', 'none'); ?>
        <?php endif; ?>
        <div class="pd_bottom_80"></div>
    </div>
</section>

<?php get_footer(); ?>