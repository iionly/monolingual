<?php
/**
 * Removing language selection in user settings
 * and set user language to site default language at login
 * if this user is not an admin
 *
 * (c) iionly 2012
 */

elgg_register_event_handler('init', 'system', 'monolingual_init');

function monolingual_init() {
	// React on login event
	elgg_register_event_handler('login:after', 'user', 'monolingual_set_user_language');
}

/**
 * Set the user language to site language at login time to take into account the currently selected site language
 */
function monolingual_set_user_language(\Elgg\Event $event) {
	$object = $event->getObject();
	if ($object instanceof ElggUser) {
		if (!($object->isAdmin())) {
			$site_lang = elgg_get_config('language');
			if ($object->language != $site_lang) {
				$object->language = $site_lang;
				$object->save();
			}
		}
	}

	return true;
}