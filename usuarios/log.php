<?php
require '../logica/sesion_iniciada.php';
require '../logica/conexion.php';
require '../logica/sql_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head id="cabeza">
    <?php
    echo '
    <script src="../js/head_content.js" type="text/javascript"></script>
    <script src="../js/body_content.js" type="text/javascript"></script>
    <script>
        head("Log");
    </script>';
    ?>
</head>
<body id="test">
    <?php
    if($_SESSION['id'] == 4){
        $log = consulta("SELECT * FROM log");
        echo '<div class="log">';
        for($i=0;$i < sizeof($log);$i++){
            echo '<p class="logp">'.$log[$i]["fecha"]." ".$log[$i]["tipo"]." ".$log[$i]["usuario"]."<br></p>";
        }
        echo '</div>';
    }
    
    echo '
    <script>
        body("Granos Campos ",1);
    </script>';
    ?>
</body>
</html>