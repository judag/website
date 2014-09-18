<?php

/*-----------------------------------------------------------------------------------------*/
// Assets
/*-----------------------------------------------------------------------------------------*/
// CSS
Asset::add('th-screen', 'css/screen.css', array(), '1.0.0', 'all');

//JS
Asset::add('th-modernizr', 'js/vendor/modernizr.min.js', array(), '2.6.2');
Asset::add('th-prettify', 'https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js', array(), '1.0');

/*-----------------------------------------------------------------------------------------*/
// Enqueue Media/Editor assets
/*-----------------------------------------------------------------------------------------*/
add_action('admin_enqueue_scripts', function(){
    wp_enqueue_media();
});