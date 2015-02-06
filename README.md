Création d'un espace admin et sécurisation des accès
====================================================

L'objectif de ce double atelier est de créer un espace d'administration et de sécuriser les accès.
L'intérêt de traiter ces deux sujets en un seul atelier est de complexifier la configuration du firewall pour mieux comprendre son intérêt.

Déroulé de l'atelier
--------------------

La première étape est de créer un projet SF2 et de déclarer deux entités et les controleurs CRUD qui vont avec.
Ensuite l'atelier s'inspire largement du tutoriel Jobeet chapitres 12 et 13.

Attention !
Le tutoriel n'est plus à jour :
- L'injection de dépendance se fait maintenant avec composer

Injection de dépendances
------------------------
Dans le fichier composer.json ajouter les lignes suivantes dans la partie require.
        "sonata-project/cache-bundle": "2.2.*@dev",
        "sonata-project/block-bundle": "2.3.*@dev",
        "sonata-project/jquery-bundle": "1.9.*@dev",
        "knplabs/knp-menu": "2.0.*@dev",
        "knplabs/knp-menu-bundle": "2.0.*@dev",
        "sonata-project/exporter": "1.*@dev",
        "sonata-project/doctrine-orm-admin-bundle": "2.4.*@dev",
        "sonata-project/admin-bundle": "dev-master",
        "sonata-project/core-bundle": "dev-master"
