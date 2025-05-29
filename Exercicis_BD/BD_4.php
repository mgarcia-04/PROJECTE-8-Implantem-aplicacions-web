<!DOCTYPE html>
<body>

    <h2>Resultat de l'Enviament</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nom = $_POST['nom'];
        $email = $_POST['email'];

        if (empty($nom) || empty($email)) {
            echo "<p style='color:red;'>Error: Tots els camps del formulari són obligatoris.</p>";
            echo "<a href='index.html'>Torna al formulari</a>";
        } else {
            echo "<p>Gràcies per contactar amb nosaltres, " . htmlspecialchars($nom) . ".</p>";
            echo "<p>Hem rebut la teva adreça de correu: " . htmlspecialchars($email) . "</p>";
        }

    } else {
        header("Location: index.html");
        exit();
    }
    ?>

</body>
</html>