<html>
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        //Mostrem el formulari
        ?>
        <form action="processa.php" method="post">
            Nom:<input type="text" name="nom"></br>
            Email:<inpunt type="text" name="email"></br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {
        //Processem les dades 
        ?>
        <h2>Formulari enviat.</h2>
        <p>Hola <?php echo $_POST['nom'];?> </p>
        <?php
            }
        ?>
        
    </body>

</html>