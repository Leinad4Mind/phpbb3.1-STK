<?php
/**
*
* @package Support Toolkit - Test
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @French translation by Galixte (http://www.galixte.com)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'TEST'				=> 'Informations générales',
	'DATABASE_INFO'		=> 'Base de données du serveur',
	'DBMS'				=> 'Type de la base de données',
	'PHP_INFO'			=> 'Informations concernant PHP',
	'MBSTRING_LOADED'	=> 'Fonctions sur les chaînes de caractères multi-octets (l’extension PHP <b> mbstring </b>) est chargée',
	'MBSTRING_NOT_LOADED'				=> 'Fonctions sur les chaînes de caractères multi-octets (l’extension PHP <b> mbstring </b>) n’est pas chargée',
	'ERROR_MBSTRING_NOT_LOADED_EXPLAIN'	=> 'mbstring n’est pas incluse dans la liste des extensions qui sont installées par défaut. Cela signifie que cette extension est par défaut désactivée. Pour utiliser les fonctionnalités de cette extension, vous devez définir sur « enable » ce module dans la configuration de PHP. Besoin de consulter la documentation de <a href="http://php.net/manual/ru/mbstring.configuration.php">PHP</a>.',
));
