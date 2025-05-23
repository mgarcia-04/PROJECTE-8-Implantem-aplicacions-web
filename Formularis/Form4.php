<html>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo"<p style='color: green;'>Correu vàlid: $email</p>";
            } else {
                echo "<p style='color:red;'>El correu no és vàlid</p>";
            }
        }
        ?>
    </body>
</html>