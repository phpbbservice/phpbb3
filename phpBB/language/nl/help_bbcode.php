<?php
/**
*
* help_bbcode [Dutch]
*
* @package language
* @copyright (c) 2005 phpBB Group, 2007 phpBBservice.nl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Introductie'
	),
	array(
		0 => 'Wat is BBCode?',
		1 => 'BBCode is een speciale implementatie van HTML. Of je BBCode in je berichten op het forum kan gebruiken is bepaald door de beheerder. Je kan zelf ook de BBCode uitschakelen per bericht doormiddel van het berichtenformulier. BBCode is vergelijkbaar met HTML, echter worden de tags ingesloten met rechten haken [ en ] in plaats van &lt; en &gt; en het geeft meer controle over wat en hoe iets wordt weergegeven. Afhankelijk van de template die je gebruikt, kan je BBCode toevoegen aan je berichten doormiddel van de knoppen bovenaan het berichtenformulier. Zelfs als je hier gebruik van maakt is deze handleiding handig.'
	),
	array(
		0 => '--',
		1 => 'Tekstopmaak'
	),
	array(
		0 => 'Hoe vette, cursieve en onderstreepte tekst maken',
		1 => 'BBCode heeft tags die je in staat stellen om snel de basisopmaak van je tekst aan te passen. Dit kan op de volgende manieren: <ul><li>Om een deel van de tekst in het vet te laten weergeven plaats je die tussen <strong>[b][/b]</strong>, bijvoorbeeld: <br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />zal worden: <strong>Hallo</strong></li><li>Voor onderstreping gebruik je <strong>[u][/u]</strong>, bijvoorbeeld:<br /><br /><strong>[u]</strong>Goede morgen<strong>[/u]</strong><br /><br />zal worden: <span style="text-decoration: underline;">Goede morgen</span></li><li>Voor cursieve tekst gebruik je <strong>[i][/i]</strong>, bijvoorbeeld:<br /><br />Dit is <strong>[i]</strong>geweldig!<strong>[/i]</strong><br /><br />zal worden: Dit is <em>geweldig!</em></li></ul>'
	),
	array(
		0 => 'Hoe tekstkleur of -grootte aan te passen',
		1 => 'Om de kleur en grootte van je tekst te wijzigen kunnen de volgende tags gebruikt worden. Bedenk dat hoe de tekst verschijnt afhangt van de browser en het systeem van de lezer: <ul><li>De kleur van tekst kun je wijzigen door deze te plaatsen tussen <strong>[color=][/color]</strong>. Je kan een erkende kleurnaam gebruiken (bijv. red, blue, yellow, enz.) of de hexidecimale code, bijv. #FFFFFF, #000000. Bijvoorbeeld, om een tekst rood te maken gebruik je:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />of<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />en dit geeft beide als resultaat <span style="color: red;">Hallo!</span></li><li>De grootte van een tekst aanpassen gebeurt op vergelijkbare wijze met <strong>[size=][/size]</strong>. Deze tag is afhankelijk van de template die je gebruikt. Het aanbevolen formaat is een numerieke waarde die de tekstgrootte geeft in procenten, beginnend met 20 (heel klein) tot 200 (erg groot). Bijvoorbeeld:<br /><br /><strong>[size=30]</strong>KLEIN<strong>[/size]</strong><br /><br />wordt over het algemeen <span style="font-size: 30%;">KLEIN</span><br /><br />terwijl:<br /><br /><strong>[size=200]</strong>GROOT!<strong>[/size]</strong><br /><br />als resultaat zal geven <span style="font-size: 200%;">GROOT!</span></li></ul>'
	),
	array(
		0 => 'Kan ik verschillende tags samen gebruiken?',
		1 => 'Natuurlijk kan dat, bijvoorbeeld om iemands aandacht te trekken kan je schrijven:<br /><br /><strong>[size=200][color=red][b]</strong>KIJK NAAR MIJ!<strong>[/b][/color][/size]</strong><br /><br />en dit geeft als resultaat <span style="color: red; font-size: 200%;"><strong>KIJK NAAR MIJ!</strong></span><br /><br />Wij raden je overigens af om hele stukken tekst zo op te maken! Vergeet niet te controleren of alle tags correct gesloten zijn, en in de juiste volgorde. Bijvoorbeeld het volgende is niet juist:<br /><br /><strong>[b][u]</strong>Dit is verkeerd<strong>[/b][/u]</strong><br /><br />Maar het volgende is wel goed:<br /><br /><strong>[b][u]</strong>Dit is goed<strong>[/u][/b]</stron>.'
	),
	array(
		0 => '--',
		1 => 'Citeren en het plaatsen van tekst met vaste breedte'
	),
	array(
		0 => 'Tekst citeren in reacties',
		1 => 'Er zijn twee manieren om een tekst te citeren, met of zonder een referentie. <ul><li>Wanneer je de citaatfunctie gebruikt om op een bericht te reageren, zal je zien dat de tekst van het bericht is toegevoegd in het berichtvenster in een <strong>[quote=&quot;&quot;][/quote]</strong> blok. Deze methode stelt je in staat te citeren met een referentie aan een persoon, of wat jij kiest om in te vullen! Om bijvoorbeeld een stuk tekst van Dhr. Blobby te citeren:<br /><br /><strong>[quote=&quot;Dhr. Blobby&quot;]</strong>Hier komt de tekst die Dhr. Blobby heeft geschreven<strong>[/quote]</strong><br /><br />Als resultaat plaatst het forum automatisch &quot;Dhr. Blobby schreef:&quot; voor de actuele tekst. Onthoud dat je de aanhalingstekens &quot;&quot; <strong>moet</strong> plaatsen rond de naam die je citeert, ze zijn niet optioneel.</li><li>De tweede methode staat je toe om blindelings iets te citeren. Dit kan door de tekst tussen <strong>[quote][/quote]</strong> tags te plaatsen. Wanneer je de tekst bekijkt zie je simpelweg de tekst binnen het citaatblok staan.</li></ul>'
	),
	array(
		0 => 'Code of tekst met vaste breedte plaatsen',
		1 => 'Als je een stuk code of een tekst wilt plaatsen waarvoor je een lettertype met vaste breedte nodig hebt, bijvoorbeeld het Courier-lettertype, moet je de tekst tussen <strong>[code][/code]</strong> tags plaatsen, bijvoorbeeld <br /><br /><strong>[code]</strong>echo &quot;Dit is een stuk code&quot;;<strong>[/code]</strong><br /><br />Alle gebruikte opmaak binnen de <strong>[code][/code]</strong> tags wordt behouden wanneer je het later bekijkt. PHP-accentuering kan worden ingeschakeld door <strong>[code=php][/code]</strong> te gebruiken, het is aangeraden om het te gebruiken wanneer je PHP-code voorbeelden plaatst, aangezien het de leesbaarheid verbeterd.'
	),
	array(
		0 => '--',
		1 => 'Lijsten maken'
	),
	array(
		0 => 'Een niet-geordende lijst maken',
		1 => 'BBCode ondersteunt twee soorten lijsten, ongeordend en geordend. Deze zijn hoofdzakelijk hetzelfde als hun gelijkwaardige HTML-codes. Een ongeordende lijst plaatst elk item in je lijst onder elkaar, ingesprongen met een stip ervoor. Om een ongeordende lijst te maken gebruik je <strong>[list][/list]</strong> en om elk item op te geven binnen de lijst gebruik je <strong>[*]</strong>. Om bijvoorbeeld je favoriete kleuren te laten weergeven in een lijst kan je het volgende gebruiken:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rood<br /><strong>[*]</strong>Blauw<br /><strong>[*]</strong>Geel<br /><strong>[/list]</strong><br /><br />Dit resulteert in de volgende lijst:<ul><li>Rood</li><li>Blauw</li><li>Geel</li></ul>'
	),
	array(
		0 => 'Een geordende lijst maken',
		1 => 'De tweede soort lijst, een geordende lijst, geeft je controle over waar elk punt door voorafgegaan wordt. Om een geordende lijst te maken gebruik je <strong>[list=1][/list]</strong> om een genummerde lijst te maken of als alternatief een alfabetische lijst gebruik je <strong>[list=a][/list]</strong>. Net als met een niet-geordende lijst, zijn items opgegeven doormiddel van <strong>[*]</strong>. Bijvoorbeeld:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ga naar de winkel<br /><strong>[*]</strong>Koop een nieuwe computer<br /><strong>[*]</strong>Vloek op de computer wanneer die crasht<br /><strong>[/list]</strong><br /><br />resulteert in het volgende:<ol style="list-style-type: decimal;"><li>Ga naar de winkel</li><li>Koop een nieuwe computer</li><li>Vloek op de computer wanneer die crasht</li></ol>Voor een alfabetische lijst gebruik je:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Het eerste mogelijke antwoord<br /><strong>[*]</strong>Het tweede mogelijke antwoord<br /><strong>[*]</strong>Het derde mogelijke antwoord<br /><strong>[/list]</strong><br /><br />en dit geeft:<ol style="list-style-type: lower-alpha;"><li>Het eerste mogelijke antwoord</li><li>Het tweede mogelijke antwoord</li><li>Het derde mogelijke antwoord</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Links maken'
	),
	array(
		0 => 'Linken naar een andere site',
		1 => 'phpBB BBCode ondersteunt een aantal manieren om URI’s, (Uniform Resource Indicators) te maken, beter bekend als URL’s. <ul><li>De eerste methode die je kan gebruiken is de <strong>[url=][/url]</strong> tag, na het = teken kun je de url typen en binnen de tag de titel. Bijvoorbeeld om naar phpBBservice.nl te linken, kan je dit gebruiken:<br /><br /><strong>[url=http://www.phpbbservice.nl/]</strong>Bezoek phpBB!<strong>[/url]</strong><br /><br />Dit maakt de volgende link, <a href="http://www.phpbbservice.nl/">Bezoek phpBB!</a> Vergeet niet dat de link in hetzelfde venster opent of in een nieuw venster afhankelijk van de voorkeuren van de gebruiker zijn/haar browser.</li><li>Als je wilt dat de URL zelf wordt weergeven als de link kan je dit heel gemakkelijk doen door het volgende te gebruiken:<br /><br /><strong>[url]</strong>http://www.phpbbservice.nl/<strong>[/url]</strong><br /><br />Dit maakt de volgende link, <a href="http://www.phpbbservice.nl/">http://www.phpbbservice.nl/</a></li><li>Daarnaast biedt phpBB een functie genaamd <em>Magische Links</em>, dit maakt van elke juiste URL een link zonder dat je een tag moet plaatsen of zelfs het voorvoegsel http://. Als je bijvoorbeeld www.phpbbservice.nl in een bericht typt wordt het automatisch omgezet naar <a href="http://www.phpbbservice.nl/">www.phpbbservice.nl</a> wanneer je het bericht bekijkt.</li><li>Hetzelfde geldt ook voor e-mailadressen, je kan ofwel een duidelijk adres opgeven bijvoorbeeld:<br /><br /><strong>[email]</strong>niemand@domain.adr<strong>[/email]</strong><br /><br />wat het volgende weergeeft <a href="mailto:niemand@domain.adr">niemand@domain.adr</a> of je kan gewoon niemand@domein.adr in je bericht typen en het wordt automatisch omgezet wanneer je het het bericht bekijkt.</li></ul>Zoals met alle BBCode-tags kun je andere tags zoals <strong>[img][/img]</strong>, <strong>[b][/b]</strong>, enz. in een URL insluiten (zie volgende paragraaf). Net als met de opmaak-tags is het aan jou erop te letten dat je de tags juist afsluit en in de juiste volgorde gebruikt, bijvoorbeeld:<br /><br /><strong>[url=http://www.google.nl/][img]</strong>http://www.google.com/intl/nl_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline;">niet</span> juist wat kan leiden dat je bericht wordt verwijderd, dus let hier goed op.'
	),
	array(
		0 => '--',
		1 => 'Afbeeldingen weergeven in berichten'
	),
	array(
		0 => 'Een afbeelding toevoegen aan een bericht',
		1 => 'phpBB BBCode biedt een tag om afbeeldingen te plaatsen in je berichten. Twee belangrijke dingen om te onthouden bij het gebruiken van deze tag zijn: veel gebruikers houden er niet van als er veel afbeeldingen worden weergegeven in berichten en ten tweede de afbeelding die je wilt weergeven moet beschikbaar zijn op het internet (het kan bijvoorbeeld niet alleen bestaan op je computer tenzij je een webserver draait!). Om een afbeelding te laten weergeven moet je de URL die naar de afbeelding verwijst tussen <strong>[img][/img]</strong> tags plaatsen. Bijvoorbeeld:<br /><br /><strong>[img]</strong>http://www.google.nl/intl/nl_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Zoals in de bovenstaande paragraaf over URL’s beschreven is kan je een afbeelding in een <strong>[url][/url]</strong> tag plaatsen om een link te maken, bijvoorbeeld<br /><br /><strong>[url=http://www.google.nl/][img]</strong>http://www.google.nl/intl/nl_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />zal als resultaat geven:<br /><br /><a href="http://www.google.nl/"><img src="http://www.google.nl/intl/nl_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Een bijlagen toevoegen in een bericht',
		1 => 'Bijlagen kunnen nu geplaatst worden in elk deel van een bericht doormiddel van de nieuwe <strong>[attachment=][/attachment]</strong>-bbcode, mits als de bijlagenfunctie is ingeschakeld door de forumbeheerder en als je de juiste permissies hebt om bijlagen te kunnen toevoegen. Op de pagina wanneer je een bericht plaatst is er een selectiemenu (normaal een knop) voor het plaatsen van bijlagen in een bericht.'
	),
	array(
		0 => '--',
		1 => 'Overige zaken'
	),
	array(
		0 => 'Kan ik mijn eigen tags toevoegen?',
		1 => 'Alleen als je de beheerder bent van dit forum en je de nodige permissies hebt, kan je extra BBCodes toevoegen via de pagina van de aangepaste BBCodes.'
	)
);

?>