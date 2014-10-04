<?php

/*-----------------------------------------------------------------------------------------*/
// Options
/*-----------------------------------------------------------------------------------------*/
$page = Page::make('th-options', 'Theme Options')->set(array(
    'tabs'  => false
));

$page->addSections(array(
    Section::make('general', 'General')
));

$page->addSettings(array(
    'general'   => array(
        Field::checkbox('launch')
    )
));