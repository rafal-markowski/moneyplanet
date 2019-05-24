    <section class="regulations">
        <div class="container">
            <?php dynamic_sidebar('Regulamin'); ?>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__logo">
            <a href="<?php echo get_site_url(); ?>" class="logo">
                <img class="mr-2 mr-lg-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                Money
                <span class="logo__span ml-1 ml-lg-2">Planet</span>
            </a>
        </div>
        <div class="container">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'footer__menu'
                ));
            ?>
            <?php if(is_front_page()): ?>
                <a class="footer__submit form__submit" href="#" id="scroll-top">WEŹ POŻYCZKĘ</a>
            <?php else: ?>
                <a class="footer__submit form__submit" href="<?php echo get_site_url(); ?>">WEŹ POŻYCZKĘ</a>
            <?php endif; ?>
        </div>
    </footer>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <?php if(is_page_template('page-homepage.php') || is_page_template('page-pozyczka-ratalna.php')): ?>
        <script src="<?php echo get_template_directory_uri();?>/assets/scripts/button.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/scripts/rangeslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/scripts/form-homepage.js"></script>
    <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>