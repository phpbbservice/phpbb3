<?php
/**
*
* acp_attachments [Dutch]
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hier kan je de hoofdinstellingen voor bijlagen en bijbehorende speciale categorieën instellen.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hier kan je je extensiegroepen toevoegen, verwijderen, wijzigen of uitschakelen. Andere opties zijn onder andere het toewijzen van een speciale categorie voor ze, het veranderen van de download mechanisme en het definiëren van een upload icoon welke zal worden weergegeven voor de bijlage afhankelijk van de groep waartoe de bijlage behoort.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hier kan je je toegestane extensies beheren. Om je extensies te activeren ga dan naar de extensiegroep managementpaneel. We bevelen sterk aan de volgende script extensies (zoals <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, etc…) niet toe te staan.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hier kan je de weesbestanden bekijken. Dit gebeurt meestal wanneer gebruikers bestanden bijvoegen maar het bericht niet versturen. Je kan de bestanden verwijderen of ze bijvoegen aan bestaande berichten. Bijvoegen aan een bericht vereist een geldig berichten-ID, je moet dit ID zelf bepalen. Dit zal de al geüploade bijlagen toewijzen aan het bericht dat je hebt ingevuld.',
	'ADD_EXTENSION'						=> 'Toevoegen extensie',
	'ADD_EXTENSION_GROUP'				=> 'Toevoegen extensiegroep',
	'ADMIN_UPLOAD_ERROR'				=> 'Fouten tijdens bijvoegen bestand: “%s”.',
	'ALLOWED_FORUMS'					=> 'Toegestane forums',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Kan de toegewezen extensie plaatsen in de geselecteerde (of alle indien geselecteerd) forums.',
	'ALLOWED_IN_PM_POST'				=> 'Toegestaan',
	'ALLOW_ATTACHMENTS'					=> 'Toestaan bijlagen',
	'ALLOW_ALL_FORUMS'					=> 'Toestaan alle forums',
	'ALLOW_IN_PM'						=> 'Toegestaan in privé berichten',
	'ALLOW_PM_ATTACHMENTS'				=> 'Toestaan bijlagen in privé berichten',
	'ALLOW_SELECTED_FORUMS'				=> 'Alleen forums hieronder geselecteerd',
	'ASSIGNED_EXTENSIONS'				=> 'Toegewezen extensies',
	'ASSIGNED_GROUP'					=> 'Toegewezen extensiegroep',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensies',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extensiegroepen',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximum bestandsgrootte',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximum grootte van elk bestand. Als de waarde 0 is, dan wordt de geüploade bestandsgrootte alleen gelimiteerd door je PHP instellingen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximum bestandsgrootte privé bericht',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximum grootte van elk bestand, met 0 als ongelimiteerd, bijgevoegd aan een privé bericht.',
	'ATTACH_ORPHAN_URL'					=> 'Weesbijlagen',
	'ATTACH_POST_ID'					=> 'Bericht-ID',
	'ATTACH_POST_TYPE'					=> 'Berichttype',
	'ATTACH_QUOTA'						=> 'Totaal bijlage quota',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximum schijfruimte beschikbaar voor bijlagen van het hele forum, met 0 als ongelimiteerd.',
	'ATTACH_TO_POST'					=> 'Bestand bijvoegen aan bericht',

	'CAT_FLASH_FILES'			=> 'Flash bestanden',
	'CAT_IMAGES'				=> 'Afbeeldingen',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media bestanden',
	'CAT_RM_FILES'				=> 'RealMedia media bestanden',
	'CAT_WM_FILES'				=> 'Windows Media media bestanden',
	'CHECK_CONTENT'				=> 'Controleer bijlage bestanden',
	'CHECK_CONTENT_EXPLAIN'		=> 'Sommige browsers kunnen een incorrecte mimetype for geüploade bestanden aan te nemen. Deze optie verzekerd je er van dat zulke bestanden die dit veroorzaken worden afgewezen.',
	'CREATE_GROUP'				=> 'Aanmaken nieuwe groep',
	'CREATE_THUMBNAIL'			=> 'Aanmaken miniatuur',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Maakt een miniatuur aan in alle mogelijke situaties.',

	'DEFINE_ALLOWED_IPS'			=> 'Definieer toegestane IPs/hostnamen',
	'DEFINE_DISALLOWED_IPS'			=> 'Definieer verboden IPs/hostnamen',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Om meerdere IPs of hostnamen op te geven, voer dan ieder op een nieuwe regel in. Om een bereik van IP-adressen op te geven, scheid de start en einde met een streepje (-), om een joker op te geven gebruik dan “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Je kan meerdere IP-adressen verwijderen (of weer insluiten) in één keer door gebruik te maken van de juiste combinatie van muis en toetsenbord voor je computer en browser. Uitgesloten IPs hebben een blauwe achtergrond.',
	'DISPLAY_INLINED'				=> 'Afbeeldingen inline weergeven',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Indien ingesteld op “Geen afbeelding” dan zal de bijlage weergegeven worden als een koppeling.',
	'DISPLAY_ORDER'					=> 'Bijlage weergave volgorde',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Bijlagen weergeven gesorteerd op tijd.',

	'EDIT_EXTENSION_GROUP'			=> 'Wijzig extensiegroep',
	'EXCLUDE_ENTERED_IP'			=> 'Schakel dit in om de ingevoerde IP/hostnaam uit te sluiten.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Sluit IP uit van toegestane IPs/hostnamen',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Sluit IP uit van verboden IPs/hostnamen',
	'EXTENSIONS_UPDATED'			=> 'Extensies succesvol bijgewerkt.',
	'EXTENSION_EXIST'				=> 'De extensie %s bestaat al.',
	'EXTENSION_GROUP'				=> 'Extensiegroep',
	'EXTENSION_GROUPS'				=> 'Extensiegroepen',
	'EXTENSION_GROUP_DELETED'		=> 'Extensiegroep succesvol verwijderd.',
	'EXTENSION_GROUP_EXIST'			=> 'De extensiegroep %s bestaat al.',

	'EXT_GROUP_ARCHIVES'			=> 'Archieven',
	'EXT_GROUP_DOCUMENTS'			=> 'Documenten',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare Bestanden',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash Bestanden',
	'EXT_GROUP_IMAGES'				=> 'Afbeeldingen',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Platte Tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'GO_TO_EXTENSIONS'		=> 'Ga naar extensie management scherm',
	'GROUP_NAME'			=> 'Groepnaam',

	'IMAGE_LINK_SIZE'			=> 'Image link dimensions',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Display image attachment as an inline text link if image is larger than this. To disable this behaviour, set the values to 0px by 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick path',
	'IMAGICK_PATH_EXPLAIN'		=> 'Full path to the imagemagick convert application, e.g. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum number of attachments per post',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum number of attachments per private message',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum file size',
	'MAX_IMAGE_SIZE'				=> 'Maximum image dimensions',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum size of image attachments. Set both values to 0px by 0px to disable dimension checking.',
	'MAX_THUMB_WIDTH'				=> 'Maximum thumbnail width in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'A generated thumbnail will not exceed the width set here.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum thumbnail file size',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Do not create a thumbnail for images smaller than this.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Physical',

	'NOT_ALLOWED_IN_PM'			=> 'Only allowed in posts',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Not allowed',
	'NOT_ASSIGNED'				=> 'Not assigned',
	'NO_EXT_GROUP'				=> 'None',
	'NO_EXT_GROUP_NAME'			=> 'No group name entered',
	'NO_EXT_GROUP_SPECIFIED'	=> 'No extension group specified.',
	'NO_FILE_CAT'				=> 'None',
	'NO_IMAGE'					=> 'No image',
	'NO_THUMBNAIL_SUPPORT'		=> 'Thumbnail support has been disabled. For proper functionality either the GD extension need to be available or imagemagick being installed. Both were not found.',
	'NO_UPLOAD_DIR'				=> 'The upload directory you specified does not exist.',
	'NO_WRITE_UPLOAD'			=> 'The upload directory you specified cannot be written to. Please alter the permissions to allow the webserver to write to it.',

	'ONLY_ALLOWED_IN_PM'	=> 'Only allowed in private messages',
	'ORDER_ALLOW_DENY'		=> 'Allow',
	'ORDER_DENY_ALLOW'		=> 'Deny',

	'REMOVE_ALLOWED_IPS'		=> 'Remove or un-exclude <em>allowed</em> IPs/hostnames',
	'REMOVE_DISALLOWED_IPS'		=> 'Remove or un-exclude <em>disallowed</em> IPs/hostnames',

	'SEARCH_IMAGICK'				=> 'Search for Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Allow/Deny list',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Change the default behaviour when secure downloads are enabled of the Allow/Deny list to that of a <strong>whitelist</strong> (Allow) or a <strong>blacklist</strong> (Deny).',
	'SECURE_DOWNLOADS'				=> 'Enable secure downloads',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'With this option enabled, downloads are limited to IP’s/hostnames you define.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Secure Downloads are not enabled. The settings below will be applied after enabling secure downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'The IP list has been updated successfully.',
	'SECURE_EMPTY_REFERRER'			=> 'Allow empty referrer',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Secure downloads are based on referrers. Do you want to allow downloads for those omitting the referrer?',
	'SETTINGS_CAT_IMAGES'			=> 'Image category settings',
	'SPECIAL_CATEGORY'				=> 'Special category',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Special categories differ between the way presented within posts.',
	'SUCCESSFULLY_UPLOADED'			=> 'Successfully uploaded.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extension group successfully added.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extension group successfully updated.',

	'UPLOADING_FILES'				=> 'Uploading files',
	'UPLOADING_FILE_TO'				=> 'Uploading file “%1$s” to post number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'You do not have the permission to upload files to forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload directory',
	'UPLOAD_DIR_EXPLAIN'			=> 'Storage path for attachments. Please note that if you change this directory while already having uploaded attachments you need to manually copy the files to their new location.',
	'UPLOAD_ICON'					=> 'Upload icon',
	'UPLOAD_NOT_DIR'				=> 'The upload location you specified does not appear to be a directory.',
));
