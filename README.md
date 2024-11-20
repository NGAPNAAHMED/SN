# SN
Ici , c'est le groupe de ceux qui vont cartonner dans ce projet 


Voici un guide étape par étape pour installer WampServer, importer une base de données et accéder à votre site via l'adresse localhost.

Étape 1 : Installer WampServer
Télécharger WampServer
Rendez-vous sur le site officiel de WampServer : WampServer.
Téléchargez la version adaptée à votre système (32 bits ou 64 bits).
Installer WampServer
Double-cliquez sur le fichier téléchargé.
Suivez les instructions à l'écran et acceptez les termes de la licence.
Choisissez le répertoire d'installation (par défaut, il est installé dans C:\wamp64).
Pendant l'installation, il vous sera demandé de sélectionner votre navigateur par défaut et votre éditeur de texte.
Démarrer WampServer
Une fois l'installation terminée, lancez WampServer. Vous verrez une icône dans la barre des tâches (un cercle vert, orange ou rouge).
L'icône verte indique que le serveur fonctionne correctement.

Étape 2 : Importer le fichier de base de données
Accéder à phpMyAdmin
Ouvrez votre navigateur web et entrez l'URL suivante : http://localhost/phpmyadmin.
Connectez-vous avec les identifiants par défaut (généralement, le nom d'utilisateur est root et le mot de passe est vide).
Créer une nouvelle base de données
Dans phpMyAdmin, cliquez sur l'onglet "Base de données".
Entrez le nom de la nouvelle base de données et cliquez sur "Créer".
Importer le fichier SQL
Sélectionnez la base de données que vous venez de créer dans la liste à gauche.
Cliquez sur l'onglet "Importer".
Choisissez le fichier SQL (correspond ici au fichier SQL git_github) à importer depuis votre ordinateur en cliquant sur "Choisir un fichier".
Cliquez sur "Exécuter" pour importer la base de données.

Etape 3: Cnfigurer votre fichier de connexion à la base de données
Verifier les identifiants de connexion à la base de données et assurez-vous de mettre vos identifiants dans les paramètres de connexion à 
la base de données.

Étape 4 : Accéder à votre site via localhost
Placer votre projet dans le dossier WampServer
Déplacez ou copiez votre dossier de projet (contenant vos fichiers PHP, HTML, etc.) dans le répertoire C:\wamp64\www.
Accéder à votre site
Dans votre navigateur, entrez l'URL suivante : http://localhost/nom_du_dossier.
Remplacez nom_du_dossier par le nom du dossier de votre projet.
