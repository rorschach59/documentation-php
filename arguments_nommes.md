### Les arguments nommés

**Explication :** Les arguments nommés, introduits en PHP 8.0, sont une fonctionnalité qui permet de spécifier la valeur d'un argument dans une fonction ou une méthode en utilisant directement le nom de l'argument, plutôt que de dépendre de l'ordre dans lequel les arguments sont passés.

**Exemple :**

```php
function createUser(string $name, string $email, string $password) {
    // Ici, le code pour créer un utilisateur
}
```

Historiquement, on appelle cette fonction en passant les arguments dans l'ordre spécifique où ils sont définis, comme ceci :

```php
createUser("John Doe", "johndoe@example.com", "mypassword");
```

Mais avec les arguments nommés, nous pouvons spécifier les arguments par leur nom, ce qui nous permet de les passer dans n'importe quel ordre. 
Nous pouvons également omettre certains arguments si la fonction a des valeurs par défaut pour eux.

```php
createUser(
    email: "johndoe@example.com",
    password: "mypassword",
    name: "John Doe"
);
```

_sources :_
* [https://wiki.php.net/rfc/named_params](https://wiki.php.net/rfc/named_params)
* [https://www.exakat.io/en/php-8-0-named-parameters-and-variadic](https://www.exakat.io/en/php-8-0-named-parameters-and-variadic)
