<footer>
    <div class="followUs">
        <h3>Suivez-nous !</h3>
        <ul>
            <li><a href="https://twitter.com/MuseFrance"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Twitter"></a></li>
            <li><a href="https://www.facebook.com/Musefrance2012/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://www.youtube.com/user/titoufou17"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt="Youtube"></a></li>
        </ul>
    </div>
    <div class="menuFooter">
          <?php
         wp_nav_menu ( array (
           'theme_location' => 'footer',
           'container' => 'ul',
           'menu_class' => 'footer__nav',
         ) ); ?> 
         <?php
         wp_nav_menu ( array (
           'theme_location' => 'footer-secondary',
           'container' => 'ul',
           'menu_class' => 'footer__nav',
         ) ); ?>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>