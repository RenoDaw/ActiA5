<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat P1.4</title>
</head>
<body>
    <h1>Activitat P1.4</h1>
    <?php
    echo "<h3>Activitat P1.4</h3><br>";
    echo "Punt 1 := Crear un array de 3 elements. <br>";
    $array_3elements = array('element_1','element_2','element_3');
    print_r($array_3elements);
    echo "<br>";
    echo "Punt 2 := Afeig més elements al final de l'array.<br>";
    $array_3elements[3]='element_4';
    $array_3elements[4]='element_5';
    print_r($array_3elements);
    echo "<br>";
    echo "Punt 3 := Destruir el primer i el darrer element de l'arry.<br>";
    array_shift($array_3elements);
    print_r($array_3elements);
    echo"</br>";
    array_pop($array_3elements);
    print_r($array_3elements);
    echo"</br>";
    echo "Punt 4 := Crear una matriu de dues dimension i tres elements. Omple les cel·les amb les lletres de l'abecedari en ordre invers i finalment iterau per la matriu i mostreu el resultat.<br>";

    $array2x3 = array(array("1","2"),array("3","4"),array("5","6") );

    for ($row = 0; $row < 3; $row++) {
        echo "<p><b>Fila numero $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 2; $cola++) {
          echo "<li>".$array2x3[$row][$cola]."</li>";
        }
        echo "</ul>";
      };
    $row--;
    //$col--;
    while (  $row > -1 ) {
        
        echo "<p><b>Fila numero $row</b></p>";
        echo "<ul>";
        echo $col;
        echo $cola;
        $col = $cola
        while ($col > -1) {
          
          echo "<li>".$array2x3[$row][$col]."</li>";
          $col--;
        }
        echo "</ul>";
        $row--;
      };


    ?>
</body>
</html>