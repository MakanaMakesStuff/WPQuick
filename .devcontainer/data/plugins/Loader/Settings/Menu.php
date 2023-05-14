<?php

/**
 * Menu
 * @package Loader
 * @version 1.0.0
 * @author Makanaokeakua Edwards | Makri Software Development
 * @copyright 2023 @ Makri Software Development
 * @license Proprietary All Rights Reserved
 * @link https://www.github.com/MakanaMakesStuff/PHPClassLoader
 */

declare(strict_types=1);

namespace Loader\Settings;

use Loader\Classes\Base;

class Menu extends Base
{
	public function init()
	{
		add_action('admin_menu', [$this, 'addMenu']);
	}

	function addMenu()
	{
		add_menu_page(__('Loader'), __('Loader'), 'manage_options', 'loader-menu-page', 'loader_page', '', 0);
		add_submenu_page('loader-menu-page', __('Hello'), __('Hello'), 'manage_options', 'edit.php?post_type=hello', '', 0);
	}
}
