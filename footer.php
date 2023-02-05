    </div>

    <!-- CTA ask devis if other page that home -->
    <?php
    if (!is_front_page()) {
        get_template_part('templates-parts/cta-ask-devis');
    }
    ?>

    <!-- Template parts popin -->
    <?php get_template_part('templates-parts/popin', 'contact'); ?>

    <footer>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Section footer superieur -->
        <div class="info-footer">
            <div class="container">
                <div class="row align-center">
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <h3>Les pages</h3>
                            <ul>
                                <li><a href="<?= home_url(); ?>">Plomberie Guido</a></li>
                                <li><a href="<?= home_url() . '/realisations'; ?>">Nos réalisation</a></li>
                                <li><a class="contact-popin-click" href="#">Demandez un devis</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <h3>Secteur principal</h3>
                            <ul>
                                <li>Antibes</li>
                                <li>Villeneuve-Loubet</li>
                                <li>La Colle-sur-Loup</li>
                                <li>Cagnes-sur-Mer</li>
                                <li>Saint-Laurent</li>
                                <li>Nice</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <h3>Secteur secondaire</h3>
                            <ul>
                                <li>Cannes et environs</li>
                                <li>Le Cannet</li>
                                <li>Grasse</li>
                                <li>Beaulieu</li>
                                <li>Menton</li>
                                <li>Monaco</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <h3>Infos légales</h3>
                            <ul>
                                <li><a href="#">Mentions légales</a></li>
                                <li><a href="#">Politiques de confidentialités</a></li>
                                <li><a href="#">Gestion des Cookies</a></li>
                                <li><a href="mailto:mon-mail@exemple.fr">mon-mail@exemple.fr</a></li>
                                <li><a href="tel:+33619387998">+336 193 879 98</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrightBar">
            <div class="container">
                <p>&copy;<?= date(' - Y - '); ?>Plomberie Guido - By <a href="https://colorweb.fr" target="_blank">Colorweb.fr</a></p>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>

    <script type="module">
        import {
            popinContact,
            redirect_after_submit
        } from '<?= get_template_directory_uri() . '/assets/js/module.js'; ?>';
        popinContact();
        redirect_after_submit();
    </script>

    </body>

    </html>