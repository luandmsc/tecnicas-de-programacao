<h1>Listar Técnico</h1>

<?php
$sql = "SELECT * FROM tecnico";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($res->num_rows > 0) {
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Idade</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>".$row->id_tecnico."</td>";
        print "<td>".$row->nome_tecnico."</td>";
        print "<td>".$row->idade_tecnico."</td>";
        print "<td>
                <a href='?page=editar-tecnico&id=".$row->id_tecnico."' class='btn btn-success btn-sm'>Editar</a>
                <a href='?page=salvar-tecnico&acao=excluir&id=".$row->id_tecnico."' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza?\");'>Excluir</a>
               </td>";
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhum técnico encontrado.</p>";
}
?>
