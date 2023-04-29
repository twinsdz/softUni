<?php get_header() ?>

<h1> <?php the_archive_title(); ?> </h1>

<?php //if ( category_description() ) { ?>
<div><?php // echo category_description(); ?> </div>
<?php // } ?>

<?php if (have_posts()) : ?>
<ul class="jobs-listing">

<?php while (have_posts()) : ?>
<?php the_post(); ?>

<li class="job-card">
<div class="job-primary">
	<h2 class="job-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="job-meta">
		<a class="meta-company" href="#">Company Awesome Ltd.</a>
		<!-- <span class="meta-date"> Posted on <?php // echo get_the_date("N. M. Y") ?> </span> -->
	</div>
	<div class="job-details">
		<span class="job-location">The Hague (The Netherlands)</span>
		<span class="job-type">Contract staff</span>
	</div>
</div>
<div class="job-logo">
	<div class="job-logo-box">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('job-thumb') ?>
		<?php else : ?>
			<img src="https://i.imgur.com/ZbILm3F.png" alt="">
		<?php endif; ?>
	</div>
</div>
</li>

<?php endwhile; ?>
</ul>

<?php else: ?>

<?php _e( 'No posts', 'softuni' ) ?>

<?php endif; ?>

<?php get_footer() ?>