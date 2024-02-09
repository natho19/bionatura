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
                            <form id="contact-form" method="post" action="#" role="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" name="last-name" placeholder="Nom *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Prénoms</label>
                                            <input type="text" name="first-name" placeholder="Prénoms *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" required="required" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Sujet</label>
                                            <input type="text" name="subject" required="required" placeholder="Sujet">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Votre Message</label>
                                            <textarea name="message" placeholder="Votre Message..." rows="3" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mg_top apbtn">
                                            <button class="theme_btn" type="submit">Soumettre</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 pd_left_30">
                <div class="title_all_box style_one dark_color">
                    <div class="title_sections left">
                        <div class="before_title">Contactez-nous</div>
                        <h2>Contactez notre équipe d'experts</h2>
                        <p>Envoyez un message à l'aide du formulaire. Si votre demande est urgente, veuillez utiliser les coordonnées ci-dessous.</p>
                    </div>
                </div>
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class=" icon-placeholder"></span>
                        </div>
                        <div class="contnet">
                            <h3>Adresse</h3>
                            <p>Grand Carrefour CAP, Amadahome, Lomé</p>
                        </div>
                    </div>
                </div>
                <div class="pd_bottom_15"></div>
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contnet">
                            <h3>Questions générales</h3>
                            <p>Email : <a href="mailto:info@bionaturaprod.com">info@bionaturaprod.com</a></p>
                            <p>Téléphone : +228 90060929 / 97622515</p>
                        </div>
                    </div>
                </div>
                <div class="pd_bottom_15"></div>
                <div class="contact_box_content style_one">
                    <div class="contact_box_inner icon_yes">
                        <div class="icon_bx">
                            <span class="fa fa-clock-o"></span>
                        </div>
                        <div class="contnet">
                            <h3>Heures d'ouverture</h3>
                            <p>Lundi à Vendredi : 08h00 - 12h30 ; 14h30 - 17h30</p>
                        </div>
                    </div>
                </div>
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