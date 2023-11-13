<?php
    include_once 'infos.php';
    include_once 'Konig.php';

    foreach (Faces::cases() as $shape) { 
        echo $shape->value . PHP_EOL . "<br>";
    }
    echo "<br><br><br>";
    $var = new Infos(1,1,1);
    echo $var->toString();
?>