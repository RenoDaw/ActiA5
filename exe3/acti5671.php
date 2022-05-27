<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1y3</title>
    <style>
        <?php
             if ($_SERVER['PHP_SELF'] == '/mirepocopy.git/exe3/acti5671.php')
                {
                    class pintar{
                        const BACKGROUND_COLOR = "DarkSalmon";
                        const LINKS_COLOR = "Moccasin";
                        const H1_COLOR = "Purple";

                    };
                }
            else{   class pintar{
                        const BACKGROUND_COLOR = "Orange";
                        const LINKS_COLOR = "YellowGreen";
                        const H1_COLOR = "DeepSkyblue";
                        };
                    };
            

        
        echo "body  {
            background-color:  ".pintar::BACKGROUND_COLOR."
        }

        a {
            color: ". pintar::LINKS_COLOR." 
        }

        h1 {
            color: ". pintar::H1_COLOR." 
        }"

        ?>

.button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {background-color: #3e8e41}

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }


    </style>
    
</head>
<body >
    <h1>Activitat p1.3</h1>
    <h4>Començament exercici</h4>
    <!-- <h6>repositorio global 19</h6> -->
    
    <!-- <?php // tall de codic per sapigue el archivo
       /* print "<p>\$_SERVER[PHP_SELF]: $_SERVER[PHP_SELF]</p>\n"; */
    ?> -->
    
    <button class="button"><a style="text-decoration:none" href='./acti5672.php'> Fes me Click per canviar de CSS </a> </button>
    <br>
    <br>
    <p>Varia el color des de PHP</p><br>

    <p>&lt;body&gt; bacground: constant (BACKGROUND_COLOR) = al color "DarkSalmon" </p><br>
    <p>&lt;a&gt; link: constant (LINKS_COLOR) = al color  "Moccasin"  <a href='http://cendrassos.net'>Cendrassos.net link</a></p>
    <h1>&lt;h1&gt; lletra H1: constant (H1_COLOR) = al color "Purple" </h1>
    <?php

echo "Activitat P1.3 </br>";
echo "Punt 4 </br> ";
echo " Calcula les solucions d'una equació de segon grau del tipus </br>";
echo "f(x)=ax<sup>2</sup>+bx+c=0 <br>";

$a=2;
$b=3;
$c=1;
echo "Valors entrats a= ".$a.", b= ".$b.", c= ".$c.".</br>";
if ((($b**2)-4*$a*$c)>=0){

$px=((-$b+(sqrt(($b**2)-(4*$a*$c))) )/(2*$a)    ) ;
$np=((-$b-(sqrt(($b**2)-(4*$a*$c))) )/(2*$a)    );
/* echo "$px<br>";
echo "$np"; */
echo "<p>f(x)=".$a."x<sup>2</sup>+".$b."x+".$c."=0</p>";
echo "<table>
            <tr>
            <td>

            </td>
            <td>
            _________
            </td>
            </tr>    
            <tr> 
            <td style='font-size:larger'>
                &nbsp &nbsp  &nbsp  &nbsp   -b &plusmn √
            </td>
            <td style='font-size:larger'>
                b <sup > 2 </sup > - 4ac
            </td>        
        </tr>

        </table>
        x = <sup>__________________</sup>
        <table>
            <tr>
                <td>
                </td>
                <td>
                &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp 2a  
                </td>
        </table>";

echo "Per els valors a= ".$a.", b= ".$b.", c= ".$c.".</br>";
echo "El resultat de x es per la arrel positiva es igual a ".$px.".</br>";
echo "El resultat de x es per la arrel negativa es igual a ".$np.".";


}
else{
echo "Per els valors a= ".$a.", b= ".$b.", c= ".$c.".</br>";
echo "L'equació no té resolució real.";
}

?>

    
</body>
</html>