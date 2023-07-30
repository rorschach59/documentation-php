### Le polymorphisme

**Explication :** Le polymorphisme décrit un modèle dans la programmation orientée objet dans lequel les classes ont des fonctionnalités différentes, tout en partageant une interface commune.

**Exemple :**

```php
interface Sport{
    public function bouger(Sportif $sportif);
}
 
class Nager implements Sport {
    public function bouger(Sportif $sportif){
        return $sportif->getNom().' va nager';
    }
}

class Marcher implements Sport {
    public function bouger(Sportif $sportif){
        return $sportif->getNom().' va marcher';
    }
}
 
class Sportif{
    private $nom;
    
    public function __construct($nom){
        $this->nom = $nom;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function bouger(Sport $sport){
        return $sport->bouger($this);   
    }
}
 
$dany = new Sportif("daniel");
$nager = new Nager();
echo $dany->bouger($nager); // Affiche daniel va nager
```

_source : [https://tutowebdesign.com/poo-php.php](https://tutowebdesign.com/poo-php.php)_