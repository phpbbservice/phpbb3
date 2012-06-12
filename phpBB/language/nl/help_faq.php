<?php
/**
*
* help_faq [Dutch]
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
		1 => 'Aanmelding en registratieproblemen'
	),
	array(
		0 => 'Waarom kan ik niet aanmelden?',
		1 => 'Dit kan door diverse redenen komen. Controleer als eerste of jouw gebruikersnaam en wachtwoord juist zijn. Als ze juist zijn, neem dan contact op met de forumbeheerder en vraag of je niet bent verbannen. Het is ook mogelijk dat de forumbeheerder een configuratie probleem heeft op het forum, en dat ze dit eerst moeten maken.'
	),
	array(
		0 => 'Waarom moet ik eigenlijk registreren?',
		1 => 'Je hoeft niet misschien niet, het is aan de forumbeheerder om te bepalen of je al dan niet moet registreren om berichten te kunnen plaatsen. Maar wanneer je registreert krijg je meer toegang tot extra functies die niet beschikbaar zijn boor gastgebruikers zoals het bepalen van een afbeelding voor een avatar, privéberichten, e-mailen naar medegebruikers, lid worden van gebruikersgroepen, enz. Het neemt slechts een paar minuten in beslag dus het is aan te bevelen om te registreren.'
	),
	array(
		0 => 'Waarom word ik automatisch afgemeld?',
		1 => 'Als je <em>Mij automatisch aanmelden</em> niet aanvinkt bij het aanmelden, word je na een bepaalde tijd weer afgemeld. Dit voorkomt misbruik van je account door iemand anders. Indien je dat vakje wel aanvinkt blijf je aangemeld. Dit is echter niet aan te raden op een publieke computer op b.v. een universiteit, in een bibliotheek of internetcafé. Als je dit selectievakje niet ziet, betekend dat de forumbeheerder deze functie heeft uitgeschakeld.'
	),
	array(
		0 => 'Hoe kan ik vermijden dat mijn gebruikersnaam wordt weergeven in de lijst met online gebruikers?',
		1 => 'In het gebruikerspaneel onder “Forumvoorkeuren”, zal je de optie <em>Mijn onlinestatus verbergen</em> vinden. Schakel deze optie in met <samp>Ja</samp> en je zal alleen zichtbaar zijn voor de beheerders, moderators en jouzelf. Je zal dan worden geteld als een verborgen gebruiker.'
	),
	array(
		0 => 'Ik ben mijn wachtwoord kwijt!',
		1 => 'Geen paniek! Hoewel je wachtwoord niet meer kan worden teruggehaald, kan er wel een nieuw wachtwoord worden aangemaakt. Bezoek de aanmeldingspagina en klik op <em>Ik ben mijn wachtwoord vergeten</em>. Volg hierna de instructies, en je zal dan binnen een korte tijd weer kunnen aanmelden.'
	),
	array(
		0 => 'Ik heb me geregistreerd maar kan niet aanmelden!',
		1 => 'Controleer eerst of jouw gebruikersnaam en wachtwoord juist zijn. Als ze correct zijn dan kunnen er twee dingen gebeurd zijn. Als de COPPA-ondersteuning is ingeschakeld en je hebt opgegeven dat je jonger bent dat 13 jaar tijdens de registratie, dan zal je de instructies moeten opvolgen die je hebt ontvangen. Bij sommige forums moeten nieuwe registraties eerst worden geactiveerd, dat kan door jezelf of door een beheerder worden gedaan voordat je kan aanmelden. Deze informatie was vermeld tijdens de registratie. Indien je een e-mail hebt ontvangen volg dan de instructies op. Wanneer je geen e-mail hebt ontvangen, kan het zijn dat je een onjuist e-mailadres hebt opgegeven of dat de e-mail is opgepikt door een spamfilter. Als je er zeker van bent dat het e-mailadres juist is dat je hebt opgegeven, neem dan contact op met een beheerder.'
	),
	array(
		0 => 'Ik heb in het verleden geregistreerd maar ik kan niet meer aanmelden?!',
		1 => 'Het is mogelijk dat een beheerder je account om bepaalde redenen heeft gedeactiveerd of verwijderd. Sommige forums verwijderen periodiek gebruikers die een bepaalde tijd zich niet hebben aangemeld of berichten hebben geplaatst om de grootte van de database te verkleinen. Wanneer dit is gebeurd, moet je je opnieuw registeren om opnieuw te kunnen deelnemen in discussies.'
	),
	array(
		0 => 'Wat is COPPA?',
		1 => 'COPPA is een Engelse afkorting van “Child Online Privacy and Protection Act”. Dit is een Amerikaanse wet van 1998 die websites verplichten wanneer ze eventueel gegevens kunnen verzamelen van jongeren onder de 13 jaar, dat de ouders van deze jongeren eerst schriftelijke of op een andere manier toestemming geven, zodat de ouders weten dat er gegevens worden verzameld van hun kind die jonger zijn dan 13 jaar. Wanneer je niet zeker bent of dit toepassing heeft op jouw of op de website waar je wilt registeren neem dan contact op met een juridische adviseur voor assistentie. Vergeet niet dat de phpBB-groep geen legaal advies kan geven en is ook geen contactpunt voor enige juridische vragen, tenzij dit hieronder vermeldt wordt.',
	),
	array(
		0 => 'Waarom kan ik niet registeren?',
		1 => 'Het is mogelijk dat de websitebeheerder jouw IP-adres heeft verbannen of dat de gebruikersnaam waarmee je hebt geregistreerd niet is toegestaan. De websitebeheerder kan ook de registratie hebben uitgeschakeld om te voorkomen dat nieuwe bezoekers zich registeren. Neem contact op met een forumbeheerder voor assistentie.',
	),
	array(
		0 => 'Wat doet de optie “Alle forumcookies verwijderen”?',
		1 => 'De optie “Alle forumcookies verwijderen” verwijderd alle cookies die zijn aangemaakt door phpBB die er voor zorgt dat je wordt herkend en dat je aangemeld blijft op het forum. Deze functie zorgt er ook voor dat alle onderwerpen die je gelezen hebt worden gemarkeerd als gelezen, mits dit is ingeschakeld door de forumbeheerder. Als je aanmeldings- of afmeldingsprobelemen hebt, kan het helpen om de forumcookies te verwijderen.',
	),
	array(
		0 => '--',
		1 => 'Gebruikersvoorkeuren en instellingen'
	),
	array(
		0 => 'Hoe wijzig ik mijn instellingen?',
		1 => 'Als je een geregistreerde gebruiker bent, zijn al je instellingen opgeslagen in de forum-database. Om ze te wijzigen bezoek je het gebruikerspaneel, een link kan normaal worden gevonden helemaal bovenaan van alle forumpagina’s. Met dit systeem kan je al je instellingen en voorkeuren wijzigen.'
	),
	array(
		0 => 'De tijden zijn niet juist!',
		1 => 'Het is mogelijk dat de tijd die is weergegeven van een andere tijdzone is dan van waar je je in bevindt. Als dit het geval is, bezoek dan je gebruikerspaneel en wijzig je tijdzone zodat die overeenkomt met de locatie waar je je in bevindt, bijvoorbeeld Londen, Parijs, New York, Sydney, etc. Vergeet niet dat het wijzigen van de tijdzone, net zoals de meeste instellingen, alleen gedaan kunnen worden door geregistreerde gebruikers. Als je niet geregistreerd bent, is dit een goed tijdstip om je te registeren.'
	),
	array(
		0 => 'Ik wijzigde de tijdzone en de tijd is nog steeds fout!',
		1 => 'Als je er zeker van bent dat je de tijdzone en zomertijd/wintertijd juist hebt ingesteld en dat de tijd hierna nog steeds verkeerd is, dan is de tijd van de serverklok verkeerd ingesteld. Informeer dan een beheerder over deze fout, zodat de beheerder dit probleem kan oplossen.'
	),
	array(
		0 => 'Mijn taal staat niet in de lijst!',
		1 => 'Of de beheerder heeft jouw taal niet geïnstalleerd of niemand heeft dit forum nog vertaald naar de taal van jouw keuze. Probeer aan de forumbeheerder te vragen of ze het taalpakket kunnen installeren dat je nodig hebt. Mocht het taalpakket niet bestaat, voel je dan vrij om een nieuwe vertaling te schrijven. Meer informatie hierover kan worden gevonden op de phpBB-website (zie de link onderaan van elke forumpagina).'
	),
	array(
		0 => 'Hoe kan ik een afbeelding weergeven bij mijn gebruikersnaam?',
		1 => 'Er kunnen twee afbeeldingen bij een gebruikersnaam staan wanneer je berichten aan het bekijken bent. Een ervan kan een afbeelding zijn die geassocieerd is met je rang, normaal in de vorm van sterren, blokjes of punten, die laat zien hoeveel berichten je hebt gemaakt of wat je status is op het forum. De andere, normaal een grotere afbeelding, beter bekend als een avatar, is meestal uniek of persoonlijk voor elke gebruiker. Het is aan de forumbeheerder om avatars in te schakelen en te kiezen op welke manier avatars gebruikt kunnen worden. Als je geen avatars kunt gebruiken, neem dan contact op met een forumbeheerder en vraag aan hun de redenen waarom je geen avatars kunt gebruiken.'
	),
	array(
		0 => 'Wat is mijn rang en hoe kan ik het wijzigen?',
		1 => 'Rangen verschijnen onder je gebruikersnaam, het laat zien hoeveel berichten je hebt gemaakt of het identificeert bepaalde gebruikers, bijvoorbeeld moderators en beheerders. In het algemeen kan je niet direct een rang wijzigen aangezien ze ingesteld zijn door de forumbeheerder. Misbruik het forum niet door onnodig berichten te plaatsen om je rang te verhogen. De meeste forums zullen dit niet tolereren en de moderator of beheerder kan dan gewoon je berichtenteller verlagen zonder enige reden.'
	),
	array(
		0 => 'Wanneer ik klik op de e-maillink van een gebruiker wordt er gevraagd of ik me wil aanmelden?',
		1 => 'Alleen geregistreerde gebruikers kunnen e-mail versturen naar andere gebruikers via het ingebouwde e-mailformulier, en alleen als de beheerder deze functie heeft ingeschakeld. Dit is gedaan om misbruik op het e-mailsysteem door gastgebruikers te voorkomen.'
	),
	array(
		0 => '--',
		1 => 'Plaatsingsproblemen'
	),
	array(
		0 => 'Hoe plaats ik een onderwerp in een forum?',
		1 => 'Om een nieuw onderwerp te plaatsen in een forum, klik je op de overeenstemmende knop in het forum of onderwerp. Het kan zijn dat je eerst moet registeren voordat je een bericht kan plaatsen. Een lijst van jouw permissies voor elk forum is beschikbaar onderaan in het forum en onderwerp. Voorbeeld: Je kan nieuwe onderwerpen plaatsen, Je kan stemmen in peilingen, enz.'
	),
	array(
		0 => 'Hoe wijzig of verwijder ik een bericht?',
		1 => 'Tenzij je een forumbeheerder of een moderator bent, kan je alleen je eigen berichten wijzigen of verwijderen. Je kan een bericht wijzigen door op de wijzig-knop te klikken die je kan vinden op het relevante bericht, in sommige gevallen alleen voor een bepaalde tijd nadat het bericht is geplaatst. Als iemand gereageerd heeft op het bericht, dan zal er een kleine tekst onderaan van het bericht worden weergegeven wanneer je het onderwerp bekijkt, in de kleine tekst zal staan hoeveel keer je het bericht hebt gewijzigd en de datum en tijd. Dit zal niet worden weergegeven wanneer een beheerder of moderator een bericht wijzigt, het kan zijn dat ze een opmerking willen achterlaten wanneer ze het bericht hebben gewijzigd. Vergeet niet dat gewone gebruikers geen bericht kunnen verwijderen wanneer er al op is gereageerd.'
	),
	array(
		0 => 'Hoe kan ik een onderschrift toevoegen aan mijn bericht?',
		1 => 'Om een onderschrift toe te voegen aan een bericht moet je er eest één aanmaken in je gebruikerspaneel. Wanneer je die hebt aangemaakt,  moet je <em>Onderschrift toevoegen (onderschrift kan aangepast worden in het gebruikerspaneel)</em> aanvinken onderaan van de optie tabblad wanneer je een bericht aan het plaatsen bent, dit is normaal helemaal onderaan te vinden. Je kan ook standaard een onderschrift laten toevoegen aan al je berichten door de juiste keuzerondjes aan te vinken in je profiel. Wanneer je dat hebt gedaan, kan je nog steeds voorkomen dat je onderschrift wordt toegevoegd aan bepaalde berichten door de optie <em>Onderschrift toevoegen (onderschrift kan aangepast worden in het gebruikerspaneel)</em> uit te vinken wanneer je een bericht aan het plaatsen bent.'
	),
	array(
		0 => 'Hoe kan ik een peiling maken?',
		1 => 'Wanneer je een nieuw onderwerp aan het plaatsen bent of je bent het eerste bericht van een onderwerp aan het wijzigen, klik dan op de tab “Peiling toevoegen” die je kan vinden onderaan wanneer je een nieuw onderwerp aan het plaatsen bent, of het eerste bericht aan het wijzigen bent van een onderwerp. Wanneer je dit niet kan zien betekend dat je niet de juiste permissies hebt om peilingen te kunnen toevoegen. Voer een titel in en tenminste twee opties in de juiste velden, wees er zeker van dat je elke optie op een aparte regel hebt gezet in het tekstveld. Je kan ook het aantal opties instellen waaruit gebruikers kunnen kiezen geduurd het stemmen onder “Opties per gebruiker”, je kan ook een tijdslimiet in dagen voor de peiling (0 voor geen einde) instellen, en als laatste kan je ook instellen of gebruikers meerdere keren kunnen stemmen.'
	),
	array(
		0 => 'Waarom kan ik niet meerdere peilingopties toevoegen?',
		1 => 'Het limiet voor peilingopties zijn ingesteld door de forumbeheerder. Als je denkt dat je meerdere opties moet toevoegen aan je peiling dan is toegestaan, neem dan contact op met de forumbeheerder zodat die de peilingopties kan verhogen.'
	),
	array(
		0 => 'Hoe kan ik een peiling wijzigen of verwijderen?',
		1 => 'Hetzelfde als met berichten, kunnen peilingen ook worden gewijzigd door de auteur, een moderator of een beheerder. Om een peiling te wijzigen, klik je op de wijzig-knop van het eerste bericht in het onderwerp, de peiling is altijd geassocieerd met het eerste bericht van een onderwerp. Als er niemand heeft gestemd, kunnen gebruikers de peiling verwijderen of een peilingoptie wijzigingen. Maar, als gebruikers al hebben gestemd, dan kunnen alleen moderators of beheerders de peiling verwijderen op de peilingopties wijzigingen. Dit is om te voorkomen dat gebruikers peilingen kunnen beïnvloeden door opties te wijzigen terwijl de peiling nog loopt.'
	),
	array(
		0 => 'Waarom krijg ik geen toegang tot een forum?',
		1 => 'Sommige forums kunnen voorbehouden zijn aan bepaalde gebruikers of groepen. Om deze te bekijken, lezen, berichten in te plaatsen of andere acties heb je speciale permissies nodig. Neem contact op met een moderator of beheerder en vraag ze of ze jouw toegang willen verlenen.'
	),
	array(
		0 => 'Waarom kan ik geen bijlagen toevoegen?',
		1 => 'Bijlagenpermissies zijn toegekend per forum, per groep of gebaseerd per gebruiker. De forumbeheerder kan voor bepaalde forums waar je een bericht in aan het plaatsen bent bijlagen hebben uitgeschakeld, of dat alleen bepaalde groepen bijlagen kunnen plaatsen. Neem contact op met de forumbeheerder wanneer je er niet zeker van bent waarom je geen bijlagen kan toevoegen.'
	),
	array(
		0 => 'Waarom ontvang ik een waarschuwing?',
		1 => 'Elke forumbeheerder heeft eigen regels opgesteld voor hun site. Als je een regel overtreedt, kan je gewaarschuwd worden daar voor. Vergeet niet dat dit de beslissing is van de forumbeheerder, en dat de phpBB-groep niks te maken heeft met de waarschuwingen die je krijgt op deze site. Neem contact op met de forumbeheerder wanneer je er niet zeker van bent waarom je een waarschuwing hebt gekregen.'
	),
	array(
		0 => 'Hoe kan ik berichten melden aan een moderator?',
		1 => 'Als de forumbeheerder het toe staat, dan moet je een knop zien voor berichten te melden die je naast het bericht kan zien die je wilt melden. Wanneer je hier op klikt, zal het je door de stappen leiden om het bericht uiteindelijk te melden.'
	),
	array(
		0 => 'Waarvoor is de “Opslaan”-knop bij het plaatsen van een onderwerp?',
		1 => 'Hiermee kan je berichten opslaan en het later nog aanpassen zodat je het op een later tijdstip nog kan versturen. Om een opgeslagen bericht te laden zal je het gebruikerspaneel moeten bezoeken.'
	),
	array(
		0 => 'Waarom moet mijn bericht worden goedgekeurd?',
		1 => 'De forumbeheerder kan beslist hebben dat het forum waar je een bericht in wilt plaatsen eerst moet worden herzien voordat het publiekelijk kan worden bekeken. Het is ook mogelijk dat de beheerder jouw heeft geplaatst in een groep van gebruikers waar hun berichten eerst moeten worden herzien herzien voordat het publiekelijk kan worden bekeken. Neem contact op met de forumbeheerder voor meer informatie.'
	),
	array(
		0 => 'Hoe kan ik mijn onderwerp omhooghalen?',
		1 => 'Door middel van op de link “Onderwerp omhooghalen” te klikken wanneer je een onderwerp aan het bekijken bent, hiermee kan je het onderwerp “omhooghalen” zodat het helemaal bovenaan verschijnt op de eerste pagina van de onderwerpenlijst. Het kan zijn dat je dit niet ziet, dat betekend dat het omhooghalen van een onderwerp is uitgeschakeld of dat de tijd tussen het omhooghalen van onderwerp nog niet is bereikt. Het is ook mogelijk wanneer je het onderwerp omhoog wilt halen dat je er gewoon op reageert, wees er zeker van dat je de forumregels volgt wanneer je dit doet.'
	),
	array(
		0 => '--',
		1 => 'Tekstopmaak en onderwerptypes'
	),
	array(
		0 => 'Wat is BBCode?',
		1 => 'BBCode is een speciale implementatie van HTML, het bied grootte controle over de opmaak van bepaalde objecten in een bericht. Het gebruik van BBCode is bepaald door de beheerder, het kan ook uitgeschakeld zijn per bericht gebaseerd van het formulier wanneer je een bericht plaatst. BBCode is vergelijkbaar met HTML, echter worden de tags ingesloten met rechten haken [ en ] in plaats van &lt; en &gt;. Zie voor meer informatie de handleiding die je kunt bereiken via de pagina wanneer je een bericht plaatst.'
	),
	array(
		0 => 'Kan ik HTML gebruiken?',
		1 => 'Nee. Het is niet mogelijk om HTML te gebruiken in berichten op dit forum en dat het wordt weergegeven als HTML. De meeste opmaak die je via HTML kan toepassen kan ook worden toegepast met BBCode.'
	),
	array(
		0 => 'Wat zijn smileys?',
		1 => 'Smileys of emoticons, zijn kleine afbeeldingen die gebruikt kunnen worden om een gevoel uit te drukken met een korte code, zo betekend bijvoorbeeld :) blij, terwijl :( verdrietig betekend. De volledige lijst van emoticons kan geraadpleegd worden op de pagina wanneer je een bericht plaatst. Probeer niet te veel smileys te gebruiken, aangezien het er voor kan zorgen dat een bericht onleesbaar wordt en een moderator kan beslissen om de smileys te verwijderen uit het bericht of zelfs het hele bericht. De forumbeheerder kan ook een limiet hebben ingesteld voor het aantal smileys dat je kan gebruiken in een bericht.'
	),
	array(
		0 => 'Kan ik afbeeldingen plaatsen?',
		1 => 'Ja, afbeeldingen kunnen worden weergegeven in jouw berichten. Als de beheerder bijlagen heeft toegestaan, dan kan je afbeeldingen uploaden naar het forum. Anders moet je linken naar een afbeelding die opgeslagen is op een openbaar toegankelijke server, bijvoorbeeld http://www.voorbeeld.nl/mijn-afbeelding.gif. Je kan niet linken naar afbeeldingen die opgeslagen zijn op jouw computer (tenzei het een openbaar toegankelijke server is) noch afbeeldingen die opgeslagen zijn op beveiligde locaties, zoals Hotmail- of Yahoo-mailboxen, sites met wachtwoordbeveiliging, enz. Gebruik om de afbeelding te laten weergeven de [img]-tag van de BBCode.'
	),
	array(
		0 => 'Wat zijn forummededelingen?',
		1 => 'Forummededelingen bevatten belangrijke informatie en moeten gelezen wanneer het mogelijk is. Het zal worden weergegeven bovenaan elk forum en in het gebruikerspaneel. De permissies van forummededelingen zijn ingesteld door de forumbeheerder.'
	),
	array(
		0 => 'Wat zijn mededelingen?',
		1 => 'Mededelingen bevatten meestal belangrijke informatie over het forum dat je momenteel aan het lezen bent en je zal het moeten lezen wanneer het mogelijk is. Mededelingen worden weergegeven bovenaan elk forum  waarin ze geplaatst zijn. Hetzelfde als met forummededelingen zijn permissies van mededelingen ook ingesteld door de forumbeheerder.'
	),
	array(
		0 => 'Wat zijn sticky onderwerpen?',
		1 => 'Sticky onderwerpen worden weergegeven in het forum onder de mededelingen op de eerste pagina. Ze bevatten meestal belangrijke informatie en je zou het moeten lezen wanneer het mogelijk is. Hetzelfde met mededelingen en forummededelingen zijn de permissies van sticky onderwerpen ingesteld door de forumbeheerder.'
	),
	array(
		0 => 'Wat zijn gesloten onderwerpen?',
		1 => 'Gesloten onderwerp zijn onderwerpen waar gebruikers niet meer langer op kunnen reageren en waarbij de peiling automatisch is beëindigd. Onderwerpen kunnen voor diverse reden zijn gesloten en dit is gedaan door een forummoderator of een forumbeheerder. Je kan ook je eigen onderwerpen sluiten maar dit is afhankelijk van de permissies die zijn ingesteld door de forumbeheerder.'
	),
	array(
		0 => 'Wat zijn onderwerppictogrammen?',
		1 => 'Onderwerppictogrammen zijn afbeeldingen door de auteur zijn gekozen, die geaccosieerd zijn met berichten om de inhoud aan te geven. De mogelijkheid om onderwerppictogrammen te gebruiken is afhankelijk van de permissies die ingesteld zijn door de forumbeheerder.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Gebruikersniveaus en groepen'
	),
	array(
		0 => 'Wat zijn beheerders?',
		1 => 'Beheerders zijn leden die de hoogste controle hebben over het hele forum. Deze leden beheren het hele forum, zoals het instellen van permissies, het verbannen van gebruikers, het aanmaken van gebruikersgroepen of moderators, enz., afhankelijk van de forumoprichter en wat hij of zei voor permissies heeft gegeven aan de andere beheerders. Ze kunnen ook volledige moderator mogelijkheden hebben in alle forums, afhankelijk van de instellingen die ingesteld zijn door de forumoprichter.'
	),
	array(
		0 => 'Wat zijn moderators?',
		1 => 'Moderators zijn personen (of groepen van personen) die op het forum letten van dag tot dag. Ze hebben de bevoegdheid om berichten te wijzigen, verwijderen en om onderwerpen te sluiten, heropenen, verplaatsen en splitsen in het forum waar ze moderator van zijn. Over het algemeen zijn moderators er om te voorkomen dat gebruikers off-topic (afwijken van het onderwerp), illegaal of belediging materiaal plaatsen.'
	),
	array(
		0 => 'Wat zijn gebruikersgroepen?',
		1 => 'Gebruikersgroepen zijn groepen van gebruikers die het forum verdeelt in beheerbare secties waarmee de forumbeheerder kan werken. Elke gebruiker kan thuis horen in diverse groepen en elke groep kan aparte permissies hebben. Dit is een makkelijke manier voor beheerders om de permissies van vele gebruikers in één keer te wijzigen, zoals het wijzigen van moderatorpermissies of gebruikers toegang geven tot een privéforum.'
	),
	array(
		0 => 'Waarom zijn er gebruikersgroepen en hoe kan ik lid worden van één ervan?',
		1 => 'Je kan alle gebruikersgroepen bekijken via de “Gebruikersgroepen” link in je gebruikerspaneel. Als je van één gebruikersgroep lid wilt worden klik je op de overeenstemmende knop. Niet alle groepen hebben open toegang. Alhoewel, sommige groepen kunnen een goedkeuring verplichten om lid te kunnen worden, sommige kunnen gesloten zijn en sommige kunnen zelfs een verborgen lidmaatschap hebben. Als de groep open is, kan je er lid van worden door op de overeenstemmende knop te klikken. Als een groep vereist dat goedkeuring nodig is bij het lid worden van de groep, kan je lidmaatschap aanvragen door op de overeenstemmende knop te klikken. De leider van de gebruikersgroep moet eerst je lidmaatschap goedkeuren en ze kunnen eventueel ook vragen waarom je lid wilt worden van de groep. Wanner je lidmaatschap wordt afgewezen, val dan geen groepsleider lastig, ze zullen hun redenen wel hebben.'
	),
	array(
		0 => 'Hoe kan ik een leider van een gebruikersgroep worden?',
		1 => 'Een leider van een gebruikersgroep wordt meestal gekozen door de forumbeheerder. Als je geïnteresseerd bent in het aanmaken van een gebruikersgroep, is je eerste punt om contact te zoeken met de forumbeheerder, probeer een privébericht te sturen.',
	),
	array(
		0 => 'Waarom verschijnen sommige gebruikersgroepen in een verschillende kleur?',
		1 => 'Het is mogelijk dat de forumbeheerder een kleur heeft toegewezen aan de leden van een gebruikersgroep zodat de gebruikers eenvoudig te herkennen zijn, zodat iedereen gelijk kan zien dat deze gebruikers lid zijn van deze groep.'
	),
	array(
		0 => 'Wat is een “standaard gebruikersgroep”?',
		1 => 'Als je lid bent van meer dan één gebruikersgroep, is je standaardgroep gebruikt om te bepalen welke kleur en rang standaard moet worden ingesteld voor jouw. De forumbeheerder kan jouw permissie geven dat je jouw standaardgroep kan wijzigen via je gebruikerspaneel.'
	),
	array(
		0 => 'Wat betekend de “het team” link?',
		1 => 'Als je op deze link klikt, zal er een pagina worden geladen die heel het forumteam weergeeft, inclusief forumbeheerders en moderators en andere gegevens zoals welke forums ze modereren.'
	),
	array(
		0 => '--',
		1 => 'Privéberichten'
	),
	array(
		0 => 'Ik kan geen privéberichten versturen!',
		1 => 'Er kunnen drie redenen voor dit zijn; je bent niet geregistreerd en/of aangemeld, de forumbeheerder heeft de functie om privéberichten te versturen uitgeschakeld voor heel het forum, of de forumbeheerder heeft ingesteld dat jij geen privéberichten kunt sturen. Neem contact op met een forumbeheerder voor meer informatie.'
	),
	array(
		0 => 'Ik blijf ongewenste privéberichten krijgen!',
		1 => 'Je kan een gebruiker blokkeren zodat ze jouw geen privéberichten meer kunnen sturen door regels te gebruiken in je gebruikerspaneel. Als je ongewenste berichten onvangt van één persoon, neem dan contact op met de forumbeheerder, hun hebben de krachten om het zo in te stellen dat een gebruiker geen privéberichten meer kan sturen. '
	),
	array(
		0 => 'Ik heb een spam of ongewenst e-mailbericht ontvangen van iemand van dit forum!',
		1 => 'Het spijt ons om dat te horen. De functie om e-mail te versturen van dit forum bevat beveiligingen en probeert gebruikers te traceren wanneer ze zulke berichten plaatsen, dus stuur een e-mail met een volledige kopie van de e-mail die je hebt ontvangen naar de forumbeheerder. Het is heel belangrijk om de headers bij te sluiten zodat ze de gegevens bevatten van de gebruiker die de e-mail heeft verstuurd. De forumbeheerder kan enige acties ondernemen.'
	),
	array(
		0 => '--',
		1 => 'Vrienden en vijanden'
	),
	array(
		0 => 'Wat zijn mijn vrienden en vijandenlijst?',
		1 => 'Je kan deze lijsten gebruiken om andere leden van het forum te rangschikken. Leden die toegevoegd zijn aan je vriendenlijst zullen worden weergegeven in je gebruikerspaneel, zodat je meteen hun online-status kan zien en dat je ze eenvoudig een privébericht kan sturen. Afhankelijk of de template het ondersteunt, kunnen berichten van deze gebruikers worden opgelicht. Als je een gebruiker hebt toegevoegd aan je vijandenlijst, dan worden alle berichten standaard verborgen gemaakt voor deze gebruiker.'
	),
	array(
		0 => 'Hoe kan ik gebruikers toevoegen of verwijderen aan mijn vrienden of vijandenlijst?',
		1 => 'Je kan gebruikers toevoegen aan jouw lijst op twee manieren. In elk gebruikersprofiel is er een link om de gebruiker toe te voegen aan je vrienden of vijandenlijst. Als alternatief kan je ook in je gebruikerspaneel de gebruikers meteen toevoegen door hun gebruikersnaam op te geven. Je kan ook gebruikers verwijderen van je lijst, dat kan je doen op dezelfde pagina als wanneer je een gebruiker toevoegt.'
	),
	array(
		0 => '--',
		1 => 'De forums doorzoeken'
	),
	array(
		0 => 'Hoe kan ik één forum of meerdere forums doorzoeken?',
		1 => 'Geef een zoekterm op in de zoekveld die je kan vinden op de index, forum of onderwerppagina’s. Uitgebreid zoeken kan worden gevonden door op de link “uitgebreid zoeken” te klikken die beschikbaar is op alle pagina’s op het forum. Hoe je de zoekfunctie kan vinden is afhankelijk van de stijl die je gebruikt.'
	),
	array(
		0 => 'Waarom levert mijn zoekopdracht geen resultaten op?',
		1 => 'Je zoekopdracht was waarschijnlijk niet duidelijk genoeg en het het bevatten te veel voorkomende woorden die niet geïndexeerd zijn door phpBB3. Probeer om meer specifieker te zijn en gebruik de opties die beschikbaar zijn in het uitgebreid zoeken.'
	),
	array(
		0 => 'Waarom levert mijn zoekopdracht een witte pagina op!?',
		1 => 'Je zoekopdracht gaf te veel resultaten op zodat de webserver het niet kon verwerken. Gebruik “uitgebreid zoeken” en wees meer specifieker in termen die je gebruikt hebt en in de forums waar in gezocht moet worden.'
	),
	array(
		0 => 'Hoe kan leden zoeken?',
		1 => 'Bezoek de “leden”-pagina en klik op de “een lid zoeken” link.'
	),
	array(
		0 => 'Hoe kan ik mijn eigen berichten en onderwerpen vinden?',
		1 => 'Je eigen berichten kunnen worden terug gevonden door te klikken op de “berichten van gebruiker zoeken” link die je kan terug vinden in je gebruikerspaneel en op je eigen profielpagina. Om te zoeken naar jouw onderwerpen gebruik je de uitgebreide zoekpagina en vul je de diverse opties correct in.'
	),
	array(
		0 => '--',
		1 => 'Onderwerpabonnementen en bladwijzers'
	),
	array(
		0 => 'Wat is het verschil tussen een abonnement en een bladwijzer?',
		1 => 'Bladwijzers in phpBB3 lijkt er veel op bladwijzers in je webbrowser. Je wordt niet gewaarschuwd als er een update is, maar je kan wel terug komen om het onderwerp later te bekijken. Abonnementen daarin tegen zal je een notificatie sturen wanneer er een update is in het onderwerp of forum via de methode of methodes die jij hebt ingesteld.'
	),
	array(
		0 => 'Hoe kan ik me abonneren op een specifieke forums of onderwerpen?',
		1 => 'Om je te abonneren op een specifiek forum, klik je op de “op dit forum abonneren” link  wanneer je het forum bekijkt. Om je te abonneren op een onderwerp, reageer op het onderwerp en selecteer “stuur mij een notificatie als er een reactie is geplaatst” in het selectievakje of klik op de link “op dit onderwerp abonneren” wanneer je het onderwerp bekijkt.'
	),
	array(
		0 => 'Hoe verwijder ik mijn abonnementen?',
		1 => 'Om je abonnementen te verwijderen, ga je naar je gebruikerspaneel en volg je de links naar jouw abonnementen.'
	),
	array(
		0 => '--',
		1 => 'Bijlagen'
	),
	array(
		0 => 'Welke bijlagen zijn toegestaan op dit forum?',
		1 => 'Elke forumbeheerder kan diverse bijlagentypes toestaan of juist niet toestaan. Als je niet zeker van bent wat is toegestaan om te uploaden, neem dan contact op met de forumbeheerder voor verdere assistentie.'
	),
	array(
		0 => 'Hoe kan ik al mijn bijlagen vinden?',
		1 => 'Om een lijst van alle bijlagen te vinden die jij hebt geüpload, ga je naar je gebruikerspaneel en volg je de links naar het bijlagenbeheer.'
	),
	array(
		0 => '--',
		1 => 'phpBB3 problemen'
	),
	array(
		0 => 'Wie heeft deze forumsoftware geschreven?',
		1 => 'Deze software (in oorspronkelijke vorm) is gemaakt, uitgebracht en is eigendom van de <a href="http://www.phpbb.com/">phpBB-groep</a> en vertaald naar het Nederlands door <a href="http://www.phpbbservice.nl/">phpBBservice.nl</a>. Het is beschikbaar gesteld onder de GNU General Public License en mag vrij worden verspreid. Zie de link voor meer informatie.'
	),
	array(
		0 => 'Waarom is een bepaalde functie niet beschikbaar?',
		1 => 'Deze software is geschreven en eigendom van de phpBB-groep. Als je denkt dat er een functie moet worden toegevoegd, of je hebt een bug melden, bezoek dan de phpBB <a href="http://area51.phpbb.com/">Area51</a> website, waar je alle nodige informatie erover vindt.'
	),
	array(
		0 => 'Met wie neem ik contact op over ongewenste en/of illegale zaken die gerelateerd zijn aan dit forum?',
		1 => 'Eén van de beheerders die zijn weergegeven op de “Het team”-pagina is normaal een goed contactpunt voor jouw klachten. Als je nog steeds geen reactie krijgt dan zal je contact moeten zoeken met de eigenaar van het domein (doe een <a href="http://www.google.nl/search?q=whois">whois lookup</a>) of, als dit staat op een gratis forumservice (bijvoorbeeld yourbb, forum2go, xsBB, actieforum, phpbb3.nl, phpbb.net, enz.) neem dan contact op met het management of de misbruikafdeling van de service die gebruikt wordt. Vergeet niet dat de phpBB-groep <strong>absoluut geen verantwoordelijkheid</strong> heeft en kan dus op geen enkele manier verantwoordelijk worden gehouden, over hoe en waar dit forum wordt gebruikt. Neem geen contact op met de phpBB-groep over enige juridische (beëindiging, verantwoordelijkheid, beledigende opmerkingen, etc.) zaken <strong>die niet direct gerelateerd zijn</strong> aan de phpBB.com-website of de phpBB-software zelf. Als je de phpBB-groep mailt <strong>over een derde partij</strong> die deze software gebruikt, dan kan je een langzame reactie of helemaal geen reactie verwachten.'
	)
);

?>