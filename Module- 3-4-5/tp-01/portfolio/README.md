# Portfolio

Voici mon projet de portfolio avec un système d'utilisateur sécurisé.


## Cahier des charges

###### Présentation du projet:  
- Nom du site web :  `julien-lair.fr`
- Activité :  `Présentation des mes différents projets. Espace de contact. Système de d'utilisateur avec possibilité de modifier ses informations personelle.`
- Objectif du site web : `L'objectif du site web est de me présenter, et d'obtenir de potentielle nouveau client.`
- Cible : `Ma cible est toutes personnes qui cherche des services d'un développeur`

###### Description technique:  

- Le site web est développé en utilisant les langages HTML, CSS et PHP pour la partie front-end et back-end. La base de données MySQL est utilisée pour stocker les informations des utilisateurs.

Voici quelques fonctionnalités techniques clés :

1. Système d'authentification sécurisé : Le site propose un système d'authentification sécurisé pour les utilisateurs, nécessitant une inscription obligatoire pour accéder à certaines fonctionnalités. Les mots de passe sont stockés de manière sécurisée à l'aide de fonctions de hachage cryptographique.

2. Gestion des sessions : Une fois qu'un utilisateur est authentifié, une session est créée pour maintenir sa connexion active tout au long de sa visite sur le site. Les sessions sont correctement gérées et détruites après la déconnexion de l'utilisateur ou après une période d'inactivité définie.

3. Formulaire de contact : Le site propose un formulaire de contact permettant aux visiteurs de vous contacter directement. Ce formulaire est sécurisé contre les attaques de spam et les données soumises sont traitées côté serveur pour garantir leur sécurité.

4. Gestion des informations personnelles : Les utilisateurs authentifiés ont la possibilité de modifier leurs informations personnelles, telles que leur nom, prénom, adresse email et mot de passe. Ces modifications sont sécurisées et nécessitent une authentification préalable.

5. Stockage sécurisé des données : Toutes les données sensibles, telles que les informations personnelles des utilisateurs, sont stockées de manière sécurisée dans la base de données MySQL. Des mesures de sécurité telles que le hashage de mot de passe sont mises en place pour protéger ces données contre les accès non autorisés.

6. Gestion des projets : Le site affiche une liste de vos différents projets.

Ces fonctionnalités combinées assurent à la fois la sécurité des données des utilisateurs et la convivialité du site pour les visiteurs et les administrateurs.

###### Arborescence:

![](https://gitlab.esiea.fr/jlair/portfolio/-/raw/main/readme_content/arborescence.png)

###### Charte Graphique:
- Couleur : `#0B0B0B, #00D315`
- Police : `JuliusSansOne et Roboto`
- Style Visuel : `Dark mode, fond noir font blanc et vert sur les éléments avec actions`

###### Maquettage Wireframe:
> https://www.figma.com/file/Hp9GKI8AxrqctiU2de31Nn

![https://www.figma.com/file/Hp9GKI8AxrqctiU2de31Nn/Untitled?type=design&node-id=0%3A1&mode=design&t=WdnYjvlBKdoGnHga-1](https://gitlab.esiea.fr/jlair/portfolio/-/raw/main/readme_content/figma1.png)
![https://www.figma.com/file/Hp9GKI8AxrqctiU2de31Nn/Untitled?type=design&node-id=0%3A1&mode=design&t=WdnYjvlBKdoGnHga-1](https://gitlab.esiea.fr/jlair/portfolio/-/raw/main/readme_content/figma2.png)
![https://www.figma.com/file/Hp9GKI8AxrqctiU2de31Nn/Untitled?type=design&node-id=0%3A1&mode=design&t=WdnYjvlBKdoGnHga-1](https://gitlab.esiea.fr/jlair/portfolio/-/raw/main/readme_content/figma3.png)

## Analyse et Conception Procédurale

- Diagramme UseCase
![](https://www.planttext.com/api/plantuml/png/VPDDRiCW48Ntd6BaJTj5Bj15bTIHgYugHR9o08h72Ge62uP5LFK-pRutyCKAvCyuZRqpyxvXtWFcZhWbtoh653O4PC3ApPQWbXO5IQEPsqdTSSjRwBZOyGrMj5S8iSprHY5ZN92ni2QffEE4tW9ti7PesKK4HRLtrF-q23N2obXgZ9AcW2y6uVCE1NT1zTOVB5fG3r8xOMKN9oXYk_Vh_ns2UzgY9jb8mI_OOhIOiuich6yZZT1PqqW5_khYsE0aMQLoZd-OEZIUnC-I__1IzR_au_32j1tX3Lmga-fbAhD4nrXXDdiP1WBFK9q2ivYhnlwZ5CD-MeUJ2GUKYpElGLeQxRoYeSESoEq5uZQI7CWjnIr68HnT3ir5xF4r9XPkpZ9CtX_GFINPZRifRMvkGZaoDQ4SkRcZ_6R3Tp2kdv_0aXF_JFUY8YDsAK87KZV6jicS2vGRtX5N933sdwEkuoF-0m00)
- Diagramme d'activité
![](https://cdn-0.plantuml.com/plantuml/png/TT31IWCn40RW-px5i9Ugq5VGYhGdJnMyY8Um_TEEP2Tb9YdwI7sElfXPGyCgUCh2_lFnpwmiEKrv3DtDtIqjb_VKFozoui3c4h8I92d8OCJYeuukSHIZ7MY8up6XxzXJlob_Sd2i8CWfVbtEzD1JEa0wcjItcFcT-jVBMTapb0Be0oaAFRriDtq9JSfQ5LaBxiIcX6_gJ9jxZzxpS83-2RiJ1WemGWNxwnYL9SitWg594gL8Qr7isP9EsFm0TPRzF3924kdbdCrurkntjorshBo7qWbg51mTtHxrS2Buv2ZLRcrQd_bcMMY4sS_e0ggjKbke8h9ZtrtVIZRklqCLaSK6vMEgRHfPcLLvyXY-0G00)
- Diagramme de flux (Système)
![](https://private-user-images.githubusercontent.com/3670077/309572082-bc2c4626-aafd-4bdb-b570-154f4ac6ec87.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MDk3MjI5MzcsIm5iZiI6MTcwOTcyMjYzNywicGF0aCI6Ii8zNjcwMDc3LzMwOTU3MjA4Mi1iYzJjNDYyNi1hYWZkLTRiZGItYjU3MC0xNTRmNGFjNmVjODcucG5nP1gtQW16LUFsZ29yaXRobT1BV1M0LUhNQUMtU0hBMjU2JlgtQW16LUNyZWRlbnRpYWw9QUtJQVZDT0RZTFNBNTNQUUs0WkElMkYyMDI0MDMwNiUyRnVzLWVhc3QtMSUyRnMzJTJGYXdzNF9yZXF1ZXN0JlgtQW16LURhdGU9MjAyNDAzMDZUMTA1NzE3WiZYLUFtei1FeHBpcmVzPTMwMCZYLUFtei1TaWduYXR1cmU9MTc4YWM4OTJlMzk2NmY0YTc1YTQ5MTMzNTM0MDczMzA5YmMyOWQ1ZTRiM2UyOTdmNGE3MzlmNjUzNmRjMGRjZiZYLUFtei1TaWduZWRIZWFkZXJzPWhvc3QmYWN0b3JfaWQ9MCZrZXlfaWQ9MCZyZXBvX2lkPTAifQ.TLypSY0y4oNniyN1zbEbgboYcG8rZMpUjSHBkhs5zWo)
- Diagramme de séquence
![](https://cdn-0.plantuml.com/plantuml/png/ZP9DZfn038NtTGgBJQzoWIpoCvsPLHPHZphx2XZYg70XszNAv4RiSmCk5WEJxc6GeaY0eEptrVEZFgX5iTAd46lB0cUZH1eDYq1KE8TlkN0JvGcgXonzIP44eJaGQoqq66MkviOJTgI6CZU5EhD9Jb0TvvVfTtBQqdLS2mab81kPK--YEi-lp3oDg4lVfximH36gQOXiK7s9tTBaOCQVV_Vyd3lYkHJ26TwystY0jt3F9lWB51M8Mr-BvafTEVrW63O21zpikVmnbnxD4P0Gskli8SHay28Bv4j-caPu7m3-2VmwZK8jeSp07sYPuVXuUd3PJBmNmIBkBh9kTrp8y9Ard_LZsrBz7UMLCbwmzYK5NEaEmgIuvtdYIsAoO6K67ShjABXWTNdhw94DP1gBAZqx1AViflQFbfwpz-YTYnk6A_Tkhd_M0ITiIAZpmWL58KKONfy6Prm7-_-e2aEFgWlii0QqWhW9wzFlFm00)
- Diagramme entité-association ERD
![](https://gitlab.esiea.fr/jlair/portfolio/-/raw/main/readme_content/schema.png)
