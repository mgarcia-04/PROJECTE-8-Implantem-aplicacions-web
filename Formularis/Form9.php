<!DOCTYPE html>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comentari = htmlspecialchars($_POST["comentari"]);
            echo "<h3>El teu comentari:</h3>";
            echo "<p>$comentari</p>";
        } else {
            echo "<p>No s'ha rebut cap comentari.</p>";
        }
        ?>
    </body>
</html>
