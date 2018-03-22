<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink iestatījumi',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink ir trešās puses serviss kas diskrēti pelna naudu ar saitēm, ko Tava foruma lietotāji publicē savos ierakstos bez nekādiem apgrūtinājumiem foruma lietojamībā. Kad lietotāji uzspiež uz kādas saites, kas aizved lietotāju prom no Tava foruma un kur galā atrodas kāds pērkams produkts vai apmaksājams serviss, tirgotājs maksā VigLink komisiju no kuras daļa tiek ziedota phpBB projektam. Izvēloties ieslēgt VigLink un ziedošanu phpBB projektam, Tu atbalsti mūsu atvērtā koda projektu un nodrošini tā finansiālo drošību.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Tu vari izmainīt šos iestatījumus jebkurā laikā atverot “<a href="%1$s">VigLink iestatījumu</a>” paneli.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Tevi turpinās pārsūtīt uz šo lapu tik ilgi, kamēr izvēlēsies savus vēlamos parametrus zemāk, nospiežot Apstiprināšanas pogu.',
	'ACP_VIGLINK_ENABLE'			=> 'Ieslēgt VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Ieslēgt VigLink servisu izmantošanu.',
	'ACP_VIGLINK_EARNINGS'			=> 'Pieprasīt savus ieņēmumus (neobligāti)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Tu vari pats iegūt savus ieņēmumus, ja pieteiksies VigLink Convert lietotāja kontam.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink serviss ir izslēgts no phpBB puses.',
	'ACP_VIGLINK_CLAIM'				=> 'Pieprasīt savus ieņēmumus',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Tu vari pieprasīt sava foruma ieņēmumus no VigLink pelnošajām saitēm un neziedot ieņēmumus phpBB projektam. Lai pārvaldītu savu kontu, piesakies “VigLink Convert” lietotāja kontam spiežot uz “Konvertēt kontu”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konvertēt kontu',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Nebija iespējams izveidot VigLink konta konvertēšanas saiti.',
));
