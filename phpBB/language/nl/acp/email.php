<?php
/**
*
* acp_email [Dutch]
*
* @package language
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Hier kan je een e-mailbericht versturen aan alle gebruikers of alle gebruikers van een opgegeven groep <strong>die de optie kan massa e-mails ontvangen heeft ingeschakeld</strong>. Om dit te bereiken zal er een e-mailbericht worden verzonden door het opgegeven beheerderse-mailadres, met een blind carbon copy die wordt verstuurd naar alle ontvangers. De standaard instelling is dat u alleen 50 ontvangers kan opgeven in dit e-mailbericht, voor meer ontvangers zullen er meer e-mailberichten worden verzonden. Als je een grote groep of veel gebruikers aan het e-mailen bent, wacht dan geduldig af totdat je het verzonden hebt en stop de pagina niet als die nog aan het laden is. Het is normaal voor een massa-e-mailing dat het lang kan duren, je zult een melding krijgen wanneer het script voltooid is.',
	'ALL_USERS'						=> 'Alle gebruikers',

	'COMPOSE'				=> 'Samenstellen',

	'EMAIL_SEND_ERROR'		=> 'Er traden één of meerdere fouten op terwijl je het e-mailbericht aan het versturen was. Controleer het %sfoutenlogboek%s voor de uitgebreide foutmeldingen.',
	'EMAIL_SENT'			=> 'Je bericht is verzonden.',
	'EMAIL_SENT_QUEUE'		=> 'Dit bericht is in de wachtrij geplaatst voor verzending.',

	'LOG_SESSION'			=> 'Mailsessie in het foutenlogboek vermelden',

	'SEND_IMMEDIATELY'		=> 'Meteen versturen',
	'SEND_TO_GROUP'			=> 'Versturen aan groep',
	'SEND_TO_USERS'			=> 'Versturen aan gebruikers',
	'SEND_TO_USERS_EXPLAIN'	=> 'Het invoeren van gebruikersnamen hier zal elke groep die geselecteerd is hierboven overschrijven. Voer elke gebruikersnaam in op een nieuwe regel.',
	
	'MAIL_BANNED'			=> 'Mail verbannen gebruikers',
	'MAIL_BANNED_EXPLAIN'	=> 'Wanneer je een massa e-mail verstuurd naar een groep kan je selecteren of de gebruikers die u verbannen heeft ook een e-mail ontvangen.',		
	'MAIL_HIGH_PRIORITY'	=> 'Hoog',
	'MAIL_LOW_PRIORITY'		=> 'Laag',
	'MAIL_NORMAL_PRIORITY'	=> 'Normaal',
	'MAIL_PRIORITY'			=> 'Prioriteit',
	'MASS_MESSAGE'			=> 'Jouw bericht',
	'MASS_MESSAGE_EXPLAIN'	=> 'Vergeet niet dat je hier alleen tekst normale tekst kan invoeren. Alle opmaak zal worden verwijderd voordat het verstuurd is.',
	
	'NO_EMAIL_MESSAGE'		=> 'Je moet een bericht invoeren.',
	'NO_EMAIL_SUBJECT'		=> 'Je moet een onderwerp invoeren voor je bericht.',
));

?>