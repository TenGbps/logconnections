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
	'ERROR_LOGIN_ACTIVE' 			=> '<strong>L\'utilisateur inactif a tenté de se connecter</strong>',
	'ERROR_LOGIN_ATTEMPTS' 			=> '<strong>L\'utilisateur a dépassé le nombre de tentatives de connexion</strong>',
	'ERROR_LOGIN_BREAK' 			=> '<strong>La connexion de l\'utilisateur a échoué</strong>',
	'ERROR_LOGIN_PASSWORD' 			=> '<strong>L\'utilisateur a saisi un mot de passe incorrect</strong>',
	'ERROR_LOGIN_PASSWORD_CONVERT'	=> '<strong>Erreur de conversion du mot de passe</strong>',
	'ERROR_LOGIN_UNKNOWN' 			=> '<strong>Une erreur de connexion inattendue (%1$s) s\'est produite</strong><br>» %2$s',
	'ERROR_LOGIN_USERNAME' 			=> '<strong>Un nom d\'utilisateur invalide a été entré</strong><br>» %1$s',

	'LOG_AUTO_LOGIN' 				=> '<strong>Utilisateur connecté automatiquement</strong>',
	'LOG_AUTO_LOGIN_BROWSER' 		=> '<strong>Utilisateur connecté automatiquement</strong><br>» %1$s',
	'LOG_CONNECTIONS' 				=> 'Journal des connexions',
	'LOG_CONNECTIONS_LOG' 			=> '<strong>Paramètres de journaux de connexion mis à jour</strong>',
	'LOG_NEW_USER_CREATED' 			=> '<strong>Nouvel utilisateur créé</strong><br>» %1$s<br>» %2$s',
	'LOG_SUCCESSFUL' 				=> '<strong>L\'utilisateur s\'est connecté avec succès</strong>',
	'LOG_SUCCESSFUL_BROWSER' 		=> '<strong>L\'utilisateur s\'est connecté avec succès</strong><br>» %1$s',
	'LOG_USER_LOGOUT' 				=> '<strong>Utilisateur déconnecté</strong>',

	'MANAGE_DEFAULTS' 				=> 'Gérer les paramètres',

	'NO_PASSWORD_ENTERED'			=> '<strong>Aucun mot de passe saisi</strong>',

	'UKNOWN_STATUS_ERROR' 			=> '<strong>Une erreur de connexion inconnue s\'est produite</strong><br>» %1$s',
]);
