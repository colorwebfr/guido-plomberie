<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post-realisations">

            <?php the_post_thumbnail(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="post_realisations_content">

                <?php the_content(); ?>

            </div>

        </article>

    

<?php endwhile;
endif; ?>

<?php get_footer(); ?>