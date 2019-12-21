<!DOCTYPE html>
<html>
<body>
    <?php
       $mysqli = new mysqli("localhost","root","","web");

        // Check connection
        if ($mysqli -> connect_error) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }
    ?>
</body>
</html>
