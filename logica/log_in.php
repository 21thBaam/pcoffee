<?php
    session_start();
    require '../logica/conexion.php';
    require '../logica/sql_functions.php';

    if($_POST){
        $user = addslashes($_POST['usuario']);
        $clave = addslashes($_POST['clave']);
        $query = "SELECT COUNT(*) as total FROM usuarios where username = '$user' and password = '$clave' ";
        
        if(total($conn,$query)>0){
            $query = "SELECT * FROM usuarios where username = '$user' and password = '$clave' ";
            $b = consulta($query);
            $_SESSION['username'] = $user;
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $b[0]['id'];
            $time = time()-28800;
            $fecha = date("Y-m-d H:i:s", $time);
            $conn->query("INSERT INTO log  (fecha, tipo, usuario)
            VALUES('$fecha','Inicio de sesion','$_SESSION[id]')");
            
            echo'<script type="text/javascript">
                alert("Conectado Satisfactoriamente");
                window.location.href="../index.html";
                </script>';
        }else {
            echo'<script type="text/javascript">
                alert("Datos Incorrectos");
                window.location.href="../usuarios/login.php";
                </script>';
        }
    }
?>