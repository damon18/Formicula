<?php
// $Id: common.php 107 2008-05-23 09:22:59Z landseer $
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
// Original Author of file: Franky Chestnut
// Purpose of file:  language file
// ----------------------------------------------------------------------

//
// A
//
define('_FOR_ACTIVATESPAMCHECK', 'Activer l\'anti-spam (il faut �tre certain que les champs du formulaire soient disponibles, lire la documentation pour plus d\'informations) '); 
define('_FOR_ADDCONTACT','Ajouter un contact' ); 
define('_FOR_ADMINMAIL1', 'Un visiteur de votre site web a utilis� le formulaire de contact pour vous envoyer ceci :' ); 
define('_FOR_ADMINMAIL2', 'L\'utilisateur avait l\'adresse IP/FAI suivant : ' ); 
define('_FOR_ADVICE_EMAIL', 'Svp entrez une adresse e-mail valide. ex : nom@exemple.com.'); 
define('_FOR_ADVICE_MANDATORY', 'Ceci est un champ obligatoire.'); 
define('_FOR_ADVICE_URL', 'Svp entrez un site internet valide. ex : http://www.exemple.com.'); 
define('_FOR_ALTERTABLEFAILED', 'impossible de modifier la table'); 

//
// B
//
define('_FOR_BACK', 'Revenir au formulaire de contact' ); 
define('_FOR_BADAUTHKEY', 'Mauvaise cl� d\'authentification');

//
// C
//
define('_FOR_CACHEDIRPROBLEM', 'Le r�pertoire formicula_cache n\'existe pas dans le r�pertoire temporaire de PostNuke ou n\'a pas les droits en �criture - captchas a �t� d�sactiv�');
define('_FOR_CANCELDELETE','Annuler la supression automatique' ); //?? Cancel deletion routine 
define('_FOR_CLEARIMAGECACHE', 'Clear captcha image cache' );
define('_FOR_COMMENT', 'Commentaire' ); 
define('_FOR_COMPANY', 'Soci�t�' ); 
define('_FOR_CONFIRMDELETE','Cliquer ici pour supprimer ce contact' ); 
define('_FOR_CONTACTCREATED', 'Contact cr��');
define('_FOR_CONTACTDELETED', 'Contact supprim�');
define('_FOR_CONTACTFORM', 'Formulaire de Contact');
define('_FOR_CONTACTID','ID' ); 
define('_FOR_CONTACTNAME','Nom');
define('_FOR_CONTACTTITLE', 'Contacter notre groupe' ); 
define('_FOR_CONTACTUPDATED', 'Contact mis � jour');
define('_FOR_CREATETABLEFAILED', 'impossible de cr�er la table'); 
define('_FOR_CREATEFILESFAILED', 'La proc�dure d\'installation ne peut pas cr�er formicula_cache/index.html et/ou le fichier formicula_cache/.htaccess, merci de se r�f�rer au manual avant d\'utiliser le module!');
define('_FOR_CREATEFOLDERFAILED', 'La proc�dure d\'installation ne peut pas cr�er le r�pertoire formicula_cache, merci de se r�f�rer au manual avant d\'utiliser le module!');
define('_FOR_CREATETABLEFAILED', 'La proc�dure d\'installation ne peut pas cr�er la table formcontacts');

//
// D
//
define('_FOR_DELETE','Supprimer le contact' ); 
define('_FOR_DELETECONTACT','Supprimer le contact' ); 
define('_FOR_DELETETABLEFAILED', 'impossible de supprimer la table'); 
define('_FOR_DELETEUPLOADEDFILE','Supprimer le fichier apr�s l\'envoi' ); 
define('_FOR_DESC', 'Module permettant de cr�er des formulaires de contact de toute sorte'); 

//
// E
//
define('_FOR_EDIT','Editer le contact' ); 
define('_FOR_EDITCONFIG','Modifier la configuration' ); 
define('_FOR_EDITCONTACT','Editer le contact' ); 
define('_FOR_EMAIL', 'E-mail' ); 
define('_FOR_EMAILFROM', 'E-mail en provenance de'); 
define('_FOR_ERROR', 'Il y a une erreur dans votre formulaire' ); 
define('_FOR_ERRORCOMMENT', 'Erreur: commentaire vide ou invalide (pas de HTML!)');
define('_FOR_ERRORCONTACT', 'Erreur: aucun nom de contact');
define('_FOR_ERRORCREATINGCONTACT', 'Impossible de cr�er le contact !');
define('_FOR_ERROREMAIL', 'Erreur: adresse e-mail vide ou incorrecte');
define('_FOR_ERRORINVALIDEMAIL', 'Erreur: adresse e-mail incorrecte');
define('_FOR_ERRORNOMANDATORYFIELD', 'Erreur: champs obligatoire manquant');
define('_FOR_ERRORSENDINGMAIL', 'Il y a eu une erreur lors de l\'envoi de l\'e-mail.');
define('_FOR_ERRORSENDINGUSERMAIL', 'Il y a eu une erreur interne lors de l\'envoi de l\'e-mail de confirmation' ); 
define('_FOR_ERRORUPLOADERROR', 'Erreur: erreur de t�l�chargement');
define('_FOR_ERRORUSERNAME', 'Erreur: aucun nom');
define('_FOR_EXCLUDEFROMSPAMCHECK', 'Ne pas activer l\'anti-spam pour ces formulaires (utiliser la virgule pour s�parer les ID des formulaires, ex : formulaires incorpor�s dans pagesetter. La redirection peut ne pas fonctionner correctement pour ceux-ci)'); 

//
// F
//
define('_FOR_FORMICULA','Formicula!' ); 
define('_FOR_FORMNUMBER', 'Formulaire #' ); 

//
// H
//
define('_FOR_HELLO', 'Bonjour,' ); 
define('_FOR_HTACCESSPROBLEM', 'Le fichier .htaccess du r�pertoire formicula_cache n\'existe pas');
define('_FOR_HTMLMAIL', 'HTML' ); 

//
// I
//
define('_FOR_ILLEGALEMAIL', 'Adresse e-mail invalide d�tect�e'); 

//
// L
//
define('_FOR_LOCATION', 'Adresse' ); 

//
// M
//
define('_FOR_MUSTBE', 'Champs obligatoires :' ); 

//
// N
//
define('_FOR_NAME', 'Nom' ); 
define('_FOR_NAMEOFCONTACT','Nom du contact' ); 
define('_FOR_NOAUTH', 'Vous n\'�tes pas autoris� � faire cela.');
define('_FOR_NOAUTHFORFORM', 'Pas d\'autorisation pour ce formulaire.');
define('_FOR_NOCONTACTS', 'Pas de contacts trouv�.');
define('_FOR_NOFORMSELECTED', 'no form selected');
define('_FOR_NOIMAGEFUNCTION', 'Aucune fonction image disponible - captcha est d�sactiv�');
define('_FOR_NOMAILERMODULE', 'Le module Mailer n\'est pas disponible - impossible d\'envoyer des e-mails!');
define('_FOR_NOSUCHCONTACT', 'Contact inconnu');

//
// O
//
define('_FOR_ONLINEAPPLYAS', 'Appliquer �' ); //?? Apply as 
define('_FOR_ONLINEBIRTHDATE', 'Date anniversaire' ); 
define('_FOR_ONLINECOUNTRY', 'Pays' ); 
define('_FOR_ONLINEDATE', 'Date d\'entr�e' ); //?? Entry date 
define('_FOR_ONLINEJOBAPPLY', 'Appliquer en ligne !' ); //?? Aplly online! 
define('_FOR_ONLINEPRIVACY', 'Merci pour votre message, vos donn�es seront gard�es de fa�on strictement confidentiel' ); //?? Thanks for applying, 
define('_FOR_ONLINESALARY', 'Salaire' ); //?? Salary 
define('_FOR_ONLINESTREET', 'Rue' ); 
define('_FOR_ONLINEZIPCITY', 'Code postal' ); 
define('_FOR_OPTIONS','Options' ); 

//
// P
//
define('_FOR_PHONE', 'Num�ro de t�l�phone' ); 
define('_FOR_PUBLIC', 'Public' ); 

//
// R
//
define('_FOR_RESUME','R�sum�'); 

//
// S
//
define('_FOR_SEND', 'Envoyer' ); 
define('_FOR_SENDEREMAIL', 'E-mail de l\'exp�diteur'); 
define('_FOR_SENDERINFO', 'Utiliser cette information dans le mail de confirmation envoy� � l\'exp�diteur'); 
define('_FOR_SENDERNAME', 'Nom de l\'exp�diteur'); 
define('_FOR_SENDERSUBJECT', 'Sujet'); 
define('_FOR_SENDERSUBJECTHINT', ' 
avec <ul> 
    <li>%s = nom du site</li> 
    <li>%l = slogan du site</li> 
    <li>%u = url du site</li> 
    <li>%c = nom de l\'exp�diteur</li> 
    <li>%n<num> = nom de champ d�fini pour l\'utilisateur<num></li> 
    <li>%d<num> = nom de champ d�fini pour les donn�es<num></li> 
</ul> 
'); 
define('_FOR_SENDTOADMIN', 'Cette donn�e nous a �t� envoy�e :'); 
define('_FOR_SENDTOUSER', 'La confirmation de votre soumission vous sera envoy�e dans quelques minutes.' ); 
define('_FOR_SENDUSER','Envoyer un e-mail de confirmation � l\'exp�diteur ?' ); 
define('_FOR_SHOWCOMMENT', 'Afficher la zone de commentaire' ); 
define('_FOR_SHOWCOMPANY','Afficher la soci�t� ?' ); 
define('_FOR_SHOWLOCATION','Afficher l\'adresse?' ); 
define('_FOR_SHOWPHONE','Afficher le num�ro de t�l�phone ?' ); 
define('_FOR_SHOWURL','Afficher l\'url ?' ); 
define('_FOR_SIMPLEMATHEQUATION', 'Svp r�solvez ce simple probl�me de math'); 
define('_FOR_SUBMIT', 'Mise � jour de la configuration' );


//
// T
//
define('_FOR_TEAM', 'Groupe' ); 
define('_FOR_TEXTMAIL', 'Texte' ); 
define('_FOR_THANKS', 'Merci pour vos questions/commentaires s�r notre website !<br>Nous r�pondrons d�s que possible.' ); 
define('_FOR_THE', 'Le' ); 
define('_FOR_THEME', 'Contacter' ); 

//
// U
//
define('_FOR_UPLOADDIRNOTWRITABLE','Le serveur ne peut pas �crire dans ce dossier !' ); 
define('_FOR_UPLOADERROR1', 'upload-erreur: fichier trop gros (php.ini)' ); 
define('_FOR_UPLOADERROR2', 'upload-erreur: fichier trop gros (form)' ); 
define('_FOR_UPLOADERROR3', 'upload-erreur: fichier re�u partiellement' ); 
define('_FOR_UPLOADERROR4', 'upload-erreur: pas de fichier re�u' ); 
define('_FOR_UPLOADFILEDIR', 'Dossier d\'upload des fichiers' ); 
define('_FOR_UPLOADLIMIT', '(Upload, max. 2MB)'); 
define('_FOR_URL', 'Site web' ); 
define('_FOR_USERMAIL1', 'Merci pour le commentaire post� via notre site web. Les donn�es envoy�es sont :' ); 
define('_FOR_USERMAIL2', 'Nous r�pondrons � votre e-mail d�s que possible.' ); 
define('_FOR_USERMAILFORMAT', 'Format de l\'e-mail' ); 

//
// V
//
define('_FOR_VIEWCONTACT','Afficher les contacts' ); 
define('_FOR_VISITHOMEPAGE', 'Se rendre sur le NOC de Formicula'); 

//
// W
//
define('_FOR_WRONGCAPTCHA', 'Mauvais en math�matiques ? Vous pouvez faire mieux, r�essayez.'); 
