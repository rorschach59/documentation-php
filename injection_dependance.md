### L'injection de dépendance

**Explications :**  l'injection de dépendances est une pratique largement acceptée et utilisée pour la gestion des dépendances en PHP et dans d'autres langages orientés objet. Elle offre une grande flexibilité et favorise les bonnes pratiques de programmation telles que le découplage et le principe de responsabilité unique.

**Avantages :**
* Testabilité : L'injection de dépendances facilite les tests unitaires car il est possible d'injecter des mocks lors des tests.
* Ecrire du code découplé : évitant toute interdépendance, ce qui les rend réutilisables sans avoir à modifier chaque instanciation lors de l'ajout d'un nouveau paramètre
* Le code est beaucoup plus maintenable

**Exemples :**

```php
class Database
{
    public function query($sql)
    {
    
    }
}

class UserService
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getAllUsers()
    {
        return $this->database->query('SELECT * FROM users');
    }
}

// L'utilisation de l'injection de dépendance permet d'initialiser les objets.
$database = new Database();
$userService = new UserService($database);

// Maintenant, nous pouvons utiliser le service UserService pour obtenir tous les utilisateurs.
$users = $userService->getAllUsers();
```

_source : [https://putaindecode.io/articles/injection-de-dependances-en-php/](https://putaindecode.io/articles/injection-de-dependances-en-php/)_