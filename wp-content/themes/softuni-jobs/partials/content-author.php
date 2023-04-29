Hi from the partials author

<li class="job-card">
    <div class="job-primary">
        <h2 class="job-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="job-meta">
            <span class="meta-date"> Posted on <?php echo get_the_date("N. M. Y") ?> </span>
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