<?php
/**
 * Removing language selection in user settings
 * and set user language to site default language at login
 * if this user is not an admin
 *
 * (c) iionly 2012-2014
 */

elgg_register_event_handler('init', 'system', 'monolingual_init');

function monolingual_init() {
	// React on login event
	elgg_register_event_handler('login:after', 'user', 'monolingual_set_user_language');
}

/**
 * Set the user language to site language at login time to take into account the currently selected site language
 */
function monolingual_set_user_language($event, $object_type, $object) {

	if ($event == 'login:after' && $object_type=='user' && $object instanceof ElggUser) {

		if (!(elgg_is_admin_user($object->guid))) {

			if (elgg_get_config('language')) {
				$object->language = elgg_get_config('language');
				$object->save();
			}
		}
	}

	return true;
}