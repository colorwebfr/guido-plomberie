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
            </div>
            <div class="description">
                <p><?= get_field('description_de_la_realisation'); ?></p>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>