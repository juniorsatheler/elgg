<?php

namespace Elgg\Blog\Menus;

/**
 * Hook callbacks for menus
 *
 * @since 4.0
 * @internal
 */
class Site {

	/**
	 * Register item to menu
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:site'
	 *
	 * @return \Elgg\Menu\MenuItems
	 */
	public static function register(\Elgg\Hook $hook) {
		$return = $hook->getValue();
		
		$return[] = \ElggMenuItem::factory([
			'name' => 'blog',
			'icon' => 'edit-regular',
			'text' => elgg_echo('collection:object:blog'),
			'href' => elgg_generate_url('default:object:blog'),
		]);
		
		return $return;
	}
}
