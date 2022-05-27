<!DOCTYPE html>
<!-- <html lang="ca_ES,es_ES"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activitat P1.1</title>
</head>
<body>
    <h1>Primer arxiu PHP</h1>
    <h2>Transparencias PHP in Action</h2>
    <h3>Activitat P1.1</h3>
    <h5>nom del arxiu: acti599.php</h5>
    <h4>El bateig de PHP</h4>
    <p>Fer un progrma amb php que mostri per pantalla el dia i la hora amb el següent format de sortida:</p>
    <p>"Dissabte, Febrer 12 de 2022 i són les 09:18:15 hores"</p>
    <br>
    <?php
        echo "<p>Activitat P1.1 </p>";
        $dia_set= date("w");
        $dias=array("Diumege","Dilluns","Dimarts","Dimecres","Dijous","Divendes","Dissabte");
        $mes_act= date("n");
        $mes_act--;
        $mes=array("Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost","Setembre","Octubre","Novembre","Desembre"); 
        echo date("e");
        echo "<br>";
        echo "<br>";
        date_default_timezone_set("Europe/Madrid");
        echo date("e");        
        echo "<br>";
        echo "<br>";
        echo $dias[$dia_set].", ".$mes[$mes_act]."&nbsp" .date("j")." de ".date("Y")." i són les ". date("H:i:s")." hores" ;
        echo "<br>";
        echo "<br>";
        echo "<a href='https://weblocal.azurewebsites.net/acti599.php'>Programa en fucionament</a> ";
         
    ?>
    
</body>
</html>