<?php

/**
 * @package Loader
 * @version 1.0.0
 */
/*
Plugin Name: Loader
Plugin URI: https://github.com/MakanaMakesStuff/PHPClassLoader
Description: This is an example plugin using a class loader
Author: Makanaokeakua Edwards | Makri Software Development
*/

add_action('init', 'loadClasses', 0);

function loader_page()
{
	echo '<h1>Welcome to the Loader Plugin page!</h1>';
}

function loadClasses()
{
	$base = 'Loader';
	$files = glob(__DIR__ . '/**/*.php', GLOB_BRACE);
	$loaded_classes  = [];

	foreach ($files as $file) {
		if(file_exists($file)) {
			if(strpos($file, 'Classes') != false) {
				require_once($file);
			} else {
				require_once($file);
				$file = str_replace(__DIR__, '', $file);
				$file = preg_replace('/\//', '\\', $file);
				$file = str_replace('.php', '', $file);
				$loaded_classes[] = $base . $file;
			}
		}
	}

	$order = [];

	foreach($loaded_classes as $class) {
		
		if(class_exists($class)) {
			$init = new $class();

			if(property_exists($init, 'priority')) {
				$order[] = [
					'priority' => $init->priority,
					'instance' => $init
				];
			} else {
				$order[] = [
					'priority' => 0,
					'instance' => $init
				];
			}
		} 
	}

	usort($order, function($a, $b) {
		return $a['priority'] - $b['priority'];
	});

	foreach($order as $class) {
		$class['instance']->init();
	}
}
