<?php
  echo "Mètode HTTP usat en enviar el formulari: ". $_SERVER['REQUEST_METHOD'] . "<br/>";
  /* echo "codi sol·licitud: " . $_POST['codi_identificador'] . "<br/>"; */
  // ... 
  echo "En Panxú és un: " . $_POST['clpizze'] . "<br/>";
  echo "En Panxú li mola dormir en un sac de: " . $_POST['ingre_add'] . "<br/>";

  echo "<h3> Fem un mentre i una llista</h3>";

  echo "<p>Els valors del mètode POST:</p>";
  foreach ($_POST as $key => $value) {
    echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    }
    echo"</br>";
    extract($_POST);

    $tamaño = "grande";
    $var_array = array("color" => "azul",
                   "tamaño"  => "medio",
                   "forma" => "esfera");
    extract($var_array, EXTR_PREFIX_SAME, "wddx");

     echo "$color, $tamaño, $forma, $wddx_tamaño\n";
     echo"</br>";
     extract($_POST, EXTR_PREFIX_SAME, "wddxx");
     echo "$color, $tamaño, $forma, $wddxx _tamaño\n";
     echo"</br>";
     var_dump($_POST);

?>