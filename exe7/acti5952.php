<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio Formulario 4</title>
</head>
<body>
    
    <?php
        session_start();
        if(!isset($_SESSION['data'])){
            $_SESSION['data'] = array(); 
        } 
    ?>

    <form action="mostrar-array.php" method="post">

        <label for="valor">Valor</label></br>
        <input type="text" name="valor" id="valor" />

        <input type="hidden" name="valores" value="<?php echo implode(",", $_SESSION['data']) ?>">

        <input type="submit" value="Añadir al arry" />

    </form>

    <?php
        echo "</br>";
        echo "tu valor de array es". $_POST['valor']." en tabla ";
        echo "tu valor de en session es ". $_POST['valores']." lista valores";
        
        

        for ($i=0; $i < count($valores); $i++) {
            echo $valores[$i]."</br>"; 
        }


    ?>


</body>
</html>