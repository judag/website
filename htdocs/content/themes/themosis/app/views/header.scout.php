<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="//use.typekit.net/ouo8bql.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
    <script src="{{ themosis_assets() }}/js/vendor/modernizr.min.js"></script>
    @if(!is_user_logged_in())
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-44361257-2', 'auto');
            ga('send', 'pageview');

        </script>
    @endif
</head>
<body <?php body_class(); ?>>
<!-- Main header -->
<header id="header__main">
    <div class="wrapper clearfix">
        <div class="left">
            <a href="{{ home_url() }}">
                <img class="logo" src="{{ themosis_assets() }}/images/themosisFrameworkLogo.png" alt="Themosis framework"/>
            </a>
        </div>
        <nav class="right">
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header-nav',
                    'container'         => false,
                    'menu_class'        => 'nav__main'
                ));
            ?>
        </nav>
    </div>
</header>
<!-- End main header -->