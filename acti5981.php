<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat P1.2 transferecia 22</title>
</head>
<body>
    <h1>Activitat P1.2</h1>
    <?php
        $i=12;
        $tipus_de_i = gettype( $i );
        echo "La variable \$i
            conté el valor $i 
            i és del tipus $tipus_de_i <br>"
    ?>
    <?php

        $a = "10";
        echo gettype($a);
        settype($a_e, " integer");
        echo gettype ($a);
        echo isset($b);

        $nomPersona = "Alex";
        $edat_s = "35";
        //La variable edat es de tipus string

        echo "$nomPersona té $edat_s anys<br>";

        $edat_i = 14;
        // Ara la variable edat és de tipus integer:

        $edat_i++;
        echo "$nomPersona té $edat_i anys <br>";

        echo "fem una suma diferent: ";
        $edat1 = "12";

        echo "resultat de la suma ". $edat_i + $edat1;
    ?>
    <!-- // $nomPersona = "Alex";
         // $edat = "35";
         // //La variable edat es de tipus string

         // echo "$nomPersona té $edat anys<br>";

         // $edat = 14;
         // // Ara la variable edat és de tipus integer:

         // $edat++;
         // echo "$nomPersona té $edat anys <br>";
        
         // echo "fem una suma diferent: ";
         // $edat1 = "12";

         // echo "resultat de la suma ". $edat + $edat1; 

        -->     
</body>
</html>