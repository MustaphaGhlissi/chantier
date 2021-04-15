# Installation 

1) Récupérer le depôt 

> git clone https:....


2) Installer les dépendances:

> composer i && yarn install 


3) Installer la base des données:

Copier le fichier .env.local et renommer la copie en .env 

Ensuite modifier cette ligne 

DATABASE_URL="mysql://user:password@127.0.0.1:3306/test_sf?serverVersion=5.7"

Enfin pour créer la base lancer cette commande:

> php bin/console doc:schema:create 


4) Installer les migrations 

> php bin/console doc:mig:mig -n 


5) Lancer le serveur 

Ouvrir le terminal et taper

> symfony server:start -d 
Copier l'adresse affichée dans le terminal

> yarn encore dev 

Lorsque les deux commandes se sont terminées vous pouvez passer à l'étape 6.

6) Ouvrir votre navigateur et coller l'adresse copiée (https://127.0.0.1:8000)

7) C'est parti ! 