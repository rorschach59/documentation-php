### Les traits

**Explication :** Le principe des traits est de permettre de contourner les limites de PHP ne supportant pas
l'héritage multiple. Un trait est donc destiné à réduire certaines limitations de l'héritage simple, permettant une
réutilisation de méthodes de façon indépendante.

**Avantages :**

* L'utilisation des traits permet de décomposer le code de nos class en "comportements" et ainsi permettre d'éviter d'
avoir des classes contenant des milliers de lignes de codes. Ils permettent aussi de rendre le code réutilisable à
travers différentes class qui ont un comportement similaire sans avoir un parent commun.
 
* L'utilisation des traits permet d'éviter certaines limitations de l'héritage simple.

**Inconvénients :**

* Peut rendre le code difficile à comprendre et à suivre si utilisé de manière excessive.

<br />

Les traits doivent donc être utilisé avec parcimonie pour résoudre des problèmes simples, mais ne doivent pas remplacer
l'héritage classique, sous peine de rendre le code plus difficile à lire et à comprendre.

<br />

**Exemple :**

```php
trait MyTrait {

    public function sayHello() {
        echo "Bonjour!";
    }
    
}

class MyClass {
    use MyTrait;
}

$obj = new MyClass();
$obj->sayHello(); // Affiche "Bonjour!"
```