<?php

include_once 'conetar.php';

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$result_user = "SELECT * FROM Registros_usuarios WHERE nome LIKE '$usuarios' LIMIT 10";
$resultado_user = mysql_query($conetar, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0)){

    while($row_user = mysqli_fetch_assoc($resultado_user)){

        echo "<li>".$row_user['nome']."</li>";

    }

}else{

    echo "Nenhum usuario encontrado...";

}

