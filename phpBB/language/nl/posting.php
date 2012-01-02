<?php
/**
*
* posting [Dutch]
*
* @package language
* @version $Id: posting.php 255 2009-12-13 14:23:54Z Raimon $
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
	'ADD_ATTACHMENT'			=> 'Bijlage toevoegen',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Wil je één of meerdere bijlagen toevoegen? Voer dan de gegevens hieronder in',
	'ADD_FILE'					=> 'Bijlage toevoegen',
	'ADD_POLL'					=> 'Peiling toevoegen',
	'ADD_POLL_EXPLAIN'			=> 'Wil je geen peiling toevoegen? Laat deze velden dan leeg.',
	'ALREADY_DELETED'			=> 'Sorry, maar dit bericht is al verwijderd.',
	'ATTACH_QUOTA_REACHED'		=> 'Sorry, de forum bijlagequota is bereikt.',
	'ATTACH_SIG'				=> 'Onderschrift toevoegen (onderschrift kan aangepast worden in het gebruikerspaneel)',

	'BBCODE_A_HELP'				=> 'Geüploade bijlage in regel: [attachment=]bestandsnaam.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Vetgedrukte tekst: [b]tekst[/b]',
	'BBCODE_C_HELP'				=> 'Codeweergave: [code]code[/code] ',
	'BBCODE_D_HELP'				=> 'Flash: [flash=breedte,hoogte]http://www.phpBBservice.nl/flashbestand.swf[/flash]',
	'BBCODE_F_HELP'				=> 'Lettergrootte: [size=85]Kleine tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s is <em>UIT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s is <em>AAN</em>',
	'BBCODE_I_HELP'				=> 'Schuingedrukte tekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Lijst: [list]tekst[/list]',
	'BBCODE_LISTITEM_HELP'	    => 'Lijstitem: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Geordende lijst: [list=]tekst[/list]',
	'BBCODE_P_HELP'				=> 'Afbeelding: [img]http://www.phpbbservice.nl/afbeelding/afbeelding.jpg[/img]',
	'BBCODE_Q_HELP'				=> 'Geciteerde tekst: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Letterkleur: [color=red]tekst[/color]  Tip: Je kan ook dit gebruiken: color=#FF0000',
	'BBCODE_U_HELP'				=> 'Onderstreepte tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Link: [url]http://www.phpbbservice.nl[/url] of [url=http://www.phpbbservice.nl/]Dit is een link[/url]',
	'BBCODE_Y_HELP'				=> 'Lijst: Een lijstelement toevoegen',
	'BUMP_ERROR'				=> 'Je kan dit onderwerp niet zo snel omhooghalen na je laatste bericht.',

	'CANNOT_DELETE_REPLIED'		=> 'Sorry maar je mag geen berichten verwijderen waar op gereageerd is.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Dit bericht is gesloten. Je kan dit bericht niet meer wijzigen.',
	'CANNOT_EDIT_TIME'			=> 'Sorry maar je kan niet langer dit bericht wijzigen of verwijderen',
	'CANNOT_POST_ANNOUNCE'		=> 'Sorry maar je kan geen mededelingen plaatsen.',
	'CANNOT_POST_STICKY'		=> 'Sorry maar je kan geen sticky onderwerpen plaatsen.',
	'CHANGE_TOPIC_TO'			=> 'Onderwerptype wijzigen naar',
	'CLOSE_TAGS'				=> 'Tags sluiten',
	'CURRENT_TOPIC'				=> 'Huidig onderwerp',

	'DELETE_FILE'				=> 'Bestand verwijderen',
	'DELETE_MESSAGE'			=> 'Verwijder bericht',
	'DELETE_MESSAGE_CONFIRM'	=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_OWN_POSTS'			=> 'Sorry maar je mag alleen je eigen berichten verwijderen.',
	'DELETE_POST_CONFIRM'		=> 'Weet je zeker dat je dit bericht wilt verwijderen?',
	'DELETE_POST_WARN'			=> 'Wanneer het verwijderd is kan het niet meer worden hersteld',
	'DISABLE_BBCODE'			=> 'BBCode uitschakelen',
	'DISABLE_MAGIC_URL'			=> 'URL’s niet automatisch omzetten',
	'DISABLE_SMILIES'			=> 'Smileys uitschakelen',
	'DISALLOWED_CONTENT'		=> 'De upload is geweigerd omdat het geüploade bestand is herkend als een mogelijke aanvalsvector.',
	'DISALLOWED_EXTENSION'		=> 'De extensie %s is niet toegestaan',
	'DRAFT_LOADED'				=> 'Het concept is geladen in het plaatsingsgedeelte, je kan je bericht gereedmaken om het te plaatsen.<br />Je concept wordt na het plaatsen van het bericht verwijderd.',
	'DRAFT_LOADED_PM'			=> 'Het concept is geladen in het plaatsingsgedeelte, je kan je privébericht gereedmaken om het te gaan versturen.<br />Je concept wordt na het versturen van het privébericht verwijderd.',
	'DRAFT_SAVED'				=> 'Concept succesvol opgeslagen.',
	'DRAFT_TITLE'				=> 'Concepttitel',

	'EDIT_REASON'				=> 'Reden voor de wijziging van dit bericht',
	'EMPTY_FILEUPLOAD'			=> 'Het geüploade bestand is leeg',
	'EMPTY_MESSAGE'				=> 'Je moet een bericht invoeren, wanneer je een bericht plaatst.',
	'EMPTY_REMOTE_DATA'			=> 'Het bestand kan niet geüpload worden, probeer het bestand handmatig te uploaden.',

	'FLASH_IS_OFF'				=> '[flash] staat <em>UIT</em>',
	'FLASH_IS_ON'				=> '[flash] staat <em>AAN</em>',
	'FLOOD_ERROR'				=> 'Je kan niet zo snel na je laatst geplaatste bericht een nieuwe plaatsen, probeer het later nog eens.',
	'FONT_COLOR'				=> 'Letterkleur',
	'FONT_COLOR_HIDE'			=> 'Letterkleur verbergen',
	'FONT_HUGE'					=> 'Erg groot',
	'FONT_LARGE'				=> 'Groot',
	'FONT_NORMAL'				=> 'Normaal',
	'FONT_SIZE'					=> 'Lettergrootte',
	'FONT_SMALL'				=> 'Klein',
	'FONT_TINY'					=> 'Heel klein',

	'GENERAL_UPLOAD_ERROR'		=> 'De bijlage kan niet geüpload worden naar %s',

	'IMAGES_ARE_OFF'			=> '[img] staat <em>UIT</em>',
	'IMAGES_ARE_ON'				=> '[img] staat <em>AAN</em>',
	'INVALID_FILENAME'			=> '%s is een ongeldige bestandsnaam',

	'LOAD'						=> 'Laden',
	'LOAD_DRAFT'				=> 'Concept laden',
	'LOAD_DRAFT_EXPLAIN'		=> 'Hier kan je een concept selecteren waarvan je door wilt gaan met het schrijven ervan. Jouw huidige bericht zal dan worden geannuleerd, alle huidige berichtinhoud zal worden verwijderd. Het concept in het gebruikerspaneel kun je dan wijzigen, bekijken of verwijderen.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Je moet aangemeld zijn om onderwerpen omhoog te halen in dit forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Je moet aangemeld zijn om berichten te kunnen verwijderen in dit forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Je moet aangemeld zijn om berichten te kunnen plaatsen in dit forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Je moet aangemeld zijn om berichten te kunnen citeren in dit forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Je moet aangemeld zijn om op onderwerpen te kunnen reageren in dit forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Je mag alleen letters gebruiken tot een grootte van %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Je flash-bestanden mogen tot %1$d pixels hoog zijn.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Je flash-bestanden mogen tot %1$d pixels breed zijn.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Je afbeeldingen mogen tot %1$d pixels hoog zijn.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Je afbeeldingen mogen tot %1$d pixels breed zijn.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Voer je bericht hier in, het mag niet meer dan <strong>%d</strong> tekens bevatten.',
	'MESSAGE_DELETED'			=> 'Het bericht is succesvol verwijderd.',
	'MORE_SMILIES'				=> 'Meer smileys bekijken',

	'NOTIFY_REPLY'				=> 'Stuur mij een notificatie als er een reactie is geplaatst',
	'NOT_UPLOADED'				=> 'Bestand kan niet worden geüpload.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Je kan niet bestaande peilingopties verwijderen',
	'NO_PM_ICON'				=> 'Geen PB-pictogram',
	'NO_POLL_TITLE'				=> 'Je moet een peilingtitel invoeren',
	'NO_POST'					=> 'Het opgevraagde bericht bestaat niet.',
	'NO_POST_MODE'				=> 'Er is geen plaatsingsmethode geselecteerd.',

	'PARTIAL_UPLOAD'			=> 'Het geüploade bestand is maar deels geüpload',
	'PHP_SIZE_NA'				=> 'De bestandsgrootte van de bijlage is te groot.<br />De maximale grootte kon niet worden bepaald die opgegeven is door PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'De bijlage bestandsgrootte is te groot, de maximale upload grootte is %1$d %2$s.<br />Vergeet niet dat dit is ingesteld in php.ini en niet kan worden overschreden.',
	'PLACE_INLINE'				=> 'Plaats in bericht',
	'POLL_DELETE'				=> 'Peiling verwijderen',
	'POLL_FOR'					=> 'Peiling blijft geldig voor',
	'POLL_FOR_EXPLAIN'			=> '[ Leeg laten of 0 invullen voor geen einde ]',
	'POLL_MAX_OPTIONS'			=> 'Opties per gebruiker',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Dit is het aantal opties die gebruikers kunnen kiezen wanneer ze willen gaan stemmen. ',
	'POLL_OPTIONS'				=> 'Peilingopties',
	'POLL_OPTIONS_EXPLAIN'		=> 'Plaats elke optie op een nieuwe regel. Je mag maximaal <strong>%d</strong> opties invoeren.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Plaats elke optie op een nieuwe regel. Je mag maximaal <strong>%d</strong> opties invoeren. Als je opties toevoegt of verwijderd, dan zullen vorige stemmen worden verwijderd.',
	'POLL_QUESTION'				=> 'Peilingsvraag',
	'POLL_TITLE_TOO_LONG'		=> 'De peilingstitel mag niet langer zijn als 100 tekens.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'De geparste lengte van jouw peilingstitel is te lang. Je kan eventueel wat BBCodes of smileys verwijderen.',
	'POLL_VOTE_CHANGE'			=> 'Sta herstemmen toe',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Als het is ingeschakeld kunnen gebruikers hun stem wijzigen.',
	'POSTED_ATTACHMENTS'		=> 'Geplaatste bijlagen',
	'POST_APPROVAL_NOTIFY'		=> 'Je zal een notificatie ontvangen wanneer je bericht is goedgekeurd.',
	'POST_CONFIRMATION'			=> 'Bevestiging van het bericht',
	'POST_CONFIRM_EXPLAIN'		=> 'Om automatisch plaatsen van berichten te voorkomen vereist dit forum jouw om een bevestigingscode in te voeren. De code is weergegeven in de afbeelding en zou je hieronder moeten zien. Als je het niet goed kan zien, of andere oorzaken waardoor je de code niet kan bekijken, moet je contact opnemen met de %sforumbeheerder%s.',
	'POST_DELETED'				=> 'Dit bericht is succesvol verwijderd',
	'POST_EDITED'				=> 'Dit bericht is succesvol gewijzigd',
	'POST_EDITED_MOD'			=> 'Dit bericht is succesvol gewijzigd, maar het moet nog goedgekeurd worden door een moderator voordat het door iedereen bekeken kan worden.',
	'POST_GLOBAL'				=> 'Forummededeling',
	'POST_ICON'					=> 'Berichtpictogram',
	'POST_NORMAL'				=> 'Normaal',
	'POST_REVIEW'				=> 'Bericht nakijken',
	'POST_REVIEW_EDIT'			=> 'Bericht nakijken',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Dit bericht is aangepast door een andere gebruiker terwijl je het aan het wijzigen was. Je mag de huidige versie van dit bericht nakijken en het aanpassen naar jouw wijzigingen.',
	'POST_REVIEW_EXPLAIN'		=> 'Tenminste één nieuw bericht is geplaatst in dit onderwerp. Je mag als je wenst je bericht nakijken en wijzigen.',
	'POST_STORED'				=> 'Je bericht is succesvol geplaatst.',
	'POST_STORED_MOD'			=> 'Je bericht is succesvol opgeslagen, maar het moet nog goedgekeurd worden door een moderator voordat het door andere bekeken kan worden.',
	'POST_TOPIC_AS'				=> 'Plaats onderwerp als',
	'PROGRESS_BAR'				=> 'Voortgangsbalk',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Je mag maar %1$d citaten in een ander citaat gebruiken.',

	'SAVE'						=> 'Opslaan',
	'SAVE_DATE'					=> 'Opslaan als',
	'SAVE_DRAFT'				=> 'Concept opslaan',
	'SAVE_DRAFT_CONFIRM'		=> 'Let op: Bij een concept worden alleen de titel en het bericht opgeslagen, alle andere informatie zal worden verwijderd. Wil je je concept nu opslaan?',
	'SMILIES'					=> 'Smileys',
	'SMILIES_ARE_OFF'			=> 'Smileys zijn <em>UIT</em>',
	'SMILIES_ARE_ON'			=> 'Smileys zijn <em>AAN</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/mededeling tijdslimiet',
	'STICK_TOPIC_FOR'			=> 'Sticky onderwerp blijft geldig voor',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Leeg laten of 0 invullen voor geen einde van de sticky/mededeling. Vergeet niet dat dit nummer relatief is aan de datum van dit bericht.',
	'STYLES_TIP'				=> 'Tip: stijlen kunnen snel worden toegevoegd op de geselecteerde tekst.',

	'TOO_FEW_CHARS'				=> 'Je bericht bevat te weinig tekens.',
	'TOO_FEW_CHARS_LIMIT'		=> 'Je bericht bevat %1$d tekens. Het minimale aantal tekens dat je moet invoeren is %2$d.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Je moet minimaal 2 peilingopties opgeven.',
	'TOO_MANY_ATTACHMENTS'		=> 'Je kan geen nieuwe bijlage toevoegen, %d is het maximum.',
	'TOO_MANY_CHARS'			=> 'Je bericht bevat te veel tekens.',
	'TOO_MANY_CHARS_POST'		=> 'Je bericht bevat %1$d tekens. Het maximum aantal toegestaande tekens is %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Je onderschrift bevat %1$d tekens. Het maximum aantal toegestaande tekens is %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Je hebt geprobeerd te veel peilingopties in te voeren.',
	'TOO_MANY_SMILIES'			=> 'Je bericht bevat te veel smileys. Het maximale aantal smileys per bericht is %d.',
	'TOO_MANY_URLS'				=> 'Je bericht bevat te veel URLs. Het maximale aantal URLs per bericht is %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Je kan niet meer opties per gebruiker specificeren dan het aantal waaruit de peiling bestaat.',
	'TOPIC_BUMPED'				=> 'Het onderwerp is succesvol omhooggehaald.',

	'UNAUTHORISED_BBCODE'		=> 'Je kan niet gebruik maken van de volgende BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Om dit onderwerp terug te veranderen van een forummededeling naar een normaal onderwerp, moet je het forum selecteren waar je wenst dat het onderwerp wordt weergegeven.',
	'UPDATE_COMMENT'			=> 'Comentaar bijwerken',
	'URL_INVALID'				=> 'De URL die je hebt ingevoerd is ongeldig.',
	'URL_NOT_FOUND'				=> 'Het bestand dat je hebt geselecteerd kon niet worden gevonden.',
	'URL_IS_OFF'				=> '[url] staat <em>UIT</em>',
	'URL_IS_ON'					=> '[url] staat <em>AAN</em>',
	'USER_CANNOT_BUMP'			=> 'Je kan geen onderwerpen omhoog halen in dit forum.',
	'USER_CANNOT_DELETE'		=> 'Je kan geen berichten verwijderen in dit forum.',
	'USER_CANNOT_EDIT'			=> 'Je kan geen berichten wijzigen in dit forum',
	'USER_CANNOT_REPLY'			=> 'Je kan niet reageren in dit forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Je bent niet in staat om het te plaatsen op dit forum, omdat het forum dit type niet ondersteunt.',

	'VIEW_MESSAGE'				=> '%sJe verstuurde bericht bekijken%s',
    'VIEW_PRIVATE_MESSAGE'      => '%sJe verstuurde privébericht bekijken%s',

	'WRONG_FILESIZE'			=> 'Het bestand is te groot, de maximale toegestaande grootte is %1d %2s.',
	'WRONG_SIZE'				=> 'De afbeelding moet tenminste %1$d pixels breed zijn, %2$d pixels hoog en moet %3$d pixels breed en  %4$d pixels hoog. De geplaatste afbeelding is %5$d pixels breed en %6$d pixels hoog.',
));

?>