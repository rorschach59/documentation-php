### Les interfaces

**Explication :** Une interface en PHP est une déclaration de méthodes qu'une classe doit implémenter. C'est comme un
contrat qui impose à une classe d'avoir certaines méthodes.

**Avantages :**

* Fournir un plan général pour les développeurs qui vont implémenter l’interface et les forcer à suivre le plan donné
  par l’interface
* L'implémentation des interfaces permet au code de tirer parti du [polymorphisme](polymorphisme.md), ce qui signifie
  que nous pouvons écrire
  du code qui fonctionne avec des objets basés sur leurs interfaces plutôt que sur leurs classes spécifiques. Cela
  permet d'écrire du code plus flexible et réutilisable
* Aider à structurer et organiser le code

**Inconvénients :**

* Rigidité : Une fois qu'une interface est largement utilisée dans votre code, la modifier peut être difficile. Ajouter
  ou modifier des méthodes dans l'interface signifie que toutes les classes qui implémentent cette interface doivent
  être mises à jour pour correspondre aux nouvelles exigences de l'interface.
* Manque de variables d'instance : Les interfaces ne peuvent déclarer que des constantes. Elles ne peuvent pas déclarer
  de variables d'instance (propriétés), ce qui limite leur utilité dans certains cas.
* Surcharge de travail : Chaque classe qui implémente une interface doit fournir une implémentation pour toutes les
  méthodes de l'interface, même si certaines de ces méthodes n'ont pas de sens pour la classe ou ne seront pas
  utilisées.

<br />

En général, l'implémentation des interfaces en PHP est une pratique courante qui aide à garantir la cohérence et la
fiabilité du code. Cependant, comme avec tout outil de programmation, il est important de l'utiliser judicieusement pour
éviter les inconvénients potentiels.

<br />

**Exemple :**

```php
interface MyInterface {
    public function sayHello();
}

class MyClass implements MyInterface {
    public function sayHello() {
        echo "Bonjour!";
    }
}

$obj = new MyClass();
$obj->sayHello(); // Affiche "Bonjour!"
```

_sources :_
* [https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-interface](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/oriente-objet-interface)
* [https://grafikart.fr/tutoriels/interfaces-521](https://grafikart.fr/tutoriels/interfaces-521)