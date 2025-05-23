<html>
    <body>

        <?php

        $nom = $email = $edat = "";
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $edat = $_POST["edat"];

            if (empty($nom) || empty($email) || empty($edat)) {
                $error = "Tots els camps són obligatoris.";
            } else {
                echo "<p>Dades rebudes correctament:</p>";
                echo "<ul></ul>";
                echo "<li>Nom: " . $nom . "</li>";
                echo "<li>Email: " . $email . "</li>";
                echo "<li>Edat: " . $edat . "</li>";
                echo "</ul>";
                exit;
            }
        }
        ?>
        <?php
        if (!empty($error)) {
            echo "<p style='solor: red;'>$error</p>";
        }
        ?>
    </body>
</html>
        
