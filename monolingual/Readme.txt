Monolingual for Elgg 1.9
Latest Version: 1.9.1
Released: 2013-09-12
Contact: iionly@gmx.de
Website: https://github.com/iionly
License: GNU General Public License version 2
Copyright: (C) iionly 2012-2013


This plugin removes the option for users to select their preferred site language in user settings. Therefore, you can make sure that all users of your site only see the same default site language and it will also be unnecessary to remove the core English language files, if you don't want your users to be able to select English as site language.

In addition to removing the language selection option in user settings this plugin also sets the user language to the currently selected site language at login. This is done to take into account that existing users might have already selected a language different from the site language and also to allow changing of the site language at any time.

The execption to the language restriction are admins. They still can select their preferred language in their user settings. So, admins can select a site language different to the default site language.


Installation and configuration:

1. Copy the monolingual plugin folder into you mod folder,
2. Enable the monolingual plugin in the admin section of your site.


Changelog:

1.9.1:

 - Updated for Elgg 1.9.

1.8.1:

 - Avoiding warning message of user's language settings not being saved for normal users when saving user settings.

1.8.0:

 - Initial release.
