<?php get_header() ?>

<div class="body__wrapper body-inner">
    <div class="body-inner__main">
        <div class="homepage">
            <a href="<?php echo site_url() ?>">Homepage</a>
            <span class="homepage__line">/</span>
            <span><?php the_title(); ?></span>
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer() ?>

