<?php
/**
 * Provide a way of setting your language prefs
 *
 * @package Elgg
 * @subpackage Core
 *
 * Removing language selection in user settings for non-admins by overwriting core view
 *
 * (c) iionly 2012
 *
 */

$user = elgg_get_page_owner_entity();

if ($user && elgg_is_admin_user($user->guid)) {
	$title = elgg_echo('user:set:language');
	$content = elgg_echo('user:language:label') . ': ';
	$content .= elgg_view("input/select", array(
		'name' => 'language',
		'value' => $user->language,
		'options_values' => get_installed_translations()
	));
	echo elgg_view_module('info', $title, $content);
} elseif ($user && elgg_get_config('language')) {
	echo elgg_view('input/hidden', array('name' => 'language', 'value' => elgg_get_config('language')));
}
