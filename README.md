skill-test-01
=============

A Symfony project created on July 2, 2018, 11:03 am.

## Setting up permissions

See: http://symfony.com/doc/2.8/setup/file_permissions.html

### Skill test

A partir du projet Symfony 2.8, réaliser une API rapide avec les 3 fonctionalités suivantes.

Enpoint:

- GET /rest/users           -> Liste des utilisateurs
- GET /rest/users/{id}      -> Retourne un objet `User` (garder le schéma de BDD très simple, une entité à 2/3 champs suffit)
- POST /rest/users/{id}     -> Modifie une/les propriétés d'un utilisateur passés en POST

- L'API doit retourner du JSON
- Vous devrez créér l'entité `User`
- Le controller doit contenir peu de code: utiliser pour cela un event listener pour ces trois endpoints pour y coder la logique qui récupère l'utilisateur dans la base, le modifie, etc.
- Il est également demandé de créer un service `Serializer` pour convertir un object user en réponse JSON (voir `DefaultController::exerciceTip()`)

- Sans coder: donnez nous une ou deux idées simple qui permettraient de mieux sécuriser l'API à ce jour ouverte
- Enfin, pusher votre branche sur le repository (nous devrons vous y donner accès - à demander au préalable!)

## Tips

- Un example de event/event listener est déjà créé (voir ExampleEvent et ExampleEventListener).
- Un example de leur utilisation est "pseudo" codé dans `DefaultController::exerciceTip()` ou `exerciceTip02` pour vous mettre sur les rails.
- Dernier conseil: faîtes simple !


## Comment sécuriser notre API ?

...
