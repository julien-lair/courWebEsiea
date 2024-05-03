# Analyse des Besoins : 
## Authentification des Utilisateurs :
        Les utilisateurs peuvent se connecter avec leur adresse e-mail et leur mot de passe.
        Il existe un formulaire de connexion (login.php) où les utilisateurs saisissent leurs informations d'identification pour l'authentification.
        En cas d'échec de l'authentification, un message d'erreur est affiché.
        En cas de réussite de l'authentification, les utilisateurs sont redirigés vers leur tableau de bord (dashboard.php).
## Inscription des Utilisateurs :
        Les nouveaux utilisateurs peuvent s'inscrire avec leur nom, leur adresse e-mail, leur mot de passe et leur adresse.
        Il existe un formulaire d'inscription (register.php) où les utilisateurs fournissent leurs informations.
        Les données du formulaire sont validées pour leur exactitude (par exemple, le format d'e-mail valide, la force du mot de passe).
        En cas d'erreurs de validation, elles sont affichées à l'utilisateur.
        Si l'e-mail est déjà enregistré, un message d'erreur est affiché.
        Si la confirmation du mot de passe échoue, un message d'erreur est affiché.
        En cas d'inscription réussie, les utilisateurs sont redirigés vers la page de connexion (login.php).
##  Gestion des Profils :
        Les utilisateurs connectés peuvent consulter leurs informations de profil (dashboard.php).
        Les utilisateurs peuvent mettre à jour leurs informations de profil, y compris leur nom, leur e-mail, leur mot de passe et leur adresse.
        Il existe un formulaire de mise à jour (update.php) où les utilisateurs peuvent modifier leurs informations.
        Les données du formulaire sont validées de manière similaire au processus d'inscription.
        Les utilisateurs peuvent supprimer leur compte, déclenchant un processus de confirmation (closeAccount function).
##  Fonctionnalités Basées sur la Localisation :
        Les utilisateurs peuvent saisir leur adresse lors de l'inscription et de la mise à jour.
        L'application fournit des suggestions d'adresses à mesure que les utilisateurs saisissent, récupérées depuis une API externe (data.gouv.fr/search).
        Les utilisateurs peuvent choisir une adresse parmi les suggestions, ce qui met à jour le champ d'adresse et affiche une carte (displayMap function).
        La carte affiche l'emplacement de l'adresse choisie en utilisant l'API Mapbox.

# Documentation des Fonctionnalités de l'Application

## 1. Authentification des Utilisateurs

### 1.1 Connexion

**Fonctionnalité :** Permet aux utilisateurs existants de se connecter à leur compte.

**Page associée :** `login.php`

**Composants :**
- Formulaire de connexion avec champs pour l'e-mail et le mot de passe.
- Bouton de soumission du formulaire.

**Validation :**
- Vérification de l'e-mail et du mot de passe dans la base de données.
- Affichage d'un message d'erreur en cas d'informations d'identification incorrectes.

### 1.2 Inscription

**Fonctionnalité :** Permet aux nouveaux utilisateurs de créer un compte.

**Page associée :** `register.php`

**Composants :**
- Formulaire d'inscription avec champs pour le nom, le prénom, l'e-mail, le mot de passe et l'adresse.
- Bouton de soumission du formulaire.

**Validation :**
- Validation des données du formulaire (format d'e-mail valide, force du mot de passe, etc.).
- Vérification de l'unicité de l'e-mail dans la base de données.
- Affichage de messages d'erreur en cas d'échec de validation.

## 2. Gestion des Profils

### 2.1 Tableau de Bord

**Fonctionnalité :** Affiche les informations de profil de l'utilisateur connecté.

**Page associée :** `dashboard.php`

**Composants :**
- Affichage du nom, du prénom, de l'adresse e-mail et de l'adresse de l'utilisateur.
- Bouton de modification du profil.
- Bouton de suppression du compte.

### 2.2 Modification du Profil

**Fonctionnalité :** Permet à l'utilisateur connecté de mettre à jour ses informations de profil.

**Page associée :** `update.php`

**Composants :**
- Formulaire de mise à jour avec champs pour le nom, le prénom, l'e-mail, le mot de passe et l'adresse.
- Bouton de soumission du formulaire.

**Validation :**
- Validation des données du formulaire de manière similaire à l'inscription.
- Affichage de messages d'erreur en cas d'échec de validation.

## 3. Fonctionnalités Basées sur la Localisation

### 3.1 Suggestions d'Adresses

**Fonctionnalité :** Fournit des suggestions d'adresses à mesure que l'utilisateur saisit son adresse.

**Composants :**
- Intégration avec l'API data.gouv.fr/search.
- Affichage des suggestions sous forme de liste déroulante.

### 3.2 Affichage de la Carte

**Fonctionnalité :** Affiche une carte basée sur l'adresse sélectionnée par l'utilisateur.

**Composants :**
- Intégration avec l'API Mapbox pour la génération de la carte.
- Affichage du marqueur de l'emplacement sélectionné par l'utilisateur.


# Conception du Diagramme UML 
- Identification des entités et relations
![alt text](https://www.planttext.com/api/plantuml/png/TP0x3i8m38RtdCBAYZgmPYfI6ReX8GvWKGj5oWF5xeIu3voZ5oEe3uL7i_d__SM_hMeMJD9xfzJP8JESn3hBADGdk2d8RmDjOy06cQeGlG6MPCDbKgvfUFwgs2LYfhr7wxui7wMXGnv7_vb5lS-nTgEn4caLEsRPnb1WarBIRLCiFHhvW_8G-XgPXqT76geAz5OlUGpWPslsvw46D48VCgHKJQ5xN_a5)

- Diagramme UseCase

![](https://www.planttext.com/api/plantuml/png/VPDDRiCW48Ntd6BaJTj5Bj15bTIHgYugHR9o08h72Ge62uP5LFK-pRutyCKAvCyuZRqpyxvXtWFcZhWbtoh653O4PC3ApPQWbXO5IQEPsqdTSSjRwBZOyGrMj5S8iSprHY5ZN92ni2QffEE4tW9ti7PesKK4HRLtrF-q23N2obXgZ9AcW2y6uVCE1NT1zTOVB5fG3r8xOMKN9oXYk_Vh_ns2UzgY9jb8mI_OOhIOiuich6yZZT1PqqW5_khYsE0aMQLoZd-OEZIUnC-I__1IzR_au_32j1tX3Lmga-fbAhD4nrXXDdiP1WBFK9q2ivYhnlwZ5CD-MeUJ2GUKYpElGLeQxRoYeSESoEq5uZQI7CWjnIr68HnT3ir5xF4r9XPkpZ9CtX_GFINPZRifRMvkGZaoDQ4SkRcZ_6R3Tp2kdv_0aXF_JFUY8YDsAK87KZV6jicS2vGRtX5N933sdwEkuoF-0m00)

- Diagramme d'activité
![](https://cdn-0.plantuml.com/plantuml/png/TT31IWCn40RW-px5i9Ugq5VGYhGdJnMyY8Um_TEEP2Tb9YdwI7sElfXPGyCgUCh2_lFnpwmiEKrv3DtDtIqjb_VKFozoui3c4h8I92d8OCJYeuukSHIZ7MY8up6XxzXJlob_Sd2i8CWfVbtEzD1JEa0wcjItcFcT-jVBMTapb0Be0oaAFRriDtq9JSfQ5LaBxiIcX6_gJ9jxZzxpS83-2RiJ1WemGWNxwnYL9SitWg594gL8Qr7isP9EsFm0TPRzF3924kdbdCrurkntjorshBo7qWbg51mTtHxrS2Buv2ZLRcrQd_bcMMY4sS_e0ggjKbke8h9ZtrtVIZRklqCLaSK6vMEgRHfPcLLvyXY-0G00)

- Diagramme de séquence
![](https://cdn-0.plantuml.com/plantuml/png/ZP9DZfn038NtTGgBJQzoWIpoCvsPLHPHZphx2XZYg70XszNAv4RiSmCk5WEJxc6GeaY0eEptrVEZFgX5iTAd46lB0cUZH1eDYq1KE8TlkN0JvGcgXonzIP44eJaGQoqq66MkviOJTgI6CZU5EhD9Jb0TvvVfTtBQqdLS2mab81kPK--YEi-lp3oDg4lVfximH36gQOXiK7s9tTBaOCQVV_Vyd3lYkHJ26TwystY0jt3F9lWB51M8Mr-BvafTEVrW63O21zpikVmnbnxD4P0Gskli8SHay28Bv4j-caPu7m3-2VmwZK8jeSp07sYPuVXuUd3PJBmNmIBkBh9kTrp8y9Ard_LZsrBz7UMLCbwmzYK5NEaEmgIuvtdYIsAoO6K67ShjABXWTNdhw94DP1gBAZqx1AViflQFbfwpz-YTYnk6A_Tkhd_M0ITiIAZpmWL58KKONfy6Prm7-_-e2aEFgWlii0QqWhW9wzFlFm00)

- Dragramme de classe
![](https://www.planttext.com/api/plantuml/png/nLHDJyCm3BttL-JOQTiVw04DRK9C0Z41EqzPutOHQLmvwM1y_7UIhj2iA-K6FLIDd_rilxYU6Sl9LeMAebHnOzWjbtgEsX8g1SJU8kQUAIkS-G5eBrD8Qf_cKCDZjjcag8sbAhNngB6j3L3BvCmVOOuc_Zk1s2QTY07g7TT2mOARtHOvYSlKIjGTz1voQInGBtY3kTIzoBeKt48lD5Te-X57XvNjXQwn26DQ4KwR_TQX59YmrU9keFiSx4fWF0hzgEdMiyRdMawOnY9XZaZgVC9AWfCp5mJ6G6i0Tzygy7S5FoE9rkAgoYGLgmxWQYha2uYcAkLb_h6aNv9qk5pNdc2fCpIzTD95IcqxOLLzdr-HGu7_f55wdAeKAsq7-mf6nqfbceaPCyErjF8LbhgiR2pzEqXr_6XSzq0oEymDPO_u13gOA0taP3f7zbn9B-3nRt8-Rf2la8hupxJYHFpWU-zifkdq_U9a4uLRfGOxw-GSzp96qGoqy0lm4m00)

- Schéma de base de données MPD 
![](https://www.planttext.com/api/plantuml/png/LOr12e0m30JlUKNkqW_qr4_uW4A31DfKaeY8-7TxadfPPeU5JUPP_MWLWCJPBroD56z0N91BH1OV7C88wIsYkR9ie-rAVq4jSvq7sUpiMYQLYv8PVUO1I2HbtBy0)