<html>
    <body>
        <?php
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $assumpte = $_POST["assumpte"];
        $missatge = $_POST["missatge"];

        if (empty($nom) || empty($email) || empty($assumpte) || empty($missatge)) {
            echo "<p style='color:red;'>Tots els camps són obligatoris.</p>";
            echo "<p><a href='formulari.html'>Torna enrere</a></p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Email no vàlid.</p>";
            echo "<p><a href='formulari.html'>Torna enrere</a></p>";
        } else {
            echo "<p>Formulari enviat correctament!</p>";
            echo "<p><strong>Nom:</strong> " . htmlspecialchars($nom) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Assumpte:</strong> " . htmlspecialchars($assumpte) . "</p>";
            echo "<p><strong>Missatge:</strong> " . nl2br(htmlspecialchars($missatge)) . "</p>";
        }
        ?>
    </body>
</html>