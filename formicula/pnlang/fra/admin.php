<?php
// $Id: admin.php 47 2006-08-26 14:07:25Z landseer $
// ----------------------------------------------------------------------
// Original Author of file: Sebastian Fr�nk
// Purpose of file: english Translation Files
// ----------------------------------------------------------------------
//

//new 
define('_FOR_EXCLUDEFROMSPAMCHECK', 'Ne pas activer l\'anti-spam pour ces formulaires 
(utiliser la virgule pour s�parer les ID des formulaires, 
ex : formulaires incorpor�s dans pagesetter. La redirection 
peut ne pas fonctionner correctement pour ceux-ci)'); 
define('_FOR_ACTIVATESPAMCHECK', 'Activer l\'anti-spam 
(il faut �tre certain que les champs 
du formulaire soient disponibles, 
lire la documentation pour plus d\'informations) 
'); 
define('_FOR_VISITHOMEPAGE', 'Se rendre sur le NOC de Formicula'); 
define('_FOR_ILLEGALEMAIL', 'Adresse e-mail invalide d�tect�e'); 
define('_FOR_SENDERINFO', 'Utiliser cette information dans le mail de confirmation envoy� � l\'exp�diteur'); 
define('_FOR_SENDERNAME', 'Nom de l\'exp�diteur'); 
define('_FOR_SENDEREMAIL', 'E-mail de l\'exp�diteur'); 
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
 
//original 
define( '_FOR_ADDCONTACT','Ajouter un contact' ); 
define( '_FOR_CANCELDELETE','Annuler la supression automatique' ); //?? Cancel deletion routine 
define( '_FOR_CONFIRMDELETE','Cliquer ici pour supprimer ce contact' ); 
define( '_FOR_CONTACTID','ID' ); 
define( '_FOR_DELETE','Supprimer le contact' ); 
define( '_FOR_DELETECONTACT','Supprimer le contact' ); 
define( '_FOR_DELETEUPLOADEDFILE','Supprimer le fichier apr�s l\'envoi' ); 
define( '_FOR_EDIT','Editer le contact' ); 
define( '_FOR_EDITCONFIG','Modifier la configuration' ); 
define( '_FOR_EDITCONTACT','Editer le contact' ); 
define( '_FOR_EMAIL','E-mail' ); 
define( '_FOR_FORMICULA','Formicula!' ); 
define( '_FOR_NAME','Nom du contact' ); 
define( '_FOR_OPTIONS','Options' ); 
define( '_FOR_PUBLIC', 'Public' ); 
define( '_FOR_SENDUSER','Envoyer un e-mail de confirmation � l\'exp�diteur ?' ); 
define( '_FOR_SHOWCOMMENT', 'Afficher la zone de commentaire' ); 
define( '_FOR_SHOWCOMPANY','Afficher la soci�t� ?' ); 
define( '_FOR_SHOWLOCATION','Afficher l\'adresse?' ); 
define( '_FOR_SHOWPHONE','Afficher le num�ro de t�l�phone ?' ); 
define( '_FOR_SHOWURL','Afficher l\'url ?' ); 
define( '_FOR_UPLOADDIRNOTWRITABLE','Le serveur ne peut pas �crire dans ce dossier !' ); 
define( '_FOR_UPLOADFILEDIR', 'Dossier d\'upload des fichiers' ); 
define( '_FOR_VIEWCONTACT','Afficher les contacts' ); 
 
if( !defined(_FOR_BADAUTHKEY) ) { define('_FOR_BADAUTHKEY', 'Mauvaise cl� d\'authentification'); } 
if( !defined(_FOR_CONTACTCREATED) ) { define('_FOR_CONTACTCREATED', 'Contact cr��'); } 
if( !defined(_FOR_CONTACTDELETED) ) { define('_FOR_CONTACTDELETED', 'Contact supprim�'); } 
if( !defined(_FOR_CONTACTUPDATED) ) { define('_FOR_CONTACTUPDATED', 'Contact mis � jour'); } 
if( !defined(_FOR_ERRORCREATINGCONTACT) ) { define('_FOR_ERRORCREATINGCONTACT', 'Impossible de cr�er le contact !'); } 
if( !defined(_FOR_NOAUTH) ) { define('_FOR_NOAUTH', 'Vous n\'�tes pas autoris� d\'administrer le module Formicula !'); } 
if( !defined(_FOR_NOSUCHCONTACT) ) { define('_FOR_NOSUCHCONTACT', 'Nous n\'avons pas de contact ayant ce nom.'); }
?>
