<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES' => 'Pievieno failus',
	'PLUPLOAD_ADD_FILES_TO_QUEUE' => 'Pievieno failus augšupielādes rindai un nospied sākšanas pogu.',
	'PLUPLOAD_ALREADY_QUEUED' => '%s jau ir ievietots rindā.',
	'PLUPLOAD_CLOSE' => 'Aizvērt',
	'PLUPLOAD_DRAG' => 'Vilkt failus šeit.',
	'PLUPLOAD_DUPLICATE_ERROR' => 'Duplikātu failu kļūda.',
	'PLUPLOAD_DRAG_TEXTAREA' => 'Failus ir iespējams arī pievienot, velkot un nometot tos iekš ziņas loga kastītes.',
	'PLUPLOAD_ERR_INPUT' => 'Neizdevās atvērt ievades datus.',
	'PLUPLOAD_ERR_MOVE_UPLOADED' => 'Neizdevās pārvietot augšupielādēto failu.',
	'PLUPLOAD_ERR_OUTPUT' => 'Neizdevās atvērt izvades datus.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE' => 'Fails ir pārāk liels:',
	'PLUPLOAD_ERR_FILE_COUNT' => 'Failu skaita kļūda.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT' => 'Nepareizs faila paplašinājums:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY' => 'Procesa izpildes laikā izbeidzās pieejamā atmiņa.',
	'PLUPLOAD_ERR_UPLOAD_URL' => 'Augšupielādes saite var būt nepareiza vai neeksistē.',
	'PLUPLOAD_EXTENSION_ERROR' => 'Faila paplašinājuma kļūda.',
	'PLUPLOAD_FILE' => 'Fails: %s',
	'PLUPLOAD_FILE_DETAILS' => 'Fails: %s, izmērs: %d, maksimālais faila izmērs: %d',
	'PLUPLOAD_FILENAME' => 'Faila nosaukums',
	'PLUPLOAD_FILES_QUEUED' => '%d faili rindā',
	'PLUPLOAD_GENERIC_ERROR' => 'Standarta kļūda.',
	'PLUPLOAD_HTTP_ERROR' => 'HTTP kļūda.',
	'PLUPLOAD_IMAGE_FORMAT' => 'Attēla formāts vai nu nepareizs vai nav atbalstīts.',
	'PLUPLOAD_INIT_ERROR' => 'Sākšanas kļūda.',
	'PLUPLOAD_IO_ERROR' => 'Ievades kļūda.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR' => 'Drošības kļūda.',
	'PLUPLOAD_SELECT_FILES' => 'Izvēlēties failus',
	'PLUPLOAD_SIZE' => 'Izmērs',
	'PLUPLOAD_SIZE_ERROR' => 'Faila izmēra kļūda.',
	'PLUPLOAD_STATUS' => 'Statuss',
	'PLUPLOAD_START_UPLOAD' => 'Sākt augšupielādi',
	'PLUPLOAD_START_CURRENT_UPLOAD' => 'Sākt rindu ar augšupielādēm',
	'PLUPLOAD_STOP_UPLOAD' => 'Apturēt augšupielādi',
	'PLUPLOAD_STOP_CURRENT_UPLOAD' => 'Apturēt notiekošo augšupielādi',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED' => 'Augšupielādēti %d/%d faili',
));

