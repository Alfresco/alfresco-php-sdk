<?php
/**
 * German (Deutsch)
 *
 * @package MediaWiki
 * @subpackage Language
 *
 * @author Jimmy Collins <jimmy.collins@web.de>
 */


$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Spezial',
	NS_MAIN             => '',
	NS_TALK             => 'Diskussion',
	NS_USER             => 'Benutzer',
	NS_USER_TALK        => 'Benutzer_Diskussion',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => '$1_Diskussion',
	NS_IMAGE            => 'Bild',
	NS_IMAGE_TALK       => 'Bild_Diskussion',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Diskussion',
	NS_TEMPLATE         => 'Vorlage',
	NS_TEMPLATE_TALK    => 'Vorlage_Diskussion',
	NS_HELP             => 'Hilfe',
	NS_HELP_TALK        => 'Hilfe_Diskussion',
	NS_CATEGORY         => 'Kategorie',
	NS_CATEGORY_TALK    => 'Kategorie_Diskussion'
);

$quickbarSettings = array(
	'Keine', 'Links, fest', 'Rechts, fest', 'Links, schwebend'
);

$skinNames = array(
	'standard'      => 'Klassik',
	'nostalgia'     => 'Nostalgie',
	'cologneblue'   => 'Kölnisch Blau',
	'smarty'        => 'Paddington',
	'montparnasse'  => 'Montparnasse',
	'davinci'       => 'DaVinci',
	'mono'          => 'Mono',
	'monobook'      => 'MonoBook',
	'myskin'        => 'MySkin',
	'chick'         => 'Küken'
);


$bookstoreList = array(
	'abebooks.de' => 'http://www.abebooks.de/servlet/BookSearchPL?ph=2&isbn=$1',
	'amazon.de' => 'http://www.amazon.de/exec/obidos/ISBN=$1',
	'buch.de' => 'http://www.buch.de/de.buch.shop/shop/1/home/schnellsuche/buch/?fqbi=$1',
	'buchhandel.de' => 'http://www.buchhandel.de/vlb/vlb.cgi?type=voll&isbn=$1',
	'Karlsruher Virtueller Katalog (KVK)' => 'http://www.ubka.uni-karlsruhe.de/kvk.html?SB=$1',
	'Lehmanns Fachbuchhandlung' => 'http://www.lob.de/cgi-bin/work/suche?flag=new&stich1=$1'
);

$separatorTransformTable = array(',' => '.', '.' => ',' );
$linkTrail = '/^([äöüßa-z]+)(.*)$/sDu';

/**
 * Alternate names of special pages. All names are case-insensitive. The first
 * listed alias will be used as the default. Aliases from the fallback 
 * localisation (usually English) will be included by default. 
 * 
 * This array may be altered at runtime using the LangugeGetSpecialPageAliases 
 * hook.
 */
$specialPageAliases = array(
        'DoubleRedirects'           => array( 'Doppelte_Weiterleitungen' ),
        'BrokenRedirects'           => array( 'Kaputte_Weiterleitungen' ),
        'Disambiguations'           => array( 'Begriffsklärungsverweise' ),
        'Userlogin'                 => array( 'Anmelden' ),
        'Userlogout'                => array( 'Abmelden' ),
        'Preferences'               => array( 'Einstellungen' ),
        'Watchlist'                 => array( 'Beobachtungsliste' ),
        'Recentchanges'             => array( 'Letzte_Änderungen' ),
        'Upload'                    => array( 'Hochladen' ),
        'Imagelist'                 => array( 'Dateien', 'Dateiliste' ),
        'Newimages'                 => array( 'Neue_Dateien' ),
        'Listusers'                 => array( 'Benutzer' ),
        'Statistics'                => array( 'Statistik' ),
        'Randompage'                => array( 'Zufällige_Seite' ),
        'Lonelypages'               => array( 'Verwaiste_Seiten' ),
        'Uncategorizedpages'        => array( 'Nicht_kategorisierte_Seiten' ),
        'Uncategorizedcategories'   => array( 'Nicht_kategorisierte_Kategorien' ),
        'Uncategorizedimages'       => array( 'Nicht_kategorisierte_Dateien' ),
        'Unusedcategories'          => array( 'Unbenutzte_Kategorien' ),
        'Unusedimages'              => array( 'Unbenutzte_Dateien' ),
        'Wantedpages'               => array( 'Gewünschte_Seiten' ),
        'Wantedcategories'          => array( 'Gewünschte_Kategorien' ),
        'Mostlinked'                => array( 'Meistverlinkte_Seiten' ),
        'Mostlinkedcategories'      => array( 'Meistbenutzte_Kategorien' ),
        'Mostcategories'            => array( 'Meistkategorisierte_Seiten' ),
        'Mostimages'                => array( 'Meistbenutzte_Dateien' ),
        'Mostrevisions'             => array( 'Meistbearbeitete_Seiten' ),
        'Shortpages'                => array( 'Kürzeste_Seiten' ),
        'Longpages'                 => array( 'Längste_Seiten' ),
        'Newpages'                  => array( 'Neue_Seiten' ),
        'Ancientpages'              => array( 'Älteste_Seiten' ),
        'Deadendpages'              => array( 'Sackgassenseiten' ),
        'Allpages'                  => array( 'Alle_Seiten' ),
        'Prefixindex'               => array( 'Präfixindex' ) ,
        'Ipblocklist'               => array( 'Gesperrte_IPs' ),
        'Specialpages'              => array( 'Spezialseiten' ),
        'Contributions'             => array( 'Beiträge' ),
        'Emailuser'                 => array( 'E-Mail' ),
        'Whatlinkshere'             => array( 'Verweisliste' ),
        'Recentchangeslinked'       => array( 'Änderungen_an_verlinkten_Seiten' ),
        'Movepage'                  => array( 'Verschieben' ),
        'Blockme'                   => array( 'Proxy-Sperre' ),
        'Booksources'               => array( 'ISBN-Suche' ),
        'Categories'                => array( 'Kategorien' ),
        'Export'                    => array( 'Exportieren' ),
        'Version'                   => array( 'Version' ),
        'Allmessages'               => array( 'MediaWiki-Systemnachrichten' ),
        'Log'                       => array( 'Logbuch' ),
        'Blockip'                   => array( 'Sperren' ),
        'Undelete'                  => array( 'Wiederherstellen' ),
        'Import'                    => array( 'Importieren' ),
        'Lockdb'                    => array( 'Datenbank_sperren' ),
        'Unlockdb'                  => array( 'Datenbank_entsperren' ),
        'Userrights'                => array( 'Benutzerrechte' ),
        'MIMEsearch'                => array( 'MIME-Typ-Suche' ),
        'Unwatchedpages'            => array( 'Ignorierte_Seiten', 'Unbeobachtete_Seiten' ),
        'Listredirects'             => array( 'Weiterleitungen' ),
        'Revisiondelete'            => array( 'Versionslöschung' ),
        'Unusedtemplates'           => array( 'Unbenutzte_Vorlagen' ),
        'Randomredirect'            => array( 'Zufällige_Weiterleitung' ),
        'Mypage'                    => array( 'Meine_Benutzerseite' ),
        'Mytalk'                    => array( 'Meine_Diskussionsseite' ),
        'Mycontributions'           => array( 'Meine_Beiträge' ),
        'Listadmins'                => array( 'Administratoren' ),
        'Search'                    => array( 'Suche' ),);
$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j. Y',
	'mdy both' => 'H:i, M j. Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j. F Y',
	'dmy both' => 'H:i, j. M. Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'H:i, Y M j',
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Verweise unterstreichen:',
'tog-highlightbroken'         => 'Verweise auf leere Seiten hervorheben',
'tog-justify'                 => 'Text als Blocksatz',
'tog-hideminor'               => 'Kleine Änderungen ausblenden',
'tog-extendwatchlist'         => 'Erweiterte Beobachtungsliste',
'tog-usenewrc'                => 'Erweiterte Darstellung (benötigt JavaScript)',
'tog-numberheadings'          => 'Überschriften automatisch nummerieren',
'tog-showtoolbar'             => 'Bearbeiten-Werkzeugleiste anzeigen',
'tog-editondblclick'          => 'Seiten mit Doppelklick bearbeiten (JavaScript)',
'tog-editsection'             => 'Links zum Bearbeiten einzelner Absätze anzeigen',
'tog-editsectiononrightclick' => 'Einzelne Absätze per Rechtsklick bearbeiten (JavaScript)',
'tog-showtoc'                 => 'Anzeigen eines Inhaltsverzeichnisses bei Seiten mit mehr als 3 Überschriften',
'tog-rememberpassword'        => 'Benutzer soll auf diesem Computer dauerhaft angemeldet bleiben',
'tog-editwidth'               => 'Text-Eingabefeld mit voller Breite',
'tog-watchcreations'          => 'Selbst erstellte Seiten automatisch beobachten',
'tog-watchdefault'            => 'Selbst geänderte und neu erstellte Seiten automatisch beobachten',
'tog-watchmoves'              => 'Selbst verschobene Seiten automatisch beobachten',
'tog-watchdeletion'           => 'Selbst gelöschte Seiten automatisch beobachten',
'tog-minordefault'            => 'Alle eigenen Änderungen als geringfügig markieren',
'tog-previewontop'            => 'Vorschau oberhalb des Bearbeitungsfensters anzeigen',
'tog-previewonfirst'          => 'Beim ersten Bearbeiten immer die Vorschau anzeigen',
'tog-nocache'                 => 'Seitencache deaktivieren',
'tog-enotifwatchlistpages'    => 'Bei Änderungen an beobachteten Seiten E-Mails senden.',
'tog-enotifusertalkpages'     => 'Bei Änderungen an meiner Benutzer-Diskussionsseite E-Mails senden.',
'tog-enotifminoredits'        => 'Auch bei kleinen Änderungen an beobachteten Seiten E-Mails senden.',
'tog-enotifrevealaddr'        => 'Ihre E-Mail-Adresse wird in Benachrichtigungsmails gezeigt',
'tog-shownumberswatching'     => 'Anzahl der beobachtenden Benutzer anzeigen',
'tog-fancysig'                => 'Signatur ohne Verlinkung zur Benutzerseite',
'tog-externaleditor'          => 'Externen Editor als Standard benutzen',
'tog-externaldiff'            => 'Externes Diff-Programm als Standard benutzen',
'tog-showjumplinks'           => '„Wechseln-zu“-Links ermöglichen',
'tog-uselivepreview'          => 'Live-Vorschau nutzen (JavaScript) (experimentell)',
'tog-forceeditsummary'        => 'Warnen, wenn beim Speichern die Zusammenfassung fehlt',
'tog-watchlisthideown'        => 'Eigene Bearbeitungen in der Beobachtungsliste ausblenden',
'tog-watchlisthidebots'       => 'Bearbeitungen durch Bots in der Beobachtungsliste ausblenden',
'tog-watchlisthideminor'      => 'Kleine Bearbeitungen in der Beobachtungsliste ausblenden',
'tog-nolangconversion'        => 'Konvertierung von Sprachvarianten deaktivieren',
'tog-ccmeonemails'            => 'Schicke mir Kopien der E-Mails, die ich anderen Benutzern sende.',

'underline-always'  => 'immer',
'underline-never'   => 'nie',
'underline-default' => 'von Browsereinstellung abhängig',

'skinpreview' => '(Vorschau)',

# Dates
'sunday'        => 'Sonntag',
'monday'        => 'Montag',
'tuesday'       => 'Dienstag',
'wednesday'     => 'Mittwoch',
'thursday'      => 'Donnerstag',
'friday'        => 'Freitag',
'saturday'      => 'Samstag',
'sun'           => 'So',
'mon'           => 'Mo',
'tue'           => 'Di',
'wed'           => 'Mi',
'thu'           => 'Do',
'fri'           => 'Fr',
'sat'           => 'Sa',
'january'       => 'Januar',
'february'      => 'Februar',
'march'         => 'März',
'april'         => 'April',
'may_long'      => 'Mai',
'june'          => 'Juni',
'july'          => 'Juli',
'august'        => 'August',
'september'     => 'September',
'october'       => 'Oktober',
'november'      => 'November',
'december'      => 'Dezember',
'january-gen'   => 'Januars',
'february-gen'  => 'Februars',
'march-gen'     => 'Märzes',
'april-gen'     => 'Aprils',
'may-gen'       => 'Mais',
'june-gen'      => 'Junis',
'july-gen'      => 'Julis',
'august-gen'    => 'Augusts',
'september-gen' => 'Septembers',
'october-gen'   => 'Oktobers',
'november-gen'  => 'Novembers',
'december-gen'  => 'Dezembers',
'jan'           => 'Jan',
'feb'           => 'Feb',
'mar'           => 'Mär',
'apr'           => 'Apr',
'may'           => 'Mai',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Aug',
'sep'           => 'Sep',
'oct'           => 'Okt',
'nov'           => 'Nov',
'dec'           => 'Dez',

# Bits of text used by many pages
'categories'            => 'Kategorien',
'pagecategories'        => '{{PLURAL:$1|Kategorie|Kategorien}}',
'category_header'       => 'Seiten in der Kategorie „$1“',
'subcategories'         => 'Unterkategorien',
'category-media-header' => 'Medien in der Kategorie „$1“',

'mainpage'          => 'Hauptseite',
'mainpagetext'      => 'MediaWiki wurde erfolgreich installiert.',
'mainpagedocfooter' => 'Hilfe zur Benutzung und Konfiguration der Wiki Software finden Sie im [http://meta.wikimedia.org/wiki/Help:Contents Benutzerhandbuch].',

'portal'          => '{{SITENAME}}-Portal',
'portal-url'      => '{{ns:project}}:Portal',
'about'           => 'Über',
'aboutsite'       => 'Über {{SITENAME}}',
'aboutpage'       => '{{ns:project}}:Über_{{SITENAME}}',
'article'         => 'Seite',
'help'            => 'Hilfe',
'helppage'        => '{{ns:project}}:Hilfe',
'bugreports'      => 'Kontakt',
'bugreportspage'  => '{{ns:project}}:Kontakt',
'sitesupport'     => 'Spenden',
'sitesupport-url' => '{{ns:project}}:Spenden',
'faq'             => 'FAQ',
'faqpage'         => '{{ns:project}}:FAQ',
'edithelp'        => 'Bearbeitungshilfe',
'newwindow'       => '(öffnet ein neues Fenster)',
'edithelppage'    => '{{ns:project}}:Bearbeitungshilfe',
'cancel'          => 'Abbrechen',
'qbfind'          => 'Finden',
'qbbrowse'        => 'Blättern',
'qbedit'          => 'Ändern',
'qbpageoptions'   => 'Seitenoptionen',
'qbpageinfo'      => 'Seitendaten',
'qbmyoptions'     => 'Einstellungen',
'qbspecialpages'  => 'Spezialseiten',
'moredotdotdot'   => 'Mehr…',
'mypage'          => 'Eigene Seite',
'mytalk'          => 'Eigene Diskussion',
'anontalk'        => 'Diskussionsseite dieser IP',
'navigation'      => 'Navigation',

# Metadata in edit box
'metadata_help' => 'Metadaten:',

'currentevents'     => 'Aktuelle Ereignisse',
'currentevents-url' => 'Aktuelle Ereignisse',

'disclaimers'       => 'Impressum',
'disclaimerpage'    => '{{ns:project}}:Impressum',
'privacy'           => 'Datenschutz',
'privacypage'       => '{{ns:project}}:Datenschutz',
'errorpagetitle'    => 'Fehler',
'returnto'          => 'Zurück zur Seite $1.',
'tagline'           => 'Aus {{SITENAME}}',
'search'            => 'Suche',
'searchbutton'      => 'Suche',
'go'                => 'Ausführen',
'searcharticle'     => 'Seite',
'history'           => 'Versionen',
'history_short'     => 'Versionen/Autoren',
'updatedmarker'     => '(geändert)',
'info_short'        => 'Information',
'printableversion'  => 'Druckversion',
'permalink'         => 'Permanentlink',
'print'             => 'Drucken',
'edit'              => 'bearbeiten',
'editthispage'      => 'Seite bearbeiten',
'delete'            => 'löschen',
'deletethispage'    => 'Diese Seite löschen',
'undelete_short'    => '{{PLURAL:$1|eine Änderung|$1 Änderungen}} wiederherstellen',
'protect'           => 'schützen',
'protectthispage'   => 'Seite schützen',
'unprotect'         => 'freigeben',
'unprotectthispage' => 'Schutz aufheben',
'newpage'           => 'Neue Seite',
'talkpage'          => 'Diskussion',
'specialpage'       => 'Spezialseite',
'personaltools'     => 'Persönliche Werkzeuge',
'postcomment'       => 'Kommentar hinzufügen',
'articlepage'       => 'Seite',
'talk'              => 'Diskussion',
'views'             => 'Ansichten',
'toolbox'           => 'Werkzeuge',
'userpage'          => 'Benutzerseite',
'projectpage'       => 'Meta-Text',
'imagepage'         => 'Bildseite',
'mediawikipage'     => 'Inhaltsseite anzeigen',
'templatepage'      => 'Vorlagenseite anzeigen',
'viewhelppage'      => 'Hilfeseite anzeigen',
'categorypage'      => 'Kategorieseite anzeigen',
'viewtalkpage'      => 'Diskussion',
'otherlanguages'    => 'Andere Sprachen',
'redirectedfrom'    => '(Weitergeleitet von $1)',
'redirectpagesub'   => 'Weiterleitung',
'lastmodifiedat'    => 'Diese Seite wurde zuletzt am $1 um $2 Uhr geändert.', # $1 date, $2 time
'viewcount'         => 'Diese Seite wurde bisher $1 mal abgerufen.',
'copyright'         => 'Inhalt ist verfügbar unter der $1.',
'protectedpage'     => 'Geschützte Seite',
'jumpto'            => 'Wechseln zu:',
'jumptonavigation'  => 'Navigation',
'jumptosearch'      => 'Suche',

'badaccess'        => 'Keine ausreichenden Rechte.',
'badaccess-group0' => 'Sie haben nicht die erforderliche Berechtigung für diese Aktion.',
'badaccess-group1' => 'Diese Aktion ist beschränkt auf Benutzer, die der Gruppe $1 angehören.',
'badaccess-group2' => 'Diese Aktion ist beschränkt auf Benutzer, die einer der Gruppen $1 angehören.',
'badaccess-groups' => 'Diese Aktion ist beschränkt auf Benutzer, die einer der Gruppen $1 angehören.',

'versionrequired'     => 'Version $1 von MediaWiki ist erforderlich',
'versionrequiredtext' => 'Version $1 von MediaWiki ist erforderlich, um diese Seite zu nutzen. Siehe [[{{ns:special}}:Version]]',

'ok'                  => 'Suche',
'pagetitle'           => '$1 − {{SITENAME}}',
'retrievedfrom'       => 'Von „$1“',
'youhavenewmessages'  => 'Sie haben $1 ($2).',
'newmessageslink'     => 'neue Nachrichten',
'newmessagesdifflink' => 'letzte Änderung',
'editsection'         => 'bearbeiten',
'editold'             => 'bearbeiten',
'editsectionhint'     => 'Abschnitt bearbeiten: $1',
'toc'                 => 'Inhaltsverzeichnis',
'showtoc'             => 'Anzeigen',
'hidetoc'             => 'Verbergen',
'thisisdeleted'       => '$1 ansehen oder wiederherstellen?',
'viewdeleted'         => '$1 anzeigen?',
'restorelink'         => '$1 {{PLURAL:$1|gelöschte Version|gelöschte Versionen}}',
'feedlinks'           => 'Feed:',
'feed-invalid'        => 'Ungültiger Abonnement-Typ.',
'feed-atom'           => 'Atom',
'feed-rss'            => 'RSS',

# Short words for each namespace, by default used in the 'article' tab in monobook
'nstab-main'      => 'Seite',
'nstab-user'      => 'Benutzerseite',
'nstab-media'     => 'Media',
'nstab-special'   => 'Spezialseite',
'nstab-project'   => 'Portalseite',
'nstab-image'     => 'Datei',
'nstab-mediawiki' => 'MediaWiki-Systemtext',
'nstab-template'  => 'Vorlage',
'nstab-help'      => 'Hilfeseite',
'nstab-category'  => 'Kategorie',

# Main script and global functions
'nosuchaction'      => 'Diese Aktion gibt es nicht',
'nosuchactiontext'  => 'Die in der URL angegebene Aktion wird von der MediaWiki-Software nicht unterstützt.',
'nosuchspecialpage' => 'Diese Spezialseite gibt es nicht',
'nospecialpagetext' => 'Die aufgerufene Spezialseite ist nicht vorhanden. Eine Liste aller verfügbaren Spezialseiten findet sich unter [[{{ns:special}}:Specialpages]].',

# General errors
'error'                => 'Fehler',
'databaseerror'        => 'Fehler in der Datenbank',
'dberrortext'          => 'Es gab einen Syntaxfehler in der Datenbankabfrage.
Die letzte Datenbankabfrage lautete: <blockquote><tt>$1</tt></blockquote> aus der Funktion „<tt>$2</tt>“.
MySQL meldete den Fehler „<tt>$3: $4</tt>“.',
'dberrortextcl'        => 'Es gab einen Syntaxfehler in der Datenbankabfrage.
Die letzte Datenbankabfrage lautete: „$1“ aus der Funktion „<tt>$2</tt>“.
MySQL meldete den Fehler: „<tt>$3: $4</tt>“.',
'noconnect'            => 'Konnte keine Verbindung zur Datenbank auf $1 herstellen',
'nodb'                 => 'Konnte Datenbank $1 nicht auswählen',
'cachederror'          => 'Das Folgende ist eine Kopie aus dem Cache und möglicherweise nicht aktuell.',
'laggedslavemode'      => 'Achtung: Die angezeigte Seite enthält unter Umständen nicht die jüngsten Bearbeitungen.',
'readonly'             => 'Datenbank ist gesperrt',
'enterlockreason'      => 'Bitte geben Sie einen Grund ein, warum die Datenbank gesperrt werden soll und eine Abschätzung über die Dauer der Sperrung',
'readonlytext'         => 'Die Datenbank ist vorübergehend für Neueinträge und Änderungen gesperrt. Bitte versuchen Sie es später noch einmal.

Grund der Sperrung: $1',
'missingarticle'       => 'Der Text für „$1“ wurde nicht in der Datenbank gefunden.

Die Seite ist möglicherweise gelöscht oder verschoben worden.

Falls dies nicht der Fall ist, haben Sie eventuell einen Fehler in der Software gefunden. Bitte melden Sie dies einem [[{{ns:project}}:Administrator]] unter Nennung der URL.',
'readonly_lag'         => 'Die Datenbank wurde kurzzeitig automatisch gesperrt, damit sich die Datenbanken abgleichen können.',
'internalerror'        => 'Interner Fehler',
'filecopyerror'        => 'Die Datei „$1“ konnte nicht nach „$2“ kopiert werden.',
'filerenameerror'      => 'Die Datei „$1“ konnte nicht nach „$2“ umbenannt werden.',
'filedeleteerror'      => 'Die Datei „$1“ konnte nicht gelöscht werden.',
'filenotfound'         => 'Die Datei „$1“ wurde nicht gefunden.',
'unexpected'           => 'Unerwarteter Wert: „$1“=„$2“.',
'formerror'            => 'Fehler: Die Eingaben konnten nicht verarbeitet werden.',
'badarticleerror'      => 'Diese Aktion kann auf diese Seite nicht angewendet werden.',
'cannotdelete'         => 'Die gewählte Seite kann nicht gelöscht werden. Möglicherweise wurde sie bereits gelöscht.',
'badtitle'             => 'Ungültiger Titel',
'badtitletext'         => 'Der Titel der angeforderten Seite ist ungültig, leer oder ein ungültiger Sprachlink von einem anderen Wiki.',
'perfdisabled'         => "'''Entschuldigung!''' Diese Funktion wurde wegen Überlastung des Servers vorübergehend deaktiviert.",
'perfdisabledsub'      => 'Hier ist eine gespeicherte Kopie von $1:', # obsolete?
'perfcached'           => 'Die folgenden Daten stammen aus dem Cache und sind möglicherweise nicht aktuell:',
'perfcachedts'         => 'Diese Daten stammen aus dem Cache, letztes Update: $1',
'querypage-no-updates' => 'Die Aktualisierungsfunktion für diese Seite ist zur Zeit deaktiviert. Die Daten werden bis auf weiteres nicht erneuert.',
'wrong_wfQuery_params' => 'Falsche Parameter für wfQuery()<br />
Funktion: $1<br />
Abfrage: $2',
'viewsource'           => 'Quelltext betrachten',
'viewsourcefor'        => 'für $1',
'protectedpagetext'    => 'Diese Seite ist für das Bearbeiten gesperrt.',
'viewsourcetext'       => 'Sie können jedoch den Quelltext dieser Seite betrachten und kopieren:',
'protectedinterface'   => 'Diese Seite enthält Text für das Sprach-Interface der Software und ist gesperrt, um Missbrauch zu verhindern.',
'editinginterface'     => "'''Warnung:''' Diese Seite enthält von der MediaWiki-Software benutzten Text. Änderungen wirken sich auf die Benutzeroberfläche aus.",
'sqlhidden'            => '(SQL-Abfrage versteckt)',

# Login and logout pages
'logouttitle'                => 'Benutzer-Abmeldung',
'logouttext'                 => 'Sie sind nun abgemeldet.
Sie können {{SITENAME}} jetzt anonym weiterbenutzen, oder sich unter dem selben oder einem anderen Benutzernamen wieder anmelden.',
'welcomecreation'            => '== Willkommen, $1! ==

Ihr Benutzerkonto wurde eingerichtet. Vergessen Sie nicht, Ihre Einstellungen anzupassen.',
'loginpagetitle'             => 'Benutzer-Anmeldung',
'yourname'                   => 'Benutzername',
'yourpassword'               => 'Passwort',
'yourpasswordagain'          => 'Passwort wiederholen',
'remembermypassword'         => 'Benutzer auf diesem Computer dauerhaft anmelden',
'yourdomainname'             => 'Ihre Domain',
'externaldberror'            => 'Entweder es liegt ein Fehler bei der externen Authentifizierung vor, oder Sie dürfen Ihr externes Benutzerkonto nicht aktualisieren.',
'loginproblem'               => "'''Es gab ein Problem mit Ihrer Anmeldung.'''<br />Bitte versuchen Sie es nochmal!",
'alreadyloggedin'            => "'''Benutzer $1, Sie sind bereits angemeldet!'''<br />",
'login'                      => 'Anmelden',
'loginprompt'                => 'Um sich bei {{SITENAME}} anmelden zu können, müssen Cookies aktiviert sein.',
'userlogin'                  => 'Anmelden',
'logout'                     => 'Abmelden',
'userlogout'                 => 'Abmelden',
'notloggedin'                => 'Nicht angemeldet',
'nologin'                    => 'Sie haben kein Benutzerkonto? $1.',
'nologinlink'                => 'Neues Benutzerkonto anlegen',
'createaccount'              => 'Benutzerkonto anlegen',
'gotaccount'                 => 'Sie haben bereits ein Benutzerkonto? $1.',
'gotaccountlink'             => 'Anmelden',
'createaccountmail'          => 'über E-Mail',
'badretype'                  => 'Die beiden Passwörter stimmen nicht überein.',
'userexists'                 => 'Dieser Benutzername ist schon vergeben. Bitte wählen Sie einen anderen.',
'youremail'                  => 'E-Mail-Adresse**:',
'username'                   => 'Benutzername:',
'uid'                        => 'Benutzer-ID:',
'yourrealname'               => 'Echter Name*:',
'yourlanguage'               => 'Sprache der Benutzeroberfläche:',
'yourvariant'                => 'Variante',
'yournick'                   => 'Unterschrift:',
'badsig'                     => 'Die Syntax der Unterschrift ist ungültig; bitte HTML überprüfen.',
'email'                      => 'E-Mail',
'prefs-help-email-enotif'    => 'An diese Adresse werden auch die Benachrichtigungsmails geschickt, sofern Sie das eingeschaltet haben.',
'prefs-help-realname'        => '* <strong>Echter Name</strong> (optional): Für anerkennende Nennungen Ihres Namens im Zusammenhang mit Ihren Beiträgen.',
'loginerror'                 => 'Fehler bei der Anmeldung',
'prefs-help-email'           => '** <strong>E-Mail-Adresse</strong> (optional): Erlaubt anderen Benutzern Sie über Ihre Benutzerseite zu kontaktieren,
ohne dass Sie Ihre E-Mail-Adresse veröffentlichen müssen.
Für den Fall, dass Sie Ihr Passwort vergessen haben, kann Ihnen ein temporäres Einmal-Passwort zugesendet werden.',
'nocookiesnew'               => 'Der Benutzerzugang wurde erstellt, aber Sie sind nicht eingeloggt. {{SITENAME}} benötigt für diese Funktion Cookies, bitte aktivieren Sie diese und loggen sich dann mit Ihrem neuen Benutzernamen und dem Passwort ein.',
'nocookieslogin'             => '{{SITENAME}} benutzt Cookies zum Einloggen der Benutzer. Sie haben Cookies deaktiviert, bitte aktivieren Sie diese und versuchen es erneut.',
'noname'                     => 'Sie müssen einen gültigen Benutzernamen angeben.',
'loginsuccesstitle'          => 'Anmeldung erfolgreich',
'loginsuccess'               => 'Sie sind jetzt als „$1“ bei {{SITENAME}} angemeldet.',
'nosuchuser'                 => 'Der Benutzername „$1“ existiert nicht. Überprüfen Sie die Schreibweise oder legen Sie ein neues Benutzerkonto an.',
'nosuchusershort'            => 'Der Benutzername „$1“ existiert nicht. Bitte überprüfen Sie die Schreibweise.',
'nouserspecified'            => 'Bitte geben Sie einen Benutzernamen an.',
'wrongpassword'              => 'Das Passwort ist falsch (oder fehlt). Bitte versuchen Sie es erneut.',
'wrongpasswordempty'         => 'Das eingegebene Passwort war leer. Bitte versuchen Sie es erneut.',
'mailmypassword'             => 'Neues Passwort zusenden',
'passwordremindertitle'      => 'Neues Passwort für ein {{SITENAME}}-Benutzerkonto',
'passwordremindertext'       => 'Jemand mit der IP-Adresse $1, wahrscheinlich Sie selbst, hat ein neues Passwort für die Anmeldung bei {{SITENAME}} ($4) angefordert.

Das automatisch generierte Passwort für Benutzer $2 lautet nun: $3

Sie sollten sich jetzt anmelden und das Passwort ändern: {{fullurl:{{ns:special}}}}:Userlogin

Bitte ignoriesen Sie diese E-Mail, falls Sie diese nicht selbst angefordert haben. Das alte Passwort bleibt weiterhin gültig.',
'noemail'                    => 'Benutzer „$1“ hat keine E-Mail-Adresse angegeben.',
'passwordsent'               => 'Ein temporäres Passwort wurde an die E-Mail-Adresse von Benutzer „$1“ gesendet.
Bitte melden Sie sich damit an, sobald Sie es erhalten.
Das alte Passwort bleibt weiterhin gültig.',
'blocked-mailpassword'       => 'Die von Ihnen verwendete IP-Adresse ist für das Ändern von Seiten gesperrt. Um einen Missbrauch zu verhindern, wurde die Möglichkeit zur Anforderung eines neuen Passwortes ebenfalls gesperrt.',
'eauthentsent'               => 'Eine Bestätigungsmail wurde an die angegebene E-Mail-Adresse verschickt.

Bevor eine E-Mail von anderen Benutzern über die {{SITENAME}}-Mailfunktion empfangen werden kann, muss die Adresse und ihre tatsächliche Zugehörigkeit zu diesem Benutzerkonto erst bestätigt werden. Bitte befolgen Sie die Hinweise in der Bestätigungsmail.',
'throttled-mailpassword'     => 'Es wurde innerhalb der letzten $1 Stunden bereits ein neues Passwort angefordert. Um einen Missbrauch der Funktion zu verhindern, kann nur alle $1 Stunden ein neues Passwort angefordert werden.',
'mailerror'                  => 'Fehler beim Senden der E-Mail: $1',
'acct_creation_throttle_hit' => 'Sie haben schon $1 Benutzerkonten und können jetzt keine weiteren mehr anlegen.',
'emailauthenticated'         => 'Ihre E-Mail-Adresse wurde bestätigt: $1.',
'emailnotauthenticated'      => 'Ihre E-Mail-Adresse ist noch nicht bestätigt. Es wird Ihnen keine E-Mail für eine der folgenden Funktionen zugesendet.',
'noemailprefs'               => 'Geben Sie eine E-Mail-Adresse an, damit die nachfolgenden Funktionen zur Verfügung stehen.',
'emailconfirmlink'           => 'E-Mail-Adresse bestätigen (authentifizieren).',
'invalidemailaddress'        => 'Die E-Mail-Adresse wurde nicht akzeptiert, da sie ein ungültiges Format aufzuweisen scheint. Bitte geben Sie eine Adresse in einem gültigen Format ein, oder leeren Sie das Feld.',
'accountcreated'             => 'Benutzerkonto erstellt',
'accountcreatedtext'         => 'Das Benutzerkonto $1 wurde eingerichtet.',

# Password reset dialog
'resetpass'               => 'Passwort für Benutzerkonto zurücksetzen',
'resetpass_announce'      => 'Anmeldung mit dem per E-Mail zugesandten Code. Um die Anmeldung abzuschließen, müssen Sie jetzt ein neues Passwort wählen.',
'resetpass_text'          => '<!-- Add text here -->',
'resetpass_header'        => 'Passwort zurücksetzen',
'resetpass_submit'        => 'Passwort übermitteln und anmelden',
'resetpass_success'       => 'Ihr Passwort wurde erfolgreich geändert. Es folgt die Anmeldung…',
'resetpass_bad_temporary' => 'Ungültiges vorläufiges Passwort. Sie haben bereits Ihr Passwort erfolgreich geändert oder ein neues, vorläufiges Passwort angefordert.',
'resetpass_forbidden'     => 'Das Passwort kann in {{SITENAME}} nicht geändert werden.',
'resetpass_missing'       => 'Leeres Formular.',

# Edit page toolbar
'bold_sample'     => 'Fetter Text',
'bold_tip'        => 'Fetter Text',
'italic_sample'   => 'Kursiver Text',
'italic_tip'      => 'Kursiver Text',
'link_sample'     => 'Link-Text',
'link_tip'        => 'Interner Link',
'extlink_sample'  => 'http://www.beispiel.de Link-Text',
'extlink_tip'     => 'Externer Link (http:// beachten)',
'headline_sample' => 'Ebene 2 Überschrift',
'headline_tip'    => 'Ebene 2 Überschrift',
'math_sample'     => 'Formel hier einfügen',
'math_tip'        => 'Mathematische Formel (LaTeX)',
'nowiki_sample'   => 'Unformatierten Text hier einfügen',
'nowiki_tip'      => 'Unformatierter Text',
'image_sample'    => 'Beispiel.jpg',
'image_tip'       => 'Bildverweis',
'media_sample'    => 'Beispiel.ogg',
'media_tip'       => 'Mediendatei-Verweis',
'sig_tip'         => 'Ihre Signatur mit Zeitstempel',
'hr_tip'          => 'Horizontale Linie (sparsam verwenden)',

# Edit pages
'summary'                   => 'Zusammenfassung',
'subject'                   => 'Betreff',
'minoredit'                 => 'Nur Kleinigkeiten wurden verändert',
'watchthis'                 => 'Diese Seite beobachten',
'savearticle'               => 'Seite speichern',
'preview'                   => 'Vorschau',
'showpreview'               => 'Vorschau zeigen',
'showlivepreview'           => 'Live-Vorschau',
'showdiff'                  => 'Änderungen zeigen',
'anoneditwarning'           => 'Sie bearbeiten diese Seite ohne angemeldet zu sein. Statt eines Benutzernamens wird die IP-Adresse in der Versionsgeschichte aufgezeichnet.',
'missingsummary'            => "'''Hinweis:''' Sie haben keine Zusammenfassung angegeben. Wenn Sie erneut „Speichern“ klicken, wird Ihre Änderung ohne Zusammenfassung übernommen.",
'missingcommenttext'        => 'Bitte geben Sie eine Zusammenfassung ein.',
'missingcommentheader'      => "'''ACHTUNG:''' Sie haben keine Überschrift im Feld „Betreff:“ eingegeben. Wenn Sie erneut auf „Seite speichern“ klicken, wird Ihre Bearbeitung ohne Überschrift gespeichert.",
'summary-preview'           => 'Vorschau der Zusammenfassungszeile',
'subject-preview'           => 'Vorschau des Betreffs',
'blockedtitle'              => 'Benutzer ist blockiert',
'blockedtext'               => 'Ihr Benutzername oder Ihre IP-Adresse wurde von $1 blockiert.

Folgender Grund wurde angegeben: $2

Sie können $1 oder die [[{{ns:project}}:Administratoren]] kontaktieren, um über die Blockierung zu diskutieren.

Bitte geben Sie Ihre IP-Adresse $3 und die Block-ID #$5 in allen Ihren Anfragen mit an.',
'blockedoriginalsource'     => "Der Quelltext von '''$1''' wird hier angezeigt:",
'blockededitsource'         => "Der Quelltext von '''Ihren Änderungen''' an '''$1''':",
'whitelistedittitle'        => 'Zum Bearbeiten ist es erforderlich, angemeldet zu sein',
'whitelistedittext'         => 'Sie müssen sich $1, um Seiten bearbeiten zu können.',
'whitelistreadtitle'        => 'Zum Lesen ist es erforderlich, angemeldet zu sein',
'whitelistreadtext'         => 'Sie müssen sich [[{{ns:special}}:Userlogin|hier anmelden]], um Seiten lesen zu können.',
'whitelistacctitle'         => 'Sie sind nicht berechtigt, ein Benutzerkonto anzulegen.',
'whitelistacctext'          => 'Um in {{SITENAME}} Benutzer anlegen zu dürfen, müssen Sie sich [[{{ns:special}}:Userlogin|hier anmelden]] und die nötigen Berechtigungen haben.',
'confirmedittitle'          => 'Zum Bearbeiten ist die E-Mail-Bestätigung erforderlich.',
'confirmedittext'           => 'Sie müssen Ihre E-Mail-Adresse erst bestätigen, bevor Sie bearbeiten können. Bitte ergänzen und bestätigen Sie Ihre E-Mail-Adresse in den [[{{ns:special}}:Preferences|Einstellungen]].',
'loginreqtitle'             => 'Anmeldung erforderlich',
'loginreqlink'              => 'anmelden',
'loginreqpagetext'          => 'Sie müssen sich $1, um Seiten lesen zu können.',
'accmailtitle'              => 'Passwort wurde verschickt.',
'accmailtext'               => 'Das Passwort von $1 wurde an $2 geschickt.',
'newarticle'                => '(Neu)',
'newarticletext'            => 'Hier den Text der neuen Seite eintragen. Bitte nur in ganzen Sätzen schreiben und keine urheberrechtsgeschützten Texte anderer kopieren.',
'anontalkpagetext'          => "---- ''Diese Seite dient dazu, einem nicht angemeldeten Benutzer Nachrichten zu hinterlassen. Wenn Sie mit den Kommentaren auf dieser Seite nichts anfangen können, richten sie sich vermutlich an einen früheren Inhaber Ihrer IP-Adresse und Sie können sie ignorieren. Wenn Sie ein anonymer Benutzer sind und denken, dass irrelevante Kommentare an Sie gerichtet wurden, [[{{ns:special}}:Userlogin|melden Sie sich bitte an]], um zukünftige Verwirrung zu vermeiden. ''",
'noarticletext'             => '(Diese Seite enthält momentan noch keinen Text)',
'clearyourcache'            => "'''Hinweis:''' Nach dem Speichern muss der Browserchache geleert werden, um die Änderungen zu sehen:<br />
'''Mozilla/Firefox:''' ''Strg-Shift-R'', '''Internet Explorer:''' ''Strg-F5'', '''Opera:''' ''F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'usercssjsyoucanpreview'    => '<strong>Tipp:</strong> Benutzen Sie den Vorschau-Button, um Ihr neues css/js vor dem Speichern zu testen.',
'usercsspreview'            => "== Vorschau Ihres Benutzer-CSS ==
'''Beachten Sie:''' Nach dem Speichern müssen Sie Ihren Browser anweisen, die neue Version zu laden: '''Mozilla/Firefox:''' ''Strg-Shift-R'', '''Internet Explorer:''' ''Strg-F5'', '''Opera:''' ''F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'userjspreview'             => "== Vorschau Ihres Benutzer-JavaScript ==
'''Beachten Sie:''' Nach dem Speichern müssen Sie Ihren Browser anweisen, die neue Version zu laden: '''Mozilla/Firefox:''' ''Strg-Shift-R'', '''Internet Explorer:''' ''Strg-F5'', '''Opera:''' ''F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'userinvalidcssjstitle'     => "'''Warnung:''' Es existiert kein Skin „$1“. Bitte bedenken Sie, dass benutzerspezifische .css- und .js-Seiten mit einem Kleinbuchstaben anfangen müssen, also z.B. ''Benutzer:Mustermann/monobook.css'' an Stelle von ''Benutzer:Mustermann/Monobook.css''.",
'updated'                   => '(Geändert)',
'note'                      => '<strong>Hinweis:</strong>',
'previewnote'               => 'Dies ist nur eine Vorschau, die Seite wurde noch nicht gespeichert!',
'previewconflict'           => 'Diese Vorschau gibt den Inhalt des oberen Textfeldes wieder; so wird die Seite aussehen, wenn Sie jetzt speichern.',
'session_fail_preview'      => '<strong>Ihre Bearbeitung konnte nicht gespeichert werden, da Ihre Sitzungsdaten verloren gegangen sind.
Bitte versuchen Sie es erneut. Sollte das Problem bestehen bleiben, loggen Sie sich kurz aus und wieder ein.</strong>',
'session_fail_preview_html' => "<strong>Ihre Bearbeitung konnte nicht gespeichert werden, da Ihre Sitzungsdaten verloren gegangen sind.</strong>

''Da in diesem Wiki reines HTML aktiviert ist, wurde die Vorschau ausgeblendet um JavaScript Attacken vorzubeugen.''

<strong>Bitte versuchen Sie es erneut. Sollte das Problem bestehen bleiben, melden Sie sich kurz ab und wieder an.</strong>",
'importing'                 => 'importiere $1',
'editing'                   => 'Bearbeiten von $1',
'editinguser'               => 'Bearbeiten von Benutzer <b>$1</b>',
'editingsection'            => 'Bearbeiten von $1 (Absatz)',
'editingcomment'            => 'Bearbeiten von $1 (Kommentar)',
'editconflict'              => 'Bearbeitungskonflikt: $1',
'explainconflict'           => 'Jemand anders hat diese Seite geändert, nachdem Sie angefangen haben diese zu bearbeiten.
Das obere Textfeld enthält den aktuellen Stand.
Das untere Textfeld enthält Ihre Änderungen.
Bitte fügen Sie Ihre Änderungen in das obere Textfeld ein.
<b>Nur</b> der Inhalt des oberen Textfeldes wird gespeichert, wenn Sie auf „Speichern“ klicken!<br />',
'yourtext'                  => 'Ihr Text',
'storedversion'             => 'Gespeicherte Version',
'nonunicodebrowser'         => '<strong>Achtung:</strong> Ihr Browser kann Unicode-Zeichen nicht richtig verarbeiten. Bitte verwenden Sie einen anderen Browser um Seiten zu bearbeiten.',
'editingold'                => '<strong>ACHTUNG: Sie bearbeiten eine alte Version dieser Seite.
Wenn Sie speichern, werden alle neueren Versionen überschrieben.</strong>',
'yourdiff'                  => 'Unterschiede',
'copyrightwarning'          => '<strong>Bitte <big>kopieren Sie keine Webseiten</big>, die nicht Ihre eigenen sind, benutzen Sie <big>keine urheberrechtlich geschützten Werke</big> ohne Erlaubnis des Copyright-Inhabers!</strong><br />
Sie geben uns hiermit Ihre Zusage, dass Sie den Text <strong>selbst verfasst</strong> haben, dass der Text Allgemeingut (<strong>public domain</strong>) ist, oder dass der <strong>Copyright-Inhaber</strong> seine <strong>Zustimmung</strong> gegeben hat. Falls dieser Text bereits woanders veröffentlicht wurde, weisen Sie bitte auf der Diskussionsseite darauf hin.
<i>Bitte beachten Sie, dass alle {{SITENAME}}-Beiträge automatisch unter der „$2“ stehen (siehe $1 für Details). Falls Sie nicht möchten, dass Ihre Arbeit hier von anderen verändert und verbreitet wird, dann drücken Sie nicht auf „Speichern“.</i>',
'copyrightwarning2'         => 'Bitte beachten Sie, dass alle Beiträge zu {{SITENAME}} von anderen Mitwirkenden bearbeitet, geändert oder gelöscht werden können.
Reichen Sie hier keine Texte ein, falls Sie nicht wollen dass diese ohne Einschränkung geändert werden können.

Sie bestätigen hiermit auch, dass Sie diese Texte selbst geschrieben haben oder diese von einer gemeinfreien Quelle kopiert haben
(siehe $1 für weitere Details). <strong>ÜBERTRAGEN SIE OHNE GENEHMIGUNG KEINE URHEBERRECHTLICH GESCHÜTZEN INHALTE!</strong>',
'longpagewarning'           => '<strong>WARNUNG: Diese Seite ist $1 kB groß; einige Browser könnten Probleme haben, Seiten zu bearbeiten, die größer als 32 kB sind.
Überlegen Sie bitte, ob eine Aufteilung der Seite in kleinere Abschnitte möglich ist.</strong>',
'longpageerror'             => '<strong>FEHLER: Der Text, den Sie zu speichern versuchen, ist $1 kB groß. Das ist größer als das erlaubte Maximum von $2 kB. Speicherung nicht möglich.</strong>',
'readonlywarning'           => '<strong>WARNUNG: Die Datenbank wurde während dem Ändern der
Seite für Wartungsarbeiten gesperrt, so dass Sie die Seite im Moment nicht
speichern können. Sichern Sie sich den Text und versuchen Sie die Änderungen
später einzuspielen.</strong>',
'protectedpagewarning'      => "'''ACHTUNG: Diese Seite wurde gesperrt, so dass sie nur durch Benutzer mit Admninistratorrechten bearbeitet werden kann.'''",
'semiprotectedpagewarning'  => "'''Halbsperrung:''' Die Seite wurde so gesperrt, dass nur registrierte Benutzer diese ändern können.",
'templatesused'             => 'Folgende Vorlagen werden von dieser Seite verwendet:',
'templatesusedpreview'      => 'Folgende Vorlagen werden von dieser Artikelvorschau verwendet:',
'templatesusedsection'      => 'Folgende Vorlagen werden von diesem Abschnitt verwendet:',
'template-protected'        => '(gesperrt)',
'template-semiprotected'    => '(halbgesperrt)',
'edittools'                 => '<!-- Dieser Text wird unter dem „Bearbeiten“-Formular sowie dem "Hochladen"-Formular angezeigt. -->',
'nocreatetitle'             => 'Die Erstellung neuer Seiten ist eingeschränkt.',
'nocreatetext'              => 'Der Server hat das Erstellen neuer Seiten eingeschränkt. Sie können bestehende Seiten ändern oder sich [[{{ns:special}}:Userlogin|anmelden]].',

# "Undo" feature
'undo-success' => 'Die Bearbeitung konnte erfolgreich entfernt werden. Bitte die Änderung in der Vergleichsansicht kontrollieren und dann auf auf „Seite speichern“ klicken, um die Änderung zu speichern.',
'undo-failure' => '<span class="error">Die Bearbeitung konnte nicht entfernt werden, da der betroffene Abschnitt zwischenzeitlich verändert wurde.</span>',
'undo-summary' => 'Version $1 von [[{{ns:special}}:Contributions/$2|$2]] ({{ns:user_talk}}:$2]]) wurde entfernt.',

# Account creation failure
'cantcreateaccounttitle' => 'Benutzerkonto kann nicht erstellt werden.',
'cantcreateaccounttext'  => 'Die Erstellung eines Benutzerkontos von der IP-Adresse <b>$1</b> wurde gesperrt.
Dies geschah vermutlich auf Grund von wiederholtem Vandalismus von Besuchern der Bildungseinrichtung oder anderen Benutzern des Internet-Service-Providers.',

# History pages
'revhistory'                  => 'Frühere Versionen',
'viewpagelogs'                => 'Logbücher für diese Seite anzeigen',
'nohistory'                   => 'Es gibt keine früheren Versionen dieser Seite.',
'revnotfound'                 => 'Diese Version wurde nicht gefunden.',
'revnotfoundtext'             => 'Die Version dieser Seite, nach der Sie suchen, konnte nicht gefunden werden. Bitte überprüfen Sie die URL dieser Seite.',
'loadhist'                    => 'Lade Liste mit früheren Versionen',
'currentrev'                  => 'Aktuelle Version',
'revisionasof'                => 'Version vom $1',
'revision-info'               => 'Version vom $1 von $2',
'previousrevision'            => '← Nächstältere Version',
'nextrevision'                => 'Nächstjüngere Version →',
'currentrevisionlink'         => 'Aktuelle Version',
'cur'                         => 'Aktuell',
'next'                        => 'Nächste',
'last'                        => 'Vorherige',
'orig'                        => 'Original',
'histlegend'                  => 'Zur Anzeige der Änderungen einfach die zu vergleichenden Versionen auswählen und die Schaltfläche „{{int:compareselectedversions}}“ klicken.<br />
* (Aktuell) = Unterschied zur aktuellen Version, (Vorherige) = Unterschied zur vorherigen Version
* Uhrzeit/Datum = Version zu dieser Zeit, Benutzername/IP-Adresse des Bearbeiters, K = Kleine Änderung',
'deletedrev'                  => '[gelöscht]',
'histfirst'                   => 'Älteste',
'histlast'                    => 'Neueste',
'rev-deleted-comment'         => '(Kommentar entfernt)',
'rev-deleted-user'            => '(Benutzername entfernt)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks"> Diese Version wurde gelöscht und ist nicht mehr öffentlich einsehbar.
Nähere Angaben zum Löschvorgang sowie eine Begründung finden sich im [{{fullurl:Spezial:Log/delete|page={{PAGENAMEE}}}} Lösch-Logbuch].</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">Diese Version wurde gelöscht und ist nicht mehr öffentlich einsehbar.
Als Administrator können Sie sie weiterhin einsehen.
Nähere Angaben zum Löschvorgang sowie eine Begründung finden sich im [{{fullurl:Spezial:Log/delete|page={{PAGENAMEE}}}} Lösch-Logbuch].</div>',
'rev-delundel'                => 'zeige/verstecke',

'history-feed-title'          => 'Versionsgeschichte',
'history-feed-description'    => 'Versionsgeschichte für diese Seite in {{SITENAME}}',
'history-feed-item-nocomment' => '$1 um $2', # user at time
'history-feed-empty'          => 'Die angeforderte Seite existiert nicht.
Vielleicht wurde sie gelöscht oder verschoben.
[[{{ns:special}}:Search|Durchsuchen]] Sie {{SITENAME}} für passende neue Seiten.',

# Revision deletion
'revisiondelete'            => 'Versionen löschen/wiederherstellen',
'revdelete-nooldid-title'   => 'Keine Version angegeben',
'revdelete-nooldid-text'    => 'Sie haben keine Version angegeben, auf die diese Aktion ausgeführt werden soll.',
'revdelete-selected'        => 'Ausgewählte Version von [[:$1]]:',
'revdelete-text'            => 'Der Inhalt oder andere Bestandteile gelöschter Versionen sind nicht mehr öffentlich einsehbar, erscheinen jedoch weiterhin als Einträge in der Versionsgeschichte. 

Administroren können den entfernten Inhalt oder andere entfernte Bestandteile weiterhin einsehen und wiederherstellen, es sei denn, es wurde festgelegt, dass die Zugangsbeschränkungen auch für Administratoren gelten.',
'revdelete-legend'          => 'Einschränkungen für die Versionen festlegen:',
'revdelete-hide-text'       => 'Verstecke den Text der Version',
'revdelete-hide-comment'    => 'Bearbeitungskommentar verstecken',
'revdelete-hide-user'       => 'Verstecke den Benutzernamen/die IP des Bearbeiters.',
'revdelete-hide-restricted' => 'Diese Einschränkungen gelten auch für Administratoren (nicht nur für „normale“ Benutzer).',
'revdelete-log'             => 'Kommentar/Begründung (erscheint im Logbuch):',
'revdelete-submit'          => 'Auf ausgewählte Version anwenden',
'revdelete-logentry'        => 'Versionszugang geändert für [[$1]]',

# Diffs
'difference'                => '(Unterschied zwischen Versionen)',
'loadingrev'                => 'Lade Versionen zur Unterscheidung',
'lineno'                    => 'Zeile $1:',
'editcurrent'               => 'Die aktuelle Version dieser Seite bearbeiten',
'selectnewerversionfordiff' => 'Eine neuere Version zum Vergleich auswählen',
'selectolderversionfordiff' => 'Eine ältere Version zum Vergleich auswählen',
'compareselectedversions'   => 'Gewählte Versionen vergleichen',
'editundo'                  => 'Entfernen',
'diff-multi'                => '(Der Versionsvergleich bezieht {{plural:$1|eine dazwischen liegende Version|$1 dazwischen liegende Versionen}} mit ein.)',

# Search results
'searchresults'         => 'Suchergebnisse',
'searchresulttext'      => 'Für mehr Informationen zur Suche siehe „[[{{ns:project}}:Suche|{{SITENAME}} durchsuchen]]“.',
'searchsubtitle'        => 'Für Ihre Suchanfrage „[[:$1]]“.',
'searchsubtitleinvalid' => 'Für Ihre Suchanfrage „$1“.',
'badquery'              => 'Falsche Suchanfrage',
'badquerytext'          => 'Wir konnten Ihre Suchanfrage nicht verarbeiten.
Vermutlich haben Sie versucht, ein Wort zu suchen, das kürzer als vier Buchstaben ist.
Dies funktioniert im Moment noch nicht.
Möglicherweise haben Sie auch die Anfrage falsch formuliert, z.B.
„Lohn und und Steuern“.
Bitte versuchen Sie eine anders formulierte Suchanfrage.',
'matchtotals'           => 'Die Suchanfrage „$1“ stimmt mit $2 Seitentiteln und dem Inhalt von $3 Seiten überein.',
'noexactmatch'          => "'''Es existiert keine Seite mit dem Titel „$1“.'''

Versuchen Sie es über die Volltextsuche.
Alternativ können Sie auch den [[{{ns:special}}:Allpages|alphabetischen Index]] nach ähnlichen Begriffen durchsuchen.

Wenn Sie sich mit dem Thema auskennen, können Sie selbst die Seite „[[$1]]“ verfassen.",
'titlematches'          => 'Übereinstimmungen mit Seitentiteln',
'notitlematches'        => 'Keine Übereinstimmungen mit Seitentiteln',
'textmatches'           => 'Übereinstimmungen mit Inhalten',
'notextmatches'         => 'Keine Übereinstimmungen mit Inhalten',
'prevn'                 => 'vorherige $1',
'nextn'                 => 'nächste $1',
'viewprevnext'          => 'Zeige ($1) ($2) ($3).',
'showingresults'        => 'Hier sind <b>$1</b> Ergebnisse, beginnend mit Nummer <b>$2</b>.',
'showingresultsnum'     => 'Hier sind <b>$3</b> Ergebnisse, beginnend mit Nummer <b>$2</b>.',
'nonefound'             => '<strong>Hinweis</strong>: Erfolglose Suchanfragen werden häufig dadurch verursacht, dass mehr als ein Suchbegriff angegeben wurde. Nur Seiten die alle Suchbegriffe enthalten werden hier angezeigt. Versuchen Sie in diesem Fall die Anzahl der Suchbegriffe zu verringern.',
'powersearch'           => 'Suche',
'powersearchtext'       => 'Suche in Namensräumen:<br />$1<br />$2 Weiterleitungen anzeigen<br />Suche nach: $3 $9',
'searchdisabled'        => 'Die {{SITENAME}} Suche wurde deaktiviert. Sie können unterdessen über Google suchen. Bitte bedenken Sie, dass der Suchindex für {{SITENAME}} veraltet sein kann.',
'blanknamespace'        => '(Seiten)',

# Preferences page
'preferences'           => 'Einstellungen',
'preferences-summary'   => 'Auf dieser Spezialseite können Sie Ihre Zugangsdaten ändern und bestimmte Teile der Oberfläche individuell anpassen ',
'mypreferences'         => 'Einstellungen',
'prefsnologin'          => 'Nicht angemeldet',
'prefsnologintext'      => 'Sie müssen [[{{ns:special}}:Userlogin|angemeldet]] sein, um Ihre Einstellungen ändern zu können.',
'prefsreset'            => 'Die Eingaben wurden verworfen, es erfolgte keine Speicherung.',
'qbsettings'            => 'Seitenleiste',
'changepassword'        => 'Passwort ändern',
'skin'                  => 'Skin',
'math'                  => 'TeX',
'dateformat'            => 'Datumsformat',
'datedefault'           => 'Standard',
'datetime'              => 'Datum und Zeit',
'math_failure'          => 'Parser-Fehler',
'math_unknown_error'    => 'Unbekannter Fehler',
'math_unknown_function' => 'Unbekannte Funktion',
'math_lexing_error'     => "'Lexing'-Fehler",
'math_syntax_error'     => 'Syntaxfehler',
'math_image_error'      => 'die PNG-Konvertierung schlug fehl.',
'math_bad_tmpdir'       => 'Kann das Temporärverzeichnis für mathematische Formeln nicht anlegen oder beschreiben.',
'math_bad_output'       => 'Kann das Zielverzeichnis für mathematische Formeln nicht anlegen oder beschreiben.',
'math_notexvc'          => 'Das texvc-Programm kann nicht gefunden werden. Bitte beachten Sie math/README.',
'prefs-personal'        => 'Benutzerdaten',
'prefs-rc'              => 'Anzeige von „Letzte Änderungen“',
'prefs-watchlist'       => 'Beobachtungsliste',
'prefs-watchlist-days'  => 'Anzahl der Tage, die die Beobachtungsliste standardmäßig umfassen soll:',
'prefs-watchlist-edits' => 'Anzahl der Einträge in der erweiterten Beobachtungsliste:',
'prefs-misc'            => 'Verschiedenes',
'saveprefs'             => 'Einstellungen speichern',
'resetprefs'            => 'Eingaben verwerfen',
'oldpassword'           => 'Altes Passwort:',
'newpassword'           => 'Neues Passwort:',
'retypenew'             => 'Neues Passwort (nochmal):',
'textboxsize'           => 'Bearbeiten',
'rows'                  => 'Zeilen',
'columns'               => 'Spalten',
'searchresultshead'     => 'Suche',
'resultsperpage'        => 'Treffer pro Seite:',
'contextlines'          => 'Zeilen pro Treffer:',
'contextchars'          => 'Zeichen pro Zeile:',
'stubthreshold'         => 'Kleine Seiten markieren bis (Byte):',
'recentchangescount'    => 'Anzahl der Einträge in „Letzte Änderungen“ und „Neue Artikel“:',
'savedprefs'            => 'Ihre Einstellungen wurden gespeichert.',
'timezonelegend'        => 'Zeitzone',
'timezonetext'          => 'Geben Sie die Anzahl der Stunden ein, die zwischen Ihrer Zeitzone und UTC liegen.',
'localtime'             => 'Ortszeit:',
'timezoneoffset'        => 'Unterschied¹:',
'servertime'            => 'Aktuelle Zeit auf dem Server:',
'guesstimezone'         => 'Vom Browser übernehmen',
'allowemail'            => 'E-Mail-Empfang von anderen Benutzern ermöglichen.',
'defaultns'             => 'In diesen Namensräumen soll standardmäßig gesucht werden:',
'default'               => 'Voreinstellung',
'files'                 => 'Dateien',

# User rights
'userrights-lookup-user'     => 'Verwalte Gruppenzugehörigkeit ',
'userrights-user-editname'   => 'Benutzername:',
'editusergroup'              => 'Benutzerrechte bearbeiten',
'userrights-editusergroup'   => 'Bearbeite Gruppenzugehörigkeit des Benutzers',
'saveusergroups'             => 'Gruppenzugehörigkeiten speichern',
'userrights-groupsmember'    => 'Mitglied von:',
'userrights-groupsavailable' => 'Verfügbare Gruppen:',
'userrights-groupshelp'      => "Wählen Sie die Gruppen, aus denen der Benutzer entfernt oder zu denen er hinzugefügt werden soll.
Nicht selektierte Gruppen werden nicht geändert. Eine Selektion kann mit '''Strg + Linksklick''' (bzw. Ctrl + Linksklick) entfernt werden.",

# Groups
'group'            => 'Gruppe:',
'group-bot'        => 'Bots',
'group-sysop'      => 'Administratoren',
'group-bureaucrat' => 'Bürokraten',
'group-all'        => '(alle)',

'group-bot-member'        => 'Bot',
'group-sysop-member'      => 'Administrator',
'group-bureaucrat-member' => 'Bürokrat',

'grouppage-bot'        => '{{ns:project}}:Bots',
'grouppage-sysop'      => '{{ns:project}}:Administratoren',
'grouppage-bureaucrat' => '{{ns:project}}:Bürokraten',

# Recent changes
'changes'                           => 'Änderungen',
'recentchanges'                     => 'Letzte Änderungen',
'recentchangestext'                 => "Auf dieser Seite können Sie die letzten Änderungen auf '''{{SITENAME}}''' nachverfolgen.",
'recentchanges-feed-description'    => 'Verfolge mit diesem Feed die letzten Änderungen in {{SITENAME}}.',
'rcnote'                            => "Angezeigt werden die letzten <b>$1</b> Änderungen der letzten <b>$2</b> Tage. Stand: $3. (<b><tt>Neu</tt></b>&nbsp;– neuer Eintrag; <b><tt>K</tt></b>&nbsp;– kleine Änderung; <b><tt>B</tt></b>&nbsp;– Änderung durch einen Bot; ''(± Zahl)''&nbsp;– Größenänderung in Byte)",
'rcnotefrom'                        => 'Angezeigt werden die Änderungen seit <b>$2</b> (max. <b>$1</b> Einträge).',
'rclistfrom'                        => 'Nur Änderungen seit $1 zeigen.',
'rcshowhideminor'                   => 'Kleine Änderungen $1',
'rcshowhidebots'                    => 'Bots $1',
'rcshowhideliu'                     => 'Angemeldete Benutzer $1',
'rcshowhideanons'                   => 'Anonyme Benutzer $1',
'rcshowhidepatr'                    => 'Überprüfte Änderungen $1',
'rcshowhidemine'                    => 'Eigene Beiträge $1',
'rclinks'                           => 'Zeige die letzten $1 Änderungen der letzten $2 Tage.<br />$3',
'diff'                              => 'Unterschied',
'hist'                              => 'Versionen',
'hide'                              => 'ausblenden',
'show'                              => 'einblenden',
'minoreditletter'                   => 'K',
'newpageletter'                     => 'N',
'boteditletter'                     => 'B',
'sectionlink'                       => '→',
'number_of_watching_users_pageview' => '[$1 beobachtende/r Benutzer]',
'rc_categories'                     => 'Nur Kategorien (getrennt mit „|“):',
'rc_categories_any'                 => 'Alle',
'rc-change-size'                    => '$1',

# Upload
'upload'                      => 'Hochladen',
'uploadbtn'                   => 'Datei hochladen',
'reupload'                    => 'Abbrechen',
'reuploaddesc'                => 'Zurück zur Hochladen-Seite.',
'uploadnologin'               => 'Nicht angemeldet',
'uploadnologintext'           => 'Sie müssen [[{{ns:special}}:Userlogin|angemeldet sein]], um Dateien hochladen zu können.',
'upload_directory_read_only'  => 'Der Webserver hat keine Schreibrechte für das Upload-Verzeichnis ($1).',
'uploaderror'                 => 'Fehler beim Hochladen',
'uploadtext'                  => "Gehen Sie zu der [[{{ns:special}}:Imagelist|Liste hochgeladener Dateien]], um vorhandene Dateien zu suchen und anzuzeigen.

Benutzen Sie dieses Formular, um neue Dateien hochzuladen. Klicken Sie auf '''„Durchsuchen...“''', um einen Dateiauswahl-Dialog zu öffnen.
Nach der Auswahl einer Datei wird der Dateiname im Textfeld '''„Quelldatei“''' angezeigt.
Bestätigen Sie dann die Copyright-Vereinbarung und klicken anschließend auf '''„Datei hochladen“'''.
Dies kann eine Weile dauern, besonders bei einer langsamen Internet-Verbindung.

Um ein '''Bild''' in einer Seite zu verwenden, schreiben Sie an Stelle des Bildes zum Beispiel:
* '''<tt><nowiki>[[{{ns:image}}:Datei.jpg]]</nowiki></tt>'''
* '''<tt><nowiki>[[{{ns:image}}:Datei.jpg|Link-Text]]</nowiki></tt>'''

Um '''Mediendateien''' einzubinden, verwenden Sie zum Beispiel:
* '''<tt><nowiki>[[{{ns:media}}:Datei.ogg]]</nowiki></tt>'''
* '''<tt><nowiki>[[{{ns:media}}:Datei.ogg|Link-Text]]</nowiki></tt>'''

Bitte beachten Sie, dass, genau wie bei normalen Seiteninhalten, andere Benutzer Ihre Dateien löschen oder verändern können.",
'uploadlog'                   => 'Datei-Logbuch',
'uploadlogpage'               => 'Datei-Logbuch',
'uploadlogpagetext'           => 'Hier ist die Liste der letzten hochgeladenen Dateien, siehe auch [[{{ns:spezial}}:Newimages]].',
'filename'                    => 'Dateiname',
'filedesc'                    => 'Beschreibung',
'fileuploadsummary'           => 'Beschreibung/Quelle:',
'filestatus'                  => 'Copyright-Status',
'filesource'                  => 'Quelle',
'copyrightpage'               => '{{ns:project}}:Urheberrecht',
'copyrightpagename'           => '{{SITENAME}} Urheberrecht',
'uploadedfiles'               => 'Hochgeladene Dateien',
'ignorewarning'               => 'Warnung ignorieren und Datei speichern.',
'ignorewarnings'              => 'Warnungen ignorieren',
'minlength'                   => 'Dateinamen müssen mindestens drei Buchstaben lang sein.',
'illegalfilename'             => 'Der Dateiname „$1“ enthält mindestens ein nicht erlaubtes Zeichen. Bitte benennen Sie die Datei um und versuchen Sie diese erneut hochzuladen.',
'badfilename'                 => 'Der Dateiname wurde in „$1“ geändert.',
'badfiletype'                 => '„.$1“ ist kein empfohlenes Dateiformat.',
'large-file'                  => 'Die Dateigröße sollte nach Möglichkeit $1 nicht überschreiten. Diese Datei ist $2 groß.',
'largefileserver'             => 'Die Datei ist größer als die vom Server eingestellte Maximalgröße.',
'emptyfile'                   => 'Die hochgeladene Datei ist leer. Der Grund kann ein Tippfehler im Dateinamen sein. Bitte kontrollieren Sie, ob Sie die Datei wirklich hochladen wollen.',
'fileexists'                  => 'Eine Datei mit diesem Namen existiert bereits. Wenn Sie auf „Datei speichern“ klicken, wird die Datei überschrieben. Bitte prüfen Sie $1, wenn Sie sich nicht sicher sind.',
'fileexists-forbidden'        => 'Mit diesem Namen existiert bereits eine Datei. Bitte gehen Sie zurück und laden Ihre Datei unter einem anderen Namen hoch. [[{{ns:image}}:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Mit diesem Namen existiert bereits eine Datei. Bitte gehen Sie zurück und laden Sie diese Datei unter einem anderen Namen hoch. [[{{ns:image}:$1|thumb|center|$1]]',
'successfulupload'            => 'Erfolgreich hochgeladen',
'fileuploaded'                => 'Die Datei „$1“ wurde erfolgreich hochgeladen. Bitte folgen Sie dem Link $2 zur Beschreibungsseite und geben Sie weitere Informationen zur Datei an.

Falls es sich um ein Bild gehandelt hat, so können Sie mit <tt><nowiki>[[{{ns:image}}:$1|thumb|Description]]</nowiki></tt> ein Vorschaubild auf der Seite erzeugen lassen.',
'uploadwarning'               => 'Warnung',
'savefile'                    => 'Datei speichern',
'uploadedimage'               => 'hat [[$1]] hochgeladen',
'uploaddisabled'              => 'Entschuldigung, das Hochladen ist deaktiviert.',
'uploaddisabledtext'          => 'Das Hochladen von Dateien ist in {{SITENAME}} deaktiviert.',
'uploadscripted'              => 'Diese Datei enthält HTML- oder Scriptcode, der irrtümlich von einem Webbrowser ausgeführt werden könnte.',
'uploadcorrupt'               => 'Die Datei ist beschädigt oder hat einen falschen Namen. Bitte überprüfen Sie die Datei und laden Sie sie erneut hoch.',
'uploadvirus'                 => 'Diese Datei enthält einen Virus! Details: $1',
'sourcefilename'              => 'Quelldatei',
'destfilename'                => 'Dateiname ändern',
'watchthisupload'             => 'Diese Seite beobachten',
'filewasdeleted'              => 'Eine Datei mit diesem Namen wurde schon einmal hochgeladen und zwischenzeitlich wieder gelöscht. Bitte prüfen Sie zuerst den Eintrag im $1, bevor Sie die Datei wirklich speichern.',

'upload-proto-error'      => 'Falsches Protokoll',
'upload-proto-error-text' => 'Die URL muss mit <code>http://</code> oder <code>ftp://</code> beginnen.',
'upload-file-error'       => 'Interner Fehler',
'upload-file-error-text'  => 'Bei der Erstellung einer temporären Datei auf dem Server ist ein interner Fehler aufgetreten. Bitte informieren Sie einen System-Administrator.',
'upload-misc-error'       => 'Unbekannter Fehler beim Hochladen',
'upload-misc-error-text'  => 'Beim Hochladen ist ein unbekannter Fehler aufgetreten. Prüfen Sie die URL auf Fehler, den Online-Status der Seite und versuchen Sie es erneut. Wenn das Problem weiterbesteht, informieren Sie einen System-Administrator.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL ist nicht erreichbar',
'upload-curl-error6-text'  => 'Die angegebene URL ist nicht erreichbar. Prüfen Sie sowohl die URL auf Fehler als auch den Online-Status der Seite.',
'upload-curl-error28'      => 'Zeitüberschreitung beim Hochladen',
'upload-curl-error28-text' => 'Die Seite braucht zu lange für eine Antwort. Prüfen Sie, ob die Seite online ist, warten Sie einen kurzen Moment und versuchen Sie es dann erneut. Es kann sinnvoll sein, einen erneuten Versuch zu einer anderen Zeit zu probieren..',

'license'            => 'Lizenz',
'nolicense'          => 'keine Vorauswahl',
'upload_source_url'  => ' (gültige, öffentlich zugängliche URL)',
'upload_source_file' => ' (eine Datei auf Ihrem Computer)',

# Image list
'imagelist'                 => 'Dateiliste',
'imagelist-summary'         => 'Diese Spezialseite listet alle hochgeladenen Dateien auf. Standardmäßig werden die zuletzt hochgeladenen Dateien zuerst angezeigt. Durch einen Klick auf die Spaltenüberschriften kann die Sortierung umgedreht werden oder es kann nach einer anderen Spalte sortiert werden.',
'imagelisttext'             => "Hier ist eine Liste von '''$1''' {{PLURAL:$1|Datei|Dateien}}, sortiert $2.",
'imagelistforuser'          => 'Diese Seite zeigt nur Dateien, die von $1 hochgeladen wurden.',
'getimagelist'              => 'Lade Dateiliste',
'ilsubmit'                  => 'Suche',
'showlast'                  => 'Zeige die letzten $1 Dateien, sortiert nach $2.',
'byname'                    => 'nach Name',
'bydate'                    => 'nach Datum',
'bysize'                    => 'nach Größe',
'imgdelete'                 => 'Löschen',
'imgdesc'                   => 'Beschreibung',
'imgfile'                   => 'Datei',
'imglegend'                 => 'Legende: (Beschreibung) = Zeige/Bearbeite Dateibeschreibung.',
'imghistory'                => 'Dateiversionen',
'revertimg'                 => 'Zurücksetzen',
'deleteimg'                 => 'Löschen',
'deleteimgcompletely'       => 'Alle Versionen dieser Datei löschen',
'imghistlegend'             => 'Legende: (Aktuell) = Dies ist die aktuelle Datei, (Löschen) = lösche diese alte Version, (Zurücksetzen) = verwende wieder diese alte Version.',
'imagelinks'                => 'Dateiverweise',
'linkstoimage'              => 'Die folgenden Seiten benutzen diese Datei:',
'nolinkstoimage'            => 'Keine Seite benutzt diese Datei.',
'sharedupload'              => 'Diese Datei ist ein gemeinsam genutzter Upload und kann von anderen Projekten verwendet werden.',
'shareduploadwiki'          => 'Für weitere Informationen siehe $1.',
'shareduploadwiki-linktext' => 'Datei-Beschreibungsseite',
'noimage'                   => 'Eine Datei mit diesem Namen existiert nicht, Sie können sie jedoch $1.',
'noimage-linktext'          => 'hochladen',
'uploadnewversion-linktext' => 'Eine neue Version dieser Datei hochladen',
'imagelist_date'            => 'Datum',
'imagelist_name'            => 'Name',
'imagelist_user'            => 'Benutzer',
'imagelist_size'            => 'Größe (Byte)',
'imagelist_description'     => 'Beschreibung',
'imagelist_search_for'      => 'Suche nach Datei:',

# MIME search
'mimesearch' => 'Suche nach MIME-Typ',
'mimetype'   => 'MIME-Typ:',
'download'   => 'Herunterladen',

# Unwatched pages
'unwatchedpages'         => 'Nicht beobachtete Seiten',
'unwatchedpages-summary' => 'Diese Spezialseite zeigt alle Seiten, die von keinem Benutzer auf einer Beobachtungsliste stehen.',

# List redirects
'listredirects'         => 'Weiterleitungsliste',
'listredirects-summary' => 'Diese Spezialseite listet Weiterleitungen auf.',

# Unused templates
'unusedtemplates'         => 'Nicht benutzte Vorlagen',
'unusedtemplates-summary' => 'Diese Seite listet alle Vorlagen auf, die nicht in anderen Seiten eingebunden sind. Überprüfen Sie andere Links zu den Vorlagen, bevor Sie diese löschen.',
'unusedtemplatestext'     => '',
'unusedtemplateswlh'      => 'Andere Verweise',

# Random redirect
'randomredirect' => 'Zufällige Weiterleitung',

# Statistics
'statistics'             => 'Statistik',
'sitestats'              => 'Seitenstatistik',
'userstats'              => 'Benutzerstatistik',
'sitestatstext'          => "Es gibt insgesamt '''$1''' Seiten in der Datenbank.
Das schliesst Diskussionsseiten, Seiten über {{SITENAME}}, kleine Seiten, Weiterleitungen und andere Seiten ein,
die eventuell nicht als Seiten gewertet werden können.

Diese ausgenommen gibt es '''$2''' Seiten, die als Seite gewertet werden können.

Insgesamt wurden '''$8''' Dateien hochgeladen.

Insgesamt gab es '''$3''' Seitenabrufe und '''$4''' Seitenbearbeitungen seit dieses Wiki eingerichtet wurde.
Daraus ergeben sich '''$5''' Bearbeitungen pro Seite und '''$6''' Seitenabrufe pro Bearbeitung.

Länge der „Job queue“: '''$7'''",
'userstatstext'          => "Es gibt '''$1''' registrierte [[{{ns:special}}:Listusers|Benutzer]].
Davon haben '''$2''' (=$4%) $5-Rechte.",
'statistics-mostpopular' => 'Meist besuchte Seiten',

'disambiguations'         => 'Begriffsklärungsseiten',
'disambiguations-summary' => '',
'disambiguationspage'     => '{{ns:project}}:Begriffsklärung',
'disambiguationstext'     => 'Die folgenden Seiten verweisen auf eine <i>Seite zur Begriffsklärung</i>. Sie sollten statt dessen auf die eigentlich gemeinte Seite verweisen.<br />Eine Seite wird als Begriffsklärungsseite behandelt, wenn $1 auf sie verweist.<br />Verweise aus Namensräumen werden hier <i>nicht</i> aufgelistet.',

'doubleredirects'         => 'Doppelte Weiterleitungen',
'doubleredirects-summary' => '<b>Achtung:</b> Diese Liste kann „falsche Positive“ enthalten. Das ist dann der Fall, wenn eine Weiterleitung außer dem Weiterleitungs-Verweis noch weiteren Text mit anderen Verweisen enthält. Letztere sollten dann entfernt werden.',
'doubleredirectstext'     => '',

'brokenredirects'         => 'Kaputte Weiterleitungen',
'brokenredirects-summary' => 'Diese Spezialseite listet Weiterleitungen auf nicht existierende Artikel auf.',
'brokenredirectstext'     => '',

# Miscellaneous special pages
'nbytes'                          => '$1 {{PLURAL:$1|Byte|Bytes}}',
'ncategories'                     => '$1 {{PLURAL:$1|Kategorie|Kategorien}}',
'nlinks'                          => '{{PLURAL:$1|ein Verweis|$1 Verweise}}',
'nmembers'                        => '{{PLURAL:$1|ein Eintrag|$1 Einträge}}',
'nrevisions'                      => '{{PLURAL:$1|eine Bearbeitung|$1 Bearbeitungen}}',
'nviews'                          => '{{PLURAL:$1|eine Abfrage|$1 Abfragen}}',
'lonelypages'                     => 'Verwaiste Seiten',
'lonelypages-summary'             => 'Diese Spezialseite zeigt Seiten, auf die von keiner anderen Seite verlinkt wird. Diese verwaisten Seiten sind deshalb nicht erwünscht, oder eventuell fragwürdig, weil sie über die normale Navigation durch {{SITENAME}} nie aufgerufen werden können. ',
'lonelypagestext'                 => '',
'uncategorizedpages'              => 'Nicht kategorisierte Seiten',
'uncategorizedpages-summary'      => 'Diese Spezialseite zeigt alle Seiten, die noch keiner Kategorie zugewiesen wurden.',
'uncategorizedcategories'         => 'Nicht kategorisierte Kategorien',
'uncategorizedcategories-summary' => 'Diese Spezialseite zeigt alle Kategorien, die selbst noch keiner Kategorie zugewiesen wurden.',
'uncategorizedimages'             => 'Nicht kategorisierte Dateien',
'uncategorizedimages-summary'     => 'Diese Spezialseite zeigt alle Bilder, die keiner Kategorie zugewiesen wurden.',
'unusedcategories'                => 'Verwaiste Kategorien',
'unusedimages'                    => 'Verwaiste Dateien',
'popularpages'                    => 'Beliebte Seiten',
'wantedcategories'                => 'Benutzte, aber nicht angelegte Kategorien',
'wantedcategories-summary'        => 'Diese Spezialseite listet Kategorien auf, die zwar in Seiten verwendet werden, welche aber nicht als Kategorie angelegt worden sind.',
'wantedpages'                     => 'Gewünschte Seiten',
'wantedpages-summary'             => 'Diese Spezialseite listet alle Seiten auf, die noch nicht existieren, auf die aber von bestehenden Seiten bereits verlinkt wird.',
'mostlinked'                      => 'Häufig verlinkte Seiten',
'mostlinked-summary'              => 'Diese Spezialseite zeigt, unabhängig vom Namensraum, alle besonders häufig verlinkten Seiten an.',
'mostlinkedcategories'            => 'Meistbenutzte Kategorien',
'mostlinkedcategories-summary'    => 'Diese Spezialseite zeigt eine Liste der meistbenutzten Kategorien.',
'mostcategories'                  => 'Meistkategorisierte Seiten',
'mostcategories-summary'          => 'Diese Spezialseite zeigt besonders häufig kategorisierte Seiten an.',
'mostimages'                      => 'Meistbenutzte Dateien',
'mostimages-summary'              => 'Diese Spezialseite zeigt eine Liste der meistbenutzten Dateien.',
'mostrevisions'                   => 'Seiten mit den meisten Versionen',
'mostrevisions-summary'           => 'Diese Spezialseite zeigt eine Liste von Seiten mit den meisten Bearbeitungen.',
'allpages'                        => 'Alle Seiten',
'allpages-summary'                => "Diese Spezialseite listet den Seitenbestand von {{SITENAME}} von A bis Z auf. Sortiert wird alphabetisch, erst Zahlen, dann Großbuchstaben, Kleinbuchstaben und schließlich Sonderzeichen. ''A&nbsp;10'' findet sich vor ''AZ'', der ''Aal'' ist jedoch noch dahinter eingeordnet.",
'prefixindex'                     => 'Alle Seiten (mit Präfix)',
'prefixindex-summary'             => 'Diese Spezialseite zeigt alle Seiten, die mit der eingegebenen Zeichenfolge („Präfix“) beginnen. Die Ausgabe kann auf einen Namensraum eingeschränkt werden.',
'randompage'                      => 'Zufällige Seite',
'shortpages'                      => 'Kurze Seiten',
'shortpages-summary'              => 'Diese Liste zeigt die kürzesten Seiten im Hauptnamensraum an. Gezählt werden die Zeichen des Textes wie er im Bearbeitungsfenster dargestellt wird, also in Wiki-Syntax und ohne die Inhalte eingebundener Vorlagen. Grundlage der Zählung ist der UTF-8-kodierte Text, nach dem beispielsweise deutsche Umlaute als zwei Zeichen gelten.',
'longpages'                       => 'Lange Seiten',
'longpages-summary'               => 'Diese Liste zeigt die längsten Seiten im Hauptnamensraum an. Gezählt werden die Zeichen des Textes wie er im Bearbeitungsfenster dargestellt wird, also in Wiki-Syntax und ohne die Inhalte eingebundener Vorlagen. Grundlage der Zählung ist der UTF-8-kodierte Text, nach dem beispielsweise deutsche Umlaute als zwei Zeichen gelten.',
'deadendpages'                    => 'Sackgassenseiten',
'deadendpages-summary'            => 'Diese Spezialseite zeigt eine Liste von Seiten, die keine Links auf andere Seiten oder nur Links auf noch nicht vorhandene Seiten enthalten.',
'deadendpagestext'                => '',
'listusers'                       => 'Benutzerverzeichnis',
'listusers-summary'               => "Diese Spezialseite listet alle registrierten Benutzer auf; die Gesamtzahl kann [[Special:Statistics|hier]] eingesehen werden. Über das Auswahlfeld ''Gruppe'' lässt sich die Abfrage auf bestimmte Benutzergruppen einschränken.",
'specialpages'                    => 'Spezialseiten',
'specialpages-summary'            => 'Diese Seite bietet einen Überblick aller Spezialseiten. Diese werden automatisch generiert und können nicht bearbeitet werden.',
'spheading'                       => 'Spezialseiten für alle Benutzer',
'restrictedpheading'              => 'Spezialseiten für Administratoren',
'recentchangeslinked'             => 'Änderungen an verlinkten Seiten',
'rclsub'                          => '(auf Seiten von „$1“)',
'newpages'                        => 'Neue Seiten',
'newpages-summary'                => 'Diese Spezialseite listet alle neu erstellten Seiten der letzten 30 Tage auf. Die Ausgabe kann auf einen Namensraum und/oder Benutzernamen eingeschränkt werden.',
'newpages-username'               => 'Benutzername:',
'ancientpages'                    => 'Seit längerem unbearbeitete Artikel',
'ancientpages-summary'            => 'Diese Spezialseite zeigt eine Liste von Seiten, die am längsten nicht mehr geändert worden sind.',
'intl'                            => 'Interwiki-Links',
'move'                            => 'verschieben',
'movethispage'                    => 'Seite verschieben',
'unusedimagestext'                => '<p>Bitte beachten Sie, dass andere Wikis möglicherweise einige dieser Dateien verwenden.',
'unusedcategoriestext'            => 'Diese Spezialseite zeigt alle Kategorien, die selber keiner Kategorie zugewiesen wurden.',

# Book sources
'booksources'               => 'ISBN-Suche',
'booksources-summary'       => 'Auf dieser Spezialseite können  Sie eine ISBN eingeben und erhalten dann eine Liste mit Informations- und Bezugsmöglichkeiten zur gesuchten ISBN. Bindestriche oder Leerzeichen zwischen den Ziffern spielen für die Suche keine Rolle.',
'booksources-search-legend' => 'Suche nach Bezugsquellen für Bücher',
'booksources-isbn'          => 'ISBN:',
'booksources-go'            => 'Suche',
'booksources-text'          => 'Dies ist eine Liste mit Links zu Internetseiten, die neue und gebrauchte Bücher verkaufen. Dort kann es auch weitere Informationen über die Bücher geben. Wikipedia ist mit keinem dieser Anbieter geschäftlich verbunden.',

'categoriespagetext' => 'Die folgenden Kategorien existieren in {{SITENAME}}.',
'data'               => 'Daten',
'userrights'         => 'Benutzerrechteverwaltung',
'groups'             => 'Benutzergruppen',
'isbn'               => 'ISBN',
'alphaindexline'     => '$1 bis $2',
'version'            => 'Version',
'log'                => 'Logbücher',
'alllogstext'        => 'Kombinierte Anzeige der Datei-, Lösch-, Seitenschutz-, Benutzerblockaden- und Rechte-Logbücher.<br />Sie können die Anzeige durch die Auswahl des Logbuchtyps, des Benutzers oder des Seitentitels einschränken.',
'logempty'           => 'Keine passenden Einträge.',

# Special:Allpages
'nextpage'          => 'Nächste Seite ($1)',
'prevpage'          => 'Vorherige Seite ($1)',
'allpagesfrom'      => 'Seiten anzeigen ab:',
'allarticles'       => 'Alle Seiten',
'allinnamespace'    => 'Alle Seiten (Namensraum: $1)',
'allnotinnamespace' => 'Alle Seiten (nicht im $1 Namensraum)',
'allpagesprev'      => 'Vorherige',
'allpagesnext'      => 'Nächste',
'allpagessubmit'    => 'Anwenden',
'allpagesprefix'    => 'Seiten anzeigen mit Präfix:',
'allpagesbadtitle'  => 'Der eingegebene Seitenname ist ungültig: Er hat entweder ein vorangestelltes Sprach-, ein Interwiki-Kürzel oder enthält ein oder mehrere Zeichen, welche in Seitennamen nicht verwendet werden dürfen.',

# Special:Listusers
'listusersfrom' => 'Zeige Benutzer ab:',

# E-mail user
'mailnologin'     => 'Sie sind nicht angemeldet.',
'mailnologintext' => 'Sie müssen [[{{ns:special}}:Userlogin|angemeldet sein]] und eine gültige E-Mail-Adresse haben, um anderen Benutzern E-Mails schicken zu können.',
'emailuser'       => 'E-Mail an diesen Benutzer',
'emailpage'       => 'E-Mail an Benutzer',
'emailpagetext'   => 'Wenn dieser Benutzer eine gültige E-Mail-Adresse angegeben hat, können Sie ihm mit dem untenstehenden Formular eine E-Mail senden. Als Absender wird die E-Mail-Adresse aus Ihren Einstellungen eingetragen, damit der Benutzer Ihnen antworten kann.',
'usermailererror' => 'Das E-Mail-Objekt gab einen Fehler zurück:',
'defemailsubject' => '{{SITENAME}}-E-Mail',
'noemailtitle'    => 'Keine E-Mail-Adresse',
'noemailtext'     => 'Dieser Benutzer hat keine gültige E-Mail-Adresse angegeben oder möchte keine E-Mail von anderen Benutzern empfangen.',
'emailfrom'       => 'Von',
'emailto'         => 'An',
'emailsubject'    => 'Betreff',
'emailmessage'    => 'Nachricht',
'emailsend'       => 'Senden',
'emailccme'       => 'Sende eine Kopie der E-Mail an mich',
'emailccsubject'  => 'Kopie Ihrer Nachricht an $1: $2',
'emailsent'       => 'E-Mail verschickt',
'emailsenttext'   => 'Ihre E-Mail wurde verschickt.',

# Watchlist
'watchlist'            => 'Beobachtungsliste',
'watchlistfor'         => "(für '''$1''')",
'nowatchlist'          => 'Sie haben keine Einträge auf Ihrer Beobachtungsliste.',
'watchlistanontext'    => 'Sie müssen sich $1, um Ihre Beobachtungsliste zu sehen oder Einträge auf ihr zu bearbeiten.',
'watchlistcount'       => "'''Sie haben {{PLURAL:$1|einen Eintrag|$1 Einträge}} auf Ihrer Beobachtungsliste (inkl. Diskussionsseiten).'''",
'clearwatchlist'       => 'Beobachtungsliste löschen',
'watchlistcleartext'   => 'Sind Sie sicher, dass Sie diese vollständig löschen wollen?',
'watchlistclearbutton' => 'Beobachtungsliste löschen',
'watchlistcleardone'   => 'Ihre Beobachtungsliste wurde gelöscht. {{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} entfernt.',
'watchnologin'         => 'Sie sind nicht angemeldet',
'watchnologintext'     => 'Sie müssen [[{{ns:special}}:Userlogin|angemeldet]]
sein, um Ihre Beobachtungsliste zu bearbeiten.',
'addedwatch'           => 'Zur Beobachtungsliste hinzugefügt',
'addedwatchtext'       => 'Die Seite „$1“ wurde zu Ihrer [[{{ns:special}}:Watchlist|Beobachtungsliste]] hinzugefügt.

Spätere Änderungen an dieser Seite und der dazugehörigen Diskussionsseite werden dort gelistet und
in der Übersicht der [[{{ns:special}}:Recentchanges|letzten Änderungen]] in Fettschrift dargestellt. 

Wenn Sie die Seite wieder von Ihrer Beobachtungsliste entfernen möchten, klicken Sie auf der jeweiligen Seite auf „nicht mehr beobachten“.',
'removedwatch'         => 'Von der Beobachtungsliste entfernt',
'removedwatchtext'     => 'Die Seite „$1“ wurde von Ihrer Beobachtungsliste entfernt.',
'watch'                => 'beobachten',
'watchthispage'        => 'Seite beobachten',
'unwatch'              => 'nicht mehr beobachten',
'unwatchthispage'      => 'Nicht mehr beobachten',
'notanarticle'         => 'Keine Seite',
'watchnochange'        => 'Keine der von Ihnen beobachteten Seiten wurde während des angezeigten Zeitraums bearbeitet.',
'watchdetails'         => 'Sie beobachten {{PLURAL:$1|eine Seite|$1 Seiten}} | [[{{ns:special}}:Watchlist/edit|Komplette Liste zeigen und bearbeiten]] | [[{{ns:special}}:Watchlist/clear|Komplette Liste leeren]]',
'wlheader-enotif'      => 'Der E-Mail-Benachrichtigungsdienst ist aktiviert.<br />',
'wlheader-showupdated' => "Seiten mit noch nicht gesehenen Änderungen werden '''fett''' dargestellt.<br />",
'watchmethod-recent'   => 'Überprüfen der letzten Bearbeitungen für die Beobachtungsliste',
'watchmethod-list'     => 'Überprüfen der Beobachtungsliste nach letzten Bearbeitungen',
'removechecked'        => 'Markierte Einträge löschen',
'watchlistcontains'    => 'Ihre Beobachtungsliste enthält $1 Seiten.',
'watcheditlist'        => 'Dies ist eine alphabetische und nach Namensräumen gruppierte Liste aller von Ihnen beobachteten Seiten. Wenn Sie Einträge von der Beobachtungsliste wieder entfernen möchten, markieren Sie diese und klicken auf die Schaltfläche „Markierte Einträge löschen“ am Ende dieser Seite.',
'removingchecked'      => 'Die ausgewählten Einträge werden aus der Beobachtungsliste entfernt...',
'couldntremove'        => 'Der Eintrag „$1“ kann nicht gelöscht werden.',
'iteminvalidname'      => 'Problem mit dem Eintrag „$1“, ungültiger Name.',
'wlnote'               => 'Es folgen die letzten $1 Änderungen der letzten <b>$2</b> Stunden.',
'wlshowlast'           => 'Zeige die Änderungen der letzten $1 Stunden, $2 Tage oder $3 (in den letzten 30 Tagen).',
'wlsaved'              => 'Dies ist eine gespeicherte Version Ihrer Beobachtungsliste.',
'watchlist-show-bots'  => 'Bot-Änderungen einblenden',
'watchlist-hide-bots'  => 'Bot-Änderungen ausblenden',
'watchlist-show-own'   => 'eigene Änderungen einblenden',
'watchlist-hide-own'   => 'eigene Änderungen ausblenden',
'watchlist-show-minor' => 'kleine Änderungen einblenden',
'watchlist-hide-minor' => 'kleine Änderungen ausblenden',
'wldone'               => 'Erfolgreich ausgeführt.',

# Displayed when you click the "watch" button and it's in the process of watching
'watching'   => 'Beobachten',
'unwatching' => 'Nicht beobachten',

'enotif_mailer'      => '{{SITENAME}} E-Mail-Benachrichtigungsdienst',
'enotif_reset'       => 'Alle Seiten als besucht markieren',
'enotif_newpagetext' => 'Das ist eine neue Seite.',
'changed'            => 'geändert',
'created'            => 'erzeugt',
'enotif_subject'     => '[{{SITENAME}}] Die Seite "$PAGETITLE" wurde von $PAGEEDITOR $CHANGEDORCREATED',
'enotif_lastvisited' => 'Alle Änderungen auf einen Blick: $1',
'enotif_body'        => 'Liebe/r $WATCHINGUSERNAME,

die {{SITENAME}} Seite "$PAGETITLE" wurde von $PAGEEDITOR am $PAGEEDITDATE $CHANGEDORCREATED.

Aktuelle Version: $PAGETITLE_URL

$NEWPAGE

Zusammenfassung des Bearbeiters: $PAGESUMMARY $PAGEMINOREDIT

Kontakt zum Bearbeiter:
E-Mail: $PAGEEDITOR_EMAIL
Wiki: $PAGEEDITOR_WIKI

Es werden solange keine weiteren Benachrichtigungsmails gesendet, bis Sie die Seite wieder besucht haben. Auf Ihrer Beobachtungsseite können Sie alle Benachrichtigungsmarker zusammen zurücksetzen.

             Ihr freundliches {{SITENAME}} Benachrichtigungssystem

-- 
Um die Einstellungen Ihrer Beobachtungsliste anzupassen besuchen Sie: {{fullurl:Special:Watchlist/edit}}',

# Delete/protect/revert
'deletepage'                  => 'Seite löschen',
'confirm'                     => 'Bestätigen',
'excontent'                   => "Alter Inhalt: '$1'",
'excontentauthor'             => "Inhalt war: '$1' (einziger Bearbeiter: '[[{{ns:user}}:$2]]') - [[{{ns:user_talk}}:$2]]",
'exbeforeblank'               => "Inhalt vor dem Leeren der Seite: '$1'",
'exblank'                     => 'Seite war leer',
'confirmdelete'               => 'Löschen bestätigen',
'deletesub'                   => '(Lösche „$1“)',
'historywarning'              => 'WARNUNG: Die Seite, die Sie löschen wollen, hat eine Versionsgeschichte:',
'confirmdeletetext'           => 'Sie sind dabei, eine Seite oder eine Datei und alle zugehörigen älteren Versionen
zu löschen. Bitte bestätigen Sie dazu, dass Sie sich der Konsequenzen bewusst sind
und dass Sie in Übereinstimmung mit den [[{{ns:project}}:Löschregeln|Löschregeln]] handeln.',
'actioncomplete'              => 'Aktion beendet',
'deletedtext'                 => '„$1“ wurde gelöscht. Im $2 finden Sie eine Liste der letzten Löschungen.',
'deletedarticle'              => 'hat „$1“ gelöscht',
'dellogpage'                  => 'Lösch-Logbuch',
'dellogpagetext'              => 'Hier ist eine Liste der letzten Löschungen (UTC).
<ul>
</ul>',
'deletionlog'                 => 'Lösch-Logbuch',
'reverted'                    => 'Auf eine alte Version zurückgesetzt',
'deletecomment'               => 'Grund der Löschung',
'imagereverted'               => 'Auf eine alte Version zurückgesetzt.',
'rollback'                    => 'Zurücksetzen der Änderungen',
'rollback_short'              => 'Zurücksetzen',
'rollbacklink'                => 'Zurücksetzen',
'rollbackfailed'              => 'Zurücksetzen gescheitert',
'cantrollback'                => 'Die Änderung kann nicht zurückgesetzt werden, da es keine früheren Autoren gibt.',
'alreadyrolled'               => 'Das Zurücksetzen der Änderungen von [[{{ns:user}}:$2|$2]] <small>([[{{ns:user_talk}}:$2|Diskussion]], 
[[{{ns:special}}:Contributions/$2|Beiträge]])</small> am Artikel [[:$1]] war nicht erfolgreich, da in der Zwischenzeit bereits ein anderer Benutzer 
Änderungen an diesem Artikel vorgenommen hat.<br />Die letzte Änderung stammt von [[{{ns:user}}:$3|$3]] <small>([[{{ns:user_talk}}:$3|Diskussion]])</small>.',
'editcomment'                 => 'Der Änderungskommentar lautet: „<i>$1</i>“.', # only shown if there is an edit comment
'revertpage'                  => 'Änderungen von [[{{ns:user}}:$2]] ([[{{ns:special}}:Contributions/$2|Beiträge]]) rückgängig gemacht und letzte Version von [[{{ns:user}}:$1]] wiederhergestellt',
'sessionfailure'              => 'Es gab ein Problem mit Ihrer Benutzersitzung.
Diese Aktion wurde aus Sicherheitsgründen abgebrochen, um eine falsche Zuordnung Ihrer Änderungen zu einem anderen Benutzer zu verhindern.
Bitte gehen Sie zurück und versuchen den Vorgang erneut auszuführen.',
'protectlogpage'              => 'Seitenschutz-Logbuch',
'protectlogtext'              => 'Dies ist eine Liste der blockierten Seiten.',
'protectedarticle'            => 'änderte den Seitenschutzstatus von [[$1]]',
'unprotectedarticle'          => 'hob den Schutz von $1 auf',
'protectsub'                  => '(Sperren von „$1“)',
'confirmprotecttext'          => 'Soll diese Seite wirklich geschützt werden?',
'confirmprotect'              => 'Seitenschutzstatus ändern',
'protectmoveonly'             => 'Nur vor dem Verschieben schützen',
'protectcomment'              => 'Grund der Sperrung/Entsperrung:',
'unprotectsub'                => '(Aufhebung der Sperrung von „$1“)',
'confirmunprotecttext'        => 'Wollen Sie wirklich die Sperrung dieser Seite aufheben?',
'confirmunprotect'            => 'Aufhebung der Sperrung bestätigen',
'unprotectcomment'            => 'Grund für das Aufheben der Sperrung',
'protect-unchain'             => 'Verschiebeschutz ändern',
'protect-text'                => "Hier können Sie den Schutzstatus für die Seite '''$1''' einsehen und ändern.",
'protect-viewtext'            => 'Sie sind nicht berechtigt, den Seitenschutzstatus zu ändern. Hier ist der aktuelle Schutzstatus der Seite: [[$1]]',
'protect-default'             => 'Alle (Standard)',
'protect-level-autoconfirmed' => 'Sperrung für nicht registrierte Benutzer',
'protect-level-sysop'         => 'Nur Administratoren',

# Restrictions (nouns)
'restriction-edit' => 'bearbeiten',
'restriction-move' => 'verschieben',

# Undelete
'undelete'                 => 'Gelöschte Seite wiederherstellen',
'undeletepage'             => 'Gelöschte Seiten wiederherstellen',
'viewdeletedpage'          => 'Gelöschte Seiten anzeigen',
'undeletepagetext'         => 'Die folgenden Seiten wurden gelöscht, sind aber immer noch
gespeichert und können von Administratoren wiederhergestellt werden.',
'undeleteextrahelp'        => '* Um die Seite komplett mit allen Versionen wiederherzustellen, geben Sie bitte eine Begründung an und klicken auf „Wiederherstellen“.
* Möchten Sie nur bestimmte Versionen wiederherstellen, so wählen Sie diese bitte einzeln an Hand der Markierungen aus,
geben eine Begründung an und klicken dann auf „Wiederherstellen“.
* „Zurücksetzen“ leert das Kommentarfeld und entfernt alle Markierungen bei den Versionen.',
'undeletearticle'          => 'Gelöschte Seiten wiederherstellen',
'undeleterevisions'        => '$1 Versionen archiviert',
'undeletehistory'          => 'Wenn Sie diese Seite wiederherstellen, werden auch alle alten
Versionen wiederhergestellt. Wenn seit der Löschung eine neue Seite gleichen
namens erstellt wurde, werden die wiederhergestellten Versionen als alte Versionen
dieser Seite erscheinen.',
'undeletehistorynoadmin'   => 'Diese Seite wurde gelöscht. Der Grund für die Löschung ist in der Zusammenfassung angegeben,
genauso wie Details zum letzten Benutzer der diese Seite vor der Löschung bearbeitet hat.
Der aktuelle Text der gelöschten Seite ist nur Administratoren zugänglich.',
'undeleterevision'         => 'Gelöschte Version vom $1',
'undeleterevision-missing' => 'Ungültige oder fehlende Version. Entweder ist der Link falsch oder die Version wurde aus dem Archiv wiederhergestellt oder entfernt.',
'undeletebtn'              => 'Wiederherstellen',
'undeletereset'            => 'Abbrechen',
'undeletecomment'          => 'Begründung:',
'undeletedarticle'         => 'hat $1 wiederhergestellt',
'undeletedrevisions'       => 'hat $1 Versionen wiederhergestellt',
'undeletedrevisions-files' => 'hat $1 Versionen und $2 Dateien wiederhergestellt',
'undeletedfiles'           => 'hat $1 Dateien wiederhergestellt',
'cannotundelete'           => 'Wiederherstellung fehlgeschlagen; jemand anderes hat die Seite bereits wiederhergestellt.',
'undeletedpage'            => "<big>'''$1 wurde wiederhergestellt'''</big>

Im [[{{ns:special}}:Log/delete|Lösch-Logbuch]] finden Sie eine Übersicht von kürzlich gelöschten und wiederhergestellten Seiten.",

# Namespace form on various pages
'namespace' => 'Namensraum:',
'invert'    => 'Auswahl umkehren',

# Contributions
'contributions' => 'Benutzerbeiträge',
'mycontris'     => 'Eigene Beiträge',
'contribsub'    => 'Für $1',
'nocontribs'    => 'Es wurden keine Änderungen für diese Kriterien gefunden.',
'ucnote'        => 'Dies sind die letzten <b>$1</b> Beiträge des Benutzers in den letzten <b>$2</b> Tagen.',
'uclinks'       => 'Zeige die letzten $1 Beiträge; zeige die letzten $2 Tage.',
'uctop'         => ' (aktuell)',
'newbies'       => 'Neulinge',

'sp-contributions-newest'      => 'Jüngste',
'sp-contributions-oldest'      => 'Älteste',
'sp-contributions-newer'       => 'Jüngere $1',
'sp-contributions-older'       => 'Ältere $1',
'sp-contributions-newbies-sub' => 'Für Neulinge',
'sp-contributions-blocklog'    => 'Blockadelogbuch',

'sp-newimages-showfrom' => 'Zeige neue Dateien ab $1',

# What links here
'whatlinkshere'         => 'Links auf diese Seite',
'whatlinkshere-summary' => 'Diese Spezialseite listet alle internen Links auf eine bestimmte Seite auf. Die möglichen Zusätze „(Vorlageneinbindung)“ und „(Weiterleitungsseite)“ zeigen jeweils an, dass die Seite nicht durch einen normalen Wikilink eingebunden ist. ',
'notargettitle'         => 'Keine Seite angegeben',
'notargettext'          => 'Sie haben nicht angegeben, auf welche Seite diese Funktion angewendet werden soll.',
'linklistsub'           => '(Liste der Verweise)',
'linkshere'             => "Die folgenden Seiten verweisen auf '''[[:$1]]''':",
'nolinkshere'           => "Keine Seite verweist auf '''[[:$1]]'''.",
'isredirect'            => 'Weiterleitungsseite',
'istemplate'            => 'Vorlageneinbindung',

# Block/unblock
'blockip'                     => 'IP-Adresse/Benutzer blockieren',
'blockiptext'                 => 'Benutzen Sie das Formular, um einen Benutzer oder eine IP-Adresse zu blockieren.
Dies sollte nur erfolgen, um Vandalismus zu verhindern und in Übereinstimmung mit unseren [[{{ns:project}}:Leitlinien|Leitlinien]] geschehen.
Bitte geben Sie den Grund für die Blockade an.',
'ipaddress'                   => 'IP-Adresse oder Benutzername',
'ipadressorusername'          => 'IP-Adresse oder Benutzername',
'ipbexpiry'                   => 'Sperrdauer',
'ipbreason'                   => 'Begründung',
'ipbanononly'                 => 'Nur anonyme Benutzer sperren',
'ipbcreateaccount'            => 'Erstellung von Benutzerkonten verhindern',
'ipbenableautoblock'          => 'Sperre die aktuell von diesem Benutzer genutzte IP-Adresse sowie automatisch alle folgenden, von denen aus er Bearbeitungen oder das Anlegen von Benutzeraccounts versucht',
'ipbsubmit'                   => 'IP-Adresse/Benutzer blockieren',
'ipbother'                    => 'Andere Dauer (englisch)',
'ipboptions'                  => '1 Stunde:1 hour,2 Stunden:2 hours,6 Stunden:6 hours,1 Tag:1 day,3 Tage:3 days,1 Woche:1 week,2 Wochen:2 weeks,1 Monat:1 month,3 Monate:3 months,1 Jahr:1 year,Unbeschränkt:indefinite',
'ipbotheroption'              => 'Andere Dauer',
'badipaddress'                => 'Die IP-Adresse hat ein falsches Format.',
'blockipsuccesssub'           => 'Blockade erfolgreich',
'blockipsuccesstext'          => 'Der Benutzer/die IP-Adresse [[{{ns:special}}:Contributions/$1|$1]] wurde blockiert.

Beachten Sie die [[{{ns:special}}:Ipblocklist|{{int:ipblocklist}}]] für alle aktiven Blockaden.',
'unblockip'                   => 'IP-Adresse freigeben',
'unblockiptext'               => 'Benutzen Sie das Formular, um eine IP-Adresse oder einen Benutzer freizugeben.',
'ipusubmit'                   => 'Diese Adresse freigeben',
'unblocked'                   => '[[{{ns:user}}:$1|$1]] wurde freigegeben',
'ipblocklist'                 => 'Liste gesperrter Benutzer/IP-Adressen',
'ipblocklist-summary'         => "Diese Spezialseite führt – ergänzend zum [[{{ns:sSpecial}}:Log/block|Benutzerblockaden-Logbuch]], das sämtliche, manuell vorgenommenen Sperrungen und Entsperrungen protokolliert – alle '''aktuell''' (noch) gesperrten Benutzer auf, einschließlich automatisch geblockter IP-Adressen in anonymisierter Form.",
'blocklistline'               => '$1, $2 blockierte $3 (bis $4)',
'infiniteblock'               => 'unbegrenzt',
'expiringblock'               => 'erlischt $1',
'anononlyblock'               => 'nur anonyme',
'noautoblockblock'            => 'Autoblock deaktiviert',
'createaccountblock'          => 'Erstellung von Benutzerkonten gesperrt',
'ipblocklistempty'            => 'Die Liste der Benutzersperrungen hat keine Einträge.',
'blocklink'                   => 'blockieren',
'unblocklink'                 => 'freigeben',
'contribslink'                => 'Beiträge',
'autoblocker'                 => 'Automatische Blockierung, da Sie eine gemeinsame IP-Adresse mit „$1“ benutzen. Grund: „$2“.',
'blocklogpage'                => 'Benutzerblockaden-Logbuch',
'blocklogentry'               => 'blockiert [[{{ns:user}}:$1]] für einen Zeitraum von: $2',
'blocklogtext'                => 'Dies ist ein Log über Sperrungen und Entsperrungen von Benutzern. Automatisch geblockte IP-Adressen werden nicht erfasst. Siehe [[{{ns:special}}:Ipblocklist|IP block list]] für eine Liste der gesperrten Benutzern.',
'unblocklogentry'             => 'hat Blockade von [[$1]] aufgehoben',
'range_block_disabled'        => 'Die Möglichkeit, ganze Adressräume zu sperren, ist nicht aktiviert.',
'ipb_expiry_invalid'          => 'Die eingegebene Dauer ist ungültig.',
'ipb_already_blocked'         => '„$1“ wurde bereits gesperrt',
'ip_range_invalid'            => 'Ungültiger IP-Addressbereich.',
'proxyblocker'                => 'Proxyblocker',
'ipb_cant_unblock'            => 'Fehler: Block-ID $1 nicht gefunden. Die Sperre wurde bereits aufgehoben.',
'proxyblockreason'            => 'Ihre IP-Adresse wurde gesperrt, da sie ein offener Proxy ist. Bitte kontaktieren Sie Ihren Provider oder Ihre Systemtechnik und informieren Sie sie über dieses mögliche Sicherheitsproblem.',
'proxyblocksuccess'           => 'Fertig.',
'sorbs'                       => 'SORBS DNSbl',
'sorbsreason'                 => 'Ihre IP-Adresse ist bei [http://www.sorbs.net SORBS] DNSbl als offener PROXY gelistet.',
'sorbs_create_account_reason' => 'Ihre IP-Adresse ist bei [http://www.sorbs.net SORBS] DNSbl als offener PROXY gelistet. Sie können keinen Benutzer anlegen.',

# Developer tools
'lockdb'              => 'Datenbank sperren',
'unlockdb'            => 'Datenbank freigeben',
'lockdbtext'          => 'Mit dem Sperren der Datenbank werden alle Änderungen an Benutzereinstellungen, Beobachtungslisten, Seiten usw. verhindert. Bitte die Sperrung bestätigen.',
'unlockdbtext'        => 'Das Aufheben der Datenbank-Sperre wird alle Änderungen wieder zulassen. Bitte die Aufhebung bestätigen.',
'lockconfirm'         => 'Ja, ich möchte die Datenbank sperren.',
'unlockconfirm'       => 'Ja, ich möchte die Datenbank freigeben.',
'lockbtn'             => 'Datenbank sperren',
'unlockbtn'           => 'Datenbank freigeben',
'locknoconfirm'       => 'Sie haben das Bestätigungsfeld nicht markiert.',
'lockdbsuccesssub'    => 'Datenbank wurde erfolgreich gesperrt',
'unlockdbsuccesssub'  => 'Datenbank wurde erfolgreich freigegeben',
'lockdbsuccesstext'   => 'Die {{SITENAME}}-Datenbank wurde gesperrt.
<br />Bitte geben Sie die Datenbank [[Special:Unlockdb|wieder frei]], sobald die Wartung abgeschlossen ist.',
'unlockdbsuccesstext' => 'Die {{SITENAME}}-Datenbank wurde freigegeben.',
'lockfilenotwritable' => 'Die Datenbank-Sperrdatei ist nicht beschreibbar. Zum Sperren oder Freigeben der Datenbank muss diese für den Webserver beschreibbar sein.',
'databasenotlocked'   => 'Die Datenbank ist nicht gesperrt.',

# Make sysop
'makesysoptitle'     => 'Mache einen Benutzer zum Administrator',
'makesysoptext'      => 'Diese Maske wird von Bürokraten benutzt, um normale Benutzer zu Administratoren zu machen.',
'makesysopname'      => 'Name des Benutzers:',
'makesysopsubmit'    => 'Mache diesen Benutzer zu einem Administrator',
'makesysopok'        => '<b>Benutzer „$1“ ist nun ein Administrator.</b>',
'makesysopfail'      => '<b>Benutzer „$1“ konnte nicht zu einem Administrator gemacht werden. (Haben Sie den Namen richtig geschrieben?)</b>',
'setbureaucratflag'  => 'Mache Benutzer auch zum Bürokraten',
'rightslog'          => 'Benutzerrechte-Logbuch',
'rightslogtext'      => 'Dies ist das Logbuch der Änderungen der Benutzerrechte.',
'rightslogentry'     => 'änderte die Gruppenzugehörigkeit für „[[$1]]“ von „$2“ auf „$3“.',
'rights'             => 'Rechte:',
'set_user_rights'    => 'Benutzerrechte setzen',
'user_rights_set'    => '<b>Benutzerrechte für „$1“ aktualisiert</b>',
'set_rights_fail'    => '<b>Benutzerrechte für „$1“ konnten nicht gesetzt werden. (Wurde der Name korrekt eingegeben?)</b>',
'makesysop'          => 'Mache einen Benutzer zum Administrator',
'already_sysop'      => 'Dieser Benutzer ist bereits Administrator.',
'already_bureaucrat' => 'Dieser Benutzer ist bereits Bürokrat.',
'rightsnone'         => '(nichts)',

# Move page
'movepage'                => 'Seite verschieben',
'movepagetext'            => 'Mit diesem Formular können Sie eine Seite umbenennen (mitsamt allen Versionen). Der alte Titel wird zum neuen weiterleiten. Verweise auf den alten Titel werden nicht geändert, und die Diskussionsseite wird ebenfalls nicht mitverschoben.',
'movepagetalktext'        => "Die dazugehörige Diskussionsseite wird mitverschoben, '''es sei denn:'''
*Es existiert bereits eine Diskussionsseite mit diesem Namen, oder
*Sie wählen die untenstehende Option ab.

In diesen Fällen müssen Sie, falls gewünscht, den Inhalt der Seite von Hand verschieben oder zusammenführen.",
'movearticle'             => 'Seite verschieben',
'movenologin'             => 'Sie sind nicht angemeldet',
'movenologintext'         => 'Sie müssen ein registrierter Benutzer und
[[{{ns:special}}:Userlogin|angemeldet]] sein,
um eine Seite zu verschieben.',
'newtitle'                => 'Ziel',
'move-watch'              => 'Diese Seite beobachten',
'movepagebtn'             => 'Seite verschieben',
'pagemovedsub'            => 'Verschiebung erfolgreich',
'pagemovedtext'           => 'Seite „[[$1]]“ wurde nach „[[$2]]“ verschoben.',
'articleexists'           => 'Unter diesem Namen existiert bereits eine Seite.
Bitte wählen Sie einen anderen Namen.',
'talkexists'              => 'Die Seite selbst wurde erfolgreich verschoben, aber die zugehörige Diskussions-Seite nicht, da bereits eine mit dem neuen Titel existiert. Bitte gleichen Sie die Inhalte von Hand ab.',
'movedto'                 => 'verschoben nach',
'movetalk'                => 'Die Diskussionsseite mitverschieben, wenn möglich.',
'talkpagemoved'           => 'Die Diskussionsseite wurde ebenfalls verschoben.',
'talkpagenotmoved'        => 'Die Diskussionsseite wurde <strong>nicht</strong> verschoben.',
'1movedto2'               => 'hat [[$1]] nach [[$2]] verschoben',
'1movedto2_redir'         => 'hat [[$1]] nach [[$2]] verschoben und dabei eine Weiterleitung überschrieben.',
'movelogpage'             => 'Verschiebungs-Logbuch',
'movelogpagetext'         => 'Dies ist eine Liste aller verschobenen Seiten.',
'movereason'              => 'Begründung',
'revertmove'              => 'zurück verschieben',
'delete_and_move'         => 'Löschen und Verschieben',
'delete_and_move_text'    => '==Zielseite vorhanden, löschen?==

Die Seite „[[$1]]“ existiert bereits. Möchten Sie diese löschen, um die Seite verschieben zu können?',
'delete_and_move_confirm' => 'Zielseite für die Verschiebung löschen',
'delete_and_move_reason'  => 'gelöscht, um Platz zu machen für Verschiebung',
'selfmove'                => 'Ursprungs- und Zielname sind gleich; eine Seite kann nicht zu sich selbst verschoben werden.',
'immobile_namespace'      => 'Der Quell- oder Zielnamensraum ist geschützt; Verschiebungen in diesen Namensraum hinein oder aus diesem heraus sind nicht möglich.',

# Export
'export'          => 'Seiten exportieren',
'exporttext'      => 'Mit dieser Spezialseite können  Sie den Text (und die Bearbeitungs-/Versionsgeschichte) einzelner Seiten nach XML exportieren.
Das Ergebnis kann in ein anderes Wiki mit MediaWiki-Software eingespielt, bearbeitet oder archiviert werden.

Tragen Sie einfach den oder die entsprechenden Seitentitel in das folgende Textfeld ein (pro Zeile jeweils nur für eine Seite).

Alternativ ist der Export auch mit der Syntax <tt><nowiki>[[Spezial:Export/Seitentitel]]</nowiki></tt> möglich, zum Beispiel [[{{ns:special}}:Export/{{Mediawiki:mainpage}}]] für die [[{{Mediawiki:mainpage}}]].',
'exportcuronly'   => 'Nur die aktuelle Version der Seite exportieren',
'exportnohistory' => "----
'''Hinweis:''' Der Export kompletter Versionsgeschichten ist aus Performancegründen bis auf Weiteres nicht möglich.",
'export-submit'   => 'Seiten exportieren',

# Namespace 8 related
'allmessages'               => 'MediaWiki-Systemtexte',
'allmessagesname'           => 'Name',
'allmessagesdefault'        => 'Standardtext',
'allmessagescurrent'        => 'Aktueller Text',
'allmessagestext'           => 'Dies ist eine Liste der MediaWiki-Systemtexte.',
'allmessagesnotsupportedUI' => 'Your current interface language <b>$1</b> is not supported by Special:Allmessages at this site.', # Do not translate this message
'allmessagesnotsupportedDB' => '\'\'\'{{ns:special}}:Allmessages\'\'\' ist momentan nicht möglich, weil die Datenbank offline ist.',
'allmessagesfilter'         => 'Filter für Systemtexte:',
'allmessagesmodified'       => 'Nur geänderte zeigen',

# Thumbnails
'thumbnail-more'  => 'vergrößern',
'missingimage'    => '<b>Fehlendes Bild</b><br /><i>$1</i>',
'filemissing'     => 'Datei fehlt',
'thumbnail_error' => 'Fehler beim Erstellen des Vorschaubildes: $1',

# Special:Import
'import'                     => 'Seiten importieren',
'importinterwiki'            => 'Transwiki-Import',
'import-interwiki-text'      => 'Wählen Sie ein Wiki und eine Seite zum Importieren aus.
Das Datum der jeweiligen Versionen und die Autoren bleiben erhalten.
Alle Transwiki Import-Aktionen werden im [[{{ns:special}}:Log/import|Import-Logbuch]] protokolliert.',
'import-interwiki-history'   => 'Importiere alle Versionen dieser Seite',
'import-interwiki-submit'    => 'Import',
'import-interwiki-namespace' => 'Importiere die Seite in den Namensraum:',
'importtext'                 => 'Auf dieser Spezialseite können über [[{{ns:special}}:Export]] exportierte Seiten in dieses Wiki importiert werden.',
'importstart'                => 'Importiere Seiten…',
'import-revision-count'      => '{{PLURAL:$1|eine Version|$1 Versionen}}',
'importnopages'              => 'Keine Seiten zum Importieren vorhanden.',
'importfailed'               => 'Import fehlgeschlagen: $1',
'importunknownsource'        => 'Unbekannte Importquelle',
'importcantopen'             => 'Importdatei konnte nicht geöffnet werden',
'importbadinterwiki'         => 'Falscher Interwiki-Link',
'importnotext'               => 'Leer oder kein Text',
'importsuccess'              => 'Import erfolgreich!',
'importhistoryconflict'      => 'Es existieren bereits ältere Versionen, welche mit diesen kollidieren. Möglicherweise wurde die Seite bereits vorher importiert.',
'importnosources'            => 'Für den Transwiki Import sind keine Quellen definiert. Das direkte Hochladen von Versionen ist blockiert.',
'importnofile'               => 'Es ist keine Importdatei ausgewählt worden!',
'importuploaderror'          => 'Das Hochladen der Importdatei ist fehlgeschlagen. Vielleicht ist die Datei größer als erlaubt.',

# Import log
'importlogpage'                    => 'Import-Logbuch',
'importlogpagetext'                => 'Administrativer Import von Seiten mit Versionsgeschichte von anderen Wikis.',
'import-logentry-upload'           => '[[$1]] wurde importiert',
'import-logentry-upload-detail'    => '{{PLURAL:$1|eine Version|$1 Versionen}}',
'import-logentry-interwiki'        => '[[$1]] wurde importiert (Transwiki)',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|eine Version|$1 Versionen}} von $2',

# Keyboard access keys for power users
'accesskey-search'                  => 'f',
'accesskey-minoredit'               => 'i',
'accesskey-save'                    => 's',
'accesskey-preview'                 => 'p',
'accesskey-diff'                    => 'v',
'accesskey-compareselectedversions' => 'v',
'accesskey-watch'                   => 'w',

# Tooltip help for some actions, most are in Monobook.js
'tooltip-search'                  => 'Suchen [alt-f]',
'tooltip-minoredit'               => 'Diese Änderung als klein markieren. [alt-i]',
'tooltip-save'                    => 'Änderungen speichern [alt-s]',
'tooltip-preview'                 => 'Vorschau der Änderungen an dieser Seite. Bitte vor dem Speichern benutzen! [alt-p]',
'tooltip-diff'                    => 'Zeigt Änderungen am Text tabellarisch an [alt-v]',
'tooltip-compareselectedversions' => 'Unterschiede zwischen zwei ausgewählten Versionen dieser Seite vergleichen. [alt-v]',
'tooltip-watch'                   => 'Diese Seite beobachten. [alt-w]',

# Stylesheets
'common.css'   => '/** CSS an dieser Stelle wirkt sich auf alle Skins aus */',
'monobook.css' => '/** Kleinschreibung nicht erzwingen */
.portlet h5,
.portlet h6,
#p-personal ul,
#p-cactions li a {
	text-transform: none;
}',

# Metadata
'nodublincore'      => 'Dublin-Core-RDF-Metadaten sind für diesen Server deaktiviert.',
'nocreativecommons' => 'Creative-Commons-RDF-Metadaten sind für diesen Server deaktiviert.',
'notacceptable'     => 'Der Wiki-Server kann die Daten nicht für Ihr Ausgabegerät aufbereiten.',

# Attribution
'anonymous'        => 'Anonyme(r) Benutzer auf {{SITENAME}}',
'siteuser'         => '{{SITENAME}}-Benutzer $1',
'lastmodifiedatby' => 'Diese Seite wurde zuletzt am $1 um $2 Uhr von $3 geändert.', # $1 date, $2 time, $3 user
'and'              => 'und',
'othercontribs'    => 'Basiert auf der Arbeit von $1',
'others'           => 'andere',
'siteusers'        => '{{SITENAME}}-Benutzer $1',
'creditspage'      => 'Seiteninformationen',
'nocredits'        => 'Für diese Seite sind keine Informationen vorhanden.',

# Spam protection
'spamprotectiontitle'    => 'Spamschutzfilter',
'spamprotectiontext'     => 'Die Seite die Sie speichern wollten wurde vom Spamschutzfilter blockiert. Das liegt wahrscheinlich an einem Link zu einer externen Seite.',
'spamprotectionmatch'    => 'Der folgende Text wurde von dem Spam-Filter gefunden: $1',
'subcategorycount'       => '{{PLURAL:$1|Es wird $1 Unterkategorie|Es werden $1 Unterkategorien}} angezeigt.',
'categoryarticlecount'   => 'Es {{PLURAL:$1|wird $1 Seite|werden $1 Seiten}} aus dieser Kategorie angezeigt.',
'category-media-count'   => 'Es {{PLURAL:$1|wird $1 Datei|werden $1 Dateien}} aus dieser Kategorie angezeigt.',
'listingcontinuesabbrev' => '(Forts.)',
'spambot_username'       => 'MediaWiki Spam-Säuberung',
'spam_reverting'         => 'Letzte Version ohne Links zu $1 wiederhergestellt.',
'spam_blanking'          => 'Alle Versionen enthielten Links zu $1, bereinigt.',

# Info page
'infosubtitle'   => 'Seiteninformation',
'numedits'       => 'Anzahl der Seitenänderungen: $1',
'numtalkedits'   => 'Anzahl der Diskussionsänderungen: $1',
'numwatchers'    => 'Anzahl der Beobachter: $1',
'numauthors'     => 'Anzahl der Autoren: $1',
'numtalkauthors' => 'Anzahl der Diskussionsteilnehmer: $1',

# Math options
'mw_math_png'    => 'Immer als PNG darstellen',
'mw_math_simple' => 'Einfaches TeX als HTML darstellen, sonst PNG',
'mw_math_html'   => 'Wenn möglich als HTML darstellen, sonst PNG',
'mw_math_source' => 'Als TeX belassen (für Textbrowser)',
'mw_math_modern' => 'Empfehlenswert für moderne Browser',
'mw_math_mathml' => 'MathML (experimentell)',

# Patrolling
'markaspatrolleddiff'                 => 'Als geprüft markieren',
'markaspatrolledtext'                 => 'Diese Seitenänderung als geprüft markieren',
'markedaspatrolled'                   => 'Als geprüft markiert',
'markedaspatrolledtext'               => 'Die ausgewählte Seitenänderung wurde als geprüft markiert.',
'rcpatroldisabled'                    => 'Prüfung der letzten Änderungen gesperrt',
'rcpatroldisabledtext'                => 'Die Prüfung der letzten Änderungen ist zur Zeit gesperrt.',
'markedaspatrollederror'              => 'Markierung als „geprüft“ nicht möglich.',
'markedaspatrollederrortext'          => 'Sie müssen eine Seitenänderung auswählen.',
'markedaspatrollederror-noautopatrol' => 'Es ist Ihnen nicht erlaubt, eigene Bearbeitungen als geprüft zu markieren.',

# Monobook.js: tooltips and access keys for monobook
'monobook.js' => "/* tooltips and access keys */
var ta = new Object();
ta['pt-userpage'] = new Array('.','Eigene Benutzerseite');
ta['pt-anonuserpage'] = new Array('.','Benutzerseite der IP-Adresse von der aus Sie Änderungen durchführen');
ta['pt-mytalk'] = new Array('n','Eigene Diskussionsseite');
ta['pt-anontalk'] = new Array('n','Diskussion über Änderungen von dieser IP-Adresse');
ta['pt-preferences'] = new Array('','Eigene Einstellungen');
ta['pt-watchlist'] = new Array('l','Liste der beobachteten Seiten');
ta['pt-mycontris'] = new Array('y','Liste eigener Beiträge');
ta['pt-login'] = new Array('o','Sich einzuloggen wird zwar gerne gesehen, ist aber keine Pflicht.');
ta['pt-anonlogin'] = new Array('o','Sich einzuloggen wird zwar gerne gesehen, ist aber keine Pflicht.');
ta['pt-logout'] = new Array('','Abmelden');
ta['ca-talk'] = new Array('t','Diskussion zum Seiteninhalt');
ta['ca-edit'] = new Array('e','Seite bearbeiten. Bitte benutzen Sie vor dem Speichern die Vorschaufunktion.');
ta['ca-addsection'] = new Array('+','Einen Kommentar zu dieser Diskussion hinzufügen.');
ta['ca-viewsource'] = new Array('e','Diese Seite ist geschützt. Sie können sich den Quelltext ansehen.');
ta['ca-history'] = new Array('h','Frühere Versionen dieser Seite');
ta['ca-protect'] = new Array('=','Diese Seite schützen');
ta['ca-delete'] = new Array('d','Diese Seite löschen');
ta['ca-undelete'] = new Array('d','Einträge wiederherstellen, bevor diese Seite gelöscht wurde');
ta['ca-move'] = new Array('m','Diese Seite verschieben');
ta['ca-watch'] = new Array('w','Diese Seite zu Ihrer Beobachtungsliste hinzufügen');
ta['ca-unwatch'] = new Array('w','Diese Seite von Ihrer Beobachtungsliste entfernen');
ta['search'] = new Array('f','Dieses Wiki durchsuchen');
ta['p-logo'] = new Array('','Hauptseite');
ta['n-mainpage'] = new Array('z','Hauptseite anzeigen');
ta['n-portal'] = new Array('','Über das Portal, was Sie tun können, wo was zu finden ist');
ta['n-currentevents'] = new Array('','Hintergrundinformationen zu aktuellen Ereignissen');
ta['n-recentchanges'] = new Array('r','Liste der letzten Änderungen in diesem Wiki.');
ta['n-randompage'] = new Array('x','Zufällige Seite');
ta['n-help'] = new Array('','Hilfeseite anzeigen');
ta['n-sitesupport'] = new Array('','Unterstützen Sie uns');
ta['t-whatlinkshere'] = new Array('j','Liste aller Seiten, die hierher zeigen');
ta['t-recentchangeslinked'] = new Array('k','Letzte Änderungen an Seiten, die von hier verlinkt sind');
ta['feed-rss'] = new Array('','RSS-Feed für diese Seite');
ta['feed-atom'] = new Array('','Atom-Feed für diese Seite');
ta['t-contributions'] = new Array('','Liste der Beiträge von diesem Benutzer ansehen');
ta['t-emailuser'] = new Array('','Eine E-Mail an diesen Benutzer senden');
ta['t-upload'] = new Array('u','Dateien hochladen');
ta['t-specialpages'] = new Array('q','Liste aller Spezialseiten');
ta['ca-nstab-main'] = new Array('c','Seiteninhalt anzeigen');
ta['ca-nstab-user'] = new Array('c','Benutzerseite anzeigen');
ta['ca-nstab-media'] = new Array('c','Mediendateienseite anzeigen');
ta['ca-nstab-special'] = new Array('','Dies ist eine Spezialseite. Sie können diese nicht ändern.');
ta['ca-nstab-project'] = new Array('a','Portalseite anzeigen');
ta['ca-nstab-image'] = new Array('c','Bilderseite anzeigen');
ta['ca-nstab-mediawiki'] = new Array('c','MediaWiki-Systemtext anzeigen');
ta['ca-nstab-template'] = new Array('c','Vorlage anzeigen');
ta['ca-nstab-help'] = new Array('c','Hilfeseite anzeigen');
ta['ca-nstab-category'] = new Array('c','Kategorieseite anzeigen');",

# Common.js: contains nothing but a placeholder comment
'common.js' => '/* Jedes JavaScript hier wird für alle Benutzer für jede Seite geladen. */',

# Image deletion
'deletedrevision' => 'Alte Version $1 gelöscht.',

# Browsing diffs
'previousdiff' => '← Zum vorherigen Versionsunterschied',
'nextdiff'     => 'Zum nächsten Versionsunterschied →',

'imagemaxsize' => 'Maximale Bildgröße auf Bildbeschreibungsseiten:',
'thumbsize'    => 'Standardgröße der Vorschaubilder (thumbnails):',
'showbigimage' => 'Version mit hoher Auflösung herunterladen ($1 x $2 Pixel, $3 kB)',

'newimages'         => 'Neue Dateien',
'newimages-summary' => 'Diese Spezialseite zeigt die zuletzt hochgeladenen Bilder und Dateien an.',
'showhidebots'      => '(Bots $1)',
'noimages'          => 'Keine Dateien gefunden.',

# List interwikis
'listinterwikis'    => 'Liste der Interwikis',

/*
Short names for language variants used for language conversion links.
To disable showing a particular link, set it to 'disable', e.g.
'variantname-zh-sg' => 'disable',
Variants for Chinese language
*/
'variantname-zh-cn' => 'cn',
'variantname-zh-tw' => 'tw',
'variantname-zh-hk' => 'hk',
'variantname-zh-sg' => 'sg',
'variantname-zh'    => 'zh',

# Variants for Serbian language
'variantname-sr-ec' => 'sr-ec',
'variantname-sr-el' => 'sr-el',
'variantname-sr-jc' => 'sr-jc',
'variantname-sr-jl' => 'sr-jl',
'variantname-sr'    => 'sr',

# Variants for Kazakh language
'variantname-kk-tr' => 'kk-tr',
'variantname-kk-kz' => 'kk-kz',
'variantname-kk-cn' => 'kk-cn',
'variantname-kk'    => 'kk',

# Labels for User: and Title: on Special:Log pages
'specialloguserlabel'  => 'Benutzer:',
'speciallogtitlelabel' => 'Titel:',

'passwordtooshort' => 'Das Passwort ist zu kurz. Es muss mindestens $1 Zeichen lang sein.',

# Media Warning
'mediawarning' => "'''Warnung:''' Diese Art von Datei kann böswilligen Programmcode enthalten. Durch das Herunterladen oder Öffnen der Datei kann Ihr Computer beschädigt werden.<hr />",

'fileinfo' => '$1 kB, MIME Typ: <code>$2</code>',

# Metadata
'metadata'          => 'Metadaten',
'metadata-help'     => 'Diese Datei enthält weitere Informationen, die in der Regel von der Digitalkamera oder dem verwendeten Scanner stammen. Durch nachträgliche Bearbeitung der Originaldatei können einige Details verändert worden sein.',
'metadata-expand'   => 'Erweiterte Details einblenden',
'metadata-collapse' => 'Erweiterte Details ausblenden',
'metadata-fields'   => 'Die folgenden Felder der EXIF-Metadaten in diesem MediaWiki-Systemtext werden auf Bildbeschreibungsseiten angezeigt; weitere standardmäßig „eingeklappte“ Details können angezeigt werden.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength',

# EXIF tags
'exif-imagewidth'                  => 'Breite',
'exif-imagelength'                 => 'Länge',
'exif-bitspersample'               => 'Bits pro Farbkomponente',
'exif-compression'                 => 'Art der Kompression',
'exif-photometricinterpretation'   => 'Pixelzusammensetzung',
'exif-orientation'                 => 'Kameraausrichtung',
'exif-samplesperpixel'             => 'Anzahl Komponenten',
'exif-planarconfiguration'         => 'Datenausrichtung',
'exif-ycbcrsubsampling'            => 'Subsampling Rate von Y bis C',
'exif-ycbcrpositioning'            => 'Y und C Positionierung',
'exif-xresolution'                 => 'Horizontale Auflösung',
'exif-yresolution'                 => 'Vertikale Auflösung',
'exif-resolutionunit'              => 'Maßeinheit der Auflösung',
'exif-stripoffsets'                => 'Bilddaten-Versatz',
'exif-rowsperstrip'                => 'Anzahl Zeilen pro Streifen',
'exif-jpeginterchangeformat'       => 'Offset zu JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Größe der JPEG-Daten in Bytes',
'exif-transferfunction'            => 'Übertragungsfunktion',
'exif-whitepoint'                  => 'Manuell mit Messung',
'exif-ycbcrcoefficients'           => 'YCbCr-Koeffizienten',
'exif-referenceblackwhite'         => 'Schwarz/Weiß-Referenzpunkte',
'exif-datetime'                    => 'Speicherzeitpunkt',
'exif-imagedescription'            => 'Bildtitel',
'exif-make'                        => 'Hersteller',
'exif-model'                       => 'Modell',
'exif-software'                    => 'Software',
'exif-artist'                      => 'Fotograf',
'exif-copyright'                   => 'Urheberrechte',
'exif-exifversion'                 => 'Exif-Version',
'exif-flashpixversion'             => 'unterstützte Flashpix-Version',
'exif-colorspace'                  => 'Farbraum',
'exif-componentsconfiguration'     => 'Bedeutung einzelner Komponenten',
'exif-compressedbitsperpixel'      => 'Komprimierte Bits pro Pixel',
'exif-pixelydimension'             => 'Gültige Bildbreite',
'exif-pixelxdimension'             => 'Gültige Bildhöhe',
'exif-makernote'                   => 'Herstellernotiz',
'exif-usercomment'                 => 'Benutzerkommentare',
'exif-relatedsoundfile'            => 'Zugehörige Tondatei',
'exif-datetimeoriginal'            => 'Erfassungszeitpunkt',
'exif-datetimedigitized'           => 'Digitalisierungszeitpunkt',
'exif-subsectime'                  => 'Speicherzeitpunkt (1/100 s)',
'exif-subsectimeoriginal'          => 'Erfassungszeitpunkt (1/100 s)',
'exif-subsectimedigitized'         => 'Digitalisierungszeitpunkt (1/100 s)',
'exif-exposuretime'                => 'Belichtungsdauer',
'exif-exposuretime-format'         => '$1 Sekunden ($2)',
'exif-fnumber'                     => 'Blende',
'exif-fnumber-format'              => 'f/$1',
'exif-exposureprogram'             => 'Belichtungsprogramm',
'exif-spectralsensitivity'         => 'Spectral Sensitivity',
'exif-isospeedratings'             => 'Film- oder Sensorempfindlichkeit (ISO)',
'exif-oecf'                        => 'Optoelektronischer Umrechnungsfaktor',
'exif-shutterspeedvalue'           => 'Belichtungszeitwert',
'exif-aperturevalue'               => 'Blendenwert',
'exif-brightnessvalue'             => 'Helligkeitswert',
'exif-exposurebiasvalue'           => 'Belichtungsvorgabe',
'exif-maxaperturevalue'            => 'Größte Blende',
'exif-subjectdistance'             => 'Entfernung',
'exif-meteringmode'                => 'Messverfahren',
'exif-lightsource'                 => 'Lichtquelle',
'exif-flash'                       => 'Blitz',
'exif-focallength'                 => 'Brennweite',
'exif-focallength-format'          => '$1 mm',
'exif-subjectarea'                 => 'Bereich',
'exif-flashenergy'                 => 'Blitzstärke',
'exif-focalplanexresolution'       => 'Sensorauflösung horizontal',
'exif-focalplaneyresolution'       => 'Sensorauflösung vertikal',
'exif-focalplaneresolutionunit'    => 'Einheit der Sensorauflösung',
'exif-subjectlocation'             => 'Motivstandort',
'exif-exposureindex'               => 'Belichtungsindex',
'exif-sensingmethod'               => 'Messmethode',
'exif-filesource'                  => 'Quelle der Datei',
'exif-scenetype'                   => 'Szenentyp',
'exif-cfapattern'                  => 'CFA-Muster',
'exif-customrendered'              => 'Benutzerdefinierte Bildverarbeitung',
'exif-exposuremode'                => 'Belichtungsmodus',
'exif-whitebalance'                => 'Weißabgleich',
'exif-digitalzoomratio'            => 'Digitalzoom',
'exif-focallengthin35mmfilm'       => 'Brennweite (Kleinbildäquivalent)',
'exif-scenecapturetype'            => 'Aufnahmeart',
'exif-gaincontrol'                 => 'Verstärkung',
'exif-contrast'                    => 'Kontrast',
'exif-saturation'                  => 'Sättigung',
'exif-sharpness'                   => 'Schärfe',
'exif-devicesettingdescription'    => 'Geräteeinstellung',
'exif-subjectdistancerange'        => 'Motiventfernung',
'exif-imageuniqueid'               => 'Bild-ID',
'exif-gpsversionid'                => 'GPS-Tag-Version',
'exif-gpslatituderef'              => 'nördl. oder südl. Breite',
'exif-gpslatitude'                 => 'Geografische Breite',
'exif-gpslongituderef'             => 'östl. oder westl. Länge',
'exif-gpslongitude'                => 'Geografische Länge',
'exif-gpsaltituderef'              => 'Bezugshöhe',
'exif-gpsaltitude'                 => 'Höhe',
'exif-gpstimestamp'                => 'GPS-Zeit',
'exif-gpssatellites'               => 'Für die Messung benutzte Satelliten',
'exif-gpsstatus'                   => 'Empfängerstatus',
'exif-gpsmeasuremode'              => 'Messverfahren',
'exif-gpsdop'                      => 'Maßpräzision',
'exif-gpsspeedref'                 => 'Geschwindigkeitseinheit',
'exif-gpsspeed'                    => 'Geschwindigkeit des GPS-Empfängers',
'exif-gpstrackref'                 => 'Referenz für Bewegungsrichtung',
'exif-gpstrack'                    => 'Bewegungsrichtung',
'exif-gpsimgdirectionref'          => 'Referenz für die Ausrichtung des Bildes',
'exif-gpsimgdirection'             => 'Bildrichtung',
'exif-gpsmapdatum'                 => 'Geodätisches Datum benutzt',
'exif-gpsdestlatituderef'          => 'Referenz für die Breite',
'exif-gpsdestlatitude'             => 'Breite',
'exif-gpsdestlongituderef'         => 'Referenz für die Länge',
'exif-gpsdestlongitude'            => 'Länge',
'exif-gpsdestbearingref'           => 'Referenz für Motivrichtung',
'exif-gpsdestbearing'              => 'Motivrichtung',
'exif-gpsdestdistanceref'          => 'Referenz für die Motiventfernung',
'exif-gpsdestdistance'             => 'Motiventfernung',
'exif-gpsprocessingmethod'         => 'Name des GPS-Verfahrens',
'exif-gpsareainformation'          => 'Name des GPS-Gebietes',
'exif-gpsdatestamp'                => 'GPS-Datum',
'exif-gpsdifferential'             => 'GPS-Differentialkorrektur',

# EXIF attributes
'exif-compression-1' => 'Unkomprimiert',
'exif-compression-6' => 'JPEG',

'exif-photometricinterpretation-2' => 'RGB',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-unknowndate' => 'Unbekanntes Datum',

'exif-orientation-1' => 'Normal', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontal gedreht', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Um 180° gedreht', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Vertikal gedreht', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Entgegen dem Uhrzeigersinn um 90° gedreht und vertikal gewendet', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Um 90° in Uhrzeigersinn gedreht', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Um 90° in Uhrzeigersinn gedreht und vertikal gewendet', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Um 90° entgegen dem Uhrzeigersinn gedreht', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'Grobformat',
'exif-planarconfiguration-2' => 'Planarformat',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1'      => 'sRGB',
'exif-colorspace-ffff.h' => 'FFFF.H',

'exif-componentsconfiguration-0' => 'Existiert nicht',
'exif-componentsconfiguration-1' => 'Y',
'exif-componentsconfiguration-2' => 'Cb',
'exif-componentsconfiguration-3' => 'Cr',
'exif-componentsconfiguration-4' => 'R',
'exif-componentsconfiguration-5' => 'G',
'exif-componentsconfiguration-6' => 'B',

'exif-exposureprogram-0' => 'Unbekannt',
'exif-exposureprogram-1' => 'Manuell',
'exif-exposureprogram-2' => 'Standardprogramm',
'exif-exposureprogram-3' => 'Zeitautomatik',
'exif-exposureprogram-4' => 'Blendenautomatik',
'exif-exposureprogram-5' => 'Kreativprogramm mit Bevorzugung hoher Schärfentiefe',
'exif-exposureprogram-6' => 'Action-Programm mit Bevorzugung einer kurzen Belichtungszeit',
'exif-exposureprogram-7' => 'Portrait-Programm',
'exif-exposureprogram-8' => 'Landschaftsaufnahmen',

'exif-subjectdistance-value' => '$1 Meter',

'exif-meteringmode-0'   => 'Unbekannt',
'exif-meteringmode-1'   => 'Durchschnittlich',
'exif-meteringmode-2'   => 'Mittenzentriert',
'exif-meteringmode-3'   => 'Spotmessung',
'exif-meteringmode-4'   => 'Mehrfachspotmessung',
'exif-meteringmode-5'   => 'Muster',
'exif-meteringmode-6'   => 'Bildteil',
'exif-meteringmode-255' => 'Unbekannt',

'exif-lightsource-0'   => 'Unbekannt',
'exif-lightsource-1'   => 'Tageslicht',
'exif-lightsource-2'   => 'Fluoreszierend',
'exif-lightsource-3'   => 'Glühlampe',
'exif-lightsource-4'   => 'Blitz',
'exif-lightsource-9'   => 'Schönes Wetter',
'exif-lightsource-10'  => 'Bewölkt',
'exif-lightsource-11'  => 'Schatten',
'exif-lightsource-12'  => 'Tageslicht fluoreszierend (D 5700–7100 K)',
'exif-lightsource-13'  => 'Tagesweiß fluoreszierend (N 4600–5400 K)',
'exif-lightsource-14'  => 'Kaltweiß fluoreszierend (W 3900–4500 K)',
'exif-lightsource-15'  => 'Weiß fluoreszierend (WW 3200–3700 K)',
'exif-lightsource-17'  => 'Standardlicht A',
'exif-lightsource-18'  => 'Standardlicht B',
'exif-lightsource-19'  => 'Standardlicht C',
'exif-lightsource-20'  => 'D55',
'exif-lightsource-21'  => 'D65',
'exif-lightsource-22'  => 'D75',
'exif-lightsource-23'  => 'D50',
'exif-lightsource-24'  => 'ISO Studio Kunstlicht',
'exif-lightsource-255' => 'Andere Lichtquelle',

'exif-focalplaneresolutionunit-2' => 'Zoll',

'exif-sensingmethod-1' => 'Undefiniert',
'exif-sensingmethod-2' => 'Ein-Chip-Farbsensor',
'exif-sensingmethod-3' => 'Zwei-Chip-Farbsensor',
'exif-sensingmethod-4' => 'Drei-Chip-Farbsensor',
'exif-sensingmethod-7' => 'Trilinearer Sensor',

'exif-filesource-3' => 'DSC',

'exif-scenetype-1' => 'Normal',

'exif-customrendered-0' => 'Standard',
'exif-customrendered-1' => 'Benutzerdefiniert',

'exif-exposuremode-0' => 'Automatische Belichtung',
'exif-exposuremode-1' => 'Manuelle Belichtung',
'exif-exposuremode-2' => 'Belichtungsreihe',

'exif-whitebalance-0' => 'Automatisch',
'exif-whitebalance-1' => 'Manuell',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Landschaft',
'exif-scenecapturetype-2' => 'Portrait',
'exif-scenecapturetype-3' => 'Nachtszene',

'exif-gaincontrol-0' => 'Keine',
'exif-gaincontrol-1' => 'Gering',
'exif-gaincontrol-2' => 'High gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Schwach',
'exif-contrast-2' => 'Stark',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Gering',
'exif-saturation-2' => 'Hoch',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Gering',
'exif-sharpness-2' => 'Stark',

'exif-subjectdistancerange-0' => 'Unbekannt',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Nah',
'exif-subjectdistancerange-3' => 'Entfernt',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'nördl. Breite',
'exif-gpslatitude-s' => 'südl. Breite',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'östl. Länge',
'exif-gpslongitude-w' => 'westl. Länge',

'exif-gpsstatus-a' => 'Messung läuft',

'exif-gpsmeasuremode-2' => '2-dimensionale Messung',
'exif-gpsmeasuremode-3' => '3-dimensionale Messung',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mph',
'exif-gpsspeed-n' => 'Knoten',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Tatsächliche Richtung',
'exif-gpsdirection-m' => 'Magnetische Richtung',

# External editor support
'edit-externally'      => 'Diese Datei mit einem externen Programm bearbeiten',
'edit-externally-help' => 'Siehe die [[meta:Help:External editors|Installationsanweisungen]] für weitere Informationen',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'alle',
'imagelistall'     => 'alle',
'watchlistall1'    => 'alle',
'watchlistall2'    => 'alle',
'namespacesall'    => 'alle',

# E-mail address confirmation
'confirmemail'            => 'E-Mail-Adresse bestätigen (Authentifizierung)',
'confirmemail_noemail'    => 'Sie haben keine gültige E-Mail-Adresse in Ihrem [[{{ns:special}}:Preferences|Benutzerprofil]] eingetragen.',
'confirmemail_text'       => 'Dieses Wiki erfordert, dass Sie Ihre E-Mail-Adresse bestätigen (authentifizieren), bevor Sie die erweiterten E-Mail-Funktionen benutzen können. Durch einen Klick auf die Schaltfläche unten wird eine E-Mail an Sie gesendet. Diese E-Mail enthält einen Link mit einem Bestätigungs-Code. Durch Klicken auf diesen Link wird bestätigt, dass Ihre E-Mail-Adresse gültig ist.',
'confirmemail_pending'    => '<div class="error">Es wurde Ihnen bereits ein Bestätigungs-Code per E-Mail zugeschickt. Wenn Sie Ihr Benutzerkonto erst vor kurzem erstellt haben, warten Sie bitte noch ein paar Minuten auf die E-Mail, bevor Sie einen neuen Code anfordern.</div>', 'confirmemail_send'       => 'Bestätigungscode zuschicken',
'confirmemail_sent'       => 'Bestätigungs-E-Mail wurde verschickt.',
'confirmemail_oncreate'   => 'Ein Bestätigungs-Code wurde an Ihre E-Mail-Adresse gesandt. Dieser Code wird für die Anmeldung nicht benötigt, jedoch wird er zur Aktivierung der E-Mail-Funktionen innerhalb des Wikis gebraucht.',
'confirmemail_sendfailed' => 'Die Bestätigungs-E-Mail konnte nicht versendet werden. Bitte prüfen Sie die E-Mail-Adresse auf ungültige Zeichen.

Rückmeldung des Mailservers: $1',
'confirmemail_invalid'    => 'Ungültiger Bestätigungs-Code. Die Gültigkeitsdauer des Codes ist eventuell abgelaufen.',
'confirmemail_needlogin'  => 'Sie müssen sich $1 um Ihre E-Mail-Adresse zu bestätigen.',
'confirmemail_success'    => 'Ihre E-Mail-Adresse wurde erfolgreich bestätigt. Sie können sich jetzt einloggen.',
'confirmemail_loggedin'   => 'Ihre E-Mail-Adresse wurde erfolgreich bestätigt.',
'confirmemail_error'      => 'Es gab einen Fehler bei der Bestätigung Ihrer E-Mail-Adresse.',
'confirmemail_subject'    => '[{{SITENAME}}] - Bestätigung der E-Mail-Adresse',
'confirmemail_body'       => 'Hallo,

jemand mit der IP-Adresse $1, wahrscheinlich Sie selbst, hat eine Bestätigung dieser E-Mail-Adresse für das Benutzerkonto "$2" für {{SITENAME}} angefordert.

Um die E-Mail-Funktion für {{SITENAME}} (wieder) zu aktivieren und um zu bestätigen, dass dieses Benutzerkonto wirklich zu Ihrer E-Mail-Adresse und damit zu Ihnen gehört, öffnen Sie bitte folgenden Link in Ihrem Browser: $3

Der Bestätigungscode ist bis zu folgendem Zeitpunkt gültig: $4

Wenn diese E-Mail-Adresse *nicht* zu dem genannten Benutzerkonto gehört, folgen Sie diesem Link bitte *nicht*.

-- 
{{SITENAME}}: {{fullurl:{{Mediawiki:mainpage}}}}',

# Inputbox extension, may be useful in other contexts as well
'tryexact'       => 'Versuche exakte Suche:',
'searchfulltext' => 'Gesamten Text durchsuchen',
'createarticle'  => 'Seite anlegen',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-Einbindung ist deaktiviert]',
'scarytranscludefailed'   => '[Vorlageneinbindung für $1 ist gescheitert]',
'scarytranscludetoolong'  => '[URL ist zu lang; Entschuldigung]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks">
Trackbacks für diese Seite:<br />
$1
</div>',
'trackbackremove'   => '([$1 löschen])',
'trackbacklink'     => 'Trackback',
'trackbackdeleteok' => 'Trackback wurde erfolgreich gelöscht.',

# Delete conflict
'deletedwhileediting' => '<span class="error">Achtung: Diese Seite wurde gelöscht, nachdem Sie angefangen haben, sie zu bearbeiten! 
Sehen Sie im [{{fullurl:{{ns:special}}:Log|type=delete&page=}}{{FULLPAGENAMEE}} Lösch-Logbuch] nach, 
warum die Seite gelöscht wurde. Wenn Sie die Seite speichern, wird sie neu angelegt.</span>
', 
'confirmrecreate'     => "Benutzer [[{{ns:user}}:$1|$1]] ([[{{ns:user_talk}}:$1|Diskussion]]) hat diese Seite gelöscht, nachdem Sie angefangen haben ihn zu bearbeiten. Die Begründung lautete:
''$2''
Bitte bestätigen Sie, dass Sie diese Seite wirklich neu erstellen möchten.",
'recreate'            => 'Wiederherstellen',
'tooltip-recreate'    => 'Seite neu erstellen, obwohl sie gelöscht wurde.',

'unit-pixel' => 'px',

# HTML dump
'redirectingto' => 'Weitergeleitet nach [[$1]]',

# action=purge
'confirm_purge'        => 'Den Cache dieser Seite leeren? $1',
'confirm_purge_button' => 'OK',

'youhavenewmessagesmulti' => 'Sie haben neue Nachrichten: $1',

'searchcontaining' => "Suche nach Seiten, in denen ''$1'' vorkommt.",
'searchnamed'      => "Suche nach Seiten, deren Name ''$1'' enthält.",
'articletitles'    => "Seiten, die mit ''$1'' beginnen",
'hideresults'      => 'Verbergen',

# DISPLAYTITLE
'displaytitle' => '(Link zu dieser Seite als [[$1]])',

'loginlanguagelabel' => 'Sprache: $1',

# Multipage image navigation
'imgmultipageprev' => '← vorige Seite',
'imgmultipagenext' => 'nächste Seite →',
'imgmultigo'       => 'OK',
'imgmultigotopre'  => 'Gehe zu Seite',

# Table pager
'ascending_abbrev'         => 'auf',
'descending_abbrev'        => 'ab',
'table_pager_next'         => 'Nächste Seite',
'table_pager_prev'         => 'Vorherige Seite',
'table_pager_first'        => 'Erste Seite',
'table_pager_last'         => 'Letzte Seite',
'table_pager_limit'        => 'Zeige $1 Einträge pro Seite',
'table_pager_limit_submit' => 'Los',
'table_pager_empty'        => 'Keine Ergebnisse',

# Auto-summaries
'autosumm-blank'   => 'Die Seite wurde geleert.',
'autosumm-replace' => "Der Seiteninhalt wurde durch einen anderen Text ersetzt: '$1'",
'autoredircomment' => 'Weiterleitung nach [[$1]] erstellt', # This should be changed to the new naming convention, but existed beforehand
'autosumm-new'     => 'Die Seite wurde neu angelegt: $1',

# Size units
'size-bytes'     => '$1 B',
'size-kilobytes' => '$1 KB',
'size-megabytes' => '$1 MB',
'size-gigabytes' => '$1 GB',

);

?>
