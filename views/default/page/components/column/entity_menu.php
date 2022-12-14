<?php
/**
 * Render an entity menu element
 *
 * @uses $vars['item']      The item being rendered
 * @uses $vars['item_vars'] Vars received from the page/components/table view
 * @uses $vars['type']      The item type or ""
 */

$item = elgg_extract('item', $vars);
if (!$item instanceof \ElggEntity) {
	return;
}

echo elgg_view_menu('entity', [
	'entity' => $item,
	'prepare_dropdown' => true,
	'add_user_hover_admin_section' => (bool) elgg_extract('add_user_hover_admin_section', $vars, false),
]);
