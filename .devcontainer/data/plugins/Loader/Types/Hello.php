<?php

/**
 * Custom Post Type
 * @package Loader
 * @version 1.0.0
 * @author Makanaokeakua Edwards | Makri Software Development
 * @copyright 2023 @ Makri Software Development
 * @license Proprietary All Rights Reserved
 * @link https://www.github.com/MakanaMakesStuff/PHPClassLoader
 */

declare(strict_types=1);

namespace Loader\Types;

use Loader\Classes\Base;

class Hello extends Base
{
	public $priority = 1;
	
	public function init()
	{
		add_action('init', [$this, 'registerTypes']);
	}

	public function registerTypes()
	{
		$id = "hello";
		$singular = "Hello";
		$plural = "Hello";
		$supports = ['title', 'author', 'editor'];

		$options = [
			'labels' => [
				'name' => $plural,
				'singular_name' => $singular,
				'menu_name' => $plural,
				'name_admin_bar' => $singular,
				'add_new' => sprintf(__('New %s'), $singular),
				'add_new_item' => sprintf(__('Add New %s'), $singular),
				'new_item' => sprintf(__('New %s'), $singular),
				'edit_item' => sprintf(__('Edit %s'), $singular),
				'view_item' => sprintf(__('View %s'), $singular),
				'all_items' => sprintf(__('%s'), $plural),
				'search_items' => sprintf(__('Search %s'), $plural)
			],
			'show_in_rest' => true,
			'show_ui' => true,
			'show_in_menu' => false,
			'menu_position' => 1,
			'map_meta_cap' => true,
			'capabilities' => [
				'edit_posts' => 'edit_users',
				'edit_others_posts' => 'edit_users',
				'edit_published_posts' => 'edit_users',
				'publish_posts' => 'edit_users',
				'read_posts' => 'edit_users',
				'delete_posts' => 'edit_users',
				'create_posts' => 'edit_users',
				'read_private_posts' => 'edit_users'
			],
			'supports' => $supports,
			'taxonomies' => []
		];

		register_post_type($id, $options);
	}
}
