Monolingual for Elgg 4.0 and newer Elgg 4.X
===========================================

Latest Version: 4.0.0  
Released: 2022-05-28  
Contact: iionly@gmx.de  
Website: https://github.com/iionly  
License: GNU General Public License version 2  
Copyright: (C) iionly 2012


Description
-----------

This plugin removes the option for users to select their preferred site language in user settings. Therefore, you can make sure that all users of your site only see the same default site language and it will also be unnecessary to remove the core English language files, if you don't want your users to be able to select English as site language.

In addition to removing the language selection option in user settings this plugin also sets the user language to the currently selected site language at login (that's not done by Elgg core 4.x even if the other features the Monolingual plugin offers are provided by Elgg core 4.0 or newer by now). This is done to take into account that existing users might have already selected a language different from the site language and also to allow changing of the site language at any time.

The execption to the language restriction are admins. They still can select their preferred language in their user settings. So, admins can select a site language different to the default site language.


Installation
------------

1. If you have a previous version of the Monolingual plugin installed, first remove the old monolingual plugin folder from your mod directory before copying/extracting the new version to your server,
2. Copy the monolingual plugin folder into you mod folder,
3. Enable the Monolingual plugin in the admin section of your site.


Suggestions (for Elgg 4.0 or newer)
-----------------------------------

1. On Elgg 4.0 or newer uncomment the following line you find in elgg-config/settings.php

// $CONFIG->language_detect_from_browser = true;

and set it to

$CONFIG->language_detect_from_browser = false;

Otherwise it might happen that site visitors who are not logged in see your site in a language other than the language you've selected as site language in the admin area of your Elgg site. If you ask me, this behaviour would contradict the intention of using the Monolingual plugin in the first place.

2. On Elgg 4.1 or newer set the option "Who can change the language" to be found on the basic site settings page to "Everyone". Otherwise, the Monolingual plugin won't be able to restrict the option to change a language from the user settings page as it used to be able to pre- Elgg 4.1+. If the settings is set to "Everyone" the Monolingual plugin still takes care that non-admin users won't ne able to change the language they see the site in to something other than the selected site language).
