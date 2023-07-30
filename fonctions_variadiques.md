### Les fonctions variadiques

**Explication :** Les fonctions variadiques sont des fonctions qui peuvent accepter un nombre variable d'arguments. En
PHP, on les utilise avec l'opérateur "..." avant le nom du dernier argument dans la liste des arguments de la fonction.

**Exemple :**

Imaginons une fonction pour calculer la somme de plusieurs nombres, mais nous ne savons pas combien de nombres il y aura
à chaque fois que l'on utilise la fonction.

Nous pouvons alors créer la fonction suivant pour résoudre ce problème :

```php
function sum(...$numbers) {
    $total = 0;
        foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
```
_source : [https://www.exakat.io/en/php-8-0-named-parameters-and-variadic](https://www.exakat.io/en/php-8-0-named-parameters-and-variadic)_