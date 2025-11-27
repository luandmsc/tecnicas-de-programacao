<h1>Listar Partidas</h1>

<?php
$sql = "SELECT p.*, t.nome_tecnico 
        FROM partida p
        INNER JOIN tecnico t ON t.id_tecnico = p.tecnico_id_tecnico
        ORDER BY p.data_partida DESC";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($res->num_rows > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Data</th>";
    print "<th>Local</th>";
    print "<th>Adversário</th>";
    print "<th>Placar</th>";
    print "<th>Técnico</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_partida."</td>";
        print "<td>".$row->data_partida."</td>";
        print "<td>".$row->local_partida."</td>";
        print "<td>".$row->time_adversario."</td>";
        print "<td>".$row->placar."</td>";
        print "<td>".$row->nome_tecnico."</td>";
        print "<td>
                <a href='?page=editar-partida&id=".$row->id_partida."' class='btn btn-success btn-sm'>Editar</a>
                <a href='?page=salvar-partida&acao=excluir&id=".$row->id_partida."' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza?\")'>Excluir</a>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhuma partida encontrada.</p>";
}
?>
