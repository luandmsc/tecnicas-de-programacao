<h1>Listar Posições</h1>

<?php
$sql = "SELECT * FROM posicao";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome da Posição</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_posicao."</td>";
        print "<td>".$row->nome_posicao."</td>";
        print "<td>
            <button class='btn btn-success' onclick=\"location.href='?page=editar-posicao&id_posicao={$row->id_posicao}';\">Editar</button>
            <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-posicao&acao=excluir&id_posicao={$row->id_posicao}';}else{false;}\">Excluir</button>
        </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p>Nenhuma posição cadastrada.</p>";
}
?>
