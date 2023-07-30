### L'héritage

**Explication :** L'héritage est un concept clé en programmation orientée objet, y compris en PHP. Il permet à une
classe d'hériter des propriétés et méthodes d'une autre classe.

**Avantages :**

* Réutilisation du code : L'héritage permet de réutiliser le code existant. Nous pouvons définir des méthodes et des propriétés communes dans une classe parente, puis créer des classes enfants qui héritent de cette classe parente, réduisant ainsi la duplication du code
* Organisation et structure du code : L'héritage peut aider à structurer le code de manière logique. Les classes peuvent être organisées en hiérarchies qui reflètent leurs relations réelles
* Polymorphisme : L'héritage est l'un des mécanismes qui permet le polymorphisme, ce qui signifie que nous pouvons utiliser une instance de la classe enfant comme si c'était une instance de la classe parente

**Inconvénients :**

* Héritage multiple : PHP ne supporte pas l'héritage multiple, c'est-à-dire qu'une classe ne peut pas hériter de plus d'une classe à la fois. Cela peut être limitant dans certaines situations
* Couplage étroit : L'héritage crée un couplage fort entre la classe parente et la classe enfant. Si la classe parente change, cela peut affecter toutes les classes enfants. Cela peut rendre le code plus difficile à maintenir
* Complexité : Si la hiérarchie d'héritage est mal conçue ou devient trop profonde, cela peut rendre le code plus difficile à comprendre et à gérer

<br />

**Exemple :**

```php
class ParentClass {
    public function sayHello() {
        echo "Bonjour!";
    }
}

class ChildClass extends ParentClass {
    // Hérite de la méthode sayHello
}

$obj = new ChildClass();
$obj->sayHello(); // Affiche "Bonjour!"
```