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

    $launch = Option::get('th-options', 'launch');

    if ('on' == $launch)
    {
        return View::make('pages.temp');
    }

    return View::make('pages.home');

});

Route::get('page', function(){

    $launch = Option::get('th-options', 'launch');

    if ('on' == $launch)
    {
        return View::make('pages.temp');
    }

    // Prettify
    Asset::add('th-prettify', 'https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js', array(), '1.0');

    return View::make('pages.docs');

});