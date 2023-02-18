<?php get_header(); ?>

<div class="default_page_template">
	<div class="hero-default-page hero-globale-page">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>