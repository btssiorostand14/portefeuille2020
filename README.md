**Portefeuille SIO 2020**

*Prérequis*
  * Machine avec un serveur Web, Mysql/Mariadb 
  * Version PHP 7.3 ou supérieure (voir https://tecadmin.net/install-php-debian-9-stretch/)
  * Instalation de *Composer* (voir https://getcomposer.org/download/) [Problèmes rencontrés lors de l'installation avec apt sur Debian 9]
  * *git* installé
  

*Installation :*
  * exécuter le script de base de données du dossier BDD (crée la base, le compte d'accès et insère les contenus)
  * cloner le dossier depuis https://github.com/btssiorostand14/portefeuille2020
  * faire un *composer update* et *composer install* 
  * si besoin, donner les droits nécessaires au dossier et redéfinir les propriétaires 
  * accéder à la page ./public/accueil (Et là, ça marche pas, il dit "404 not found" :-/ !)
