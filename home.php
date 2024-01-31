<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<section class="project_all filt_style_four  filter_enabled">
    <div class="container">
        <!--===============spacing==============-->
        <div class="pd_top_80"></div>
        <!--===============spacing==============-->
        <?php if (have_posts()) : ?>
            <div class="project_all filt_style_three filter_enabled">
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
        <!--===============spacing==============-->
        <div class="pd_bottom_80"></div>
        <!--===============spacing==============-->
    </div>
</section>

<?php get_footer(); ?>