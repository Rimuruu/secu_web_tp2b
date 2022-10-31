# Applications **Departements** **Noms** et **Produits**

Ces applications possèdent plusieurs vulnérabilités de type *injection SQL* et
*XSS*. Il faut retrouver ces vulnérabilités et les corriger correctement. 

## Utilisation

Il n'est pas indispensable de lancer les applications, mais cela peut se faire
en les plaçant dans le répertoire correspondant d'un serveur web ou en utilisant 
le serveur intégré du php
:

```
php -S localhost:8080
```

Ensuite, il est possible d'accéder aux applications à l'URL `http://localhost:8080/*application*/index.php`

Les applications utilisent une base de données qui doit être crée préalablement.
Le fichier `sweb.sql` contient les requêtes nécessaires. Il est optimisé pour la
base de données *MySql/Maria DB* et il pourrait nécessiter des modifications
pour les autres SGBD. Le fichier `db_config.php` présent dans chaque répertoire
permet de renseigner les paramètres de connexion.

Il est évident que SGBD doit également s'exécuter lors de l'exécution de l'application.  