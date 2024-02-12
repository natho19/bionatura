<?php get_header(); ?>

<div class="title_all_box style_four text-center dark_color">
    <div class="pd_top_20"></div>
    <div class="title_sections four">
        <div class="before_title">Erreur 404</div>
        <h2 class="mr_top_10">Désolé, nous ne trouvons pas cette page !</h2>
        <p>La page que vous recherchez a été déplacée, supprimée, renommée ou n'a jamais existé.</p>
    </div>
    <div class="pd_top_20"></div>
    <div class="theme_btn_all color_one mr_top_20 mr_bottom_40 text-center">
        <a href="<?= esc_url(get_home_url()); ?>" class="theme-btn one">Revenir à l'accueil</a>
    </div>
</div>

<?php get_footer(); ?>