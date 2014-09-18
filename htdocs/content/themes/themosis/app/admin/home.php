<?php

/*-----------------------------------------------------------------------------------------*/
// Home page
/*-----------------------------------------------------------------------------------------*/
$page = get_page_by_title('Home');

if (is_a($page, 'WP_Post') && themosis_is_post($page->ID))
{
    $hero = Metabox::make('Hero', 'page')->set(array(

        Field::text('hero-title', array(
            'title'     => __('Title')
        )),
        Field::text('hero-baseline', array(
            'title'     => __('Baseline')
        )),
        Field::text('hero-button-text', array(
            'title'     => __('Button text')
        )),
        Field::select('hero-button-url', array(
            array(
                'none' => __('- None -'),
        ) + PageModel::pageSelection()), false, array(
            'title'     => __('Button Link')
        )),
        Field::media('hero-image', array(
            'title'     => __('Image')
        ))

    ));

    $hero->validate(array(
        'hero-title'    => array('textfield'),
        'hero-baseline' => array('textfield'),
        'hero-button-text'  => array('textfield')
    ));

    $features = Metabox::make('Features', 'page')->set(array(

        Field::text('features-title', array(
            'title'     => __('Title')
        )),
        Field::infinite('features', array(
            Field::text('title'),
            Field::textarea('text')
        ), array(
            'limit'     => 4
        )),
        Field::text('features-more-title', array(
            'title'     => __('More title')
        )),
        Field::textarea('features-more', array(
            'title'     => __('Other features')
        )),
        Field::text('features-button-text', array(
            'title'     => __('Button text')
        )),
        Field::select('features-button-link', array(
            array('none' => __('- None -')) + PageModel::pageSelection()
        ), false, array(
            'title'     => __('Button link')
        ))

    ));

    $features->validate(array(
        'features-title'    => array('textfield'),
        'features'          => array(
            'title'     => array('textfield'),
            'text'      => array('textarea')
        ),
        'features-more-title'   => array('textfield'),
        'features-more'         => array('textarea'),
        'features-button-text'  => array('textfield')
    ));

    $social = Metabox::make('Social', 'page')->set(array(
        Field::text('social-newsletter', array(
            'title'     => __('Title newsletter')
        )),
        Field::text('social-twitter', array(
            'title'     => __('Title Twitter')
        ))
    ));

    $social->validate(array(
        'social-newsletter'     => array('textfield'),
        'social-twitter'        => array('textfield')
    ));
}

add_action('init', function() use ($page){

    if (is_a($page, 'WP_Post') && themosis_is_post($page->ID))
    {
        remove_post_type_support('page', 'editor');
    }

});