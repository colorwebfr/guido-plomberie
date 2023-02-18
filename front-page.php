<?php get_header(); ?>

<?php
$tel_global_texte = get_field('texte_call_to_action_tel') ? get_field('texte_call_to_action_tel') : '+33 619 387 998';
$tel_global_num = get_field('numero_de_telephone') ? get_field('numero_de_telephone') : '+33619387998';
$hero_visuel = get_field('image_de_fond_du_hero') ? get_field('image_de_fond_du_hero') : '/wp-content/uploads/2023/01/vasque-de-cuisine.jpg';
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero" style="background-image: url(<?= $hero_visuel; ?>);">
    <div class="container text-left">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="content-hero-left">
                    <h1>
                        <?= get_field('titre_principale') ? get_field('titre_principale') : 'GUIDO PLOMBERIE'; ?>
                    </h1>
                    <a class="tel-hero-home" href="tel:<?= $tel_global_num; ?>"><i class="fa-solid fa-phone"></i> <?= $tel_global_texte; ?></a>
                    <p class="tagline">
                        <?= get_field('description_courte_hero'); ?>
                    </p>
                    <a class="btn btn-full scrollto" href="#prestations"><?= get_field('texte_call_to_action_hero_voir_les_prestations'); ?></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div id="contact-form" class="content-hero-right">
                    <h2><?= get_field('titre_call_to_action_devis'); ?></h2>
                    <?= do_shortcode('[contact-form-7 id="14" title="Demander un devis"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<section class="about" id="prestations">

    <div class="container text-center">
        <h2>
            <?= get_field('titre_section_2'); ?>
        </h2>
        <p><?= get_field('description_section_2'); ?></p>
        <div class="row stats-row">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <!-- Flip card -->
                <div class="stats-col text-center col-md-2 col-sm-6">
                    <div class="circle p-relative">
                        <a class="C_White" href="tel:<?= $tel_global_num; ?>"><span class="stats-no"><i class="fa-solid fa-phone"></i></span></a>
                        <?= get_field('titre_pastille_' . $i) ? get_field('titre_pastille_' . $i) : ''; ?>
                        <p class="pile-flip">
                            <a href="#les-services" class="tarif-call"><?= get_field('text_call_to_action_voir_les_tarifs'); ?></a>
                            <a href="tel:<?= $tel_global_num; ?>" class="tarif-call d-none-mobile"><?= get_field('texte_call_to_action_appeler'); ?></a>
                        </p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Welcome Section ======= -->
<?php
$visuel_sect3_ID = get_field('visuel_section_3');
$visuel_sect3 = wp_get_attachment_image_src($visuel_sect3_ID, 'full')[0];
$visuel_sect3_ALT = get_post_meta($visuel_sect3_ID, '_wp_attachment_image_alt')[0];
?>
<section class="welcome text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="content-about-home-L">
                    <h2><?= get_field('titre_section_3'); ?></h2>
                    <?= get_field('description_section_3'); ?>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="content-about-home-R">
                    <img alt="<?= $visuel_sect3_ALT; ?>" class="robinet-mid-section" src="<?= $visuel_sect3; ?>">
                </div>
            </div>
        </div>
    </div>
</section><!-- End Welcome Section -->

<!-- ======= Portfolio Section ======= -->
<section class="portfolio" id="portfolio">
    <div class="container text-center">
        <h2><?= get_field('titre_de_la_section_4'); ?></h2>
        <p><?= get_field('description_de_la_section_4'); ?></p><br>
        <h3 class="h3_cta"><a href="<?= home_url() . '/realisations'; ?>"><?= get_field('texte_du_call_to_actio_section_4'); ?> <i class="fa-solid fa-angle-right"></i></a></h3>
    </div>

    <div class="portfolio-grid">
        <div class="row">
            <?php
            $args = array(
                "post_type" => "realisations",
                "post_status" => "publish",
                "posts_per_page"      => 8,
                "orderby"  => "ID",
                "order"  => "DESC"
            );

            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : ?>
                <?php while ($loop->have_posts()) : $loop->the_post() ?>
                    <?php
                    $thumb_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    ?>
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="card card-block">
                            <a href="<?= $thumb_url; ?>" class="portfolio-lightbox" data-gallery="portfolioGallery"><img alt="<?= the_title(); ?>" src="<?= $thumb_url; ?>">
                                <div class="portfolio-over">
                                    <div>
                                        <h3 class="card-title"><?= wp_trim_words(get_the_title(), 3, '...');  ?></h3>
                                        <p class="card-text">
                                            <?= wp_trim_words(get_field('description_de_la_realisation'), 10, '...');  ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Call to Action Section ======= -->
<section class="cta">
    <div class="container">
        <div class="row cta-flex-home">
            <div class="col-lg-9 col-sm-12 text-lg-start text-center">
                <h2><?= get_field('texte_call_to_action_besoins_dun_devis'); ?></h2>
            </div>

            <div class="col-lg-3 col-sm-12 text-lg-right text-center">
                <a class="btn btn-ghost" href="#contact-form"><?= get_field('texte_bouton_besoins_dun_devis'); ?></a>
            </div>
        </div>
    </div>
</section><!-- End Call to Action Section -->

<!-- Section  tarif -->
<section class="tarif-home" id="les-services">
    <div class="container">
        <h2 class="text-center"><?= get_field('titre_section_5'); ?></h2><br>
        <p class="text-center">
            <?= get_field('description_section_5'); ?>
        </p>
    </div><br>
    <div class="container">
        <div class="row card-deck mb-3 text-center">
            <?php for ($c = 1; $c <= 3; $c++) : ?>
                <!-- Carte service -->
                <div class="col-md-4 col-xs-12 mb-4 box-shadow card-price position-relative">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal"><?= get_field('titre_carte_information_' . $c) ? get_field('titre_carte_information_' . $c) : ''; ?></h4>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title pricing-card-title bold">
                            <?= get_field('prix_carte_' . $c) ? get_field('prix_carte_' . $c) : ''; ?>
                            <small class="text-muted"><?= get_field('base_temps_carte_' . $c) ? get_field('base_temps_carte_' . $c) : ''; ?></small>
                        </h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <?= get_field('liste_carte_' . $c) ? get_field('liste_carte_' . $c) : ''; ?>
                        </ul>
                        <a class="btn-globale-2" href="tel:<?= $tel_global_num; ?>"><?= $tel_global_texte; ?></a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

</div>

<script type="module">
    import {
        add_class_scrollWindow
    } from "<?= get_template_directory_uri() . '/assets/js/module.js'; ?>"
    add_class_scrollWindow();
</script>

<?php get_footer(); ?>