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
            <ul class="nav__main">
                <li><a href="#">Get started</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Studio</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- End main header -->