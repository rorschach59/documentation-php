### Les enum

**Explication :** Les énumérations, aussi appelées enum, sont un type de donnée spécial qui permet de créer une nouvelle structure de données

**Avantages :**
* Intégrité des données : Les enums peuvent aider à limiter les valeurs possibles

**Inconvénients :**
* Moins de fonctionnalités : Les enums sont plus limités en termes de fonctionnalités par rapport aux classes. Par exemple, ils ne peuvent pas avoir de méthodes ou de propriétés.

**Exemple :**
```php
enum DaysOfWeek: string
{
    case Monday = 'Monday';
    case Tuesday = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday = 'Thursday';
    case Friday = 'Friday';
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';
}

$today = DaysOfWeek::Friday;
echo $today->value; // Affiche 'Friday'
```