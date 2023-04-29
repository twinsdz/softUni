<?php get_header() ?>

		<?php if (have_posts()) : ?>
			<h2> Latest Posts </h2>
			<ul class="jobs-listing">

				<?php while (have_posts()) : ?>
					<?php the_post(); ?>

					<?php get_template_part( 'partials/content', 'post' ); ?>

				<?php endwhile; ?>
		<?php posts_nav_link(); ?>
			</ul>
		<?php endif; ?>

<?php get_footer() ?>