<?php get_header(); ?>

<div class="body__wrapper">
    <div class="page-slider" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/header.jpg);">
        <div class="page-slider__opacity"></div>
        <div class="container">
            <div class="page-slider__row">
                <div class="page-slider__information">
                    <h1 class="page-slider__title">Turn reading into your daily habit</h1>
                    <p class="page-slider__subtitle">Easy to read & listen summaries from world's best nonfiction</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-main">
        <div class="container">
            <div class="main-top">
                <h2 class="main-top__title">Why Choose Goodbook</h2>
                <p class="main-top__subtitle">We've carefully selected the best nonfiction books, read them for you and brought together the main ideas.</p>
            </div>
            <div class="works-top">
                <div class="works-top__container">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();?>
                                <div class="works-top__container__item">
                                    <img src=" <?php echo get_template_directory_uri();?>/assets/img/book.png" alt="">
                                    <h4>
                                        <?php the_title();?>
                                    </h4>
                                    <p>
                                        <?php the_content();?>
                                    </p>
                                </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section-read">
        <div class="container">
            <div class="read-top">
                <h2 class="main-top__title">Read anytime, anywhere</h2>
            </div>
        </div>
        <div class="read-main">
            <div class="read-main__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/read1.jpg);"></div>
            <div class="read-main__column">
                <h2>Make the most of your time with reading.</h2>
                <p>There’s no need to waste time when traveling, commuting to work or doing errands. With Goodbook you can fit reading into your daily life with no extra efforts.</p>
            </div>
        </div>
        <div class="read-main read-main-end">
            <div class="read-main__column">
                <h2>Listen to audio summaries while you're on the go.</h2>
                <p class="read-width">Enjoy summaries in the audio format and stay hands-free. Whether you are driving or running in the morning – use this time to learn something new.</p>
            </div>
            <div class="read-main__bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/read2.jpg);"></div>
        </div>
    </div>
</div>
<div class="fixed-footer">
    <div class="section-download">
        <div class="container">
            <div class="download-main">
                <a href="#">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/app-store.png" alt="">
                </a>
                <a href="#">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/google-play.png" alt="">
                </a>
                <a href="#">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/amazon.png" alt="">
                </a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>