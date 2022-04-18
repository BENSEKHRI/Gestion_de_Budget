# Gestion de budget

Gestion de budget est un site internet qui permet la gestion de budget au sein d'une entreprise. Développer avec le framework Symfony sous une machine Ubuntu 20.04.4 LTS par l'équipe GooglePlex IT (KIOWA). 


# Pré-requis

    * PHP 8.1
    * nodejs et npm
    * apache
    * Composer
    * Symfony CLI

Vous pouvez vérifier les pré-requis avec la commande suivante (de la CLI Symfony) : 

```bash 
symfony check:requirements
```

Pour cloner le répertoire git vous devez taper la commande suivante: 
```bash 
git clone https://github.com/BENSEKHRI/Gestion_de_Budget.git
```

Voici la commande pour installation " git ": 
```bash 
sudo apt-get install git
```


# Lancer l'environnement de développement

```bash
composer install 
npm install
npm run build
sudo /opt/lampp/xampp start
symfony serve -d
```