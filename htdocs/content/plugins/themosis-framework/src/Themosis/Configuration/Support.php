<?php
namespace Themosis\Configuration;

use Themosis\Action\Action;

class Support implements ConfigInterface
{
	/**
	 * Save the retrieved datas
	*/
	private $datas;

	/**
	 * The event to dispatch
	*/
	private $event;

    /**
     * The Support constructor.
     */
	public function __construct()
	{
		$this->event = Action::listen('init', $this, 'install');
	}

	/**
	 * Retrieve and set the datas returned
	 * by the include function.
	 * 
	 * @param string $path The configuration file path.
     * @return void
	 */
	public function set($path)
	{
		$this->datas = include($path);
		$this->event->dispatch();
	}

	/**
	 * Run by the 'after_setup_theme' hook.
	 * Execute the "add_theme_support" function from WP
     *
     * @return void
	 */
	public function install()
	{
		if (is_array($this->datas) && !empty($this->datas)) {

			foreach ($this->datas as $feature => $value) {
				if ($value === 'automatic-feed-links') {

					$feature = $value;
					add_theme_support($feature);					

				} else {

					add_theme_support($feature, $value);

				}
			}
		}

	}
}