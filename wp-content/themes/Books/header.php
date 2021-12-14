<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <link rel="shortcut icon" href=" <?php echo get_template_directory_uri();?>/assets/img/favicon.png" type="image/x-icon">
    <title>Goodbook: read & listen summaries</title>
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="container">
        <div class="row header__row">
            <div class="header__left">
                <div class="header-loog-text">
                    <a href="#" class="link-logo">
                        <img src=" <?php echo wp_get_attachment_url(get_option('options_logo'));?>" alt="">
                    </a>
                    <span class="logo-text"><?php echo get_option('options_title_site') ?></span>
                </div>
            </div>
            <div class="header__right">
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <?php wp_nav_menu( [
                        'theme_location'  => 'top',
                        'container'       => null,
                        'menu_class'      => 'header__list',
                        'menu_id'         => '',
                    ] );?>
                </nav>
            </div>
        </div>
    </div>
</header>
