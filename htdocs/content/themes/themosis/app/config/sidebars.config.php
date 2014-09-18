<?php

return array(

	/*
	* Edit this file to add widget sidebars to your theme. 
	* Place WordPress default settings for sidebars.
	* Add as many as you want, watch-out your commas!
	*/
	array(

		'name'			=> __('Documentation sidebar', THEMOSIS_THEME_TEXTDOMAIN),
		'id'			=> 'docs-sidebar',
		'description'	=> __('Area of documentation sidebar', THEMOSIS_THEME_TEXTDOMAIN),
		'before_widget'	=> '<div class="sidebar__widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'

	)

);