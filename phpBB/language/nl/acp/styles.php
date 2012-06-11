<?php
/**
*
* acp_styles [Dutch]
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'Afbeeldingsets bestaan uit een knop, forum, map, etc. en andere niet-stijl opgegeven afbeeldingen die gebruikt worden door het forum. Vanuit hier kan je sets wijzigen, exporteren of bestaande afbeeldingsets verwijderen en importeren of nieuwe activeren.',
	'ACP_STYLES_EXPLAIN'	=> 'Hier kan je stijlen die beschikbaar zijn op jouw forum beheren. Een stijl bestaat uit een template, thema en afbeeldingset. Je mag bestaande stijlen wijzigen, verwijderen, deactiveren, heractiveren, aanmaken of nieuwe importeren. Je kan ook bekijken hoe een stijl er uit ziet door de voorbeeldfunctie te gebruiken. De huidige standaardstijl wordt aangeduid met een jokerteken (*). Ook wordt er een lijst weergegeven van het aantal gebruikers die welke stijl gebruikt, vergeet niet dat het overschrijven van de gebruikersstijlen hier niet wordt weergegeven.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'Een templateset bestaat uit alle opmaak die gebruikt wordt om de lay-out te generen van jouw forum. Hier kan je bestaande templatesets wijzigen, verwijderen, exporteren, importeren en je kan sets hier van te voren bekijken. Je kan ook de template-code aanpassen die gebruikt wordt om BBCode te generen.',
	'ACP_THEMES_EXPLAIN'	=> 'Vanuit hier kan je thema’s aanmaken, installeren, wijzigen, verwijderen en exporteren. Een thema is een combinatie van kleuren en afbeeldingen die zijn toegepast op jouw template om het basis uiterlijk te bepalen van jouw forum. De mogelijkheden van opties voor jouw zijn afhankelijk van de configuratie van jouw server en de phpBB-installatie, bekijk de handleiding voor verdere details. Vergeet niet wanneer je nieuwe thema’s aan het aanmaken bent, dat het gebruiken van een basis van een bestaand thema optioneel is.',
	'ADD_IMAGESET'			=> 'Afbeeldingset aanmaken',
	'ADD_IMAGESET_EXPLAIN'	=> 'Vanuit hier kan je een nieuwe afbeeldingset aanmaken. Afhankelijk van jouw server-configuratie en de bestandspermissies is het mogelijk dat je hier extra opties hebt. Bijvoorbeeld; je kan deze afbeeldingset baseren op een bestaande afbeeldingset. Je kan ook een archief van een afbeeldingset uploaden of importen (van de store-directory). Als je een archief importeert of upload kan de naam van de afbeeldingset worden overgenomen van de archiefnaam (om dit te doen moet je de naam van de afbeeldingset leeg laten).',
	'ADD_STYLE'				=> 'Stijl aanmaken',
	'ADD_STYLE_EXPLAIN'		=> 'Vanuit hier kan je een nieuwe stijl aanmaken. Afhankelijk van jouw server-configuratie en de bestandspermissies is het mogelijk dat je hier extra opties hebt. Bijvoorbeeld; je kan deze stijl baseren op een bestaande stijl. Je kan ook een archief van een stijl uploaden of importen (van de store-directory). Als je een archief importeert of upload zal de stijlnaam automatisch worden bepaald.',
	'ADD_TEMPLATE'			=> 'Template aanmaken',
	'ADD_TEMPLATE_EXPLAIN'	=> 'Vanuit hier kan je een nieuwe template toevoegen. Afhankelijk van jouw server-configuratie en de bestandspermissies is het mogelijk dat je hier extra opties hebt. Bijvoorbeeld; je kan deze templateset baseren op een bestaande templateset. Je kan ook een archief van een template uploaden of importen (van de store-directory). Als je een archief importeert of upload kan de templatenaam worden overgenomen van de archiefnaam (om dit te doen moet je de templatenaam leeg laten).',
	'ADD_THEME'				=> 'Thema aanmaken',
	'ADD_THEME_EXPLAIN'		=> 'Vanuit hier kan je een nieuw thema toevoegen. Afhankelijk van jouw server-configuratie en de bestandspermissies is het mogelijk dat je hier extra opties hebt. Bijvoorbeeld; je kan dit thema baseren op een bestaande. Je kan ook een archief van een thema uploaden of importen (van de store-directory). Als je een archief importeert of upload kan de themanaam worden overgenomen van de archiefnaam (om dit te doen moet je de themanaam leeg laten).',
	'ARCHIVE_FORMAT'		=> 'Archief bestandstype',
	'AUTOMATIC_EXPLAIN'		=> 'Laat het leeg voor een automatische herkenningspoging.',

	'BACKGROUND'			=> 'Achtergrond',
	'BACKGROUND_COLOUR'		=> 'Achtergrondkleur',
	'BACKGROUND_IMAGE'		=> 'Achtergrondafbeelding',
	'BACKGROUND_REPEAT'		=> 'Achtergrond herhalen',
	'BOLD'					=> 'Vetgedrukt',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Gecached',
	'CACHE_FILENAME'				=> 'Templatebestand',
	'CACHE_FILESIZE'				=> 'Bestandsgrootte',
	'CACHE_MODIFIED'				=> 'Aangepast',
	'CONFIRM_IMAGESET_REFRESH'		=> 'Weet je zeker dat je de alle data van de afbeeldingset wilt vernieuwen? De instellingen van het configuratiebestand van de afbeeldingset zal alle aanpassingen van de afbeeldingset overschrijven welke je hebt uitgevoegd met de afbeeldingset-editor.',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'Weet je zeker dat je all gecachde versies van jouw templatebestanden wilt legen?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'Weet je zeker dat je alle data van de template in de database met de inhoud van de templatebestanden van het bestandssysteem wilt vernieuwen? Dit zal alle aanpassingen overschrijven die zijn uitgevoerd met de template-editor terwijl de template was opgeslagen in de database.',
	'CONFIRM_THEME_REFRESH'			=> 'Weet je zeker dat je alle data van het thema dat is opgeslagen in de database met de inhoud van het thema van het bestandssysteem wilt vernieuwen? Dit zal alle aanpassingen overschrijven die zijn uitgevoerd met de thema-editor terwijl het thema was opgeslagen in de database.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> 'Nieuwe afbeeldingset aanmaken',
	'CREATE_STYLE'					=> 'Nieuwe stijl aanmaken',
	'CREATE_TEMPLATE'				=> 'Nieuwe templateset aanmaken',
	'CREATE_THEME'					=> 'Nieuw thema aanmaken',
	'CURRENT_IMAGE'					=> 'Huidige afbeelding',

	'DEACTIVATE_DEFAULT'		=> 'Je kan de standaardstijl niet deactiveren.',
	'DELETE_FROM_FS'			=> 'Van bestandssysteem verwijderen',
	'DELETE_IMAGESET'			=> 'Afbeeldingset verwijderen',
	'DELETE_IMAGESET_EXPLAIN'	=> 'Hier kan je de geselecteerde afbeeldingset verwijderen uit de database. Vergeet niet dat er geen mogelijkheid is om dit te kunnen terugdraaien. Het is raadzaam dat je de afbeeldingset eerst exporteert zodat u het later misschien nog kunt hergebruiken.',
	'DELETE_STYLE'				=> 'Stijl verwijderen',
	'DELETE_STYLE_EXPLAIN'		=> 'Hier kan je de geselecteerde stijl verwijderen. Wees voorzichtig wanneer je een stijl verwijderd, er is geen terugdraai mogelijkheid wanneer het eenmaal verwijderd is.',
	'DELETE_TEMPLATE'			=> 'Template verwijderen',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'Hier kan je de geselecteerde templateset verwijderen uit de database. Vergeet niet dat er geen mogelijkheid is om dit te kunnen terugdraaien. Het is raadzaam dat je de templateset eerst exporteert zodat u het later misschien nog kunt hergebruiken.',
	'DELETE_THEME'				=> 'Thema verwijderen',
	'DELETE_THEME_EXPLAIN'		=> 'Hier kan je het geselecteerde thema verwijderen uit de database. Vergeet niet dat er geen mogelijkheid is om dit te kunnen terugdraaien. Het is raadzaam dat je het thema eerst exporteert zodat je het later misschien nog kunt hergebruiken.',
	'DETAILS'					=> 'Details',
	'DIMENSIONS_EXPLAIN'		=> 'Wanneer je hier ja selecteert zal de breedte/hoogte parameters worden toegevoegd.',

	'EDIT_DETAILS_IMAGESET'				=> 'Details van de afbeeldingset wijzigen',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'Hier kan je bepaalde details van de afbeeldingset wijzigen zoals de naam.',
	'EDIT_DETAILS_STYLE'				=> 'Stijl wijzigen',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'Door dit formulier te gebruiken kan je een bestaande stijl aanpassen. Je kan ook de combinatie van de template, thema en afbeeldingset die is bepaald door de stijl zelf wijzigen. Je kan ook de stijl instellen als de standaardstijl.',
	'EDIT_DETAILS_TEMPLATE'				=> 'Templatedetails wijzigen',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'Hier kan je bepaalde templatedetails wijzigen zoals de naam. Je kan ook kiezen om te veranderen van opslag van de stylesheet van het bestandssysteem naar de database en visa versa. Deze optie is afhankelijk van jouw PHP-configuratie en of jouw templateset kan worden beschreven door de webserver.',
	'EDIT_DETAILS_THEME'				=> 'Themadetails wijzigen',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'Hier kan je bepaalde themadetails wijzigen zoals de naam. Je kan ook kiezen om te veranderen van opslag van de stylesheet van het bestandssysteem naar de database en visa versa. Deze optie is afhankelijk van jouw PHP-configuratie en of jouw stylesheet kan worden beschreven door de webserver.',
	'EDIT_IMAGESET'						=> 'Afbeeldingset wijzigen',
	'EDIT_IMAGESET_EXPLAIN'				=> 'Hier kan je individuele afbeeldingen wijzigen welke zijn bepaald in de afbeeldingset. Je kan ook afmetingen opgeven voor de afbeelding. Afmetingen zijn niet verplicht, wanneer je ze opgeeft kunnen ze wellicht problemen voorkomen bij het weergeven van sommige browsers. Wanneer je ze niet opgeeft zal je de grootte van de database een klein beetje verminderen.',
	'EDIT_TEMPLATE'						=> 'Template wijzigen',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'Hier kan je jouw templateset direct wijzigen. Vergeet niet dat deze wijzigen voorgoed zijn en kunnen niet meer ongedaan worden gemaakt wanneer het verstuurd is. Als PHP kan schrijven naar de templatebestanden in jouw styles-directory zullen die bestanden meteen overschreven worden. Als PHP niet kan schrijven naar deze bestanden zal het worden gekopieerd naar de database en alle wijzigen zullen alleen daar worden opgeslagen. Wees voorzichtig wanneer je jouw templateset aan het wijzigen bent, vergeet niet om alle vervangbare variabele-codes {XXXX} en voorwaardelijke verklaringen <!-- IF XXX --> te sluiten.',
	'EDIT_TEMPLATE_STORED_DB'			=> 'Het templatebestand was niet schrijfbaar, dus de templateset is nu opgeslagen in de database met de aanpassingen die jij hebt gemaakt.',
	'EDIT_THEME'						=> 'Thema wijzigen',
	'EDIT_THEME_EXPLAIN'				=> 'Hier kan je het geselecteerde thema wijzigen zoals de kleur, afbeeldingen etc.',
	'EDIT_THEME_STORED_DB'				=> 'Het stylesheetbestand was niet schrijfbaar dus de stylesheet is nu opgeslagen in de database met de aanpassingen die je hebt gemaakt.',
	'EDIT_THEME_STORE_PARSED'			=> 'Het thema verplicht dat de stylesheet geparsed moet zijn. Dit is alleen mogelijk als het is opgeslagen in de database.',
	'EDITOR_DISABLED'					=> 'De template-editor is uitgeschakeld.',
	'EXPORT'							=> 'Exporteren',

	'FOREGROUND'			=> 'Voorgrond',
	'FONT_COLOUR'			=> 'Letterkleur',
	'FONT_FACE'				=> 'Lettertype',
	'FONT_FACE_EXPLAIN'		=> 'Je kan meerdere lettertypes opgeven door achter elk lettertype een komma te plaatsen. Als een gebruiker het eerste lettertype niet heeft geïnstalleerd zal de eerst volgende werkend lettertype worden gekozen.',
	'FONT_SIZE'				=> 'Lettergrootte',

	'GLOBAL_IMAGES'			=> 'Globaal',

	'HIDE_CSS'				=> 'Ruwe CSS verbergen',

	'IMAGE_WIDTH'				=> 'Afbeeldingsbreedte',
	'IMAGE_HEIGHT'				=> 'Afbeeldingshoogte',
	'IMAGE'						=> 'Afbeelding',
	'IMAGE_NAME'				=> 'Afbeeldingsnaam',
	'IMAGE_PARAMETER'			=> 'Parameter',
	'IMAGE_VALUE'				=> 'Waarde',
	'IMAGESET_ADDED'			=> 'Nieuwe afbeeldingset toegevoegd op het bestandssysteem.',
	'IMAGESET_ADDED_DB'			=> 'Nieuwe afbeeldingset toegevoegd op de database.',
	'IMAGESET_DELETED'			=> 'Afbeeldingset succesvol verwijderd.',
	'IMAGESET_DELETED_FS'		=> 'Afbeeldingset is verwijderd van de database, maar de bestanden blijven bestaan op het bestandssysteem.',
	'IMAGESET_DETAILS_UPDATED'	=> 'De details van de afbeeldingset zijn succesvol bijgewerkt.',
	'IMAGESET_ERR_ARCHIVE'		=> 'Selecteer een archiefmethode.',
	'IMAGESET_ERR_COPY_LONG'	=> 'Het copyright kan niet langer zijn dan 60 tekens.',
	'IMAGESET_ERR_NAME_CHARS'	=> 'De afbeeldingset kan alleen alfanumerieke tekens, -, +, _ en spaties bevatten.',
	'IMAGESET_ERR_NAME_EXIST'	=> 'Een afbeeldingset met deze naam bestaat al.',
	'IMAGESET_ERR_NAME_LONG'	=> 'De naam van de afbeeldingset kan niet langer zijn dan 30 tekens.',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'Het archief dat je hebt opgegeven bevat niet een geldige afbeeldingset.',
	'IMAGESET_ERR_STYLE_NAME'	=> 'Je moet een naam opgeven voor deze afbeeldingset.',
	'IMAGESET_EXPORT'			=> 'Afbeeldingset exporteren',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'Hier kan je een afbeeldingset exporteren in een vorm van een archief. Dit archief zal alle nodige data bevatten die nodig is om de set van afbeeldingen te installeren op een ander forum. Je mag selecteren of je het bestand direct wilt downloaden of dat je het laten plaatsen in jouw store-map zodat je het later zelf kan downloaden of via de FTP.',
	'IMAGESET_EXPORTED'			=> 'De afbeeldingset is succesvol geëxporteerd en opgeslagen in %s.',
	'IMAGESET_NAME'				=> 'Naam van de afbeeldingset',
	'IMAGESET_REFRESHED'		=> 'De afbeeldingset is succesvol vernieuwt.',
	'IMAGESET_UPDATED'			=> 'Afbeeldingset is succesvol bijgewerkt.',
	'ITALIC'					=> 'Cursief',

	'IMG_CAT_BUTTONS'		=> 'Vertaalde knoppen',
	'IMG_CAT_CUSTOM'		=> 'Aangepaste afbeeldingen',
	'IMG_CAT_FOLDERS'		=> 'Onderwerppictogrammen',
	'IMG_CAT_FORUMS'		=> 'Forumpictogrammen',
	'IMG_CAT_ICONS'			=> 'Algemene pictogrammen',
	'IMG_CAT_LOGOS'			=> 'Logo’s',
	'IMG_CAT_POLLS'			=> 'Peilingafbeeldingen',
	'IMG_CAT_UI'			=> 'Algemene elementen voor gebruikersinterface',
	'IMG_CAT_USER'			=> 'Extra afbeeldingen',

	'IMG_SITE_LOGO'			=> 'Hoofdlogo',
	'IMG_UPLOAD_BAR'		=> 'Voortgangsbalk van het upload-proces',
	'IMG_POLL_LEFT'			=> 'Linkerzijde van de peiling',
	'IMG_POLL_CENTER'		=> 'Midden van de peiling',
	'IMG_POLL_RIGHT'		=> 'Rechterzijde van de peiling',
	'IMG_ICON_FRIEND'		=> 'Als vriend toevoegen',
	'IMG_ICON_FOE'			=> 'Als vijand toevoegen',

	'IMG_FORUM_LINK'			=> 'Forumlink',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum gesloten',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Forum met ongelezen berichten',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Gesloten forum met ongelezen berichten',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforum met ongelezen berichten',
	'IMG_SUBFORUM_READ'			=> 'Subforum legenda',
	'IMG_SUBFORUM_UNREAD'		=> 'Subforum legenda met ongelezen berichten',

	'IMG_TOPIC_MOVED'			=> 'Onderwerp verplaatst',

	'IMG_TOPIC_READ'				=> 'Onderwerp',
	'IMG_TOPIC_READ_MINE'			=> 'Onderwerp waar in is geplaatst door de gebruiker zelf',
	'IMG_TOPIC_READ_HOT'			=> 'Populair onderwerp',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'Populair onderwerp waar in is geplaatst door de gebruiker zelf',
	'IMG_TOPIC_READ_LOCKED'			=> 'Gesloten onderwerp',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'Gesloten onderwerp waar in is geplaatst door de gebruiker zelf',

	'IMG_TOPIC_UNREAD'				=> 'Onderwerp met ongelezen berichten',
	'IMG_TOPIC_UNREAD_MINE'			=> 'Onderwerp met ongelezen berichten waar in is geplaatst door de gebruiker zelf',
	'IMG_TOPIC_UNREAD_HOT'			=> 'Populair onderwerp met ongelezen berichten',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'Populair onderwerp met ongelezen berichten waar in is geplaatst door de gebruiker zelf',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'Gesloten onderwerp met ongelezen berichten',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'Gesloten onderwerp met ongelezen berichten waar in is geplaatst door de gebruiker zelf',

	'IMG_STICKY_READ'				=> 'Sticky onderwerp',
	'IMG_STICKY_READ_MINE'			=> 'Sticky onderwerp waar in is geplaatst door de gebruiker zelf',
	'IMG_STICKY_READ_LOCKED'		=> 'Sticky onderwerp gesloten',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'Sticky onderwerp is gesloten waar in is geplaatst door de gebruiker zelf',
	'IMG_STICKY_UNREAD'				=> 'Sticky onderwerp met ongelezen berichten',
	'IMG_STICKY_UNREAD_MINE'		=> 'Sticky onderwerp met ongelezen berichten waar in is geplaatst door de gebruiker zelf',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'Sticky onderwerp die gesloten is met ongelezen berichten',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'Sticky onderwerp die gesloten is met ongelezen berichten waar in is geplaatst door de gebruiker zelf',

	'IMG_ANNOUNCE_READ'					=> 'Mededeling',
	'IMG_ANNOUNCE_READ_MINE'			=> 'Mededeling waar in is geplaatst door de gebruiker zelf',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'Mededeling gesloten',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'Mededeling is gesloten waar in is geplaatst door de gebruiker zelf',
	'IMG_ANNOUNCE_UNREAD'				=> 'Mededeling met ongelezen berichten',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'Mededeling met ongelezen berichten waar in is geplaatst door de gebruiker zelf', // mine??
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'Mededeling die gesloten is met ongelezen berichten',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'Mededeling die gesloten is met ongelezen berichten waar in is geplaatst door de gebruiker zelf',

	'IMG_GLOBAL_READ'					=> 'Forummededeling',
	'IMG_GLOBAL_READ_MINE'				=> 'Forummededeling waar in is geplaatst door de gebruiker zelf',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Forummededeling gesloten',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Forummededeling is gesloten waar in is geplaatst door de gebruiker zelf',
	'IMG_GLOBAL_UNREAD'					=> 'Forummededeling met ongelezen berichten',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Forummededeling met ongelezen berichten waar in is geplaatst door de gebruiker zelf',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Forummededeling die gesloten is met ongelezen berichten',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Forummededeling die gesloten is met ongelezen berichten waar in is geplaatst door de gebruiker zelf',

	'IMG_PM_READ'		=> 'Gelezen privébericht',
	'IMG_PM_UNREAD'		=> 'Ongelezen privébericht',

	'IMG_ICON_BACK_TOP'		=> 'Omhoog',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'E-mail versturen',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Privébericht versturen',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'Bericht verwijderen',
	'IMG_ICON_POST_EDIT'			=> 'Bericht wijzigen',
	'IMG_ICON_POST_INFO'			=> 'Berichdetails weergeven',
	'IMG_ICON_POST_QUOTE'			=> 'Bericht citeren',
	'IMG_ICON_POST_REPORT'			=> 'Bericht melden',
	'IMG_ICON_POST_TARGET'			=> 'Minibericht',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'Nieuw minibericht',


	'IMG_ICON_TOPIC_ATTACH'			=> 'Bijlage',
	'IMG_ICON_TOPIC_LATEST'			=> 'Laatste bericht',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Laatste ongelezen bericht',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Gemeld bericht',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Niet goedgekeurd bericht',

	'IMG_ICON_USER_ONLINE'		=> 'Gebruiker online',
	'IMG_ICON_USER_OFFLINE'		=> 'Gebruiker offline',
	'IMG_ICON_USER_PROFILE'		=> 'Profiel weergeven',
	'IMG_ICON_USER_SEARCH'		=> 'Berichten zoeken',
	'IMG_ICON_USER_WARN'		=> 'Gebruiker waarschuwen',

	'IMG_BUTTON_PM_FORWARD'		=> 'Privébericht doorsturen',
	'IMG_BUTTON_PM_NEW'			=> 'Nieuw privébericht',
	'IMG_BUTTON_PM_REPLY'		=> 'Reageren op privébericht',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'Onderwerp gesloten',
	'IMG_BUTTON_TOPIC_NEW'		=> 'Nieuw onderwerp',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'Reageren op onderwerp',

	'IMG_USER_ICON1'		=> 'Opgegeven gebruikersafbeelding 1',
	'IMG_USER_ICON2'		=> 'Opgegeven gebruikersafbeelding 2',
	'IMG_USER_ICON3'		=> 'Opgegeven gebruikersafbeelding 3',
	'IMG_USER_ICON4'		=> 'Opgegeven gebruikersafbeelding 4',
	'IMG_USER_ICON5'		=> 'Opgegeven gebruikersafbeelding 5',
	'IMG_USER_ICON6'		=> 'Opgegeven gebruikersafbeelding 6',
	'IMG_USER_ICON7'		=> 'Opgegeven gebruikersafbeelding 7',
	'IMG_USER_ICON8'		=> 'Opgegeven gebruikersafbeelding 8',
	'IMG_USER_ICON9'		=> 'Opgegeven gebruikersafbeelding 9',
	'IMG_USER_ICON10'		=> 'Opgegeven gebruikersafbeelding 10',
	
	'INACTIVE_STYLES'		=> 'Inactieve stijlen',	

	'INCLUDE_DIMENSIONS'		=> 'Afmetingen insluiten', // include?
	'INCLUDE_IMAGESET'			=> 'Afbeeldingset insluiten', // include?
	'INCLUDE_TEMPLATE'			=> 'Template insluiten', // include?
	'INCLUDE_THEME'				=> 'Thema insluiten', // include?
	'INHERITING_FROM'			=> 'Neemt over van', // klopt dit "Inherits from" bij installatie van stijl! eigenlijk is inherit erven of te wel over erver van in dit geval maar erven klinkt kut template erven ( erf ik geld @_@ )
	'INSTALL_IMAGESET'			=> 'Afbeeldingset installeren',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'Hier kan je jouw geselecteerde afbeeldingset installeren. Je kan ook bepaalde details wijzigen als je wilt of je kan de standaard installatie details gebruiken.',
	'INSTALL_STYLE'				=> 'Stijl installeren',
	'INSTALL_STYLE_EXPLAIN'		=> 'Hier kan je een nieuwe stijl installeren en de daar bij passende vergelijkbare stijlelementen. Als je al relevante stijlelementen hebt geïnstalleerd zullen deze niet worden overschreven. Sommige stijlen hebben bepaalde stijlelementen nodig die al geïnstalleerd zijn. Als je zo een stijl probeert te installeren en ze hebben niet de nodige elementen zal je een desbetreffende melding krijgen.',
	'INSTALL_TEMPLATE'			=> 'Template installeren',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'Hier kan je een nieuwe templateset installeren. Afhankelijk van jouw server-configuratie heb je hier de keuzes uit diverse opties.',
	'INSTALL_THEME'				=> 'Thema installeren',
	'INSTALL_THEME_EXPLAIN'		=> 'Hier kan je jouw geselecteerde thema installeren. Je kan ook bepaalde details wijzigen als je wilt of je kan de standaard installatie details gebruiken.',
	'INSTALLED_IMAGESET'		=> 'Geïnstalleerde afbeeldingsets',
	'INSTALLED_STYLE'			=> 'Geïnstalleerde stijlen',
	'INSTALLED_TEMPLATE'		=> 'Geïnstalleerde templates',
	'INSTALLED_THEME'			=> 'Geïnstalleerde thema’s',
	
	'KEEP_IMAGESET'				=> 'Behoud “%s” afbeeldingset',
	'KEEP_TEMPLATE'				=> 'Behoud “%s” template',
	'KEEP_THEME'				=> 'Behoud “%s” thema',	

	'LINE_SPACING'				=> 'Regel ruimte',
	'LOCALISED_IMAGES'			=> 'Vertaald',
	'LOCATION_DISABLED_EXPLAIN'	=> 'Deze instelling wordt overgenomen en kan niet worden gewijzigd.',


	'NO_CLASS'					=> 'Kan de class niet vinden in de stylesheet.',
	'NO_IMAGESET'				=> 'Kan de afbeeldingset niet vinden op het bestandssysteem.',
	'NO_IMAGE'					=> 'Geen afbeelding',
	'NO_IMAGE_ERROR'			=> 'Kan de afbeelding niet vinden op het bestandssysteem.',
	'NO_STYLE'					=> 'Kan de stijl niet vinden op het bestandssysteem.',
	'NO_TEMPLATE'				=> 'Kan de template niet vinden op het bestandssysteem.',
	'NO_THEME'					=> 'Kan het thema niet vinden op het bestandssysteem.',
	'NO_UNINSTALLED_IMAGESET'	=> 'Er zijn geen ongeïnstalleerde afbeeldingsets gevonden.',
	'NO_UNINSTALLED_STYLE'		=> 'Er zijn geen ongeïnstalleerde stijlen gevonden.',
	'NO_UNINSTALLED_TEMPLATE'	=> 'Er zijn geen ongeïnstalleerde templates gevonden..',
	'NO_UNINSTALLED_THEME'		=> 'Er zijn geen ongeïnstalleerde thema’s gevonden.',
	'NO_UNIT'					=> 'Geen',

	'ONLY_IMAGESET'			=> 'Dit is de laatst overgebleven afbeeldingset, je kan deze niet verwijderen.',
	'ONLY_STYLE'			=> 'Dit is de laatst overgebleven stijl, je kan deze niet verwijderen.',
	'ONLY_TEMPLATE'			=> 'Dit is de laatst overgebleven templateset, je kan deze niet verwijderen.',
	'ONLY_THEME'			=> 'Dit is het laatst overgebleven thema, je kan deze niet verwijderen.',
	'OPTIONAL_BASIS'		=> 'Optische basis',

	'REFRESH'					=> 'Vernieuwen',
	'REPEAT_NO'					=> 'Geen',
	'REPEAT_X'					=> 'Alleen horizontaal',
	'REPEAT_Y'					=> 'Alleen verticaal',
	'REPEAT_ALL'				=> 'Beide richtingen',
	'REPLACE_IMAGESET'			=> 'Afbeeldingset vervangen met',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'Deze afbeeldingenset zal degene die je aan het verwijderen bent vervangen voor elke stijl die er gebruik van maakt.',
	'REPLACE_STYLE'				=> 'Stijl vervangen met',
	'REPLACE_STYLE_EXPLAIN'		=> 'Deze stijl zal degene die je aan het verwijderen bent vervangen voor alle gebruikers die er gebruik van maken.',
	'REPLACE_TEMPLATE'			=> 'Template vervangen met',
	'REPLACE_TEMPLATE_EXPLAIN'	=> 'Deze templateset zal degene die je aan het verwijderen bent vervangen voor elke stijl die er gebruik van maakt.',
	'REPLACE_THEME'				=> 'Thema vervangen met',
	'REPLACE_THEME_EXPLAIN'		=> 'Dit thema zal degene die je aan het verwijderen bent vervangen voor elke stijl die er gebruik van maakt.',
	'REPLACE_WITH_OPTION'		=> 'Vervangen met “%s”',
	'REQUIRES_IMAGESET'			=> 'Deze stijl heeft de %s afbeeldingset nodig om geïnstalleerd te kunnen worden.',
	'REQUIRES_TEMPLATE'			=> 'Deze stijl heeft de %s templateset nodig om geïnstalleerd te kunnen worden.',
	'REQUIRES_THEME'			=> 'Deze stijl heeft het %s thema nodig om geïnstalleerd te kunnen worden.',

	'SELECT_IMAGE'				=> 'Afbeelding selecteren',
	'SELECT_TEMPLATE'			=> 'Templatebestand selecteren',
	'SELECT_THEME'				=> 'Themabestand selecteren',
	'SELECTED_IMAGE'			=> 'Geselecteerde afbeelding',
	'SELECTED_IMAGESET'			=> 'Geselecteerde afbeeldingset',
	'SELECTED_TEMPLATE'			=> 'Geselecteerde template',
	'SELECTED_TEMPLATE_FILE'	=> 'Geselecteerd templatebestand',
	'SELECTED_THEME'			=> 'Geselecteerde thema',
	'SELECTED_THEME_FILE'		=> 'Geselecteerd themabestand',
	'STORE_DATABASE'			=> 'Database',
	'STORE_FILESYSTEM'			=> 'Bestandssysteem',
	'STYLE_ACTIVATE'			=> 'Activeren',
	'STYLE_ACTIVE'				=> 'Actief',
	'STYLE_ADDED'				=> 'Stijl succesvol toegevoegd.',
	'STYLE_DEACTIVATE'			=> 'Deactiveren',
	'STYLE_DEFAULT'				=> 'Als standaardstijl instellen',
	'STYLE_DELETED'				=> 'Stijl succesvol verwijderd.',
	'STYLE_DETAILS_UPDATED'		=> 'Stijl succesvol gewijzigd.',
	'STYLE_ERR_ARCHIVE'			=> 'Selecteer een archiefmethode.',
	'STYLE_ERR_COPY_LONG'		=> 'Het copyright kan niet langer dan 60 tekens zijn.',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'Je moet tenminste één stijlelement selecteren.',
	'STYLE_ERR_NAME_CHARS'		=> 'De stijlnaam kan alleen alfanumerieke tekens, -, +, _ en spaties bevatten.',
	'STYLE_ERR_NAME_EXIST'		=> 'Een stijl met deze naam bestaat al.',
	'STYLE_ERR_NAME_LONG'		=> 'De stijlnaam kan niet langer zijn dan 30 tekens.',
	'STYLE_ERR_NO_IDS'			=> 'Je moet een template, thema en afbeeldingset selecteren voor deze stijl.',
	'STYLE_ERR_NOT_STYLE'		=> 'Het geïmporteerde of geüploade bestand bevat niet een geldig stijlarchief.',
	'STYLE_ERR_STYLE_NAME'		=> 'Je moet een naam opgeven voor deze stijl.',
	'STYLE_EXPORT'				=> 'Stijl exporteren',
	'STYLE_EXPORT_EXPLAIN'		=> 'Hier kan je een stijl exporteren in een vorm van een archief. Een stijl moet tenminste één element bevatten, het hoeft niet perse alle elementen te bevatten. Bijvoorbeeld; als je een nieuw thema en een afbeeldingset hebt aangemaakt voor een vaak gebruikte template kan je makkelijk het thema en de afbeeldingset exporten en de template weglaten. Je mag selecteren of je het bestand direct wilt downloaden of dat je het laten plaatsen in jouw store-map zodat je het later zelf kan downloaden of via de FTP.',
	'STYLE_EXPORTED'			=> 'De stijl is succesvol geëxporteerd en opgeslagen in %s.',
	'STYLE_IMAGESET'			=> 'Afbeeldingset',
	'STYLE_NAME'				=> 'Stijlnaam',
	'STYLE_TEMPLATE'			=> 'Template',
	'STYLE_THEME'				=> 'Thema',
	'STYLE_USED_BY'				=> 'Gebruikt door (inclusief robots)',

	'TEMPLATE_ADDED'			=> 'Templateset toegevoegd en opgeslagen op het bestandssysteem.',
	'TEMPLATE_ADDED_DB'			=> 'Templateset toegevoegd en opgeslagen op de database.',
	'TEMPLATE_CACHE'			=> 'Template-cache',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'Standaard cached phpBB de samengestelde versie van de template. Dit verminderd elke keer de belasting op de server  wanneer er een pagina wordt bekeken en dit zal dus het generen van de pagina versnellen. Hier kan je de cache-status bekijken van elk bestand en je kan ieder bestand apart verwijderen of je kan de hele cache verwijderen.',
	'TEMPLATE_CACHE_CLEARED'	=> 'De template-cache is succesvol geleegd.',
	'TEMPLATE_CACHE_EMPTY'		=> 'Er zijn geen gecachde templatebestanden.',
	'TEMPLATE_DELETED'			=> 'Templateset succesvol verwijderd.',
	'TEMPLATE_DELETE_DEPENDENT'	=> 'De templateset kan niet worden verwijderd aangezien de volgende templatesets deze template overnemen:',
	'TEMPLATE_DELETED_FS'		=> 'Templateset is verwijderd van de database, maar de bestanden blijven bestaan op het bestandssysteem.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'Templatedetails succesvol bijgewerkt.',
	'TEMPLATE_EDITOR'			=> 'Template-editor',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Hoogte van de template-editor',
	'TEMPLATE_ERR_ARCHIVE'		=> 'Selecteer een archiefmethode.',
	'TEMPLATE_ERR_CACHE_READ'	=> 'De cache-map die gebruikt wordt om gecachde versies van de templatebestanden op te slaan kon niet worden geopend.',
	'TEMPLATE_ERR_COPY_LONG'	=> 'Het copyright kan niet langer dan 60 tekens zijn.',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'De templatenaam kan alleen alfanumerieke tekens, -, +, _ en spaties bevatten.',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'Een template met deze naam bestaat al.',
	'TEMPLATE_ERR_NAME_LONG'	=> 'De templatenaam kan niet langer zijn dan 30 tekens.',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'Het archief dat je hebt opgegeven bevat niet een geldige templateset.',
	'TEMPLATE_ERR_REQUIRED_OR_INCOMPLETE' => 'De nieuwe templateset heeft de template %s nodig om geïnstalleerd te kunnen worden aangezien het zichzelf niet kan overnemen.', // INHERITS == overnemen of????
	'TEMPLATE_ERR_STYLE_NAME'	=> 'Je moet een naam opgeven voor deze template.',
	'TEMPLATE_EXPORT'			=> 'Template exporteren',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'Hier kan je een templateset exporteren in een vorm van een archief. Dit archief zal alle nodige bestanden bevatten die nodig is om de template te installeren op een ander forum. Je mag selecteren of je het bestand direct wilt downloaden of dat je het laten plaatsen in jouw store-map zodat je het later zelf kan downloaden of via de FTP.',
	'TEMPLATE_EXPORTED'			=> 'De template is succesvol geëxporteerd en opgeslagen in %s.',
	'TEMPLATE_FILE'				=> 'Templatebestand',
	'TEMPLATE_FILE_UPDATED'		=> 'Het templatebestand is succesvol bijgewerkt.',
	'TEMPLATE_INHERITS'			=> 'Deze templatesets worden overgenomen van %s en kunnen dus geen andere opslaginstellingen hebben dan de hoofdtemplate.', // INHERITS == overnemen of????
	'TEMPLATE_LOCATION'			=> 'Template opslaan in',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'Afbeeldingen zijn altijd opgeslagen in het bestandssysteem.',
	'TEMPLATE_NAME'				=> 'Templatenaam',
	'TEMPLATE_FILE_NOT_WRITABLE'=> 'Het was niet mogelijk om te schrijven naar het %s templatebestand. Controleer de permissies voor de directory en de bestanden.',
	'TEMPLATE_REFRESHED'		=> 'De template is succesvol vernieuwt.',

	'THEME_ADDED'				=> 'Nieuw thema toegevoegd op het bestandssysteem.',
	'THEME_ADDED_DB'			=> 'Nieuw thema toegevoegd op de database.',
	'THEME_CLASS_ADDED'			=> 'Aangepaste class succesvol toegevoegd.',
	'THEME_DELETED'				=> 'Thema succesvol verwijderd.',
	'THEME_DELETED_FS'			=> 'Thema is verwijderd van de database, maar de bestanden blijven bestaan op het bestandssysteem.',
	'THEME_DETAILS_UPDATED'		=> 'Themadetails succesvol bijgewerkt.',
	'THEME_EDITOR'				=> 'Thema-editor',
	'THEME_EDITOR_HEIGHT'		=> 'Hoogte van de thema-editor',
	'THEME_ERR_ARCHIVE'			=> 'Selecteer een archiefmethode.',
	'THEME_ERR_CLASS_CHARS'		=> 'Alleen alfanumerieke tekens plus ., :, -, _ en # zijn geldig in class namen.',
	'THEME_ERR_COPY_LONG'		=> 'Het copyright kan niet langer dan 60 tekens zijn.',
	'THEME_ERR_NAME_CHARS'		=> 'De themanaam kan alleen alfanumerieke tekens, -, +, _ en spaties bevatten.',
	'THEME_ERR_NAME_EXIST'		=> 'Een thema met deze naam bestaat al.',
	'THEME_ERR_NAME_LONG'		=> 'De themanaam kan niet langer zijn dan 30 tekens.',
	'THEME_ERR_NOT_THEME'		=> 'Het archief dat je hebt opgegeven bevat niet een geldig thema.',
	'THEME_ERR_REFRESH_FS'		=> 'Dit thema is opgeslagen in het bestandssysteem dus het is niet nodig om het te vernieuwen.',
	'THEME_ERR_STYLE_NAME'		=> 'Je moet een naam opgeven voor dit thema.',
	'THEME_FILE'				=> 'Themabestand',
	'THEME_EXPORT'				=> 'Thema exporteren',
	'THEME_EXPORT_EXPLAIN'		=> 'Hier kan je een thema exporteren in een vorm van een archief. Dit archief zal alle nodige data bevatten die nodig is om het thema te installeren op een ander forum. Je mag selecteren of je het bestand direct wilt downloaden of dat je het laten plaatsen in jouw store-map zodat je het later zelf kan downloaden of via de FTP.',
	'THEME_EXPORTED'			=> 'Het thema is succesvol geëxporteerd en opgeslagen in %s.',
	'THEME_LOCATION'			=> 'Stylesheet opslaan in',
	'THEME_LOCATION_EXPLAIN'	=> 'Afbeeldingen zijn altijd opgeslagen in het bestandssysteem.',
	'THEME_NAME'				=> 'Themanaam',
	'THEME_REFRESHED'			=> 'Het thema is succesvol vernieuwt.',
	'THEME_UPDATED'				=> 'Het thema is succesvol bijgewerkt.',

	'UNDERLINE'				=> 'Onderstrepen',
	'UNINSTALLED_IMAGESET'	=> 'Ongeïnstalleerde afbeeldingsets',
	'UNINSTALLED_STYLE'		=> 'Ongeïnstalleerde stijlen',
	'UNINSTALLED_TEMPLATE'	=> 'Ongeïnstalleerde templates',
	'UNINSTALLED_THEME'		=> 'Ongeïnstalleerde thema’s',
	'UNSET'					=> 'Niet opgegeven',

));

?>
