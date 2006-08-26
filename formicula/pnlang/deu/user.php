<?php

// made with DefineMachine 0.4 (c) Frank Schummertz, frank.schummertz@landseer-stuttgart.de, 22.03.2003
// sourcefile : /var/www/modules/formicula/pnuser.php
// defines read from /var/www/modules/formicula/pnlang/deu
// file created on Thursday 12th February 2004 20:11:02

//new
define('_FOR_WRONGCAPTCHA', 'Schlecht im Kopfrechnen? Bitte erneut versuchen!');
define('_FOR_SIMPLEMATHEQUATION', 'Bitte diese einfache Rechenaufgabe l�sen');
define('_FOR_ADVICE_EMAIL', 'Bitte eine g�ltige Emailadresse in der Form name@domain.de eingeben.');
define('_FOR_ADVICE_URL', 'Bitte eine g�ltige Internetadresse in der Form http://www.domain.de eingeben.');
define('_FOR_ADVICE_MANDATORY', 'Dies ist ein Pflichtfeld, bitte ausf�llen.');
define('_FOR_UPLOADLIMIT', '(Upload, max. 2MB)');

//original
define( '_FOR_BACK', 'Zur�ck zum Kontaktformular' );
define( '_FOR_COMMENT', 'Kommentar' );
define( '_FOR_COMPANY', 'Firma' );
define( '_FOR_CONTACTTITLE', 'Kontaktformular' );
define( '_FOR_EMAIL', 'Email' );
define( '_FOR_ERROR', 'Ein oder mehrere notwendige Felder wurden nicht ausgef�llt oder enthalten fehlerhafte Daten' );
define( '_FOR_ERRORSENDINGUSERMAIL', 'interner Fehler: konnte Best�tigungsmail nicht versenden' );
define( '_FOR_HTMLMAIL', 'HTML-Format' );
define( '_FOR_LOCATION', 'Ort' );
define( '_FOR_MUSTBE', 'notwendige Felder' );
define( '_FOR_NAME', 'Ihr Name' );
define( '_FOR_ONLINEAPPLYAS', 'Bewerbung als' );
define( '_FOR_ONLINEBIRTHDATE', 'Geburtsdatum');
define( '_FOR_ONLINEDATE', 'Eintrittstermin');
define( '_FOR_ONLINEJOBAPPLY', 'Onlinebewerbung' );
define( '_FOR_ONLINEPRIVACY', 'Vielen Dank f�r Ihre Bewerbung, Ihre Daten werden streng vertraulich behandelt' );
define( '_FOR_ONLINESALARY', 'Gehaltsvorstellung');
define( '_FOR_ONLINESTREET', 'Strasse');
define( '_FOR_ONLINEZIPCITY', 'PLZ Ort');
define( '_FOR_PHONE', 'Telefon' );
define( '_FOR_RESUME','Lebenslauf');
define( '_FOR_SEND', 'Senden' );
define( '_FOR_SENDTOADMIN', 'Folgende Daten wurden gesendet' );
define( '_FOR_SENDTOUSER', 'Zur Best�tigung werden die gesendeten Daten auch nochmal an die angegebene E-Mail-Adresse verschickt.' );
define( '_FOR_TEXTMAIL', 'normaler Text' );
define( '_FOR_THANKS', 'Vielen Dank f�r die Frage/den Kommentar zu unserer Website!<br>Falls gew�nscht, werden wir unverz�glich antworten.' );
define( '_FOR_THEME', 'Thema' );
define( '_FOR_UPLOADERROR1', 'Upload-Fehler: Datei zu gross (php.ini)' );
define( '_FOR_UPLOADERROR2', 'Upload-Fehler: Datei zu gross (form)' );
define( '_FOR_UPLOADERROR3', 'Upload-Fehler: Datei nur teilweise erhalten' );
define( '_FOR_UPLOADERROR4', 'Upload-Fehler: keine Datei erhalten' );
define( '_FOR_URL', 'Homepage' );
define( '_FOR_USERMAILFORMAT', 'Best�tigungsmail');

if( !defined( _FOR_ERRORSENDINGMAIL ) ) { define('_FOR_ERRORSENDINGMAIL', 'Fehler beim Senden der Mail'); }
if( !defined( _FOR_NOAUTH ) ) { define('_FOR_NOAUTH', 'Keine Berechtigung f�r diese Aktion'); }
if( !defined( _FOR_NOAUTHFORFORM ) ) { define('_FOR_NOAUTHFORFORM', 'Keine Berechtigung f�r dieses Formular'); }

?>