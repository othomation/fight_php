# GIT !

## Introduction

Git permet de versionner une `codebase`.

On va gérer ça avec plusieurs concepts.

Les branches : différentes 'routes' d'une codebase, qui partent d'un arbre principal, dont découlent des branches, dont découlent des autres branches, etc...

le stage : un 'dépot' de 'modification' 
	ajout/suppression de caractère (dont les espaces !)
	saut de ligne
	création/suppression/renommage de fichiers
	etc...

les commits : des 'validation' du stage entier ou d'une partie du stage (voit ça comme une pile...) sur une branche en particulier. Donc on applique vraiment les modifications sur le répertoire git.


Pour les branches, il y'a des conventions. 

La branche 'master' (ou 'main', maintenant ) est celle qu'on touche le moins. Elle est censée contenir une snapshot stable du projet.

Les branches 'dev' pour développer des features et itérer.

Les branches 'test' pour l'innovation et l'écriture des tests.

Les sous branches sémantiques :
	'dev__feature--variation' (un peu comme le BEM !)
		example : dev__navbar--api
	
## Versionner

On part d'une branche 'master'.

On va créer une branche 'dev' à partir de master.

A cet instant, la branche 'dev'