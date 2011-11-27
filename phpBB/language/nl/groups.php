<?php
/**
*
* groups [Dutch]
*
* @package language
* @version $Id: groups.php 197 2009-10-08 19:50:08Z Raimon $
* @copyright (c) 2005 phpBB Group, 2007 phpBBservice.nl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ALREADY_DEFAULT_GROUP'		=> 'De geselecteerde groep is al jouw standaardgroep.',
	'ALREADY_IN_GROUP'			=> 'Je bent al lid van de geselecteerde groep.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Je hebt al aangegeven lid te willen worden van de geselecteerde groep.',

	'CANNOT_JOIN_GROUP'			=> 'Je kan niet lid worden van deze groep. Je kan alleen lid woden van open en vrije open groepen.',
	'CANNOT_RESIGN_GROUP'		=> 'Je kan je groepslidmaatschap niet opzeggen van deze groep. Je kan alleen je groepslidmaatschap opzeggen van open en vrije groepen.',
	'CHANGED_DEFAULT_GROUP'		=> 'Standaardgroep is succesvol gewijzigd.',

	'GROUP_AVATAR'						=> 'Groeps-avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Weet je zeker dat je jouw standaard lidmaatschap wilt wijzigen naar de groep “%s”?',
	'GROUP_CLOSED'						=> 'Gesloten',
	'GROUP_DESC'						=> 'Groepsbeschrijving',
	'GROUP_HIDDEN'						=> 'Verborgen',
	'GROUP_INFORMATION'					=> 'Informatie over gebruikersgroep',
	'GROUP_IS_CLOSED'					=> 'Dit is een gesloten groep, nieuwe gebruikers kunnen alleen lid worden van deze groep op uitnodiging van de groepsleider.',
	'GROUP_IS_FREE'						=> 'Dit is een vrije open groep, alle nieuwe leden zijn welkom.',
	'GROUP_IS_HIDDEN'					=> 'Dit is een verborgen groep, alleen leden van deze groep kunnen hun lidmaatschap van deze groep zien.',
	'GROUP_IS_OPEN'						=> 'Dit is een open groep, gebruikers kunnen lid worden.',
	'GROUP_IS_SPECIAL'					=> 'Dit is een speciale groep, speciale groepen worden beheerd door de beheerders van dit forum.',
	'GROUP_JOIN'						=> 'Lid worden',
	'GROUP_JOIN_CONFIRM'				=> 'Weet je zeker dat je lid wilt worden van de geselecteerde groep?',
	'GROUP_JOIN_PENDING'				=> 'Lidmaatschap aanvragen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Weet je zeker dat je lidmaatschap voor de geselecteerde groep wilt aanvragen?',
	'GROUP_JOINED'						=> 'Je bent succesvol lid geworden van de geselecteerde groep.',
	'GROUP_JOINED_PENDING'				=> 'Je hebt succesvol de lidmaatschap voor de geselecteerde groep aangevraagd. Het wachten is nu op de groepsleider of die jouw lidmaatschap goedkeurd.',
	'GROUP_LIST'						=> 'Gebruikers beheren',
	'GROUP_MEMBERS'						=> 'Groepsleden',
	'GROUP_NAME'						=> 'Groepsnaam',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Groepsrang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Groepslidmaatschap opzeggen',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Weet je zeker dat je jouw lidmaatschap van de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGN_PENDING'				=> 'Een wachtend groepslidmaatschap opzeggen',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Weet je zeker dat je jouw wachtend lidmaatschap van de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Je bent succesvol van de geselecteerde groep verwijderd.',
	'GROUP_RESIGNED_PENDING'			=> 'Je wachtend lidmaatschap van de geselecteerde groep is succesvol verwijderd.',
	'GROUP_TYPE'						=> 'Groepstype',
	'GROUP_UNDISCLOSED'					=> 'Verborgen groep',
	'FORUM_UNDISCLOSED'					=> 'Verborgen forum(s) modereren',

	'LOGIN_EXPLAIN_GROUP'	=> 'Je moet aangemeld zijn om de groepsdetails te kunnen bekijken.',

	'NO_LEADERS'					=> 'Je bent geen leider van een groep.',
	'NOT_LEADER_OF_GROUP'			=> 'De opgevraagde actie kan niet worden gedaan, omdat je geen leider bent van de geselecteerde groep.',
	'NOT_MEMBER_OF_GROUP'			=> 'De opgevraagde actie kan niet worden gedaan, omdat je geen lid bent van de groep en/of dat je lidmaatschap nog niet is goedgekeurd.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Je kan het lidmaatschap van jouw standaardgroep niet opzeggen.',

	'PRIMARY_GROUP'		=> 'Hoofdgroep',

	'REMOVE_SELECTED'		=> 'Geselecteerde verwijderen',

	'USER_GROUP_CHANGE'			=> 'Van “%1$s” groep naar “%2$s” groep',
	'USER_GROUP_DEMOTE'			=> 'Groepsleiderschap opzeggen',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Weet je zeker dat je het groepsleiderschap van de geselecteerde groep wilt opzeggen?',
	'USER_GROUP_DEMOTED'		=> 'Je hebt succesvol je groepsleiderschap opgezegd.',
));

?>