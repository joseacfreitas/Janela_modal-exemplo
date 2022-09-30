<?php 

include('conetar.php');


$sql_filmes = "SELECT * FROM filmes";
$retornar = $conetar->query($sql_filmes);

while($registro = $retornar->fetch_array()){

        $id = $registro["Id"];
        $nome = $registro["nome"];
        $ano = $registro["ano"];
        $duracao = $registro["duracao"];
        $nActor = $registro["nomeActor"];
        $estudio = $registro["nomeEstudio"];
        $realizador = $registro["nomeRealizador"];

        echo"<tr>
                <th>$id</th>
                <th>$nome</th>
                <th>$ano</th>
                <th>$duracao</th>
                <th>$nActor</th>
                <th>$estudio</th>
                <th>$realizador</th>
        </tr>"; 
}

              