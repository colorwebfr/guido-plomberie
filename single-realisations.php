<?php get_header(); ?>


<div class="page-content-realisation">

    <?php if (have_posts()) : ?>
        <section class="hero-globale-page-single">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <?php while (have_posts()) : the_post(); ?>

            <div class="container content-single-real">
                <div class="thumb-single-real">
                    <img src=" <?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="">
                    <div class="description">
                        <p><?= get_field('description_de_la_realisation'); ?></p><br>
                        <?php if (get_field('photos_avant_1') && get_field('photos_apres_1')) : ?>
                            <p class="btn-see-aft-bfr">Avant / Après<br>
                                <a href="#travaux"><i class="fa-solid fa-angle-down"></i></a>get_field('description_de_la_realisation')
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php if (get_the_content() != '') : ?>
                <section id="free-content">
                    <div class="container">
                        <div class="content-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if (get_field('photos_avant_1') && get_field('photos_apres_1')) : ?>
                <section id="travaux">
                    <div class="container">
                        <!-- Slider avant -->
                        <?php
                        $slideId = get_field('photos_avant_1');
                        $slideURL = wp_get_attachment_image_src($slideId, 'full')[0];
                        $slideALT = get_post_meta($slideId, '_wp_attachment_image_alt', true);

                        $slideId2 = get_field('photos_avant__2');
                        $slideURL2 = wp_get_attachment_image_src($slideId2, 'full')[0];
                        $slideALT2 = get_post_meta($slideId2, '_wp_attachment_image_alt', true);

                        $slideId3 = get_field('photos_avant__3');
                        $slideURL3 = wp_get_attachment_image_src($slideId3, 'full')[0];
                        $slideALT3 = get_post_meta($slideId3, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="blockSlideReal">
                            <h2 class="title_aft_bfr">Avant</h2>
                            <div class="slider_real">
                                <!-- Item 1 -->
                                <?php if (get_field('photos_avant_1')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slideURL ?>">
                                            <img src="<?= $slideURL; ?>" alt="<?= $slideALT; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <!-- Item 2 -->
                                <?php if (get_field('photos_avant__2')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slideURL2 ?>">
                                            <img src="<?= $slideURL2; ?>" alt="<?= $slideALT2; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <!-- Item 3 -->
                                <?php if (get_field('photos_avant__3')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slideURL3 ?>">
                                            <img src="<?= $slideURL3; ?>" alt="<?= $slideALT3; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Slider après -->
                        <?php
                        $slide_Id = get_field('photos_apres_1');
                        $slide_URL = wp_get_attachment_image_src($slide_Id, 'full')[0];
                        $slide_ALT = get_post_meta($slide_Id, '_wp_attachment_image_alt', true);

                        $slide_Id2 = get_field('photos_apres_2');
                        $slide_URL2 = wp_get_attachment_image_src($slide_Id2, 'full')[0];
                        $slide_ALT2 = get_post_meta($slide_Id2, '_wp_attachment_image_alt', true);

                        $slide_Id3 = get_field('photos_apres_3');
                        $slide_URL3 = wp_get_attachment_image_src($slide_Id3, 'full')[0];
                        $slide_ALT3 = get_post_meta($slide_Id3, '_wp_attachment_image_alt', true);
                        ?>
                        <div class="blockSlideReal">
                            <h2 class="title_aft_bfr">Après</h2>
                            <div class="slider_real_after">
                                <!-- Item 1 -->
                                <?php if (get_field('photos_apres_1')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slide_URL ?>">
                                            <img src="<?= $slide_URL; ?>" alt="<?= $slide_ALT; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <!-- Item 2 -->
                                <?php if (get_field('photos_apres_2')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slide_URL2 ?>">
                                            <img src="<?= $slide_URL2; ?>" alt="<?= $slide_ALT2; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <!-- Item 3 -->
                                <?php if (get_field('photos_apres_3')) : ?>
                                    <div class="slider__item__real">
                                        <a class="portfolio-lightbox" data-gallery="portfolioGallery" href="<?= $slide_URL3 ?>">
                                            <img src="<?= $slide_URL3; ?>" alt="<?= $slide_ALT3; ?>">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php pagination_single();  ?>

<script type="module">
    import {
        sliderRealisation
    } from "<?= get_template_directory_uri() . '/assets/js/module.js' ?>";
    sliderRealisation();
</script>

<?php get_footer(); ?>