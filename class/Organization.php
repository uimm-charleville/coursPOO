<?php

// Créer une class Organization qui interdit l'héritage à partir de cette classe.
// Ce mot clé permet de fermer l'héritage et de clore une arborescence de classes
{

    // Cette classe possède 1 attribut privé : un array persons


    // Le constructeur ne prends pas de paramètres, mais initialise l'attribut persons à un array vide.


    // Créez une méthode addPerson prenant en paramètre un objet Person $person, qui n'a pas de valeur de retour.
    // Cette méthode doit ajouter l'objet Person à l'attribut persons


    // Créez une méthode addPersons prenant en paramètre un attribut mix : ce paramètre peut être par exemple un string, un int, un tableau, un objet ...
    // Cette méthode ne retourne rien, et dans cette méthode nous allons effectuer un test :
    // Si le paramètre d'entrée $persons est un array, on va itérer sur cet array et ajouter chaque élément présent à l'attribut $persons
    // Si le paramètre d'entrée $persons est un objet, on va push cet élément dans l'attribut $persons
    // Sinon, on va throw une Exception d'arguments invalides indiquant que cette méthode ne prend en paramètre qu'un objet ou un array

    // Créez la méthode clearPersons ne prenant aucun paramètre d'entrée et ne retournant rien, qui doit vider l'attribut $persons


    // Créez la dernière méthode getAllPersons ne prenant aucun paramètre d'entrée et ne retournant rien, qui retourne l'attribut $persons

}
?>