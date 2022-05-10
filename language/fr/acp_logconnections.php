<?php
/**
 *
 * @package Log Connections
 * @copyright (c) 2017 david63
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * DEVELOPERS PLEASE NOTE
 *
 * All language files should use UTF-8 as their encoding and the files must not contain a BOM.
 *
 * Placeholders can now contain order information, e.g. instead of
 * 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
 * translators to re-order the output of data while ensuring it remains correct
 *
 * You do not need this where single placeholders are used, e.g. 'Message %d' is fine
 * equally where a string contains only two placeholders which are used to wrap text
 * in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
 *
 * Some characters you may want to copy&paste:
 * ’ » “ ” …
 *
 */

$lang = array_merge($lang, [
	'LOG_BROWSER' 				=> 'Journaliser le navigateur de l\'utilisateur',
	'LOG_BROWSER_EXPLAIN' 		=> 'Inclure les informations du navigateur de l\'utilisateur dans l\'entrée de journal pour les connexions utilisateur.',
	'LOG_CONNECTION' 			=> 'Journal des connexion',
	'LOG_CONNECTION_EXPLAIN' 	=> 'Créez une entrée de journal chaque fois qu\'un utilisateur se connecte au forum.',
	'LOG_CONNECTIONS_EXPLAIN'	=> 'Ici, vous pouvez définir les options relatives au type de connexion que vous souhaitez journaliser.',
	'LOG_CONNECTIONS_OPTIONS' 	=> 'Options de connexion au journal',
	'LOG_FAILED' 				=> 'Journaliser les connexions échouées',
	'LOG_FAILED_EXPLAIN' 		=> 'Créez une entrée de journal chaque fois qu\'un utilisateur fait une tentative infructueuse de connexion au forum.',
	'LOG_LOGOUT' 				=> 'Journaliser les déconnexions',
	'LOG_LOGOUT_EXPLAIN' 		=> 'Créez une entrée de journal chaque fois qu\'un utilisateur se déconnecte du forum.',
	'LOG_NEW_USER' 				=> 'Journaliser un nouvel utilisateur',
	'LOG_NEW_USER_EXPLAIN' 		=> 'Créer une entrée de journal chaque fois qu\'un nouvel utilisateur s\'inscrit sur le forum.',
]);
