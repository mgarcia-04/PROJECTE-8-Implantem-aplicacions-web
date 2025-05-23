<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["aficions"])) {
            echo"<h3>Aficions seleccionades:</h3>";
            echo "<ul>";
            foreach ($_POST["aficions"] as $aficio) {
                echo "<li>" . $aficio . "</li>";
            }
            echo "</ul>";
        }   else {
            echo "<p style='color: red;'>No has seleccionat cap afició.</p>";
        }  
    }
?>
