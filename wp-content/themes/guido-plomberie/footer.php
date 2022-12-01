    </div>

    <footer>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Section footer superieur -->
        <div class="info-footer">
            <div class="container">
                <div class="row align-center">
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="content-sup-foot">
                            <?php dynamic_sidebar('footer-4'); ?>
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
    </body>

    </html>