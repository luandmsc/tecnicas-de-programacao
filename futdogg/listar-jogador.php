<h1>Listar Jogadores</h1>

<?php
    $sql = "SELECT j.*, p.nome_posicao 
            FROM jogador j 
            INNER JOIN posicao p ON p.id_posicao = j.posicao_id_posicao
            ORDER BY j.nome_jogador";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Camisa</th>";
        print "<th>Idade</th>";
        print "<th>Posição</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_jogador."</td>";
            print "<td>".$row->nome_jogador."</td>";
            print "<td>".$row->numero_camisa."</td>";
            print "<td>".$row->idade_jogador."</td>";
            print "<td>".$row->nome_posicao."</td>";

            print "<td>
                    <a href='?page=editar-jogador&id_jogador=".$row->id_jogador."' class='btn btn-success btn-sm'>Editar</a>
                    
                    <a href='?page=salvar-jogador&acao=excluir&id_jogador=".$row->id_jogador."' 
                    class='btn btn-danger btn-sm'
                    onclick=\"return confirm('Deseja excluir?');\">
                    Excluir
                    </a>
                   </td>";

            print "</tr>";
        }

        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum jogador encontrado!</p>";
    }
?>
