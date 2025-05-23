<html>
    <body>
        <?php

        if (isset($_GET['nom']) && isset($_GET['edat'])) {
            $nom = htmlspecialchars($_GET['nom']);
            $edat = htmlspecialchars($_GET['edat']);

            echo "<h2>Dades Receptades:</h2>";
            echo "<p>El teu nom és: <strong>" . $nom . "</strong></p>";
            echo "<p>La teva edat és: <strong>" . $edat . "</strong> anys</p>";
        } else {
            echo "<p>Omple el formulari i clica a 'Enviar Dades'.</p>";
        }
        ?>   
    </body>
</html>
