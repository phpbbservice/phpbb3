<?php
/**
*
* viewtopic [Dutch]
*
* @package language
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'APPROVE'								=> 'Goedkeuren',
	'ATTACHMENT'						=> 'Bijlage',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'De bijlage functie is uitgeschakeld.',

	'BOOKMARK_ADDED'		=> 'Onderwerp succesvol als bladwijzer gemaakt.',
	'BOOKMARK_ERR'			=> 'Onderwerp als bladwijzer maken mislukt. Probeer nogmaals.',
	'BOOKMARK_REMOVED'		=> 'Bladwijzer onderwerp succesvol verwijderd.',
	'BOOKMARK_TOPIC'		=> 'Onderwerp bladwijzeren',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Verwijder van bladwijzers',
	'BUMPED_BY'				=> 'Laatst omhoog gehaald door %1$s op %2$s.',
	'BUMP_TOPIC'			=> 'Onderwerp omhoog halen',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Verwijder onderwerp',
	'DELETED_INFORMATION'	=> 'Verwijderd door %1$s op %2$s',
	'DISAPPROVE'					=> 'Afkeuren',
	'DOWNLOAD_NOTICE'		=> 'Je hebt niet de benodigde permissies om de bijlagen te bekeken van dit bericht.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Laatst gewijzigd door %2$s op %3$s, %1$d keer in totaal gewijzigd.',
		2	=> 'Laatst gewijzigd door %2$s op %3$s, %1$d keer in totaal gewijzigd.',
	),
	'EMAIL_TOPIC'			=> 'E-mail vriend',
	'ERROR_NO_ATTACHMENT'	=> 'De geselecteerde bijlage bestaat niet meer.',

	'FILE_NOT_FOUND_404'	=> 'Het bestand <strong>%s</strong> bestaat niet meer.',
	'FORK_TOPIC'			=> 'Kopieer onderwerp',
	'FULL_EDITOR'			=> 'Volledige bewerker &amp; Voorbeeld',

	'LINKAGE_FORBIDDEN'		=> 'Je hebt niet de authorisatie om van of naar deze site te koppelen, downloaden of te bekijken.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Je bent op de hoofte gebracht van dit onderwerp, meld je aan om het te bekijken.',
	'LOGIN_VIEWTOPIC'		=> 'De site benodigd je dat je aangemeld en geregistreerd bent om dit onderwerp te kunnen bekijken.',

	'MAKE_ANNOUNCE'				=> 'Verander naar “Aankondiging”',
	'MAKE_GLOBAL'				=> 'Verander naar “Algemeen”',
	'MAKE_NORMAL'				=> 'Verander naar “standaard onderwerp”',
	'MAKE_STICKY'				=> 'Verander naar “Sticky”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Je mag <strong>%d</strong> optie selecteren',
		2	=> 'Je mag tot <strong>%d</strong> opties selecteren',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'De bijlage <strong>%s</strong> is niet meer beschikbaar',
	'MOVE_TOPIC'				=> 'Verplaats onderwerp',

	'NO_ATTACHMENT_SELECTED'=> 'Je hebt geen bijlage geselecteerd om te bekijken of om te downloaden.',
	'NO_NEWER_TOPICS'		=> 'Er zijn geen nieuwere onderwerpen in dit forum.',
	'NO_OLDER_TOPICS'		=> 'Er zijn geen oudere onderwerpen in dit forum.',
	'NO_UNREAD_POSTS'		=> 'Er zijn geen nieuwe ongelezen berichten voor dit onderwerp.',
	'NO_VOTE_OPTION'		=> 'Je moet een optie specificeren tijdens het stemmen.',
	'NO_VOTES'				=> 'Geen stemmen',

	'POLL_ENDED_AT'			=> 'Peiling eindigde op %s',
	'POLL_RUN_TILL'			=> 'Peiling loopt tot %s',
	'POLL_VOTED_OPTION'		=> 'Je hebt gestemd voor deze optie',
	'POST_DELETED_RESTORE'	=> 'Dit bericht is verwijderd. Het kan teruggebracht worden.',
	'PRINT_TOPIC'			=> 'Print weergave',

	'QUICK_MOD'				=> 'Quick-mod gereedschap',
	'QUICKREPLY'			=> 'Snelle reactie',
	'QUOTE'					=> 'Quote',

	'REPLY_TO_TOPIC'		=> 'Reageer op onderwerp',
	'RESTORE'				=> 'Terugbrengen',
	'RESTORE_TOPIC'			=> 'Onderwerp terugbrengen',
	'RETURN_POST'			=> '%sGa terug naar bericht%s',

	'SUBMIT_VOTE'			=> 'Verstuur stem',

	'TOPIC_TOOLS'			=> 'Onderwerp gereedschap',
	'TOTAL_VOTES'			=> 'Totaal aantal stemmen',

	'UNLOCK_TOPIC'			=> 'Open onderwerp',

	'VIEW_INFO'				=> 'Bericht details',
	'VIEW_NEXT_TOPIC'		=> 'Volgend onderwerp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Vorig onderwerp',
	'VIEW_RESULTS'			=> 'Bekijk resultaten',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d bericht',
		2	=> '%d berichten',
	),
	'VIEW_UNREAD_POST'		=> 'Eerst ongelezen bericht',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Je stem is verwerkt.',
	'VOTE_CONVERTED'		=> 'Veranderen van stemmen wordt niet ondersteund voor geconverteerde peilingen.',

));
