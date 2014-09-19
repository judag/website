<?php defined('DS') or die('No direct script access.');

/*
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */
Route::get('front', function(){

    return View::make('pages.home');

});

Route::get('page', function(){

    // Prettify
    Asset::add('th-prettify', 'https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js', array(), '1.0');

    // Sticky sidebar
    Asset::add('th-sticky', 'js/sticky.js', array('jquery'), '1.0', true);

    return View::make('pages.docs');

});