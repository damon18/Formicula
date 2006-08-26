<?php

// made with DefineMachine 0.4 (c) Frank Schummertz, frank.schummertz@landseer-stuttgart.de, 22.03.2003
// sourcefile : /var/www/modules/formicula/pnadmin.php
// defines read from /var/www/modules/formicula/pnlang/deu
// file created on Thursday 12th February 2004 20:14:21

//neu
define('_FOR_EXCLUDEFROMSPAMCHECK', 'Spam Check nicht in diesem Formularen verwenden<br />(kommaseparierte Liste der FormIDs, die z.B. in Pagesetter eingebettet sind, hier k�nnte es zu Problemen beim Weiterleiten kommen, wenn der Benutzer die Rechenaufgabe nicht korrekt l�st.');
define('_FOR_ACTIVATESPAMCHECK', 'Spamcheck aktivieren<br />(dies erfordert u.U. Anpassungen an den Templates, weitere Informationen dazu finden sich in der Dokumentation');
define('_FOR_VISITHOMEPAGE', 'Formicula im NOC besuchen');
define('_FOR_ILLEGALEMAIL', 'ung�ltige Emailadresse');
define('_FOR_SENDERINFO', 'Verwende folgende Daten f�r die Best�tigungsemail an den Benutzer');
define('_FOR_SENDERNAME', 'Absendername');
define('_FOR_SENDEREMAIL', 'Absenderemail');
define('_FOR_SENDERSUBJECT', 'Betreff');
define('_FOR_SENDERSUBJECTHINT', '
mit <ul>
    <li>%s = Seitenname</li>
    <li>%l = Slogan</li>
    <li>%u = URL der Seite</li>
    <li>%c = Name des Kontakts</li>
    <li>%n&lt;num&gt; = Name des userdefinerten Feldes &lt;num&gt;</li>
    <li>%d&lt;num&gt; = Inhalt des userdefinierten Feldes &lt;num&gt;</li>
</ul>
');

//original
define( '_FOR_ADDCONTACT', 'Kontakt hinzuf�gen' );
define( '_FOR_CANCELDELETE', 'L�schung abbrechen' );
define( '_FOR_CONFIRMDELETE', 'L�schung best�tigen' );
define( '_FOR_CONTACTID','ID');
define( '_FOR_DELETE', 'l�schen' );
define( '_FOR_DELETECONTACT', 'Kontakt l�schen' );
define( '_FOR_DELETEUPLOADEDFILE','Datei nach dem Senden l�schen');
define( '_FOR_EDIT', 'editieren' );
define( '_FOR_EDITCONFIG', 'Konfiguration' );
define( '_FOR_EDITCONTACT', 'Kontakt �ndern' );
define( '_FOR_EMAIL', 'Emailadresse' );
define( '_FOR_FORMICULA', 'Formicula - Kontaktformulare' );
define( '_FOR_NAME', 'Bezeichnung' );
define( '_FOR_OPTIONS', 'Optionen' );
define( '_FOR_PUBLIC', '�ffentlich' );
define( '_FOR_SENDUSER', 'Best�tigungsmail an User verschicken?' );
define( '_FOR_SHOWCOMMENT', 'Kommentarfeld anzeigen?' );
define( '_FOR_SHOWCOMPANY', 'Firma anzeigen?' );
define( '_FOR_SHOWLOCATION', 'Standort anzeigen?' );
define( '_FOR_SHOWPHONE', 'Telefonnummer anzeigen?' );
define( '_FOR_SHOWURL', 'Homepage anzeigen?' );
define( '_FOR_UPLOADDIRNOTWRITABLE','Dieses Verzeichnis ist vom Webserver nicht beschreibbar' );
define( '_FOR_UPLOADFILEDIR', 'Verzeichnis f�r Dateiupload');
define( '_FOR_VIEWCONTACT', 'Kontakte anzeigen' );

if( !defined(_FOR_BADAUTHKEY) ) { define('_FOR_BADAUTHKEY', 'Ung�ltiger AuthKey'); }
if( !defined(_FOR_CONTACTCREATED) ) { define('_FOR_CONTACTCREATED', 'Kontakt angelegt'); }
if( !defined(_FOR_CONTACTDELETED) ) { define('_FOR_CONTACTDELETED', 'Kontakt gel�scht'); }
if( !defined(_FOR_CONTACTUPDATED) ) { define('_FOR_CONTACTUPDATED', 'Kontakt gepeichert'); }
if( !defined(_FOR_ERRORCREATINGCONTACT) ) { define('_FOR_ERRORCREATINGCONTACT', 'Fehler beim Erstellen des Kontaktes'); }
if( !defined(_FOR_NOAUTH) ) { define('_FOR_NOAUTH', 'Keine Berechtigung f�r diese Aktion'); }
if( !defined(_FOR_NOSUCHCONTACT) ) { define('_FOR_NOSUCHCONTACT', 'unbekannter Kontakt'); }

?>
