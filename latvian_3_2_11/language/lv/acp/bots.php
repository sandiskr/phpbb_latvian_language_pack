<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS' => 'Pārvaldīt robotus',
	'BOTS_EXPLAIN' => '“Roboti”, “zirnekļi” vai “rāpotāji” ir automatizētie aģenti, ko izmanto meklēšanas servisi, lai atjaunotu savas datubāzes. Tie reti korekti izmanto sesijas, tāpēc to darbība var atsaukties uz apmeklētāju skaita aprēķinu, palielināt noslodzi un dažkārt nekorekti nolasīt lapas. Šeit var nodefinēt īpašu lietotāju, lai pārvarētu šīs problēmas.',
	'BOT_ACTIVATE' => 'Aktivizēt',
	'BOT_ACTIVE' => 'Robots aktīvs',
	'BOT_ADD' => 'Pievienot robotu',
	'BOT_ADDED' => 'Sekmīgi pievienots jauns robots.',
	'BOT_AGENT' => 'Robota aģents sakrīt ar',
	'BOT_AGENT_EXPLAIN' => 'Teksts, kas sakrīt ar robota pārlūka aģenta tekstu, atļauta arī daļēja sakritība.',
	'BOT_DEACTIVATE' => 'Deaktivizēt',
	'BOT_DELETED' => 'Robots sekmīgi dzēsts.',
	'BOT_EDIT' => 'Labot robotus',
	'BOT_EDIT_EXPLAIN'	=> 'Here you can add or edit an existing bot entry. You may define an agent string and/or one or more IP addresses (or range of addresses) to match. Be careful when defining matching agent strings or addresses. You may also specify a style and language that the bot will view the board using. This may allow you to reduce bandwidth use by setting a simple style for bots. Remember to set appropriate permissions for the special Bot usergroup.',
	'BOT_LANG' => 'Robota valoda',
	'BOT_LANG_EXPLAIN' => 'Kāda valoda redzama robotam, kad tas skata lapas.',
	'BOT_LAST_VISIT'	=> 'Last visit',
	'BOT_IP' => 'Robota IP adrese',
	'BOT_IP_EXPLAIN'	=> 'Partial matches are allowed, separate addresses with a comma.',
	'BOT_NAME' => 'Robota vārds',
	'BOT_NAME_EXPLAIN'	=> 'Used only for your own information.',
	'BOT_NAME_TAKEN'	=> 'The name is already in use on your board and can’t be used for the Bot.',
	'BOT_NEVER' => 'Nekad',
	'BOT_STYLE' => 'Robota stils',
	'BOT_STYLE_EXPLAIN'	=> 'The style used for the board by the bot.',
	'BOT_UPDATED' => 'Esošais robots sekmīgi atjaunots.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'The bot agent you supplied is similar to the one you are currently using. Please adjust the agent for this bot.',
	'ERR_BOT_NO_IP'				=> 'The IP addresses you supplied were invalid or the hostname could not be resolved.',
	'ERR_BOT_NO_MATCHES'		=> 'You must supply at least one of an agent or IP for this bot match.',

	'NO_BOT'		=> 'Found no bot with the specified ID.',
	'NO_BOT_GROUP'	=> 'Unable to find special bot group.',
));

