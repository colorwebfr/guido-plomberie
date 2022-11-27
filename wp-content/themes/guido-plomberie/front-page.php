<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="container text-left">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="content-hero-left">
                    <h1>
                        GUIDO PLOMBERIE
                    </h1>
                    <a class="tel-hero-home" href="tel:+33619387998"><i class="fa-solid fa-phone"></i> +33 619 387 998</a>
                    <p class="tagline">
                        Dépannage, création, <br>installation, conseils, <br>recherche de fuite ...<br>
                        Contactez Guido Plomberie !
                    </p>
                    <a class="btn btn-full scrollto" href="#prestations">Voir les prestations</a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div id="contact-form" class="content-hero-right">
                    <h2>Devis - Informations</h2>
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
            Les services Guido plomberie
        </h2>
        <p>Vous avez besoin d'un devis, un conseil ou vous avez une urgence ?<br>Guido plomberie intervient sur tous le bassins niçois et alentours !</p>
        <div class="row stats-row">
            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle p-relative">
                    <a class="C_White" href="tel:+33619387998"><span class="stats-no"><i class="fa-solid fa-sink"></i></span></a>
                    Installation & remplacement
                    <p class="pile-flip">
                        <a href="#les-tarifs" class="tarif-call">Voir les tarifs</a>
                        <a href="tel:+33619387998" class="tarif-call">Appeler</a>
                    </p>
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle p-relative">
                    <a class="C_White" href="tel:+33619387998"><span class="stats-no"><i class="fa-solid fa-faucet-drip"></i></span></a>
                    Recherche de fuites
                    <p class="pile-flip">
                        <a href="#les-tarifs" class="tarif-call">Voir les tarifs</a>
                        <a href="tel:+33619387998" class="tarif-call">Appeler</a>
                    </p>
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle p-relative">
                    <a class="C_White" href="tel:+33619387998"><span class="stats-no"><i class="fa-solid fa-screwdriver-wrench"></i></span></a>
                    Débouchages & dépannages
                    <p class="pile-flip">
                        <a href="#les-tarifs" class="tarif-call">Voir les tarifs</a>
                        <a href="tel:+33619387998" class="tarif-call">Appeler</a>
                    </p>
                </div>
            </div>

            <div class="stats-col text-center col-md-3 col-sm-6">
                <div class="circle p-relative">
                    <a class="C_White" href="tel:+33619387998"><span class="stats-no"><i class="fa-solid fa-bath"></i></span></a>
                    Robineteries, Chauffe eau, Cumulus
                    <p class="pile-flip">
                        <a href="#les-tarifs" class="tarif-call">Voir les tarifs</a>
                        <a href="tel:+33619387998" class="tarif-call">Appeler</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Welcome Section ======= -->
<section class="welcome text-left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="content-about-home-L">
                    <h2>Qui sommes nous ?</h2>
                    <p>Guido Plomberie est une entreprise de plomberie experte en dépannage, création, débouchage, recherche de fuite et installations diverses ( bac à douche, baignoire, robinetteries, cumulus, chauffe eau ...).<br>
                        Guido plomberie opère sur tout le secteur des Alpes Maritimes.<br>
                        C'est une société très attaché à la notion de qualité de travail et de satisfaction du client car c'est un métier de service et de passion.</p>
                    <p>
                        Que ce soit pour une demande de devis, un conseil ou une urgence. N'hésitez pas à nous contacter, nous serons toujours contents de pouvoir vous aider
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="content-about-home-R">
                    <img alt="Robineterie Guido Jim" class="robinet-mid-section" src="/guido-plomberie/wp-content/uploads/2022/11/Robineterie.png">
                </div>
            </div>
        </div>
    </div>
</section><!-- End Welcome Section -->

<!-- ======= Portfolio Section ======= -->
<section class="portfolio" id="portfolio">
    <div class="container text-center">
        <h2>
            Quelques réalisations
        </h2>
        <p>Au delà de l'utile, mon métier me permet de réaliser et concevoir des pièces d'eaux aussi pratique qu'agréable à vivre<br>
            et la satisfaction du client est un vrai moteur dans mon métier.</p>
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
                                            <?= wp_trim_words(get_the_content(), 10, '...'); ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Call to Action Section ======= -->
<section class="cta">
    <div class="container">
        <div class="row cta-flex-home">
            <div class="col-lg-9 col-sm-12 text-lg-start text-center">
                <h2>
                    Vous avez besoins d'un devis pour une réalisation
                </h2>
            </div>

            <div class="col-lg-3 col-sm-12 text-lg-right text-center">
                <a class="btn btn-ghost" href="#contact-form">contactez</a>
            </div>
        </div>
    </div>
</section><!-- End Call to Action Section -->

<!-- Section  tarif -->
<section class="tarif-home" id="les-tarifs">
    <div class="container">
        <h2 class="text-center">Nos tarifs en toute transparence</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam cupiditate, eligendi ab, quos numquam repellendus excepturi hic vitae exercitationem, illum illo incidunt corporis? Vero, dignissimos ipsum nobis corporis ipsa dolorem.</p>
    </div><br>
    <div class="container">
        <div class="row card-deck mb-3 text-center">

            <div class="col-md-4 col-xs-12 mb-4 box-shadow card-price">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Dépannage - Urgence</h4>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title pricing-card-title bold">€50 <small class="text-muted">/ H</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Dégât des eaux</li>
                        <li>Débouchage</li>
                        <li>Fuite de cumulus</li>
                        <li>Remplacement chasse d'eau (WC)</li>
                        <li>Remplacement robinetterie ...</li>
                    </ul>
                    <a class="btn-globale-2" href="#contact-form">contactez</a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 mb-4 box-shadow card-price">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Installation - remplacement</h4>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title pricing-card-title bold">€50 <small class="text-muted">/ H</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cumulus</li>
                        <li>Chauffe-eau</li>
                        <li>W.C, lavabo, evier</li>
                        <li>Bac à douche, Baignoire ...</li>
                    </ul>
                    <a class="btn-globale-2" href="#contact-form">contactez</a>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 mb-4 box-shadow card-price">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Refontes - créations</h4>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title pricing-card-title bold">€50 <small class="text-muted">/ H</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Salle de bain</li>
                        <li>Cuisine</li>
                        <li>Toilette</li>
                    </ul>
                    <a class="btn-globale-2" href="#contact-form">contactez</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Contact Us</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div>
                        <i class="bi bi-geo-alt"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="bi bi-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div>
                        <i class="bi bi-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section><!-- End Contact Section -->

<script type="module">
    import {
        add_class_scrollWindow
    } from "<?= get_template_directory_uri() . '/assets/js/header_scroll_anime.js'; ?>"
    add_class_scrollWindow();
</script>

<?php get_footer(); ?>