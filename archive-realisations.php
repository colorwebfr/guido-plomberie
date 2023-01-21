<?php

/**
 * The template for displaying archive pages réalisations
 */
?>

<?php get_header(); ?>

<div class="page-content-realisations">

    <section class="hero-globale-page">
        <div class="container">
            <h1>Plomberie Guido <br>réalisations</h1>
        </div>
    </section>

    <div class="list-realisation">
        <?php if (have_posts()) : ?>
            <div class="realisation">
                <div class="container">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-realisations-posts">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="realisation-img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="text-realisation-posts">
                                            <h3><?php wp_trim_words(the_title(), 3, '...'); ?></h3>
                                            <p><?= wp_trim_words(get_field('description_de_la_realisation'), 15, '...'); ?></p><br>
                                            <span class="btn-read-more">Voir la réalisation</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php posts_nav_link(); ?>
                </div>
            </div>
        <?php else : ?>
            <h2>Désolé, il semblerait que les réalisations ne soient pas encore publiées<br>revenez plus tard !</h2>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>