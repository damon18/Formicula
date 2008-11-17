<?php
// $Id$
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------
// Original Author of file: Frank Schummertz
// Purpose of file:  language file
// ----------------------------------------------------------------------

// new
define('_FOR_CANNOTCREATEFOLDEROUTSIDEWEBROOT', 'pnTemp-Verzeichnis au�erhalb des Webroots gefunden, bitte das formicula_cache Verzeichnis manuell anlegen, wie in der Dokumentation beschrieben');

//
// A
//
define('_FOR_ACTIVATESPAMCHECK', 'Spamcheck aktivieren<br />(dies erfordert u.U. Anpassungen an den Templates, weitere Informationen dazu finden sich in der Dokumentation. Diese Option wird automatisch deaktiviert, wenn Formicula keine PHP-Funktion zur Erstellung von Captcha-Grafiken findet!)');
define('_FOR_ADDCONTACT', 'Kontakt hinzuf�gen' );
define('_FOR_ADMINMAIL1', 'ein Besucher der Seite hat das Kontaktformular genutzt und folgendes mitgeteilt:' );
define('_FOR_ADMINMAIL2', 'Der Nutzer hat folgende IP-Adresse/Hostname: ' );
define('_FOR_ADVICE_EMAIL', 'Bitte eine g�ltige E-Mailadresse in der Form name@domain.de eingeben.');
define('_FOR_ADVICE_MANDATORY', 'Dies ist ein Pflichtfeld, bitte ausf�llen.');
define('_FOR_ADVICE_URL', 'Bitte eine g�ltige Internetadresse in der Form http://www.domain.de eingeben.');
define('_FOR_ALTERTABLEFAILED', 'konnte Tabelle nicht �ndern');

//
// B
//
define('_FOR_BACK', 'Zur�ck zum Kontaktformular' );
define('_FOR_BADAUTHKEY', 'Ung�ltiger AuthKey');

//
// C
//
define('_FOR_CACHEDIRPROBLEM', 'formicula_cache-Verzeichnis nicht vorhanden in pnTemp oder Verzeichnis ist nicht beschreibbar, Captcha deaktiviert');
define('_FOR_CANCELDELETE', 'L�schung abbrechen' );
define('_FOR_CLEARIMAGECACHE', 'Captchabilder l�schen' );
define('_FOR_COMMENT', 'Kommentar' );
define('_FOR_COMPANY', 'Firma' );
define('_FOR_CONFIRMDELETE', 'L�schung best�tigen' );
define('_FOR_CONTACTCREATED', 'Kontakt angelegt');
define('_FOR_CONTACTDELETED', 'Kontakt gel�scht'); 
define('_FOR_CONTACTFORM', 'Kontakt');
define('_FOR_CONTACTID','ID');
define('_FOR_CONTACTNAME','Name');
define('_FOR_CONTACTTITLE', 'Kontaktformular' );
define('_FOR_CONTACTUPDATED', 'Kontakt gepeichert');
define('_FOR_CREATECONTACTFAILED', 'Fehler: Konnte Kontakt nicht anlegen');
define('_FOR_CREATEFILESFAILED', 'W�hrend der Installation konnten formicula_cache/index.html und/oder formicula_cache/.htaccess nicht angelegt werden, vor Benutzung des Moduls bitte den Anweisungen im Handbuch folgen!');
define('_FOR_CREATEFOLDERFAILED', 'W�hrend der Installation konnte das formicula_cache-Verzeichnis nicht angelegt werden, vor Benutzung des Moduls bitte den Anweisungen im Handbuch folgen!');
define('_FOR_CREATETABLEFAILED', 'W�hrend der Installation konnte die formcontacts-Tabelle nicht angelegt werden');

//
// D
//
define('_FOR_DBUPGRADEFAILED', 'Datenbank�nderung fehlgeschlagen');
define('_FOR_DELETE', 'l�schen' );
define('_FOR_DELETECONTACT', 'Kontakt l�schen' );
define('_FOR_DELETETABLEFAILED', 'konnte Tabelle nicht l�schen');
define('_FOR_DELETEUPLOADEDFILE','Datei nach dem Senden l�schen');

//
// E
//
define('_FOR_EDIT', 'editieren' );
define('_FOR_EDITCONFIG', 'Konfiguration' );
define('_FOR_EDITCONTACT', 'Kontakt �ndern' );
define('_FOR_EMAIL', 'E-Mail' );
define('_FOR_EMAILFROM', 'E-Mail von');
define('_FOR_ERROR', 'Ein oder mehrere notwendige Felder wurden nicht ausgef�llt oder enthalten fehlerhafte Daten' );
define('_FOR_ERRORCOMMENT', 'Fehler: Keinen oder ung�ltigen Kommentar abgegeben (kein HTML!)');
define('_FOR_ERRORCONTACT', 'Fehler: Name des Kontakts fehlt');
define('_FOR_ERRORCREATINGCONTACT', 'Fehler beim Erstellen des Kontaktes');
define('_FOR_ERROREMAIL', 'Fehler: keine oder feherhafte E-Mailadresse angegeben');
define('_FOR_ERRORINVALIDEMAIL', 'Fehler: fehlerhafte E-Mailadresse angegeben');
define('_FOR_ERRORNOMANDATORYFIELD', 'Fehler: folgendes Pflichtfeld fehlt');
define('_FOR_ERRORSENDINGMAIL', 'Fehler beim Senden der Mail');
define('_FOR_ERRORSENDINGUSERMAIL', 'interner Fehler: konnte Best�tigungsmail nicht versenden' );
define('_FOR_ERRORUPLOADERROR', 'Fehler: Uploadfehler');
define('_FOR_ERRORUSERNAME', 'Fehler: kein Username angegeben');
define('_FOR_EXCLUDEFROMSPAMCHECK', 'Spam Check nicht in diesem Formularen verwenden<br />(kommaseparierte Liste der FormIDs, die z.B. in Pagesetter eingebettet sind, hier k�nnte es zu Problemen beim Weiterleiten kommen, wenn der Benutzer die Rechenaufgabe nicht korrekt l�st.');

//
// F
//
define('_FOR_FORMICULA', 'Formicula - Kontaktformulare' );
define('_FOR_FORMNUMBER', 'Formular #' );

//
// H
//
define('_FOR_HELLO', 'Hallo,' );
define('_FOR_HTACCESSPROBLEM', 'Notwendige .htaccess Datei in formicula_cache nicht gefunden, Captcha deaktiviert');
define('_FOR_HTMLMAIL', 'HTML-Format' );

//
// I
//
define('_FOR_ILLEGALEMAIL', 'ung�ltige E-Mailadresse');

//
// L
//
define('_FOR_LOCATION', 'Ort' );

//
// M
//
define('_FOR_MUSTBE', 'Notwendige Felder' );

//
// N
//
define('_FOR_NAMEOFCONTACT', 'Bezeichnung' );
define('_FOR_NAME', 'Ihr Name' );
define('_FOR_NOAUTH', 'Keine Berechtigung f�r diese Aktion');
define('_FOR_NOAUTHFORFORM', 'Keine Berechtigung f�r dieses Formular');
define('_FOR_NOCONTACTS', 'keine Kontakt gefunden');
define('_FOR_NOFORMSELECTED', 'kein Formular ausgew�hlt');
define('_FOR_NOIMAGEFUNCTION', 'Keine Funktion zur Bilderzeugung verf�gbar - Captcha deaktiviert');
define('_FOR_NOMAILERMODULE', 'Mailer-Modul nicht verf�gbar, E-Mails k�nnen nicht verssendet werden!');
define('_FOR_NOSUCHCONTACT', 'unbekannter Kontakt');

//
// O
//
define('_FOR_ONLINEAPPLYAS', 'Bewerbung als' );
define('_FOR_ONLINEBIRTHDATE', 'Geburtsdatum');
define('_FOR_ONLINEDATE', 'Eintrittstermin');
define('_FOR_ONLINEJOBAPPLY', 'Onlinebewerbung' );
define('_FOR_ONLINEPRIVACY', 'Vielen Dank f�r Ihre Bewerbung, Ihre Daten werden streng vertraulich behandelt' );
define('_FOR_ONLINESALARY', 'Gehaltsvorstellung');
define('_FOR_ONLINESTREET', 'Strasse');
define('_FOR_ONLINEZIPCITY', 'PLZ Ort');
define('_FOR_OPTIONS', 'Optionen' );

//
// P
//
define('_FOR_PHONE', 'Telefon' );
define('_FOR_PUBLIC', '�ffentlich' );

//
// R
//
define('_FOR_RESUME','Lebenslauf');

//
// S
//
define('_FOR_SEND', 'Senden' );
define('_FOR_SENDEREMAIL', 'E-Mail des Absenders');
define('_FOR_SENDERINFO', 'Verwende folgende Daten f�r die Best�tigungsmail an den Benutzer');
define('_FOR_SENDERNAME', 'Absendername');
define('_FOR_SENDERSUBJECT', 'Betreff');
define('_FOR_SENDERSUBJECTHINT', '
mit <ul>
    <li>%s = Seitenname</li>
    <li>%l = Slogan</li>
    <li>%u = URL der Seite</li>
    <li>%c = Absendername des Kontakts</li>
    <li>%n&lt;num&gt; = Name des userdefinerten Feldes &lt;num&gt;</li>
    <li>%d&lt;num&gt; = Inhalt des userdefinierten Feldes &lt;num&gt;</li>
</ul>
');
define('_FOR_SENDTOADMIN', 'Folgende Daten wurden gesendet' );
define('_FOR_SENDTOUSER', 'Zur Best�tigung werden die gesendeten Daten auch nochmal an die angegebene E-Mail-Adresse verschickt.' );
define('_FOR_SENDUSER', 'Best�tigungsmail an User verschicken?' );
define('_FOR_SHOWCOMMENT', 'Kommentarfeld anzeigen?' );
define('_FOR_SHOWCOMPANY', 'Firma anzeigen?' );
define('_FOR_SHOWLOCATION', 'Standort anzeigen?' );
define('_FOR_SHOWPHONE', 'Telefonnummer anzeigen?' );
define('_FOR_SHOWURL', 'Homepage anzeigen?' );
define('_FOR_SIMPLEMATHEQUATION', 'Bitte diese einfache Rechenaufgabe l�sen');
define('_FOR_SUBMIT', 'Absenden' );

//
// T
//
define('_FOR_TEAM', 'Team' );
define('_FOR_TEXTMAIL', 'normaler Text' );
define('_FOR_THANKS', 'Vielen Dank f�r die Frage/den Kommentar zu unserer Website!<br>Falls gew�nscht, werden wir unverz�glich antworten.' );
define('_FOR_THE', 'Das' );
define('_FOR_THEME', 'Thema' );

//
// U
//
define('_FOR_UPDATECONTACTFAILED', 'Fehler: Konnte Kontakt nicht aktualisieren!');
define('_FOR_UPLOADDIRNOTWRITABLE','Dieses Verzeichnis ist vom Webserver nicht beschreibbar' );
define('_FOR_UPLOADERROR1', 'Upload-Fehler: Datei zu gross (php.ini)' );
define('_FOR_UPLOADERROR2', 'Upload-Fehler: Datei zu gross (form)' );
define('_FOR_UPLOADERROR3', 'Upload-Fehler: Datei nur teilweise erhalten' );
define('_FOR_UPLOADERROR4', 'Upload-Fehler: keine Datei erhalten' );
define('_FOR_UPLOADFILEDIR', 'Verzeichnis f�r Dateiupload');
define('_FOR_UPLOADLIMIT', '(Upload, max. 2MB)');
define('_FOR_URL', 'Homepage' );
define('_FOR_USERMAIL1', 'vielen Dank f�r die Frage/den Kommentar zu unserer Website. Die gesendeten Daten sind:' );
define('_FOR_USERMAIL2', 'Wir werden, falls gew�nscht, unverz�glich antworten.' );
define('_FOR_USERMAILFORMAT', 'Best�tigungsmail');

//
// V
//
define('_FOR_VIEWCONTACT', 'Kontakte anzeigen' );
define('_FOR_VISITHOMEPAGE', 'Formicula im NOC besuchen');

//
// W
//
define('_FOR_WRONGCAPTCHA', 'Schlecht im Kopfrechnen? Bitte erneut versuchen!');
