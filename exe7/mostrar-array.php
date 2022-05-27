<?php

    session_start();

    $valor = $_POST['valor'];

    if(!empty($_POST['valores'])){
        $valores = explode(",", $_POST['valores']);
    }else{
        $valores = array();
    }

    array_push($valores, $valor);

    $_SESSION['data'] = $valores;

    for ($i=0; $i < count($valores); $i++) {
        echo $valores[$i]."</br>"; 
    }

    header("Location: acti5952.php");
?>

<a href="acti5952.php">Volver</a>