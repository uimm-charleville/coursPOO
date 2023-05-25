<?php

class Person {

    private string $name;
    private int $age;
    
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAge(int $age): void
    {
        if($age < 0)
        {
            throw new InvalidArgumentException("Attribut non mis à jour => erreur de paramètres d'entrée : l'âge doit être un entier positif");
        }
        else if($age > 120)
        {
            throw new InvalidArgumentException("Attribut non mis à jour : la Person ne peut avoir plus de 100 ans");
        }
        else
        {
            $this->age = $age;
        }
    }

    public function introduce(): string
    {
        return "Bonjour, je m'appelle {$this->name} et j'ai " . $this->age . " ans";
    }

    public function calculateAgeInMonths(): int {
        return $this->age * 12;
    }

    public function isAdult() {
        if($this->age >= 18)
        {
            return "Robert est adulte";
        }
        return self::isChild();
    }

    public function isChild(): string {
        return "Robert n'est pas adulte";
    }


}

?>
