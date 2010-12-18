<?php
/**
 * Upload and crop an avatar page
 */

// Only logged in users
gatekeeper();

$title = elgg_echo('avatar:edit');

$content = elgg_view('core/avatar/upload', array('entity' => elgg_get_page_owner()));
$content .= elgg_view('core/avatar/crop', array('entity' => elgg_get_page_owner()));

$params = array(
	'content' => $content,
	'title' => $title,
);
$body = elgg_view_layout('one_sidebar', $params);

echo elgg_view_page($title, $body);
