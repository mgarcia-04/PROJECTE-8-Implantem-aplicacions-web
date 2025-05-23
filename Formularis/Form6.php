<html>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ciutat = $_POST["ciutat"];
            if (!empty($ciutat)) {
                echo "<p>Has seleccionat: $ciutat";
            } else {
                echo "<p>No has seleccionat cap ciutat.</p>";
            }
        }
        ?>
    </body>
</html>
