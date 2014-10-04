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
    <link rel="shortcut icon" href="{{ themosis_assets() }}/images/favicon.png">
    <link rel="apple-touch-icon" href="{{ themosis_assets() }}/images/apple-touch-icon.png" />
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
<body class="temp">

<div class="cheetin">
    <p>Cheatin' Uh ?</p>
</div>

<?php wp_footer(); ?>
</body>
</html>