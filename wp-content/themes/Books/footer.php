<footer class="footer">
    <div class="container">
        <div class="footer-menu">
            <div class="footer-menu__left">
                <?php echo get_option('options_copyright') ?>
            </div>


            <div class="footer-menu__center">
                <ul>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer',
                        'container'       => null,
                        'menu_class'      => 'footer-menu__center',
                        'menu_id'         => '',
                    ] );?>
<!--                    <li><a href="#">About Us</a></li>-->
<!--                    <li><a href="#">Privacy Policy</a></li>-->
<!--                    <li><a href="#">Cookie Policy</a></li>-->
<!--                    <li><a href="#">Terms of Use</a></li>-->
<!--                    <li><a href="#popup" class="popup-link">Contact Us</a></li>-->
                </ul>
            </div>
            <div class="footer-menu__right">
                <ul>
                    <li>
                        <a href="<?php echo get_option('options_facebook') ?>" class="social">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('options_instagram') ?>" class="social">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_option('options_twitter') ?>" class="social">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>


<button class="btn-top" title="Go to top"><i class="fas fa-angle-up"></i></button>


<div id="popup" class="mfp-hide popup">
    <div class="popup__header">
        <img src=" <?php echo wp_get_attachment_url(get_option('options_image_contact_us'));?>" alt="">
        <div class="popup__header-text">
            <div class="popup__header-up">GOODBOOK</div>
            <div class="popup__header-down">Contact Us</div>
        </div>
    </div>
    <div class="footer-menu__right popup-social">
        <ul>
            <li>
                <a href="<?php echo get_option('options_facebook') ?>" class="social">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_option('options_instagram') ?>" class="social">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="<?php echo get_option('options_twitter') ?>" class="social">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="popup-message">Feel like saying something? Leave us a message.</div>
<!--    --><?php //echo do_shortcode('[contact-form-7 id="69" title="Контактная форма 1"]') ?>

    <form action="" class="popup-form js_send_form">
        <input type="text" placeholder="Your name *" class="js_name">
        <input type="text" placeholder="Your e-mail *" class="js_mail">
        <textarea name="Text1" cols="40" rows="5" placeholder="Your message *" class="js_message"></textarea>
        <div class="checkbox">
            <input class="checkbox__input js_checkbox" type="checkbox" id="checkbox_1">
            <label class="checkbox__label" for="checkbox_1">By using this form you agree with the storage and handling of your data by this website. Check privacy policy <a href="#">here</a></label>
        </div>
        <button type="submit" class="send-button familyYesevaOne send">Send</button>
    </form>
</div>
<script>
    window.ajax = '<?php echo admin_url("admin-ajax.php") ?>';
</script>
<?php wp_footer(); ?>

</body>

</html>