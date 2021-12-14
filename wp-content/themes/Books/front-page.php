<?php get_header(); ?>

    <div class="body__wrapper">
        <div class="page-slider" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/header.jpg);">
            <div class="page-slider__opacity"></div>
            <div class="container">
                <div class="page-slider__row">
                    <div class="page-slider__information">
                        <h1 class="page-slider__title"><?php the_field('section_1_header'); ?></h1>
                        <p class="page-slider__subtitle"><?php the_field('section_2_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-main">
            <div class="container">
                <div class="main-top">
                    <h2 class="main-top__title"><?php the_field('section_3_description'); ?></h2>
                    <p class="main-top__subtitle"><?php the_field('section_4_description'); ?></p>
                </div>
                <div class="works-top">
                    <div class="works-top__container">
                        <?php $repeater = get_field_object('best');
//                        var_export($repeater);
                        foreach ($repeater['value'] as $item){
                        ?>
                                <div class="works-top__container__item">
                                    <img src=" <?php echo $item['image']['url']; ?>" alt="">
                                    <h4>
                                        <?php echo $item['title'];?>
                                    </h4>
                                    <p>
                                        <?php echo $item['description'];?>
                                    </p>
                                </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-read">
            <div class="container">
                <div class="read-top">
                    <h2 class="main-top__title"><?php the_field('section_5_title'); ?></h2>
                </div>
            </div>
            <?php $repeater = get_field_object('read');
//            var_export($repeater);
            foreach ($repeater['value'] as $item){
                if ($item['side_display'] == "left"){
                ?>

                <div class="read-main">
                    <div class="read-main__bg" style="background-image: url(<?php echo $item['image']['url'] ;?>"></div>
                    <div class="read-main__column">
                        <h2><?php echo $item['title'] ?>.</h2>
                        <p> <?php echo $item['description'] ?>.</p>
                    </div>
                </div>
                    <?php }
                else{ ?>
                <div class="read-main read-main-end">
                    <div class="read-main__column">
                        <h2><?php echo $item['title'] ?></h2>
                        <p class="read-width"><?php echo $item['description'] ?></p>
                    </div>
                    <div class="read-main__bg" style="background-image: url(<?php echo $item['image']['url'] ;?>"></div>
                </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="fixed-footer">
    <div class="section-download">
        <div class="container">
            <div class="download-main">
                <a href="<?php echo get_option('options_app_store') ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/app-store.png" alt="">
                </a>
                <a href="<?php echo get_option('options_google_play') ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/google-play.png" alt="">
                </a>
                <a href="<?php echo get_option('options_amazon') ?>">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets/img/amazon.png" alt="">
                </a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>