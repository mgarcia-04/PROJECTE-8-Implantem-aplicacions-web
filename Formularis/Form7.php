<html>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["genere"])) {
                $genere = $_POST["genere"];
                echo"<p>Has seleccionat el gènere: $genere";
            } else {
                echo "No has seleccionat cap gènere.";
            }
        }
        ?>        
    </body>
</html>