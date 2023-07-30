### L'expression match

**Explication :** L'expression match est une fonctionnalité introduite dans PHP 8.0 qui agit un peu comme une
instruction switch, mais en plus puissant et en plus concis. Elle permet de tester une variable contre un ensemble de
valeurs et d'exécuter un bloc de code correspondant à la première valeur qui correspond.

**Exemples :**

```php
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',            
    default => 'This food is unknown',
};

var_dump($return_value); // Affiche string(19) "This food is a cake"
```

```php
function getDay($day) {
    return match($day) {
        'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' => 'Weekday',
        'Saturday', 'Sunday' => 'Weekend',
        default => 'Unknown day',
    };
}

echo getDay('Monday');  // Affiche 'Weekday'
echo getDay('Sunday');  // Affiche 'Weekend'
echo getDay('Funday');  // Affiche 'Unknown day'
```

