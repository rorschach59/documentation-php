<?php

require_once('Private.php');
require_once('Protected.php');
require_once('Public.php');

class ExtendPrivate extends PrivateProperties
{
    public function test()
    {
        // Il est impossible d'accèder à la variable string et à la fonction getString
    }
}

class ExtendProtected extends ProtectedProperties
{
    // Ceci ne pourra pas être fait
    // private string $string = 'string';

    // En revanche, mettre la visibilité en protected ou public oui
    // public string $string = 'string';

    public function getStringExtended(): void
    {
        echo $this->string . '</br>';
        echo $this->getString() . '</br>';
    }

    public function setStringExtended(string $string): void
    {
        $this->string = $string;
    }
}

class ExtendPublic extends PublicProperties
{
    public function getStringExtended(): void
    {
        echo $this->string . '</br>';
        echo $this->getString() . '</br>';
    }

    public function setStringExtended(string $string): void
    {
        $this->string = $string;
    }
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Extend</title>
</head>
<body>
<?php

$extendProtected = new ExtendProtected();
// Il est impossible d'accèder directement à la variable string puisqu'elle est déclarée en protected
try {
    echo $extendProtected->string;
} catch (\Exception|\Throwable $e) {
    echo $e->getMessage() . '</br>';
}

// Pour cela, il existe les getter
$extendProtected->getStringExtended();
$extendProtected->setStringExtended('new string');
$extendProtected->getStringExtended();

$extendPublic = new ExtendPublic();
echo $extendPublic->string . '</br>';
$extendPublic->getStringExtended();
$extendPublic->setStringExtended('new string');
$extendPublic->getStringExtended();
?>
</body>
</html>
