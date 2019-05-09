<?php

//print_r($_GET);

// Cahier des charges
// >> Proposer l'achat de tutos en ligne à des utilisateurs en fonction de leurs langages préférés.

// Mettre en place un form HTML pour collecter les données de user (pseudo, age, ses langages préférés)

// Si form rempli à 100% > on affiche des produits tutos à vendre, en fonction des langages cochés. (ces produits doivent être sotckés dans un tableau php > $produits. A termes les produits proviendront d'une base de données)

// Si le champ pseudo est vide (afficher un message d'erreur)
// Si champ âge est vide ou bien que l'âge sais est invalide (sup. à 100 ou de type !integer) > afficher message d'erreur
// Si aucun langages n'est coché > afficher message d'erreur

// Les messages d'erreurs sont bloquants. Dès qu'un cas est déclanché on s'arrête là. Ex: pas de pseudo et pas de langages cochés > on affiche que le message d'erreur lié au pseudo vide car c'est le premier problème rencontré.
