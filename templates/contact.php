<?php /* Template Name: Page Contact */ ?>

<?php get_header(); ?>

<?php get_template_part('parts/header', 'page'); ?>

<!-- Contact -->
<section class="contact-section">
    <div class="pd_top_80"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                <div class="contact_form_box_all type_one">
                    <div class="contact_form_box_inner">
                        <div class="contact_form_shortcode">
                            <!-- Mettre le lien du formulaire de Contact ici -->
                            <?= do_shortcode('[contact-form-7 id="a083f46" title="Formulaire de contact"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 pd_left_30">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <?php if (get_field('contact_tag')) : ?>
                            <div class="before_title"><?php the_field('contact_tag'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('contact_title')) : ?>
                            <h2><?php the_field('contact_title'); ?></h2>
                        <?php endif; ?>
                        <?php if (get_field('contact_description')) : ?>
                            <p><?php the_field('contact_description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($bionatura_options['address']) : ?>
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class=" icon-placeholder"></span>
                            </div>
                            <div class="contnet">
                                <h3>Adresse</h3>
                                <p><?= $bionatura_options['address']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="pd_bottom_15"></div>
                <?php endif; ?>

                <?php if ($bionatura_options['email'] || $bionatura_options['telephone']) : ?>
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contnet">
                                <h3>Questions générales</h3>
                                <?php if ($bionatura_options['email']) : ?>
                                    <p>Email : <a href="mailto:<?= $bionatura_options['email']; ?>"><?= $bionatura_options['email']; ?></a></p>
                                <?php endif; ?>
                                <?php if ($bionatura_options['telephone']) : ?>
                                    <p><?= $bionatura_options['telephone']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="pd_bottom_15"></div>
                <?php endif; ?>

                <?php if ($bionatura_options['hours']) : ?>
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="contnet">
                                <h3>Heures d'ouverture</h3>
                                <p><?= $bionatura_options['hours']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="pd_top_80"></div>
</section>

<!-- Google Map -->
<?php $location = get_field('location'); if ($location) : ?>
    <section class="contact-map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="acf-map" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="pd_top_80"></div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>