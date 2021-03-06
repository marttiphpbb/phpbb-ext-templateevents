<?php

/**
* phpBB Extension - marttiphpbb templateevents
* @copyright (c) 2014 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [

	'MARTTIPHPBB_TEMPLATEEVENTS_SHOW'					=> 'Show',
	'MARTTIPHPBB_TEMPLATEEVENTS_HIDE'					=> 'Hide',
	'MARTTIPHPBB_TEMPLATEEVENTS_INSIDE_HTML_HEAD'		=> 'inside html head',
	'MARTTIPHPBB_TEMPLATEEVENTS_PHP_EVENT_NAME'			=> 'PHP Event',
	'MARTTIPHPBB_TEMPLATEEVENTS_PHP_EVENT_COUNT'		=> 'Count',
	'MARTTIPHPBB_TEMPLATEEVENTS_SINCE'					=> 'Since',
	'MARTTIPHPBB_TEMPLATEEVENTS_FILENAME'				=> 'Filename',
]);
