<?php
    class ciudad 
    {
        //Se sefine la propiedad
        public $nombre;
        public $provincia;

        //Se define método
        function __construct($nombre,$provincia){
            $this->nombre=$nombre;
            $this->provincia=$provincia;
        }
    }
    $var = new ciudad("Torrente".",","Valencia");
    $var1 = new ciudad("Torrente".",","Valencia");
    $var2 = new ciudad("Torrente".",","Valencia");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Ejercio 2 Repaso</h1><br>
    <?php
        echo $var->nombre;
        echo $var->provincia;
        echo '<br>';
        echo $var1->nombre;
        echo $var1->provincia;
        echo '<br>';
        echo $var2->nombre;
        echo $var2->provincia;
    ?> 
</body>
</html>