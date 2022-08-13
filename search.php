<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

        <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header>

                <?php shape_content_nav( 'nav-above' ); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <article class="post">
			            <h2><?php the_title(); ?></h2>
                            <?php the_post_thumbnail(); ?>
                            <p class="post__meta">
                                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                                par <?php the_author(); ?> - <?php comments_number( '0', '1', '%' ); ?>
                            </p>
      		                <?php the_excerpt(); ?>
                            <p>
                                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>            
                            </p>
		            </article>

                <?php endwhile; ?>

                <?php shape_content_nav( 'nav-below' ); ?>

            <?php else : ?>
            <h2 class="titleSearchNoneResult">OOUPS désolé il semblerait que votre recherche n'est pas de résultats</h2>
            <?php endif; ?>

            </div>
        </section>

<?php get_footer(); ?>