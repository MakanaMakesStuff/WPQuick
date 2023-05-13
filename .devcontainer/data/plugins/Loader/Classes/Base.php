<?php

/**
 * Base Class
 * @package Loader
 * @version 1.0.0
 * @author Makanaokeakua Edwards | Makri Software Development
 * @copyright 2023 @ Makri Software Development
 * @license Proprietary All Rights Reserved
 * @link https://www.github.com/MakanaMakesStuff/PHPClassLoader
 */

declare(strict_types=1);

namespace Loader\Classes;

abstract class Base
{
	public function __constructor()
	{
		// This is a required function on each sub class and will be used to initialize code when our classes get loaded
		$this->init();
	}

	abstract public function init();
}
