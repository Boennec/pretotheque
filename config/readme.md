créer la bdd dans phpmyadmin
créer la table article avec les champs id, nom, description, image, prix, fournisseur, codeFournisseur, SESSAD.
créer un dossier "pretotheque" dans C:\wamp64\www.
dans vscode :

créer un fichier index.php
créer un sous-dossier config
créer dans /config le dossier connexion.php et y instancier l'objet PDO dans la variable access au sein d'un try-catch
dans commandes.php créer les fonctions du CRUD:
    fonction ajouter, pour ajouter un article
    fonction afficher pour afficher les articles de la table articles
    fonction supprimer pour supprimer un article a partir de l'id (clé primaire)
Créer une page d'affichage avec getbootstrap
dans examples/custom components choisir album; obtenir le code source : CTRL + u
copier coller CTRL + a puis CTRL +c dans index.php et CTRL + v

tester le server : php -S 127.0.0.1:8000 pour démarrer  puis ouvrir sur le navigateur :
localhost:8000/pretotheque/


Telecharger bootstrap et intégrer js et css :
aller sur bootstrap.com, download, compiled CSS and JS -> download
décompresser le dossier, on extrait donc un dossier css et un dossier js. Les déposer a la racine du projet
Ouvrir les dossiers pour ne garder que bootstrap.css, bootstrap.min.css et bootstrap.js, bootstrap.min.js
Retouner a l'accueil de bootsytra : aller sur get started et copier/coller le lien css dans le <head> du fichier index.php
(ne garder que :<link rel="stylesheet" href="css/bootstrap.min.css" >)
Copirer coller les 3 lignes js deposer juste avant la cloture de la balise </body> :
(<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>)
(<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>)
(<script src="js/bootstrap.min.js"></script>)


on a l'affichage html/css mais pas lejs.

On teste en entrant manuellement dans la bdd avec 2 articles

Pour afficher les articles , on créé une boucle foreach
