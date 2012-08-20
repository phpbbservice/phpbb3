<?php
/**
*
* acp_users [Dutch]
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

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> 'Voorbeeld van onderschrift',
	'AT_LEAST_ONE_FOUNDER'	=> 'Je kan deze oprichter niet wijzigen naar een normale gebruiker. Er moet tenminste één oprichter toegekend zijn aan dit forum. Als je de oprichterstatus wilt wijzigen van deze gebruiker zal je eerst een andere gebruiker moeten promoveren naar een oprichter.',

	'BAN_ALREADY_ENTERED'	=> 'De verbanning is vorige keer al succesvol ingevoerd. De verbanningslijst is niet bijgewerkt.',
	'BAN_SUCCESSFUL'		=> 'De verbanning is succesvol ingevoerd.',

	'CANNOT_BAN_ANONYMOUS'          => 'Je kan de gastaccount niet verbannen. Permissies voor gastgebruikers kunnen worden ingesteld onder het permissies tabblad.',
	'CANNOT_BAN_FOUNDER'			=> 'Je kan geen oprichteraccounts verbannen.',
	'CANNOT_BAN_YOURSELF'			=> 'Je kan jezelf niet verbannen.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Je kan geen botaccounts deactiveren. In plaats daarvan moet je de bot deactiveren op de botspagina.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Je kan geen oprichtersaccounts deactiveren.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Je kan niet je eigen account deactiveren.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Je kan geen heractivatie verplichten bij botaccounts. In plaats daarvan heractiveer de bot in de botspagina.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Je kan geen heractivatie verplichten bij oprichteraccounts.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Je kan geen heractivatie verplichten van je eigen account.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Je kan niet de gast gebruikersaccount verwijderen.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Je kan niet je eigen gebruikersaccount verwijderen.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Je kan geen genegeerde gebruikers promoveren tot oprichters.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Je moet de gebruikers eerst activeren voordat je ze kan promoten tot oprichters, alleen geactiveerde gebruikers kan je promoten.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Je hoeft dit alleen op te geven als je het e-mailadres van de gebruiker wijzigt.',

	'DELETE_POSTS'			=> 'Berichten verwijderen',
	'DELETE_USER'			=> 'Gebruiker verwijderen',
	'DELETE_USER_EXPLAIN'	=> 'Vergeet niet dat het verwijderen van een gebruiker definitief is, dit kan niet worden hersteld. Ongelezen privéberichten die verstuurd zijn door deze gebruiker zullen worden verwijderd, en zullen ook niet beschikbaar meer zijn voor de ontvangers.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Succesvol heractivatie verplicht.',
	'FOUNDER'						=> 'Oprichter',
	'FOUNDER_EXPLAIN'				=> 'Oprichters hebben alle beheerderspermissies en kunnen nooit worden verbannen, verwijderd of gewijzigd door gebruikers die geen oprichters zijn.',

	'GROUP_APPROVE'					=> 'Lid goedkeuren',
	'GROUP_DEFAULT'					=> 'Groep standaard maken voor lid',
	'GROUP_DELETE'					=> 'Lid verwijderen van groep',
	'GROUP_DEMOTE'					=> 'Groepsleider degraderen',
	'GROUP_PROMOTE'					=> 'Naar groepsleider promoveren',

	'IP_WHOIS_FOR'			=> 'IP-whois voor %s',

	'LAST_ACTIVE'			=> 'Laatst actief',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecteer het forum waar je alle berichten wenst naar toe te verplaatsten die deze gebruiker heeft gemaakt.',

	'NO_SPECIAL_RANK'		=> 'Er is geen speciale rang toegewezen.',
	'NO_WARNINGS'			=> 'Er zijn geen waarschuwingen.',
	'NOT_MANAGE_FOUNDER'	=> 'Je probeerde een gebruiker te beheren die een oprichterstatus heeft. Alleen oprichters kunnen andere oprichters beheren.',

	'QUICK_TOOLS'			=> 'Snelle hulpmiddelen',

	'REGISTERED'			=> 'Geregistreerd',
	'REGISTERED_IP'			=> 'Geregistreerd vanaf IP-adres',
	'RETAIN_POSTS'			=> 'Berichten behouden',

	'SELECT_FORM'			=> 'Formulier selecteren',
	'SELECT_USER'			=> 'Gebruiker selecteren',

	'USER_ADMIN'					=> 'Gebruikersbeheer',
	'USER_ADMIN_ACTIVATE'			=> 'Account activeren',
	'USER_ADMIN_ACTIVATED'			=> 'Gebruiker is succesvol geactiveerd.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar van deze gebruikersaccount is succesvol verwijderd.',
	'USER_ADMIN_BAN_EMAIL'			=> 'E-mailadres verbannen',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailadres verbannen via het gebruikersbeheer',
	'USER_ADMIN_BAN_IP'				=> 'IP-adres verbannen',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-adres verbannen via het gebruikersbeheer',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Gebruikersnaam verbannen via het gebruikersbeheer',
	'USER_ADMIN_BAN_USER'			=> 'Gebruikersnaam verbannen',
	'USER_ADMIN_DEACTIVATE'			=> 'Account deactiveren',
	'USER_ADMIN_DEACTIVED'			=> 'Gebruiker is succesvol gedeactiveerd.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Alle bijlagen verwijderen',
	'USER_ADMIN_DEL_AVATAR'			=> 'Avatar verwijderen',
	'USER_ADMIN_DEL_OUTBOX'			=> 'PB postvak UIT legen',
	'USER_ADMIN_DEL_POSTS'			=> 'Alle berichten verwijderen',
	'USER_ADMIN_DEL_SIG'			=> 'Onderschrift verwijderen',
	'USER_ADMIN_EXPLAIN'			=> 'Hier kan je de informatie van jouw gebruikers en bepaalde specifieke opties wijzigen.',
	'USER_ADMIN_FORCE'				=> 'Heractivatie verplichten',
	'USER_ADMIN_LEAVE_NR'			=> 'Van pas geregistreerde verwijderen',
	'USER_ADMIN_MOVE_POSTS'			=> 'Alle berichten verplaatsen',
	'USER_ADMIN_SIG_REMOVED'		=> 'Onderschrift van gebruikersaccount is succesvol verwijderd.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle bijlagen die zijn geplaatst door deze gebruiker zijn succesvol verwijderd.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'De avatar kan niet worden weergegeven omdat avatars niet zijn toegestaan.',
	'USER_AVATAR_UPDATED'			=> 'De avatar-details van de gebruiker zijn succesvol bijgewerkt.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'De huidige avatar kan niet worden weergegeven omdat het type niet is toegestaan.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Aangepaste profielvelden',
	'USER_DELETED'					=> 'Gebruiker is succesvol verwijderd.',
	'USER_GROUP_ADD'				=> 'Gebruiker toevoegen aan groep',
	'USER_GROUP_NORMAL'				=> 'Gebruiker is lid van de volgende gebruiker-opgegeven groepen',
	'USER_GROUP_PENDING'			=> 'Groepsgebruiker die wacht op goedkeuring',
	'USER_GROUP_SPECIAL'			=> 'Gebruiker is lid van de volgende voor-opgegeven groepen',
	'USER_LIFTED_NR'				=> 'Gebruiker is succesvol verwijderd van de pas geregistreerde status.',
	'USER_NO_ATTACHMENTS'			=> 'Er zijn geen bijlagen bestanden om te kunnen weergeven.',
	'USER_NO_POSTS_TO_DELETE'		=> 'De gebruiker heeft geen berichten om te behouden of te verwijderen.',	
	'USER_OUTBOX_EMPTIED'			=> 'De postvak UIT is succesvol geleegd van deze gebruiker.',
	'USER_OUTBOX_EMPTY'				=> 'De privéberichten postvak UIT van deze gebruiker was al leeg.',
	'USER_OVERVIEW_UPDATED'			=> 'Gebruikersdetails zijn bijgewerkt.',
	'USER_POSTS_DELETED'			=> 'Alle berichten die gemaakt zijn door deze gebruiker zijn succesvol verwijderd.',
	'USER_POSTS_MOVED'				=> 'De gebruikersberichten zijn succesvol verplaatst naar het doelforum.',
	'USER_PREFS_UPDATED'			=> 'Gebruikersvoorkeuren zijn bijgewerkt.',
	'USER_PROFILE'					=> 'Gebruikersprofiel',
	'USER_PROFILE_UPDATED'			=> 'Gebruikersprofiel is bijgewerkt.',
	'USER_RANK'						=> 'Gebruikersrang',
	'USER_RANK_UPDATED'				=> 'Gebruikersrang is bijgewerkt.',
	'USER_SIG_UPDATED'				=> 'Gebruikersonderschrift is succesvol bijgewerkt.',
	'USER_WARNING_LOG_DELETED'		=> 'Er is geen informatie beschikbaar. Het is mogelijk dat de logmelding is verwijderd.',
	'USER_TOOLS'					=> 'Basis hulpmiddelen',
));

?>