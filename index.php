<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <body>
    
      <h1>Priklad c.1</h1>
<?php

    for ($a=0; $a <= 20; $a+= 1) { 
       echo $a . ", ";
    }

?>

<p>   <h2>Priklad c.2</h2>
<?php

    for ($i=0; $i <= 20; $i+= 1) { 
       echo $i . " , " . $i*$i . "<br>";
    }

?> </p>

       <h2>Priklad c.3</h2>
<?php

    for ($b=10; $b >= 0; $b-= 1) { 
        echo $b ."<br>";
 }

echo "raketa leti! SpaceX yaay"

?>


        <p><h2>Priklad c.4</h2>
<?php
        define('MAX_NUMBER', 100);
        define('MIN_NUMBER', 0);
        define('NUMBERS_COUNT', 10);

        for ($i=0; $i < NUMBERS_COUNT; $i++) { 
            echo rand(MIN_NUMBER, MAX_NUMBER) . ",";
}

?>

      </body>
</html>












