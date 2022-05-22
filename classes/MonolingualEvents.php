<?php

class MonolingualEvents {

	/**
	* Set the user language to site language at login time to take into account the currently selected site language
	*/
	public static function monolingual_set_user_language(\Elgg\Event $event) {
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
}