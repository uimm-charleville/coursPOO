<?php
// On charge toutes les classes grâce à un autoloader de classes
require_once('helpers/autoloader.php');

/**
 * Person
 */

// On instancie 2 objets Person

// On va afficher l'attribut name de ces personnes

// On vérifie si ces personnes ont atteint l'âge adulte ( avec un opérateur ternaire )

/**
 * Employee
 */

// On instancie 2 objets Employee, héritant de la classe Person qui doivent donc aussi posséder les caractéristiques de la classe Person

// On accède aux attributs de la classe Person à travers un objet Employee

// On modifie les attributs de la classe Employee et on var_dump l'Employee

// Dans la classe Employee, on accède aux attributs d'Employee mais aussi à ceux de Person grâce à l'héritage : appelez la méthode introduce()

/**
 * Organization
 */

// On instancie 1 objet Organization

// On ajoute un objet Person à l'organisation (avec addPerson), on peut var_dump la méthode getAllPersons, puis appeler la méthode clearPersons

// On ajoute un objet Person à l'organisation (avec addPersons), on peut var_dump la méthode getAllPersons, puis appeler la méthode clearPersons

// On ajoute un array d'objets Person à l'organisation (avec addPersons), on peut var_dump la méthode getAllPersons

// On récupère les personnes faisant partie de l'Organisation

// On peut itérer sur les objets Person à travers l'organisation, et afficher leur name et leur age

?>