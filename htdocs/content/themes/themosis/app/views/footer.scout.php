<footer id="footer_main">
    <div class="wrapper clearfix">
        <div class="left">
            <a href="{{ home_url() }}">
                <img class="logo" src="{{ themosis_assets() }}/images/themosisFrameworkLogo.png" alt="Themosis framework"/>
            </a>
        </div>
        <nav class="right">
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'footer-nav',
                    'container'         => false,
                    'menu_class'        => 'nav__main'
                ));
            ?>
        </nav>
    </div>
</footer>
<div id="made-in-belgium">
    <div class="wrapper">
        <a href="http://en.wikipedia.org/wiki/Belgium" target="_blank" title="Made in Belgium">
            <img src="{{ themosis_assets() }}/images/madeInBelgium.png" alt="Themosis - Made in Belgium"/>
        </a>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>